<!DOCTYPE html>
<html ng-app="customersApp">
<head>
    <title>Customer Manager</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link href="Content/animations.css" rel="stylesheet" />
    <link href="Content/styles.css" rel="stylesheet" />
</head>
<body ng-cloak>

    <header class="navbar navbar-inner navbar-fixed-top" ng-controller="NavbarController as vm">
        <nav class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" ng-click="vm.isCollapsed = !vm.isCollapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#/">
                    <img src="Content/images/people.png" alt="logo">
                    <span class="appTitle">{{ vm.appTitle }}</span>
                </a>
            </div>
            <div class="nav-container" data-collapse="vm.isCollapsed">

                <!-- With menu-highlighter directive -->
                <ul class="nav navbar-nav nav-pills navBarPadding"
                    menu-highlighter highlight-class-name="active">
                    <li><a href="#/customers">Customers</a></li>
                    <li><a href="#/orders">Orders</a></li>
                    <li><a href="#/about">About</a></li>
                    <li id="nav-login" ng-click="vm.loginOrOut()">
                        <!-- href not used but needed to compare against path in menu-highlighter -->
                        <a data-href="#/login">{{ vm.loginLogoutText }}</a>
                    </li>
                </ul>

                <!-- Without menu-highlighter directive -->
                <!--<ul class="nav navbar-nav nav-pills navBarPadding">
                    <li ng-class="{'active': vm.highlight('/customers')}"><a href="#/customers">Customers</a></li>
                    <li ng-class="{'active': vm.highlight('/orders')}"><a href="#/orders">Orders</a></li>
                    <li ng-class="{'active': vm.highlight('/about')}"><a href="#/about">About</a></li>
                    <li ng-class="{'active': vm.highlight('/login')}" id="nav-login"
                        ng-click="vm.loginOrOut()">
                        <a>{{ vm.loginLogoutText }}</a>
                    </li>
                </ul>-->
            </div>
        </nav>
    </header>

    <div class="view">
    <div class="container">
        <header>
            <h3><span class="glyphicon glyphicon-edit"></span> Add Customer</h3>
        </header>
        <form name="editForm" novalidate>
            <div class="customerEdit">
                <div class="row">
                    <div class="col-md-12">
                        <h4><span>Nhap thong tin customer</span></h4>
                        <br />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        First Name:
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="firstName" class="form-control"  required />
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-2">
                        Last Name:
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="lastName" class="form-control" required />
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
                                <input type="radio" name="gender" value="Male"/>
                                Male
                            </label>
                        </div>
                        <div class="radio">
                            <label class="radio">
                                <input type="radio" name="gender" value="Female"/>
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
                        <input type="text" name="email" required />
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-2">
                        Address:
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="address" class="form-control" required />
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-2">
                        City:
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="city" class="form-control" required />
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-2">
                        State:
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="state" class="form-control" required />
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-2">
                        Zip:
                    </div>
                    <div class="col-md-10">
                        <input type="number" name="zip" class="form-control" required />
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary" >
                            Save
                        </button>
                        &nbsp;&nbsp;
                        <button class="btn btn-danger" data-ng-if="vm.customer.id > 0" data-ng-click="vm.deleteCustomer()"></button>
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

    <div wc-overlay wc-overlay-delay="300">
        <br /><img src="Content/images/spinner.gif" />&nbsp;&nbsp;Loading
    </div>

    <!-- 3rd party libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular-route.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular-animate.min.js"></script>
    <script src="Scripts/angular-ui-bootstrap.js"></script>
    <script src="Scripts/tweenMax.min.js"></script>
    
    <!-- To use breeze change the app/customersApp/services/config.js useBreeze property to true -->
    <script src="Scripts/breeze.min.js"></script>
    <script src="Scripts/breeze.angular.js"></script>

    <!-- Custom scripts -->
    <script src="app/wc.directives/directives/wcOverlay.js"></script>
    <script src="app/wc.directives/directives/menuHighlighter.js"></script>
    <script src="app/customersApp/app.js"></script>
    <script src="app/customersApp/animations/listAnimations.js"></script>
    <script src="app/customersApp/directives/wcUnique.js"></script>
    <script src="app/customersApp/filters/nameCityStateFilter.js"></script>
    <script src="app/customersApp/filters/nameProductFilter.js"></script>
    <script src="app/customersApp/services/config.js"></script>
    <script src="app/customersApp/services/authService.js"></script>
    <script src="app/customersApp/services/httpInterceptors.js"></script>
    <script src="app/customersApp/services/customersBreezeService.js"></script>
    <script src="app/customersApp/services/customersService.js"></script>
    <script src="app/customersApp/services/dataService.js"></script>
    <script src="app/customersApp/services/modalService.js"></script>
    <script src="app/customersApp/controllers/customers/customerEditController.js"></script>
    <script src="app/customersApp/controllers/customers/customerOrdersController.js"></script>
    <script src="app/customersApp/controllers/customers/customersController.js"></script>
    <script src="app/customersApp/controllers/orders/orderChildController.js"></script>
    <script src="app/customersApp/controllers/orders/ordersController.js"></script>
    <script src="app/customersApp/controllers/aboutController.js"></script>
    <script src="app/customersApp/controllers/navbarController.js"></script>
    <script src="app/customersApp/controllers/loginController.js"></script>

</body>
</html>