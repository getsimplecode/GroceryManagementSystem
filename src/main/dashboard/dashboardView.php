<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../res/Style/dashboardstyle.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* CSS Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 1200px; /* Maximum width for the container */
            margin: auto; /* Centering the container */
        }
        .dashboard {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); /* Responsive grid */
            gap: 20px; /* Spacing between boxes */
        }
        .box {
            border-radius: 8px;
            padding: 20px;
            color: white;
            text-align: center;
        }
        canvas {
            max-width: 100%; 
            height: 30vh;
            margin-top: 20px; 
        }
    </style>
</head>
<body>
<div class="container">
    <div class="dashboard">
        <div class="box" style="background-color: #8261DA">
            <div class="icon"><img src="../../res/images/sales.png" width="50" height="50"></div>
            <div class="amount">1,234</div>
            <div class="label">Total Sales</div>
        </div>
        <div class="box" style="background-color: #FF00FF">
            <div class="icon"><img src="../../res/images/productss.png" alt="Icon" width="50" height="50"></div>
            <div class="amount">567</div>
            <div class="label">Total Products</div>
        </div>
        <div class="box" style="background-color: #00FF7F">
            <div class="icon"><img src="../../res/images/revenue.png" alt="Icon" width="50" height="50"></div>
            <div class="amount">$12,345</div>
            <div class="label">Revenue</div>
        </div>
        <div class="box" style="background-color: #F0E68C">
            <div class="icon"><img src="../../res/images/webinventory.png" alt="Icon" width="50" height="50"></div>
            <div class="amount">123</div>
            <div class="label">Deliveries</div>
        </div>
        <div class="box" style="background-color: #FFA07A">
            <div class="icon"><img src="../../res/images/stocks.png" alt="Icon" width="50" height="50"></div>
            <div class="amount">456</div>
            <div class="label">Low Stocks</div>
        </div>
    </div>

    <h2>Monthly Sales Performance</h2>
    <canvas id="monthlySalesChart"></canvas>
</div>

<script>
    var ctx = document.getElementById('monthlySalesChart').getContext('2d');
    var monthlySalesChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            datasets: [{
                label: 'Monthly Sales (₱)',
                data: [12000, 15000, 18000, 22000, 25000, 20000, 23000, 21000, 19000, 24000, 27000, 30000],
                backgroundColor: 'rgba(42, 4, 255 ,0.5)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</body>
</html>
