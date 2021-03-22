loadtovarkorzina();

function loadtovarkorzina(){
$.ajax({
    url: 'load_korzina_data.php',
    method: 'post',
    dataType: 'html',
    data: "" ,
    success: function(data){
        let sum=0;
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
                   "<button class='btn btn-secondary' onclick='delete_count_tovar_korzina("+mas1['count']+","+tovar['id']+");'>Меньше</button>"+
                    "<input disabled type='number'  value='"+mas1['count']+"' min='0' max='10' id='inputcount"+tovar['id']+"'>"+
                    "<button class='btn btn-secondary' onclick='add_count_tovar_korzina("+mas1['count']+","+tovar['id']+");'>Больше</button>"+
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

               sum+=tovar['price']*mas1['count'];               
        }
        let all_summ_korzina=document.getElementById('all_summ_korzina');
        all_summ_korzina.value=sum;
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

function delete_count_tovar_korzina(count,id){
    if (count>0){
    $.ajax({
        url: 'update_korzina_count.php',
        method: 'post',
        dataType: 'html',
        data: {count:count-1, id:id},
        success: function(data){
            loadtovarkorzina();
            //let inputcount=document.getElementById("inputcount"+id);
           // inputcount.value=count+1;
        }
    });  
}     
}

function detete_tovar_korzina(id){
    $.ajax({
        url: 'delete_korzina_count.php',
        method: 'post',
        dataType: 'html',
        data: { id:id},
        success: function(data){
            loadtovarkorzina();
         
        }
    });  

}


let add_all_orders=document.getElementById("add_all_orders");
add_all_orders.onclick=function(){

    let sum2=document.getElementById("all_summ_korzina").value;
    let maxid=0;
    $.ajax({
        url: 'add_all_orders.php',
        method: 'post',
        dataType: 'html',
        data: { sum:sum2},
        success: function(data){
            maxid=data;
            //loadtovarkorzina();
            $.ajax({
                url: 'add_orders.php',
                method: 'post',
                dataType: 'html',
                data: { maxid:maxid},
                success: function(data){
                    //alert(data);
                    loadtovarkorzina();
                 
                }
            });  
         
        }
    });  


    
};