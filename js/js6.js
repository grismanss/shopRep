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

let id_order= params['id_order'];
loat_order_composition();
function loat_order_composition(){
    $.ajax({
        url: 'history_orders_load_composition.php',
        method: 'post',
        dataType: 'html',
        data: {id_order:id_order},
        success: function(data){
            //alert(data);
            let s="";
            let mas=JSON.parse(data);
            s+="<table id='tableId' class='table table-dark table-striped'>"+
            "<thead>           <tr>                <th>№</th>"+
               " <th>Наименование</th>            <th>Количество</th>"+
                "<th>Фото</th>              </tr>     </thead>            <tbody>";
            for(let i=0; i<mas.length; i++){
                s+="<tr>             <th scope='row'>"+mas[i][0]+"</th>"+
                "<td>"+mas[i][6]+"</td>                <td>"+mas[i][4]+"</td>"+
                "<td><a href='product_details.php?id_tovar="+mas[i][5]+"'><img width='200' src='img/products/"+mas[i][10]+"'></a></td>              </tr>";
            }
            s+=" </tbody>      </table>";
            let history_orders_load_composition=document.getElementById("history_orders_load_composition");
            history_orders_load_composition.innerHTML=s;
            
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