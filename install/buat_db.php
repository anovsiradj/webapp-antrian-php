<?php
session_start();

require("../inc/config.php");
require("../inc/fungsi.php");
require("../inc/koneksi.php");

echo '<h1>
BUAT DATABASE
</h1>
<hr>';


$sql = 'CREATE Database iwan_antrian';
$buatdb = mysql_query( $sql, $koneksi );
if(! $buatdb )
{
  die('Pembuatan database, gagal: ' . mysql_error());
}
echo "Database 'iwan_antrian' berhasil dibuat\n";
mysql_close($koneksi);
# eof
