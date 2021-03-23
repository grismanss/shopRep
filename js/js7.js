var params = window
    .location
    .search
    .replace('?','')
    .split('&')
    .reduce(
        function(p,e){
            var a = e.split('=');
            p[ decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
            return p;
        },
        {}
    );

let dat= params['dat'];
poisk();
function poisk(){
    $.ajax({
        url: 'poisk_bd.php',
        method: 'post',
        dataType: 'html',
        data: {dat:dat},
        success: function(data){
            alert(data);
            let d=JSON.parse(data);
            let s="";
            for (let i=0; i<d.length;i++){
                s+="<div class='col-lg-4'>"+
                "<img class='rounded-circle' src='img/products/"+d[i]['photo']+"' alt='Generic placeholder image' width='140' height='140'>"+
                "<h2>"+d[i]['name']+"</h2>"+
                "<p>"+d[i]['description']+" Стоимость:"+d[i]['price']+"</p>"+
                "<p><a class='btn btn-secondary' href='product_details.php?id_tovar="+d[i]['id']+"' role='button' >Подробнее &raquo;</a></p>"+
            "</div><!-- /.col-lg-4 -->";
            }
            let load_products=document.getElementById("poisk_div");
            load_products.innerHTML=s;
            
        }
    });
}