
  <?php
echo '﻿<table class="table table-hover table-striped table-condensed table-bordered ordersTable">
    <thead>
        <tr>
            <th>Product</th>
            <th>Date</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
      ';
         $db=new PDO('mysql:host=localhost;dbname=Dbcustomer','root','');
          $sql1="select * from orders where id_customer='$id'";
          $result1=$db->query($sql1);
          $tong=0;
             while ($r1=$result1->fetch(PDO::FETCH_ASSOC)){
                 echo '      <tr>
            <td>'.$r1['product'].'</td>
            <td>'.$r1['orderdate'].'</td>
            <td>'.$r1['quantity'].'</td>
            <td>$'.$r1['price'].'</th>
            <td>'.$r1['quantity']*$r1['price'].'</td>
        </tr>';
           $tong+=$r1['quantity']*$r1['price'];
           
             }
             
             
             
       
        
        
             echo ' <tr>
            
        </tr>
        
        <tr class="info">
            <td colspan="4">
                &nbsp;
            </td>
            <td>';
              
                echo '<strong>$'.$tong.'</strong>
               
            </td>
        </tr>
    </tbody>
</table>';
?>