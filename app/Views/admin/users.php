<h1>Data User</h1>
<table border="1" cellpadding="5">
  <tr>
    <th>ID</th><th>UID RFID</th><th>Nama</th><th>Saldo</th>
  </tr>
  <?php foreach($users as $u): ?>
  <tr>
    <td><?= $u['id'] ?></td>
    <td><?= $u['uid_rfid'] ?></td>
    <td><?= $u['nama'] ?></td>
    <td>Rp <?= number_format($u['saldo']) ?></td>
  </tr>
  <?php endforeach; ?>
</table>
