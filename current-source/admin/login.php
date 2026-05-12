<?php require_once __DIR__ . '/../includes/functions.php';
$error='';
if ($_SERVER['REQUEST_METHOD']==='POST') {
  if (!verify_csrf($_POST['csrf'] ?? '')) $error='Invalid token';
  else {
    $email=trim($_POST['email'] ?? ''); $pass=$_POST['password'] ?? ''; $pdo=db();
    if($pdo){ $stmt=$pdo->prepare('SELECT * FROM users WHERE email=? AND active=1 LIMIT 1'); $stmt->execute([$email]); $user=$stmt->fetch(); if($user && password_verify($pass,$user['password_hash'])) { $_SESSION['admin']=['id'=>$user['id'],'name'=>$user['name'],'email'=>$user['email'],'role'=>$user['role']]; header('Location: dashboard.php'); exit; } }
    elseif($email===FALLBACK_ADMIN_EMAIL && $pass===FALLBACK_ADMIN_PASSWORD){ $_SESSION['admin']=['id'=>1,'name'=>'Fallback Super Admin','email'=>$email,'role'=>'super_admin']; header('Location: dashboard.php'); exit; }
    $error='Invalid login. Import database/install.sql or use fallback credentials before DB setup.';
  }
}
?><!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Admin Login</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"><link href="../assets/css/style.css" rel="stylesheet"></head><body class="section-soft"><div class="container py-5"><div class="row justify-content-center"><div class="col-md-5"><div class="lead-box mt-5"><h3>Admin CRM Login</h3><?php if($error): ?><div class="alert alert-danger"><?= h($error) ?></div><?php endif; ?><form method="post"><input type="hidden" name="csrf" value="<?= h(csrf_token()) ?>"><label class="form-label">Email</label><input class="form-control mb-3" name="email" value="admin@scopkanpur.org"><label class="form-label">Password</label><input class="form-control mb-3" name="password" type="password" value="Admin@12345"><button class="btn btn-primary w-100">Login</button></form><p class="small text-muted mt-3">Default after SQL import: admin@scopkanpur.org / Admin@12345. Change immediately after installation.</p></div></div></div></div></body></html>
