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
        <header class="bmd-layout-header">
            <div class="navbar navbar-light bg-faded">
                <button class="navbar-toggler" type="button" data-toggle="drawer" data-target="#dw-s1">
                    <span class="sr-only">Toggle drawer</span>
                    <i class="material-icons">menu</i>
                </button>
                <ul class="nav navbar-nav">

                </ul>
            </div>
        </header>
        <div id="dw-s1" class="bmd-layout-drawer bg-faded" style="background-color:#38d13880">
            <header>
                <a class="navbar-brand">Administration</a>
            </header>
            <ul class="list-group">
            <a href="./index3.php">Customer</a>
                <a class="list-group-item" href="./index2.php">
                <i><img src="img/farmer.png" width="30" height="30"></i><span>Store</span></a>
            </ul>

            
            <button class="btn-danger" style="cursor:pointer;margin:10px"  >logout</button>
     
        </div>
        <main class="bmd-layout-content">
      
        <?php  include './Customer.php'?>
        </main>
    </div>
    
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('body').bootstrapMaterialDesign();
        });
    </script>
</body>

</html>