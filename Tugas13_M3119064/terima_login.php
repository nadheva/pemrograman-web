<?php
    if(isset($_GET['target']))
    {
    if($_GET['target']=='home') {
    require('home.php');
    }
    if($_GET['target']=='login') {
    require('login.php');
    }
    if($_GET['target']=='ceksession') {
        require('ceksession.php');
    }
    if($_GET['target']=='logout') {
        require('logout.php');
    }
    }
    else{
    require('index.php');
     }
?>

<?php
session_start();
$username=$_GET['username'];
$pass=$_GET['pass'];
$sebagai=$_GET['sebagai'];
echo "$username</br>";
echo "$pass</br>";
echo "$sebagai</br>";
require('database.php');
$queryselect = "SELECT * FROM user WHERE username='$username' AND pass='$pass'";
$hasilselect = mysqli_query($koneksi1, $queryselect);
$data = mysqli_fetch_array($hasilselect);

if ($data) {
    if($pass==$data['pass']) {
        $_SESSION['username'] = $username;
        header("Location: index.php?target=ceksession");
        
    } else {
        Header("Location: index.php?target=login");
    }
    
} else {
    Header("Location: index.php?target=login");
}
?>
<p><a href="index.php?target=ceksession">Cek Session</a></p>
<p><a href="index.php?target=logout">Log out</a></p>


