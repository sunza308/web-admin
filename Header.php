<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Material Design for Bootstrap fonts and icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

    <!-- Material Design for Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <title>Admin</title>
</head>

<body>
    <div class="bmd-layout-container bmd-drawer-f-l">
        <header class="bmd-layout-header"  style="background-color:#009688">
            <div class="navbar navbar-light bg-faded">
                <button class="navbar-toggler" type="button" data-toggle="drawer" data-target="#dw-s1"  style="background-color:#dcdcdc"   >
                    <span class="sr-only">Toggle drawer</span>
                    <i class="material-icons">menu</i>
                </button>
                <ul class="nav navbar-nav">

                </ul>
            </div>
        </header>
        <div id="dw-s1" class="bmd-layout-drawer bg-faded" style="background-color:#e9ecef">
            <header style="background-color:#009688">
                <a class="navbar-brand" href="Customer.php" style="color:#FFF" >Administration</a>
            </header>
            <ul class="list-group">
                <a class="list-group-item" href="./Customer.php">
                   <img src="img/customer.png" width="30" height="30">Customer</a>
                <a class="list-group-item" href="./Store.php" >
                <img src="img/farmer.png" width="30" height="30">Store</a>
            </ul>
            <div style="text-align: center; margin-bottom:20px ">
            <a 
                style=" 
                width: 250px;
                height: 40px;
                background-color: #f44336;
                border-radius: 5px;
                color: white;
                padding:8px;
                font-weight: bold;
                text-decoration: none;"
                
                href="Login.php">log out
              </a>
            </div>
          
           
        </div>
        <main class="bmd-layout-content">
        <script>
        function logout() {
            var del = document.createElement('a')
            del.href = "Login.php" 
            del.onclick
           // window.alert('log in')         
        }
    </script>