<div class="row cardContainer show-hide-animation">
<?php
          $db=new PDO('mysql:host=localhost;dbname=Dbcustomer','root','');
          $sql="select * from customers";
          $result=$db->query($sql);
             while ($r=$result->fetch(PDO::FETCH_ASSOC))
             {
              echo '<div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                       <a href="xlxoa.php?id='.$r['id'].'"> <button class="btn close cardClose" title="Delete Customer">&times;</button></a>
                        <div class="cardHeader"><a href="Editcustomer.php?id='.$r['id'].'" class="white">'.$r['lname'] .' '.$r['fname'].'<i class="icon-edit icon-white editIcon"></i></a></div>
                        <div class="cardBody">
                            <div class="clearfix">
                                <div class="pull-left cardBodyLeft">
                                    <a href="#" class="white"><img src="Content/images/'.$r['gender'].'.png" class="cardImage" /></a>
                                </div>
                                <div class="pull-left cardBodyRight">
                                    <div class="cardBodyContent">'.$r['city'].', '.$r['state'].'</div>
                                    <div>
                                        <a href="Customerorder.php?id='.$r['id'].'" class="btn-link">
                                            99
                                            <span>Orders</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
             } 
             ?>
 </div>