<?php
session_start();
if(isset($_POST['submit'])){
    if($_SESSION['captcha']===$_POST['captcha']){
//        jika kode captcha benar
        echo "Selamat datang ".$_POST['nama'].", kode yang anda masukkan benar.";
    }else{
//        jika kode captcha salah
        echo "Kode yang anda masukkan salah.";
    }
}else{
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Belajar Captcha</title>
    </head>
    <body>
        <form method="post" action="formulir.php">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="text" name="nama"/>
                    </td>
                </tr>
                <tr>
                    <td valign="top">Captcha</td>
                    <td>
                        <img src="captcha_image.php" alt="captcha"/><br/>
                        <input type="text" name="captcha"/>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Submit"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
<?php
};
?>