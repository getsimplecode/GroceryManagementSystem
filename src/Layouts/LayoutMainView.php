<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../res/Style/layoutstyle.css">
    <title>JennieStore</title>
</head>
<body>
<div class="sidenav" id="mySidenav">
    <div class="menu-icon" onclick="toggleNav()"><img src="../../res/images/menus.png" width="20px" height="20px"></div>
        <div class="logo"><img src="../../res/images/loh.png" alt="" width="150px" height="150px"></div>
            <a href="../Controllers/dashboardController.php?page=dashboard"><i class="fas fa-home"></i>Dashboard</a>
            <a href="../Controllers/ProductController.php?page=inventory"><i class="fas fa-box"></i> Product</a>
            <a href="../Controllers/reportsController.php?page=reports"><i class="fas fa-chart-line"></i> Reports</a>
            <a href="../Controllers/supplierController.php?page=supplier"><i class="fas fa-truck"></i> Supplier</a>
            <a href="../Controllers/transactionController.php?page=transaction"><i class="fas fa-exchange-alt"></i> Transaction</a>
</div>
    <div class="main" id="mainContent">
        <?php
           if(isset($_GET['page'])){
            require_once '../Controllers/layoutController.php';
            $laycontrols = new LayoutController();
            $laycontrols->SelectView();
           }
           if(isset($_GET['edit'])){
            require_once '../Controllers/ProductController.php';
            $productControls = new ProductController();
            $productControls->ReturnView();
           }
        ?>
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
