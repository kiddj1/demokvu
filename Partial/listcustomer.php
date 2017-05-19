<div class="row gridContainer customersTable show-hide-animation" >
                <div class="col-md-10">
                    <div>
                        <table class="table table-striped table-condensed">
                            <thead>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th >Name</th>
                                    <th >Location</th>
                                    <th >Orders</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $db=new PDO('mysql:host=localhost;dbname=Dbcustomer','root','');
                                $sql="select * from customers";
                                $result=$db->query($sql);
                                 while ($r=$result->fetch(PDO::FETCH_ASSOC))
                                { 
                                   echo '<tr class="repeat-animation">
                                                       <td><a href="#/customeredit"><img src="Content/images/'.$r['gender'].'.png" class="cardImage" alt="Customer Image" /></a></td>
                                                       <td><a href="Editcustomer.php?id='.$r['id'].'">'.$r['lname'] .' '.$r['fname'].'</a></td>
                                                       <td>'.$r['city'].', '.$r['state'].' </td>
                                                       <td>
                                                           <a href="#/customerorders" class="btn-link">
                                                               99
                                                               <span> 
                                                               </span>
                                                           </a>
                                                       </td>
                                                       <td><button class="btn btn-danger" ">Delete</button></td>
                                                   </tr>';
                                }
                               ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>