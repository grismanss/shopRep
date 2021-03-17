<?php
include("header.php");
?>

<div class="container">

<div class="modal-body">
        <form onsubmit="return update_user_date();">
          <p class="my_message" id="message_update_user_date"></p>
          <div class="alert alert-danger" role="alert" id="message_update_user_date2">
          </div>
          <div id ="form_update_user_date"> 
          <label class="form-check-label">Фамилия</label>
          <input type="text" id="last_name_update" class="form-control" required disabled>
          <label class="form-check-label">Имя</label>
          <input type="text" id="first_name_update" class="form-control" required disabled>   
          <label class="form-check-label">Отчество</label>
          <input type="text" id="patronymic_update" class="form-control" disabled> 
          <label class="form-check-label">Телефон</label>
          <input type="text" id="phone_update" class="form-control" disabled> 
          <label class="form-check-label">email</label>
          <input type="text"  id="email_update" class="form-control" disabled> 
          <label class="form-check-label">Дата рождения</label>
          <input type="date" id="date_of_brith_update" class="form-control" required disabled>
          <label class="form-check-label" disabled>Пол</label> 
          <select id="sex_update" class="form-select" aria-label="Default select example" disabled="true">
            <option value="1" selected>М</option> 
            <option value="0">Ж</option>            
          </select>
          <br>
          <input type="submit" class="btn btn-primary" value="Сохранить изменения" id="submit_update_user_date" disabled>     
          <input type="button" class="btn btn-primary" value="Редактировать личные данные " id="update_status">
          </div>
        </form>
</div>
<script src="js/js4.js"></script>
<?php
include("footer.php");
?>