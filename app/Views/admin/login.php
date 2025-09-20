<!DOCTYPE html>
<html>
<head>
  <title>Login Admin</title>
</head>
<body style="font-family:Arial; text-align:center; margin-top:50px;">
  <h2>Login Admin e-Toll</h2>

  <?php if(session()->getFlashdata('error')): ?>
    <p style="color:red;"><?= session()->getFlashdata('error') ?></p>
  <?php endif; ?>

  <form method="post" action="/admin/auth">
    <p>
      <label>Username</label><br>
      <input type="text" name="username" required>
    </p>
    <p>
      <label>Password</label><br>
      <input type="password" name="password" required>
    </p>
    <p>
      <button type="submit">Login</button>
    </p>
  </form>
</body>
</html>
