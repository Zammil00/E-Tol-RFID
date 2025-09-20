<h1>Data Transaksi</h1>
<table border="1" cellpadding="5">
  <tr>
    <th>ID</th><th>Nama User</th><th>Tarif</th><th>Status</th><th>Waktu</th>
  </tr>
  <?php foreach($transaksi as $t): ?>
  <tr>
    <td><?= $t['id'] ?></td>
    <td><?= $t['nama'] ?></td>
    <td>Rp <?= number_format($t['tarif']) ?></td>
    <td><?= $t['status'] ?></td>
    <td><?= $t['waktu'] ?></td>
  </tr>
  <?php endforeach; ?>
</table>
