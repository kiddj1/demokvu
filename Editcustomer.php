<!DOCTYPE html>
<html>
<head>
    <title>Quan ly khach hang</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link href="Content/animations.css" rel="stylesheet" />
    <link href="Content/styles.css" rel="stylesheet" />
</head>
<body>

    <header class="navbar navbar-inner navbar-fixed-top">
        <nav class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="Content/images/people.png" alt="logo" />
                    <span class="appTitle">Khach Hang</span>
                </a>
            </div>
            <div class="nav-container" data-collapse="vm.isCollapsed">
                <ul class="nav navbar-nav nav-pills navBarPadding"
                    menu-highlighter highlight-class-name="active">
                    <li><a href="Index.php">Danh sách</a></li>
                    <li><a href="order.php">Đơn hàng</a></li>
                    <li><a href="#">Liên hệ </a></li>
                    <li>
                        <a href="login.php">Đăng nhập</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

   
    <div class="container">
        <header>
            <h3><span class="glyphicon glyphicon-user"></span> Customers</h3>
        </header>
    </div>
   <div class="view">
    <div class="container">
        <header>
            <h3><span class="glyphicon glyphicon-edit"></span> Edit Customer</h3>
        </header>
      <?php
        $id=$_GET['id'];
        $db=new PDO('mysql:host=localhost;dbname=Dbcustomer','root','');
        $sql="select * from customers where id='$id'";
        $result=$db->query($sql);
        $r=$result->fetch(PDO::FETCH_ASSOC);
      ?>
        <form name="editForm" action="xlcustomer/saveEdit.php" method="post">
            <div class="customerEdit">
                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                <div class="row">
                    <div class="col-md-2">
                        First Name:
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="firstName" value="<?php echo $r['fname'] ?>" class="form-control"  required />
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-2">
                        Last Name:
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="lastName" value="<?php echo $r['lname'] ?>" class="form-control" required />
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-2">
                        Gender:
                    </div>
                    <div class="col-md-10">
                        <div class="radio">
                            <label class="radio">
                                <input type="radio" name="gender" value="Male" checked="<?php if($r['gender']=='male') echo 'checked';?>"/>
                                Male
                            </label>
                        </div>
                        <div class="radio">
                            <label class="radio">
                                <input type="radio" name="gender" value="Female" checked="<?php if($r['gender']=='female') echo 'checked';?>"/>
                                Female
                                <br />
                            </label>
                        </div>
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-2">
                        Email:
                    </div>
                    <div class="col-md-10">
                        <!-- allowInvalid added below so that the model isn't wiped
                        out (the default behavior) if email is determined to be invalid due to being a duplicate-->
                        <input type="text" name="email" required value="<?php echo $r['email'] ?>" />
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-2">
                        Address:
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="address"  value="<?php echo $r['address'] ?>" class="form-control" required />
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-2">
                        City:
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="city" value="<?php echo $r['city'] ?>" class="form-control" required />
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-2">
                        State:
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="state" value="<?php echo $r['state'] ?>" class="form-control" required />
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-2">
                        Zip:
                    </div>
                    <div class="col-md-10">
                        <input type="number" name="zip" value="<?php echo $r['zip'] ?>" class="form-control" required />
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary" >
                            Save
                        </button>
                        &nbsp;&nbsp;
                        <button class="btn btn-danger" >Back Customer</button>
                    </div>
                </div>
                <br />
                
            </div>
        </form>
    </div>
</div>

    <div id="footer">
        <div class="navbar navbar-fixed-bottom">
            <div class="navbar-inner footer">
                <div class="container">
                    <footer>
                        <div class="row">
                            <div class="col-md-12">
                                Created by <a href="http://itc.edu.vn" target="_blank">Trần Công Mua </a>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>

   
</body>
</html>