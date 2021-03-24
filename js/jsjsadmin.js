let admin_login_button = document.getElementById("admin_login_button");


admin_login_button.onclick=function(){
    let inputEmailadmin=document.getElementById("inputEmailadmin").value;
    let inputPasswordadmin=document.getElementById("inputPasswordadmin").value;
    $.ajax({
        url: 'admin_login.php',
        method: 'post',
        dataType: 'html',
        data: {inputEmailadmin:inputEmailadmin, inputPasswordadmin:inputPasswordadmin},
        success: function(data){
            alert(data);
            let mas=JSON.parse(data);
            if (mas['status']==1){
                document.location.href = "admin_kabinet.php";
            }
           
            
        }
    });
};