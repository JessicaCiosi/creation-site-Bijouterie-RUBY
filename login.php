<?php 

$databaseHost = 'localhost';
$databaseName = 'id15964592_bijouterieruby';
$databaseUsername = 'id15964592_jessicabr';
$databasePassword = 'Jessica04082001*';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if(isset($_POST['sub'])){

    $uname = $_POST['uname'];
    $upassword = $_POST['upassword'];

    $res = mysqli_query($mysqli,"SELECT * FROM user WHERE uname='$uname' AND upassword='$upassword'");
    $result=mysqli_fetch_array($res);
    if($result){
        header('Location:index.php?page=dashboard');
        exit();
    }else{
        echo "Erreur";
    }
}
?>