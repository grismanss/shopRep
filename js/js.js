autorizationStatus();
load_products_top();

let show_modal_registration=document.getElementById("show_modal_registration");
show_modal_registration.onclick=function(){
    let form_registration=document.getElementById("form_registration");
    form_registration.style.display="block";
    let message_registration=document.getElementById("message_registration");
    let message_registration2=document.getElementById("message_registration2");
    message_registration.style.display="none";
    message_registration2.style.display="none";
    let last_name=document.getElementById("last_name");
    last_name.value="";
let first_name=document.getElementById("first_name").value;
let patronymic=document.getElementById("patronymic").value;
let date_of_brith=document.getElementById("date_of_brith").value;

};


/*

*/
let submit_registration=document.getElementById("submit_registration");
submit_registration.onclick= function(){
    //let registration_submit=document.getElementById("submit_registration");

//registration_submit.onclick=function()
//{
   /* let message_registration=document.getElementById("message_registration");
    let message_registration2=document.getElementById("message_registration2");*/
  /*  message_registration.style.display="none";
    message_registration2.style.display="none";*/
    let pass1=document.getElementById("pass1").value;
    let pass2=document.getElementById("pass2").value;
    let mess="";
    if (pass1!=pass2){
        mess+="<p>Пароли не совпадают!</p>";
    }

    let email=document.getElementById("email").value;
    let phone=document.getElementById("phone").value;
    email=email.trim();
    phone=phone.trim();

    if (email.length==0 && phone.length==0){
        mess+="<p>Необходимо заполнить Email или телефон!</p>";
    }

    if (mess.length!=0){
        
        message_registration.style.display="block";
        message_registration2.style.display="block";
        message_registration2.innerHTML=mess;
        message_registration.innerHTML=mess;
        //return false;
    }
/*$last_name=$_POST['last_name'];
$first_name=$_POST['first_name'];
$patronymic=$_POST['patronymic'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$pass1=$_POST['pass1'];
$date_of_brith=$_POST['date_of_brith'];
$sex=$_POST['sex']; */
let last_name=document.getElementById("last_name").value;
let first_name=document.getElementById("first_name").value;
let patronymic=document.getElementById("patronymic").value;
let date_of_brith=document.getElementById("date_of_brith").value;
let sex=document.getElementById("sex").value;


$.ajax({
    url: 'registration_bd.php',
    method: 'post',
    dataType: 'html',
    data: {last_name: last_name, first_name:first_name,patronymic:patronymic,
        date_of_brith:date_of_brith,sex:sex,email:email,phone:phone, pass1:pass1} ,
    success: function(data){
       // alert(data);
       message_registration.style.display="block";
       message_registration2.style.display="block";
       message_registration2.innerHTML=data;
        message_registration.innerHTML=data;
        if (data=="Пользователь успешно зарегистрирован"){
        let form_registration=document.getElementById("form_registration");
        form_registration.style.display="none";
    }
     
    }
});
    //return false;
}


let sub_autorization=document.getElementById("sub_autorization");
sub_autorization.onclick=function(){
    let login=document.getElementById("login").value;
    let pass=document.getElementById("pass").value;
    //class="btn-close"
    $.ajax({
		url: 'autorization_bd.php',
		method: 'post',
		dataType: 'html',
		data: {login: login, pass:pass} ,
		success: function(data){
			//alert(data);
            let mass_data=JSON.parse(data);
            let message_autorization=document.getElementById("message_autorization");
            message_autorization.style.display="block";
            message_autorization.innerHTML=mass_data['mess'];

            if (mass_data['status']==1){
                let authorized=document.getElementById("authorized");
                let unauthorized=document.getElementById("unauthorized");
                authorized.style.display="block";
                unauthorized.style.display="none";
                let login_user=document.getElementById("login_user");
                login_user.innerHTML=mass_data['login'];
                $(".modal").modal("hide");
            }
		}
	});
};


function autorizationStatus(){
    $.ajax({
		url: 'autorizationStatus.php',
		method: 'post',
		dataType: 'html',
		data: "" ,
		success: function(data){
		//	alert(data);
            
            let mass_data=JSON.parse(data);
            if (mass_data['status']==1){
                let authorized=document.getElementById("authorized");
                let unauthorized=document.getElementById("unauthorized");
                authorized.style.display="block";
                unauthorized.style.display="none";
                let login_user=document.getElementById("login_user");
                login_user.innerHTML=mass_data['login'];
            }
		}
	});
}


let exit_button=document.getElementById("exit_button");
exit_button.onclick=function(){
    $.ajax({
		url: 'exit.php',
		method: 'post',
		dataType: 'html',
		data: "" ,
		success: function(data){
		//	alert(data);           
        let authorized=document.getElementById("authorized");
        let unauthorized=document.getElementById("unauthorized");
        authorized.style.display="none";
        unauthorized.style.display="block";
		}
	});

};


function load_products_top(){
    $.ajax({
        url: 'load_products_top.php',
        method: 'post',
        dataType: 'html',
        data: "" ,
        success: function(data){
            //alert(data);
            let d=JSON.parse(data);

            let s="";
            for (let i=0; i<d.length;i++){
                s+="<div class='col-lg-4'>"+
                "<img class='rounded-circle' src='img/products/"+d[i]['photo']+"' alt='Generic placeholder image' width='140' height='140'>"+
                "<h2>"+d[i]['name']+"</h2>"+
                "<p>"+d[i]['description']+" Стоимость:"+d[i]['price']+"</p>"+
                "<p><a class='btn btn-secondary' href='#' role='button'>Подробнее &raquo;</a></p>"+
            "</div><!-- /.col-lg-4 -->";
            }
            let load_products=document.getElementById("load_products");
            load_products.innerHTML=s;


           
        }        
        
    });

}