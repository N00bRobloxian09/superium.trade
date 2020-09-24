<?php 
require_once('./includes/assets/header.php');
?>
<?php
$id = $_GET['id'];
$response = file_get_contents('https://api.superium.net/users/user?id='.$id);
    $response = json_decode($response);
    $data = $response->data;
?>
<div class="card">
  <h5 class="card-header h5"><?php echo $response->Username; ?></h5>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text"card-text"></p>
    <a href="#!" class="btn btn-primary"></a>
  </div>
</div>
<?php
require_once('./includes/assets/footer.php');
?>