<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin e-Toll</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #1d3557, #457b9d);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-container {
      background: #fff;
      padding: 40px 30px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
      width: 350px;
      text-align: center;
    }

    .login-container h2 {
      margin-bottom: 20px;
      color: #1d3557;
    }

    .form-group {
      text-align: left;
      margin-bottom: 15px;
    }

    .form-group label {
      font-weight: 600;
      font-size: 14px;
      display: block;
      margin-bottom: 5px;
      color: #333;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 8px;
      outline: none;
      font-size: 14px;
    }

    .form-group input:focus {
      border-color: #457b9d;
      box-shadow: 0 0 5px rgba(69, 123, 157, 0.5);
    }

    .btn {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 8px;
      background: #457b9d;
      color: #fff;
      font-weight: bold;
      font-size: 15px;
      cursor: pointer;
      transition: 0.3s;
    }

    .btn:hover {
      background: #1d3557;
    }

    .error-message {
      color: red;
      margin-bottom: 15px;
      font-size: 14px;
    }

    .footer-text {
      margin-top: 15px;
      font-size: 13px;
      color: #777;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login Admin e-Toll</h2>

    <?php if(session()->getFlashdata('error')): ?>
      <p class="error-message"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <form method="post" action="/admin/auth">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" required>
      </div>

      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" required>
      </div>

      <button type="submit" class="btn">Login</button>
    </form>

    <p class="footer-text">© 2025 e-Toll System</p>
  </div>
</body>
</html>
