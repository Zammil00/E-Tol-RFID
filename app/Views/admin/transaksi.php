<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Transaksi | e-Toll Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: "Segoe UI", sans-serif;
      background: #f4f6f9;
    }
    /* Sidebar */
    .sidebar {
      width: 220px;
      height: 100vh;
      background: #1d3557;
      position: fixed;
      top: 0;
      left: 0;
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
      padding: 30px;
    }
    .card {
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .card h3 {
      color: #1d3557;
      font-weight: bold;
    }
    table {
      font-size: 15px;
    }
    .status-badge {
      padding: 5px 12px;
      border-radius: 8px;
      color: #fff;
      font-weight: bold;
    }
    .status-success {
      background: #2a9d8f;
    }
    .status-pending {
      background: #f4a261;
    }
    .status-failed {
      background: #e63946;
    }
  </style>
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <h2>e-Toll Admin</h2>
    <ul>
      <li><a href="/admin/dashboard">📊 Dashboard</a></li>
      <li><a href="/admin/users">👤 Kelola User</a></li>
      <li><a href="/admin/transaksi">💳 Lihat Transaksi</a></li>
      <li><a href="/admin">🚪 Logout</a></li>
    </ul>
  </div>

  <!-- Content -->
  <div class="content">
    <div class="card p-4">
      <h3 class="mb-3">💳 Data Transaksi</h3>
      <table class="table table-striped table-hover align-middle">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Nama User</th>
            <th>Tarif</th>
            <th>Status</th>
            <th>Waktu</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($transaksi as $t): ?>
          <tr>
            <td><?= $t['id'] ?></td>
            <td><?= $t['nama'] ?></td>
            <td><strong>Rp <?= number_format($t['tarif'], 0, ',', '.') ?></strong></td>
            <td>
              <?php 
                $status = strtolower($t['status']);
                $badgeClass = $status === 'berhasil' ? 'status-success' : ($status === 'pending' ? 'status-pending' : 'status-failed');
              ?>
              <span class="status-badge <?= $badgeClass ?>"><?= ucfirst($t['status']) ?></span>
            </td>
            <td><?= $t['waktu'] ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
