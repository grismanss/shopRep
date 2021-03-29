load_user_date();
history_orders_load();
let message_new_pass=document.getElementById("message_new_pass");
message_new_pass.style.display="none";


function load_user_date(){
let message_update_user_date2=document.getElementById("message_update_user_date2");
message_update_user_date2.style.display="none";
    $.ajax({
    url: 'load_user_date.php',
    method: 'post',
    dataType: 'html',
    data: '' ,
    success: function(data){
        //alert(data);
        let user_data=JSON.parse(data);
    
        let last_name_update=document.getElementById("last_name_update");
        last_name_update.value=user_data['last_name'];

        let first_name_update=document.getElementById("first_name_update");
        first_name_update.value=user_data['first_name'];
        
        let patronymic_update=document.getElementById("patronymic_update");
        patronymic_update.value=user_data['patronymic'];

        let phone_update=document.getElementById("phone_update");
        phone_update.value=user_data['phone'];

        let email_update=document.getElementById("email_update");
        email_update.value=user_data['email'];

        let date_of_brith_update=document.getElementById("date_of_brith_update");
        
        
        date_of_brith_update.value=user_data['date_of_birth'];
        let sex_update=document.getElementById("sex_update");
        sex_update.value=user_data['sex'];

        
      
    }  

    
        });
}


let update_status=document.getElementById("update_status");
update_status.onclick=function(){

    last_name_update.disabled=!(last_name_update.disabled);
    first_name_update.disabled=!(first_name_update.disabled);
    patronymic_update.disabled=!(patronymic_update.disabled);
    phone_update.disabled=!(phone_update.disabled);
    email_update.disabled=!(email_update.disabled);
    date_of_brith_update.disabled=!(date_of_brith_update.disabled);
    sex_update.disabled=!(sex_update.disabled);
    let submit_update_user_date=document.getElementById('submit_update_user_date');
    submit_update_user_date.disabled=!(submit_update_user_date.disabled);
    if(sex_update.disabled==true){
        update_status.value="Редактировать личные данные";
        load_user_date();
    }
    else{
        update_status.value="Отменить редактирование";
    }
}


function update_user_date(){
    let message_update_user_date=document.getElementById("message_update_user_date");
    let message_update_user_date2=document.getElementById("message_update_user_date2");
    let mess="";
    let em=email_update.value.trim();
    let ph=phone_update.value.trim();

    if (em.length==0 && ph.length==0){
        mess+="<p>Необходимо заполнить Email или телефон!</p>";
    }

    if (mess.length!=0){
        
        message_update_user_date.style.display="block";
        message_update_user_date2.style.display="block";
        message_update_user_date.innerHTML=mess;
        message_update_user_date2.innerHTML=mess;
     
    }
    else{
        $.ajax({
            url: 'update_user_data.php',
            method: 'post',
            dataType: 'html',
            data: {last_name: last_name_update.value, 
                first_name:first_name_update.value,
                patronymic:patronymic_update.value,
                date_of_brith:date_of_brith_update.value,
                sex:sex_update.value,
                email:email_update.value,
                phone:phone_update.value} ,
            success: function(data){
                alert(data);
                let mas=JSON.parse(data);
                if (mas['status']==1){
                    update_status.onclick();
                    message_update_user_date.style.display="block";
                    message_update_user_date2.style.display="block";
                    message_update_user_date.innerHTML=mas['mess'];
                    message_update_user_date2.innerHTML=mas['mess'];
                    let login_user=document.getElementById("login_user");
                    login_user.innerHTML=mas['login'];
                }
                else{
                    message_update_user_date.style.display="block";
                    message_update_user_date2.style.display="block";
                    message_update_user_date.innerHTML=mas['mess'];
                    message_update_user_date2.innerHTML=mas['mess'];
                }
                /*message_registration.style.display="block";
                message_registration2.style.display="block";
                message_registration2.innerHTML=data;
                message_registration.innerHTML=data;
                if (data=="Пользователь успешно зарегистрирован"){
                    var form_registration=document.getElementById("form_registration");
                    form_registration.style.display="none";
                }*/
                return false;
                
            }
        });

}
   return false;
}


function new_password(){
    message_new_pass.style.display="none";
    message_new_pass.innerHTML="";
    let oldpass=document.getElementById("old_pass").value;
    let newpass=document.getElementById("newpass").value;
    let newpass2=document.getElementById("newpass2").value;
    if (newpass!=newpass2){
        message_new_pass.style.display="block";
        message_new_pass.innerHTML="Новые пароли не совпадают";
    }
    else{
        $.ajax({
            url: 'update_user_pass.php',
            method: 'post',
            dataType: 'html',
            data: {oldpass:oldpass,newpass:newpass} ,
            success: function(data){
                alert(data);
                if(data=="0"){
                    message_new_pass.style.display="block";
                    message_new_pass.innerHTML="Не удалось сменить пароль";
                }
                else{
                    message_new_pass.style.display="block";
                    message_new_pass.innerHTML="Пароль успешно изменен";
                }
  
                return false;
                
            }
        });
    }



    return false;
}

function history_orders_load(){
    $.ajax({
        url: 'history_orders_load.php',
        method: 'post',
        dataType: 'html',
        data: "" ,
        success: function(data){
           // alert(data);
            let s="<table id='tableId' class='table'>"+
            "<thead class='thead-dark'>"+
              "<tr>     <th scope='col'>№</th>"+
                "<th scope='col'>Дата</th>"+
                "<th scope='col'>Сумма</th>"+
                "<th scope='col'>Статус</th>"+
                "<th scope='col'></th> </tr> </thead>  <tbody>";
            let mas=JSON.parse(data);

            for(let i=0; i<mas.length; i++){
                s+="<tr>"+
                "<th scope='row'>"+mas[i][0]+"</th>"+
                "<td>"+mas[i][1]+"</td>"+
                "<td>"+mas[i][2]+"</td>"+
                "<td>"+mas[i][6]+"</td>"+
                "<td><a class='btn btn-primary' href='order_composition.php?id_order="+mas[i][0]+"'>Подробнее</a></td> </tr>";
            }
            s+=" </tbody>    </table>";
            let history_orders=document.getElementById("history_orders");
            history_orders.innerHTML=s;

            
        }
    });
}


function to_excel(){
    $(document).ready(function () {
        $("#tableId").table2excel({
        filename: "new.xls"
        });
        });
}