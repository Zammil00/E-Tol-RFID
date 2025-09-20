<!DOCTYPE html>
<html>
<head>
  <title>Gerbang e-Toll</title>
  <meta http-equiv="refresh" content="3"> <!-- auto refresh tiap 3 detik -->
</head>
<body style="text-align:center; font-family:Arial">
  <h1>🚗 Gerbang e-Toll</h1>
  <?php if($last): ?>
    <h2>Nama: <?= $last['nama'] ?></h2>
    <p>Tarif: Rp <?= number_format($last['tarif']) ?></p>
    <p>Status: <?= strtoupper($last['status']) ?></p>
    <p>Waktu: <?= $last['waktu'] ?></p>
  <?php else: ?>
    <p>Belum ada transaksi</p>
  <?php endif; ?>
</body>
</html>
