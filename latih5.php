<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "akademik";

// Create connection
$koneksi= mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$koneksi) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT nim, nama, alamat, tgllahir FROM mhs";
$data = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($data) > 0) {
  // output data of each row
  echo "<h1>Daftar Mahasiswa</h1>";
    echo "<table border=1 width=50% cellpadding=0 cellspacing=0>";
	echo "<td>Nim</td><td>Nama</td><td>Alamat</td><td>TglLahir</td>";
	
  while($row = mysqli_fetch_assoc($data)) {
	
    echo "<tr><td>". $row["nim"] . "</td><td>" . $row["nama"] . "</td><td>" . $row["alamat"] . "</td>
	<td>" . $row["tgllahir"] . "</td></tr>";
  }
} else {
  echo "0 data";
}

mysqli_close($koneksi);
?>