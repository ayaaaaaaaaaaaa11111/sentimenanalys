<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_sentimen";

$conn = mysqli_connect($host, $user, $pass, $db);

$sql = "SELECT * FROM hasil_sentimen";
$result = mysqli_query($conn, $sql);

$data = array();
while($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Kirim data dalam format JSON agar bisa dibaca JavaScript
echo json_encode($data);
?>