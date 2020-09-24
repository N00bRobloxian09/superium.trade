<?php 
require_once('./includes/assets/header.php');
?>
<div class="btn-group" style="right: 0; position: absolute;">
  <a class="btn">Sort by</a>
  <button type="button" class="btn btn-success dropdown-toggle px-3" data-toggle="dropdown" aria-haspopup="true"
    aria-expanded="false">
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Show Limiteds</a>
    <a class="dropdown-item" href="#">Highest Price</a>
    <a class="dropdown-item" href="#">Lowest Price</a>
  </div>
</div>
<br />
<br />
<div class="container">
<div class="row row-cols-1 row-cols-md-4">
<?php
    $response = file_get_contents('https://api.superium.net/asset/catalog?is_limited=1&limit=15');
    $response = json_decode($response);
    $data = $response->data;
    foreach ($response as $value) {
        $gameid = $value->rootPlace;
        echo '<div class="col mb-4">';
        echo '<div class="card elegant-color text-white">';
        echo '<div class="view overlay">';
        echo '<img class="card-img-top" style="height: 100px; width: 100px; --webkit-text-align: center;" src="https://superium.net/assets/thumbnails/catalog/';
        echo $value->id;
        echo '.png">';
        echo '<a href="https://superium.net/Shop/';
        echo $value->id;
        echo '">';
        echo '<div class="mask rgba-white-slight"></div>';
        echo '</a>';
        echo '</div>';
        echo '<div class="card-body">';
        echo '<h4 class="card-title">';
        echo $value->name;
        echo '</h4>';
        echo '<p class="card-text text-success">Price: ';
        echo $value->price;
        echo '</p>';
        echo '<p class="card-text text-primary">Value: ';
        echo $value->value;
        echo '</p>';
        echo '</div>';
        echo '</div>';
      echo '</div>';
    }
    ?>

  </div>
</div>
<?php
require_once('./includes/assets/footer.php');
?>
