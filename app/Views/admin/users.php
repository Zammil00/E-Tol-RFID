<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kelola User | e-Toll Admin</title>
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
    .btn-action {
      margin-right: 5px;
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
      <h3 class="mb-3">👤 Data User e-Toll</h3>
      <table class="table table-striped table-hover align-middle">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>UID RFID</th>
            <th>Nama</th>
            <th>Saldo</th>
            <th class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($users as $u): ?>
          <tr>
            <td><?= $u['id'] ?></td>
            <td><span class="badge bg-primary"><?= $u['uid_rfid'] ?></span></td>
            <td><?= $u['nama'] ?></td>
            <td><strong>Rp <?= number_format($u['saldo'], 0, ',', '.') ?></strong></td>
            <td class="text-center">
              <a href="/admin/topup/<?= $u['id'] ?>" class="btn btn-sm btn-success btn-action">💰 Top Up</a>
              <a href="/admin/delete/<?= $u['id'] ?>" class="btn btn-sm btn-danger btn-action" onclick="return confirm('Yakin hapus user ini?')">🗑 Hapus</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
