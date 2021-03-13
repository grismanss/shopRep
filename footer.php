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
<footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="js/js.js"></script>
</body>
</html>