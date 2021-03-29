<?php
include("header.php");
?>
 <!-- Modal -->
 <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Смена пароля</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form onsubmit="return new_password();">
          <div class="alert alert-danger" role="alert" id="message_new_pass">         
          </div>
          <label class="form-check-label">Старый пароль</label>
          <input type="password" id="old_pass" class="form-control" required >
          <label class="form-check-label">Новый пароль</label>
          <input type="password" id="newpass" class="form-control" required >
          <label class="form-check-label">Подтверждение пароля</label>
          <input type="password" id="newpass2" class="form-control" required >
          <br>
          <input type="submit" class="btn btn-primary" value="Сохранить изменения" >
        </form>
      </div>
      
    </div>
  </div>
</div>

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
          <a id ="show_modal_registration" class=" btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal3">Сменить пароль</a>
        </form>
       
       <div id="history_orders">
        

       
       </div>
       <button onclick="to_excel();">Выгрузить exel</button>
</div>
<script src="js/js4.js"></script>
<?php
include("footer.php");
?>