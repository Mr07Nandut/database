<?php 

// koneksi  ke database
$koneksi = mysqli_connect("localhost", "root", "", "project");

if (isset($_POST["submit"])) {

  
  $user = $_POST["user"];
	$password =$_POST["password"];
	
	//query insert data
	
	$query = "INSERT INTO users
				VALUES
			  ( '$user', '$password')
			"; 

	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}



function login($data){
	global $koneksi;

	$user = $data["user"];
	$password = mysqli_real_escape_string($koneksi, $data["password"]);



mysqli_query ($koneksi,"INSERT INTO users VALUES ('$user', '$password')" );
}	
return mysqli_affected_rows($koneksi);

?>