<!DOCTYPE html>
<html>
<head>
    <title>Quản lý khách hàng </title>
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
                <a class="navbar-brand" href="#/">
                    <img src="Content/images/people.png" alt="logo">
                    <span class="appTitle">KHÁCH HÀNG</span>
                </a>
            </div>
            <div class="nav-container">
                <ul class="nav navbar-nav nav-pills navBarPadding"
                    menu-highlighter highlight-class-name="active">
                    <li><a href="Index.php">Danh sách</a></li>
                   
                    <li><a href="order.php">Đơn hàng</a></li>
                        ?>
                    <li><a href="#">Liên hệ </a></li>
                    <li >
                        <a href="login.php">Đăng nhập</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="slide-animation-container">
     <div class="customers view indent">
       <div class="container">
        <header>
            <h3><span class="glyphicon glyphicon-user"></span> Danh sách khách hàng</h3>
        </header>
        <div class="row">
            <div class="col-md-10">
                <div class="navbar">
                    <ul class="nav navbar-nav">
                        <li class="toolbaritem active">
                            <a href="Index.php?view=card">
                                <span class="glyphicon glyphicon-th-large"></span> Card View
                            </a>
                        </li>
                        <li class="toolbaritem">
                            <a href="Index.php?view=list">
                                <span class="glyphicon glyphicon-align-justify"></span> List View
                            </a>
                        </li>
                        <li class="toolbaritem">
                            <a href="Createcustomer.php">
                                <span class="glyphicon glyphicon-plus"></span> Add Customer
                            </a>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right">
                        <div class="form-group">
                            <label class="navbarText col-sm-2">Filter:</label>
                            <div class="col-sm-10">
                                <input type="text" class="novalidate form-control" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <!--begin partial view-->
         <?php
            $view="card";
            if (isset($_GET['view']))
                $view=$_GET['view'];
            if($view=="card")
            {
                include ('Partial/cardcustomer.php');
            }
            else
            {
                include ('Partial/listcustomer.php');
            }
          ?>
            <!-- end partial -->
            
        </div>
    </div>
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