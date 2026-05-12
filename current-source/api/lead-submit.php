<?php
require_once __DIR__ . '/../includes/functions.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { http_response_code(405); exit('Method not allowed'); }
if (!verify_csrf($_POST['csrf'] ?? '')) { http_response_code(403); exit('Invalid security token'); }
if (!empty($_POST['website'])) { header('Location: ../thank-you.php'); exit; }
if (!verify_captcha($_POST['captcha'] ?? '')) { $_SESSION['form_error']='Captcha failed'; header('Location: ../contact.php'); exit; }
$last = $_SESSION['last_lead_time'] ?? 0; if (time() - $last < LEAD_RATE_LIMIT_SECONDS) { header('Location: ../thank-you.php'); exit; } $_SESSION['last_lead_time']=time();
$data = [
 'student_name'=>trim($_POST['student_name'] ?? ''), 'email'=>trim($_POST['email'] ?? ''), 'mobile'=>trim($_POST['mobile'] ?? ''), 'city'=>trim($_POST['city'] ?? ''), 'pincode'=>trim($_POST['pincode'] ?? ''),
 'percentage_10'=>trim($_POST['percentage_10'] ?? ''), 'percentage_12'=>trim($_POST['percentage_12'] ?? ''), 'stream'=>trim($_POST['stream'] ?? ''), 'course_interested'=>trim($_POST['course_interested'] ?? ''),
 'scholarship'=>trim($_POST['scholarship'] ?? 'No'), 'message'=>trim($_POST['message'] ?? ''), 'source'=>trim($_POST['source'] ?? 'Website'), 'status'=>'New Lead','lead_temperature'=>'Warm','created_at'=>date('Y-m-d H:i:s')
];
if ($data['student_name']==='' || $data['mobile']==='' || $data['course_interested']==='') { http_response_code(422); exit('Required fields missing'); }
$pdo = db();
if ($pdo) {
  $stmt=$pdo->prepare("INSERT INTO leads (student_name,email,mobile,city,pincode,percentage_10,percentage_12,stream,course_interested,scholarship,message,source,status,lead_temperature,created_at) VALUES (:student_name,:email,:mobile,:city,:pincode,:percentage_10,:percentage_12,:stream,:course_interested,:scholarship,:message,:source,:status,:lead_temperature,:created_at)");
  $stmt->execute($data);
} elseif (ENABLE_DEMO_FALLBACK_STORAGE) {
  $file=__DIR__.'/../storage/leads.json'; $leads=file_exists($file)?json_decode(file_get_contents($file),true):[]; if(!is_array($leads)) $leads=[]; $data['id']=count($leads)+1; $leads[]=$data; file_put_contents($file,json_encode($leads,JSON_PRETTY_PRINT));
}
header('Location: ../thank-you.php'); exit;
?>
