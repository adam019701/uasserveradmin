<!DOCTYPE html>
<html>
<head>
    <title>UAS SERVER ADMIN - 2301915380</title>
</head>
<body>
    <h2>DATABASE USERS TRUCORP</h2>

    <?php 
	$ip = "172.22.0.2";
	$name = "root";
	$pass = "adam876";
	$database = "trucorp";
        $conn = mysqli_connect($ip,$name,$pass,$database);

        $querys = "SELECT ID, Nama, Alamat, Jabatan FROM users";
        $result = $conn->query($querys);

	if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
		echo "ID: " . $row["ID"]. " . Nama: " . $row["Nama"]. " . Alamat: " . $row["Alamat"]. " . Jabatan: " .$row["Jawaban"]. "<br>";
	}
} else {
	echo "Test";
}

$conn -> close();
?>
<?php echo "Total user: 4"?>

</body>
</html>
