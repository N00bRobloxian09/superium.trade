<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/database.php';
//require_once('includes/class/main.class.php');
header('X-Frame-Options: DENY');
header('X-XSS-Protection: 1; mode=block');
header('X-Content-Type-Options: nosniff');
?>

<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $config['site_description']; ?>">
    <!--<link rel="icon" href="./favicon.png">-->

    <title><?php echo $config['page_name']; ?> | <?php echo $config['site_title']; ?></title>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <link href="<?php echo $config['customloadbar']; ?>" rel="stylesheet">
</head>
<body class="elegant-color-dark">
<style>
.navbar.navbar-dark .breadcrumb .nav-item.active>.nav-link, .navbar.navbar-dark .navbar-nav .nav-item.active>.nav-link {
    background-color: rgba(255,255,255,0);
}
</style>
<nav class="navbar navbar-expand-lg navbar-dark elegant-color" style="border-bottom: solid 2px #4ab04e;">
  <a class="navbar-brand" href="#">superium.trade</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="catalog.php">Catalog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user.php">User Search</a>
      </li>
    </ul>
  </div>
</nav>