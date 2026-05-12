<?php include '_layout_start.php'; $pdo=db(); ?>
<h1>Users</h1>
<div class="lead-box">
  <p>Roles supported: Super Admin, Admin, Counselor/CRM User. Create or edit users directly in database/users table, or extend this module for full user management.</p>
  <?php if(!$pdo): ?>
    <div class="alert alert-warning">Database not connected.</div>
  <?php else: $users=$pdo->query('SELECT id,name,email,role,active,created_at FROM users ORDER BY id')->fetchAll(); ?>
    <table class="table"><tr><th>ID</th><th>Name</th><th>Email</th><th>Role</th><th>Active</th></tr>
    <?php foreach($users as $u): ?><tr><td><?= h($u['id']) ?></td><td><?= h($u['name']) ?></td><td><?= h($u['email']) ?></td><td><?= h($u['role']) ?></td><td><?= h($u['active']) ?></td></tr><?php endforeach; ?>
    </table>
  <?php endif; ?>
</div>
<?php include '_layout_end.php'; ?>
