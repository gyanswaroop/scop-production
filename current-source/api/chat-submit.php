<?php
require_once __DIR__ . '/../includes/functions.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { http_response_code(405); exit; }
if (!verify_csrf($_POST['csrf'] ?? '')) { http_response_code(403); exit; }
$data = ['student_name'=>trim($_POST['name'] ?? ''),'mobile'=>trim($_POST['mobile'] ?? ''),'email'=>'','city'=>'','pincode'=>'','percentage_10'=>'','percentage_12'=>'','stream'=>'','course_interested'=>trim($_POST['course'] ?? 'General Admission Guidance'),'scholarship'=>'No','message'=>trim($_POST['message'] ?? ''),'source'=>'Chatbot','status'=>'New Lead','lead_temperature'=>'Warm','created_at'=>date('Y-m-d H:i:s')];
$pdo=db(); if($pdo){ $stmt=$pdo->prepare("INSERT INTO leads (student_name,email,mobile,city,pincode,percentage_10,percentage_12,stream,course_interested,scholarship,message,source,status,lead_temperature,created_at) VALUES (:student_name,:email,:mobile,:city,:pincode,:percentage_10,:percentage_12,:stream,:course_interested,:scholarship,:message,:source,:status,:lead_temperature,:created_at)"); $stmt->execute($data); }
else { $file=__DIR__.'/../storage/leads.json'; $leads=file_exists($file)?json_decode(file_get_contents($file),true):[]; if(!is_array($leads))$leads=[]; $data['id']=count($leads)+1; $leads[]=$data; file_put_contents($file,json_encode($leads,JSON_PRETTY_PRINT)); }
header('Location: ../thank-you.php'); exit;
?>
