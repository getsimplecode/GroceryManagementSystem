<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        body {
            display: flex;
            background-color: #2C3E50;
            font-family: 'Arial', sans-serif;
        }
        .sidenav {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #2C1894;

            overflow-x: hidden;
            padding-top: 20px;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
            transition: 0.3s;
        }
        .sidenav a {
            padding: 25px 50px;
            text-decoration: none;
            font-size: 18px;
            color: whitesmoke;
            display: flex;
            align-items: center;
            transition: 0.3s;
        }
        .sidenav a:hover {
            background-color: #34495e;
            color: #f1f1f1;
        }
        .sidenav a i {
            margin-right: 10px;
            font-size: 18px;
        }
        .main {
            margin-left: 250px; /* Same as the width of the sidenav */
            padding: 20px;
            transition: margin-left 0.6s;
            width: 100%;
        }
        .menu-icon {
            font-size: 20px;
            cursor: pointer;
            position: fixed;
            top: 5px;
            left: 10px;
            z-index: 2;
            color: #2C3E50;
        }
        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 16px;}
        }
        .logo{
            text-align: center;
            margin: auto;
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>



<div class="sidenav" id="mySidenav">
<div class="menu-icon" onclick="toggleNav()"><img src="../../res/images/menus.png" width="20px" height="20px"></div>
  <div class="logo"><img src="../../res/images/loh.png" alt="" width="150px" height="150px"></div>
  <a href="?page=dashboard"><i class="fas fa-home"></i>Dashboard</a>
  <a href="?page=inventory"><i class="fas fa-box"></i> Product</a>
  <a href="?page=reports"><i class="fas fa-chart-line"></i> Reports</a>
  <a href="?page=supplier"><i class="fas fa-truck"></i> Supplier</a>
  <a href="?page=transaction"><i class="fas fa-exchange-alt"></i> Transaction</a>
</div>

<div class="main" id="mainContent">
  <?php 
  include_once '../Controllers/layoutController.php';
   $controls->SelectView(); ?>
</div>

<script>
    function toggleNav() {
        var sidenav = document.getElementById("mySidenav");
        var mainContent = document.getElementById("mainContent");
        if (sidenav.style.width === "0px" || sidenav.style.width === "") {
            sidenav.style.width = "250px";
            mainContent.style.marginLeft = "250px";
        } else {
            sidenav.style.width = "0";
            mainContent.style.marginLeft = "0";
        }
    }
</script>

</body>
</html>
