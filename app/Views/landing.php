<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>e-Toll Almuslim Bireuen</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #0077b6, #00b4d8);
      color: #fff;
      font-family: 'Segoe UI', sans-serif;
    }
    .card {
      border-radius: 15px;
      box-shadow: 0 6px 12px rgba(0,0,0,0.2);
    }
    .header {
      text-align: center;
      margin: 30px 0;
    }
    .status-success {
      color: #28a745;
      font-weight: bold;
    }
    .status-gagal {
      color: #dc3545;
      font-weight: bold;
    }
    .admin-btn {
      position: absolute;
      top: 20px;
      right: 20px;
    }
  </style>
  <!-- Auto refresh tiap 3 detik -->
  <meta http-equiv="refresh" content="3">
</head>
<body>
  <!-- Tombol Login Admin -->
  <div class="admin-btn">
    <a href="/admin" class="btn btn-warning fw-bold">🔑 Login Admin</a>
  </div>

  <div class="container">
    <div class="header">
      <h1 class="fw-bold">🚗 e-Toll <span class="text-warning">Almuslim Bireuen</span></h1>
      <p>Sistem Gerbang Tol Otomatis Berbasis RFID</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card p-4 text-center bg-light text-dark">
          <?php if($last): ?>
            <h3 class="mb-3">Data Transaksi Terakhir</h3>
            <h4 class="fw-bold"><?= $last['nama'] ?></h4>
            <p>Tarif: <span class="badge bg-primary">Rp <?= number_format($last['tarif']) ?></span></p>
            <p>Status:
              <?php if($last['status'] == 'sukses'): ?>
                <span class="status-success">BERHASIL ✅</span>
              <?php else: ?>
                <span class="status-gagal">DITOLAK ❌</span>
              <?php endif; ?>
            </p>
            <p><small>Waktu: <?= $last['waktu'] ?></small></p>
          <?php else: ?>
            <h3>Belum ada transaksi 🚦</h3>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
