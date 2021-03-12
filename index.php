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
  
  

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form >
          <div class="alert alert-danger" role="alert" id="message_autorization">
          </div>
          <label class="form-check-label">Логин</label>
          <input type="text" id="login" class="form-control">
          <label class="form-check-label">Пароль</label>
          <input type="password" id="pass" class="form-control">
          <br>
          <input type="button" class="btn btn-primary" value="Авторизоваться" id="sub_autorization">
        </form>
      </div>
      
    </div>
  </div>
</div>


<!-- Modal2 -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Регистрация</h5>
        <button type="button"  data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form onsubmit="return false;" >
          <p class="my_message" id="message_registration"></p>

          <div class="alert alert-danger" role="alert" id="message_registration2">
          </div>
          <div id ="form_registration"> 
          <label class="form-check-label">Фамилия</label>
          <input type="text" id="last_name" class="form-control" required>
          <label class="form-check-label">Имя</label>
          <input type="text" id="first_name" class="form-control" required>   
          <label class="form-check-label">Отчество</label>
          <input type="text" id="patronymic" class="form-control"> 
          <label class="form-check-label">Телефон</label>
          <input type="text" id="phone" class="form-control"> 
          <label class="form-check-label">email</label>
          <input type="text"  id="email" class="form-control"> 
          <label class="form-check-label">Пароль</label>
          <input type="password"  id ="pass1" class="form-control" required> 
          <label class="form-check-label">Подтверждение пароля</label>
          <input type="password"  id="pass2"  class="form-control" required> 
          <label class="form-check-label">Дата рождения</label>
          <input type="date" id="date_of_brith" class="form-control" required>
          <label class="form-check-label">Пол</label> 
          <select id="sex" class="form-select" aria-label="Default select example">
            <option value="1" selected>М</option> 
            <option value="0">Ж</option>            
          </select>
          <br>
          <input type="submit" class="btn btn-primary" value="Зарегистрироваться" id="submit_registration">     
          </div>
        </form>
      </div>
     
    </div>
  </div>
</div>

<div class="container marketing">

       

        <!-- Three columns of text below the carousel -->
        <div class="row" id="load_products">
          
        </div><!-- /.row -->

<?php
include("footer.php");
?>