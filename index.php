<?php
include("header.php");
?>
<main>
<span id="message_box"></span>

<?php
include("connect.php");
$s="select * from stock ORDER by `data1` DESC";
$q=mysqli_query($link, $s);
$mas=["img"=>[],
      "title"=>[],
      "description"=>[]
];
for ($i=0; $i<3; $i++){
  $row=mysqli_fetch_array($q);
  $mas['img'][$i]=$row[5];
  $mas['title'][$i]=$row[1];
  $mas['description'][$i]=$row[2];
}

?>
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
        <img src="img/stock/<?=$mas['img'][0];?>">
        
        </svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1><?=$mas['title'][0];?></h1>
            <p><?=$mas['description'][0];?></p>
          
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
        <img src="img/stock/<?=$mas['img'][1];?>"></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1><?=$mas['title'][1];?></h1>
            <p><?=$mas['description'][1];?></p>
            
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/>
        <img src="img/stock/<?=$mas['img'][2];?>"></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1><?=$mas['title'][2];?></h1>
            <p><?=$mas['description'][2];?></p>
            
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>
  
  



<div class="container marketing">

       

        <!-- Three columns of text below the carousel -->
        <div class="row" id="load_products">
          
        </div><!-- /.row -->

<?php
include("footer.php");
?>