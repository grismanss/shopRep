
function save_status(id_zakaz){
    let my_select=document.getElementById('my_select').value;
   // alert (id_zakaz+" "+my_select);
    $.ajax({
        url: 'update_status.php',
        method: 'post',
        dataType: 'html',
        data: {id_zakaz:id_zakaz,my_select:my_select},
        success: function(data){
            alert(data);
            load_zakaz();
        }
         
    });
}


function sposok_status_get(id_status, id_zakaz){
   let select="";
    $.ajax({
        url: 'select_status.php',
        method: 'post',
        dataType: 'html',
        data: "",
        success: function(data){
           // alert(data);
           let d=JSON.parse(data);
           select="<select id='my_select'>";

           /* <select>
          <option value="1">dfgfdfgdf</option>
          <option value="2">xghghfg</option>

      </select> */
           for (let i=0; i<d.length; i++){
               if (d[i][0]==id_status){
                select+="<option selected value='"+d[i][0]+"'>"+d[i][1]+"</option>";
               }else{
                select+="<option value='"+d[i][0]+"'>"+d[i][1]+"</option>";
        }

           }
           select+="</select>"+
           "<button onclick='save_status("+id_zakaz+")'>Сохранить</button>";
           
           let select_status_id=document.getElementById("select_status_id");
           select_status_id.innerHTML=select;
       
        }
    });
   
}



admin_login_status();
load_zakaz();
function admin_login_status(){
    $.ajax({
        url: 'admin_login_status.php',
        method: 'post',
        dataType: 'html',
        data: "",
        success: function(data){
            alert(data);
            if (data=="1"){
                let admin_panel_show=document.getElementById("admin_panel_show");
                admin_panel_show.style.display="block";
            }
            else{
                admin_panel_show.style.display="none";
            }
           
            
        }
    });
}

let exit_admin=document.getElementById("exit_admin");
exit_admin.onclick=function(){
    $.ajax({
        url: 'admin_exit.php',
        method: 'post',
        dataType: 'html',
        data: "",
        success: function(data){
            document.location.href = "admin.php";
           
            
        }
    });
}

function load_zakaz(){
    $.ajax({
        url: 'load_zakaz.php',
        method: 'post',
        dataType: 'html',
        data: "",
        success: function(data){
           let d=JSON.parse(data);






           let s="<table class='table'>           <thead>             <tr>"+
               "<th>№</th>               <th>Дата</th>               <th>Сумма</th>"+
               "<th>Пользователь</th>               <th>Статус</th>"+
               "<th></th>             </tr>           </thead>           <tbody>";
           
               for (let i=0; i<d.length;i++){            
               


                s+="<tr>                <th scope='row'>"+d[i][0]+"</th>"+
                "<td>"+d[i][1]+"</td>                <td>"+d[i][2]+"</td>"+
               "<td>"+d[i][6]+" "+d[i][7]+" "+d[i][8]+"</td>                <th>"+d[i][16]+"</th>"+
                "<th><button onclick='sposok_status_get("+d[i][15]+", "+d[i][0]+")'>Редактировать</button></th>              </tr>";
            }


            s+="  </tbody>            </table>";
            let zakaz_admin_list=document.getElementById("zakaz_admin_list");
            zakaz_admin_list.innerHTML=s;
           
            
        }
    });
}


sposok_status_get(1,1);
