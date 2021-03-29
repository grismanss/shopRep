<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин бытовой техники</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src = "http://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"> </script>
<!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }


      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
   
</style>


<!-- Custom styles for this template -->
<link href="css/carousel.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
<link href="css/dashboard.css" rel="stylesheet">
</head>
<body>
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark ">
    <div class="container-fluid ">
      <a class="navbar-brand" href="#"><img class="my_logo" src="img/logo.png">Бытовая техника</a>
      <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
        <form class="d-flex"  onsubmit="return false;">
          <input id='poisk_data'class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search">
          <button id='poisk_form' class="btn btn-outline-primary" type="submit">Поиск</button>
        </form>
      </div>
    </div>
    <div class="collapse navbar-collapse " id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="katalog.php">Каталог</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Главная</a>
          </li>
          
        </ul>
        <div>
       
            <div id="authorized">
            <a class="navbar-brand" href="user_kabinet.php" ><span id="login_user"></span></a>
            <a class="navbar-brand" href="user_korzina.php" >Корзина</a>
            
            <a class="navbar-brand" href="index.php" id="exit_button">Выход</a>
            </div>
     
         <div id="unauthorized">
          <a class="navbar-brand" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Авторизация</a>
          <a id ="show_modal_registration" class="navbar-brand" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2">Регистрация</a>
          </div>
     
        </div>
        </div>
  </nav>
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
        <form onsubmit="return registration();">
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

</header>
<?php
//print_r($_SESSION);
?>