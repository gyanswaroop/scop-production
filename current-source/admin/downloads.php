<?php include '_layout_start.php'; $pdo=db(); ?>
<h1>Downloads</h1>
<div class="lead-box mb-4">
  <p>Manage brochures, admission forms, syllabi and other downloadable files shown on the Admissions page.</p>
  <?php if(!$pdo): ?>
    <div class="alert alert-warning">Import database/install.sql and update includes/config.php to activate download management.</div>
  <?php else: ?>
    <?php
    if($_SERVER['REQUEST_METHOD']==='POST'){
      if(isset($_POST['delete_id'])){
        $stmt=$pdo->prepare('UPDATE downloads SET active=0 WHERE id=?'); $stmt->execute([(int)$_POST['delete_id']]); echo '<div class="alert alert-success">Download hidden.</div>';
      } else {
        $stmt=$pdo->prepare('INSERT INTO downloads (title,file_path,file_type,sort_order,active,created_at) VALUES (?,?,?,?,1,NOW())');
        $stmt->execute([trim($_POST['title']),trim($_POST['file_path']),trim($_POST['file_type']),(int)($_POST['sort_order'] ?? 10)]);
        echo '<div class="alert alert-success">Download added.</div>';
      }
    }
    ?>
    <form method="post" class="row g-3">
      <div class="col-md-3"><input class="form-control" name="title" placeholder="Title" required></div>
      <div class="col-md-4"><input class="form-control" name="file_path" placeholder="downloads/Admission-Form.pdf" required></div>
      <div class="col-md-3"><input class="form-control" name="file_type" placeholder="Brochure / Form / Syllabus" required></div>
      <div class="col-md-1"><input class="form-control" name="sort_order" placeholder="10"></div>
      <div class="col-md-1"><button class="btn btn-primary w-100">Add</button></div>
    </form>
  <?php endif; ?>
</div>
<?php if($pdo): $rows=$pdo->query('SELECT * FROM downloads WHERE active=1 ORDER BY sort_order ASC, id DESC')->fetchAll(); ?>
<div class="lead-box"><div class="table-responsive"><table class="table"><thead><tr><th>Title</th><th>Type</th><th>File</th><th>Action</th></tr></thead><tbody><?php foreach($rows as $r): ?><tr><td><?= h($r['title']) ?></td><td><?= h($r['file_type']) ?></td><td><a href="../<?= h($r['file_path']) ?>" target="_blank"><?= h($r['file_path']) ?></a></td><td><form method="post"><input type="hidden" name="delete_id" value="<?= (int)$r['id'] ?>"><button class="btn btn-sm btn-outline-danger">Hide</button></form></td></tr><?php endforeach; ?></tbody></table></div></div>
<?php endif; include '_layout_end.php'; ?>
