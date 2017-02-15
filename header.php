<?php include('functions/wezee/login_checker.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>WeZee | The Public Talks</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="umix.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<!-- WeZee personal scripts  -->
<?php 
$user_authentication_obj = new login_authenticator();
if($user_authentication_obj->islogged($_SERVER['PHP_SELF'])) {
echo  $user_authentication_obj->recd_URL;
}
else{
echo  $user_authentication_obj->recd_URL;

}
?>

</head>


<body>

<header>

<nav class="navbar navbar-default ">
  <div class="container-fluid w_mainbar">
    <div class="navbar-header">
      
      <div class="navbar-brand">WeZee</div>
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
</button>
    </div>
<!--
    <ul class="nav navbar-nav">      
<li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul> -->
<ul class="nav navbar-nav navbar-right collapse navbar-collapse" id="myNavbar">
        <li><a href="javascript:void(0);"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="javascript:void(0);"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>  
</div>
</nav>

</header>
