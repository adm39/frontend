<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>An Access Controlled Page</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">

<style>
body {background: url('images/accessWallpaper.png') no-repeat fixed center center;
      background-size: cover;
      color: white;}
a {
    color: white;
}

</style>

</head>
<body>
<div id='fg_membersite_content'>
<h2 style="color:white">This is an Access Controlled Page</h2>
This page will display the Riot API data. It can only be accessed after logging in. 
<p>
Logged in as: <b> <?= $fgmembersite->UserFullName() ?> </b>
</p>
<p>
<a href='https://www.youtube.com/watch?v=PwxNU0Lk32o'>DATA</a>
</p>



<p>
<a href='login-home.php'>Home</a>
</p>
</div>
</body>
</html>
