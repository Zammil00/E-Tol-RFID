<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin e-Toll</title>
  <style>
    body {
      margin: 0;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background: #f4f6f9;
      color: #333;
    }

    /* Sidebar */
    .sidebar {
      width: 220px;
      height: 100vh;
      background: #1d3557;
      position: fixed;
      left: 0;
      top: 0;
      padding: 20px 0;
      color: #fff;
    }

    .sidebar h2 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 20px;
    }

    .sidebar ul {
      list-style: none;
      padding: 0;
    }

    .sidebar ul li {
      padding: 12px 20px;
    }

    .sidebar ul li a {
      text-decoration: none;
      color: #fff;
      display: block;
      border-radius: 6px;
      transition: 0.3s;
    }

    .sidebar ul li a:hover {
      background: #457b9d;
    }

    /* Content */
    .content {
      margin-left: 220px;
      padding: 20px;
    }

    .content h1 {
      color: #1d3557;
      margin-bottom: 20px;
    }

    .card {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      margin-bottom: 20px;
    }

    .card h3 {
      margin-top: 0;
      margin-bottom: 10px;
      color: #457b9d;
    }

    .stat-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
    }

    .stat {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      text-align: center;
    }

    .stat h2 {
      margin: 0;
      color: #1d3557;
    }

    .footer {
      text-align: center;
      margin-top: 30px;
      color: #777;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <div class="sidebar">
    <h2>e-Toll Admin</h2>
    <ul>
      <li><a href="/admin/users">👤 Kelola User</a></li>
      <li><a href="/admin/transaksi">💳 Lihat Transaksi</a></li>
      <li><a href="/admin">🚪 Logout</a></li>
    </ul>
  </div>

  <div class="content">
    <h1>Dashboard Admin 🚗</h1>
    <p>Selamat datang, Admin!</p>

    <!-- Statistik -->
    <div class="stat-grid">
      <div class="stat">
        <h2>120</h2>
        <p>Total User</p>
      </div>
      <div class="stat">
        <h2>450</h2>
        <p>Total Transaksi</p>
      </div>
      <div class="stat">
        <h2>Rp 12.500.000</h2>
        <p>Total Pendapatan</p>
      </div>
    </div>

    <!-- Card informasi -->
    <div class="card">
      <h3>Informasi Terbaru</h3>
      <p>Sistem e-Toll berjalan lancar. Tidak ada gangguan saat ini.</p>
    </div>

    <div class="footer">© 2025 e-Toll System</div>
  </div>
</body>
</html>
