loadtovarkorzina();

function loadtovarkorzina(){
$.ajax({
    url: 'load_korzina_data.php',
    method: 'post',
    dataType: 'html',
    data: "" ,
    success: function(data){
    	      
        let mass_data=JSON.parse(data);
        //alert(mass_data);  

        let s="";
        for (let i=0; i<mass_data.length;i++){
            let mas1=JSON.parse(mass_data[i]);
            let tovar=JSON.parse(mas1['tovar']);
            s+="<div class='col-md-12'>"+
            "<div class='row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative'>"+
              "<div class='col p-4 d-flex flex-column position-static'>"+
               
                "<h3 class='mb-0'>"+tovar['name']+"</h3>"+
                "<div class='mb-1 text-muted'>"+tovar['price']+" </div>"+
                "<p class='card-text mb-auto'></p>"+
                "<div >"+
                   "<button class='btn btn-secondary' onclick='add_count_tovar_korzina("+mas1['count']+","+tovar['id']+");'>Больше</button>"+
                    "<input disabled type='number'  value='"+mas1['count']+"' min='0' max='10' id='inputcount"+tovar['id']+"'>"+
                    "<button class='btn btn-secondary' onclick='add_count_tovar_korzina("+mas1['count']+","+tovar['id']+");'>Меньше</button>"+
                "</div>"+
                "<button class='btn btn-secondary' onclick='detete_tovar_korzina("+tovar['id']+");'>Удалить</button>"+
                
              "</div>"+
              "<div class='col-auto d-none d-lg-block'>"+
              "<img class='bd-placeholder-img' width='200' height='250' src='img/products/"+tovar['photo']+"' alt='Generic placeholder image' >"+
                "<svg class='bd-placeholder-img' width='200' height='250' xmlns='http://www.w3.org/2000/svg' role='img' "+
               "aria-label='Placeholder: Thumbnail'"+
                "preserveAspectRatio='xMidYMid slice' focusable='false'><title>Placeholder</title><rect width='100%' height='100%' fill='#55595c'></rect><text x='50%' y='50%' fill='#eceeef' dy='.3em'>Thumbnail</text>"+
               "</svg>"+
               "</div></div></div>";
        }
        let list_tovar_korzina=document.getElementById("list_tovar_korzina");
        list_tovar_korzina.innerHTML=s;
        //status_user_button=mass_data['status'];        
    }
});
}

function add_count_tovar_korzina(count,id){
    if (count<=9){
    $.ajax({
        url: 'update_korzina_count.php',
        method: 'post',
        dataType: 'html',
        data: {count:count+1, id:id},
        success: function(data){
            loadtovarkorzina();
            //let inputcount=document.getElementById("inputcount"+id);
           // inputcount.value=count+1;
        }
    });  
}     
}