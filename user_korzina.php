<?php
include("header.php");
?>

<?php
session_start();
print_r($_SESSION['korzina']);
?>

<div id="list_tovar_korzina">
<div class='col-md-12'>
        <div class='row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>
          <div class='col p-4 d-flex flex-column position-static'>
           
            <h3 class='mb-0'></h3>
            <div class='mb-1 text-muted'> </div>
            <p class='card-text mb-auto'></p>
            <div >
                <button class='btn btn-secondary' onclick='add_count_tovar_korzina();'>Больше</button>
                <input type="number" >
                <button class='btn btn-secondary' onclick='add_count_tovar_korzina();'>Меньше</button>
            </div>
            <button class='btn btn-secondary' onclick='detete_tovar_korzina();'>Удалить</button>
            
          </div>
          <div class='col-auto d-none d-lg-block'>
          <img class='bd-placeholder-img' width='200' height='250' src='img/products/"+d['photo']+"' alt='Generic placeholder image' >
            <svg class='bd-placeholder-img' width='200' height='250' xmlns='http://www.w3.org/2000/svg' role='img' 
           aria-label='Placeholder: Thumbnail' preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#55595c'></rect><text x='50%' y='50%' fill='#eceeef' dy='.3em'>Thumbnail</text>
           </svg>
           </div></div></div>
</div>
<script src="js/js5.js"></script>
<?php
include("footer.php");
?>