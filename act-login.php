<?php
session_start();
include "config.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
$op = $_GET['op'];

$id = mysql_query("SELECT * FROM calon WHERE username='{$username}'");
    if(mysql_num_rows($id)==1){
        $qry2 = mysql_fetch_array($id);
        $_SESSION['id_pendaftar'] = $qry2['id_pendaftar'];
    }

if($op=="in"){
    $sql = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password'");
    if(mysql_num_rows($sql)==1){//jika berhasil akan bernilai 1
        $qry = mysql_fetch_array($sql);
        $_SESSION['status'] = "login";
        $_SESSION['username'] = $qry['username'];
        $_SESSION['email'] = $qry['email'];
        $_SESSION['hak_akses'] = $qry['hak_akses'];

        if($qry['hak_akses']=="Admin"){
            header("location:admin/index.php");
        }
        else if($qry['hak_akses']=="Siswa"){
            header("location:siswa/index.php");
        }
    }else{
        ?>
        <script language="JavaScript">
            alert('Username atau Password tidak sesuai. Silahkan diulang kembali!');
            document.location='index.php';
        </script>
        <?php
    }
}else if($op=="out"){
    unset($_SESSION['username']);
    unset($_SESSION['hak_akses']);
    header("location:index.php");
}
?>
