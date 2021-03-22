<?php
include("header.php");
?>



<div id="list_tovar_korzina">
</div>
</div>

<form class="form-inline">
  <div class="form-group mb-2">
    <label for="staticEmail2" class="sr-only">Итоговая сумма заказа</label>
    <input disabled type="text" readonly class="form-control-plaintext" id="all_summ_korzina" value="0">
  </div>
  <button id="add_all_orders" type="submit" class="btn btn-primary mb-2">Оформить заказ</button>
</form>


<script src="js/js5.js"></script>
<?php
include("footer.php");
?>