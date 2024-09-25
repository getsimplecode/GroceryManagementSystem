<title>Dashboard</title>
    <style>
        .dashboard {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
        }
        .box {
            flex: 1 1 calc(33.333% - 40px);
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
        }
        .box .icon {
            font-size: 50px;
            margin-bottom: 10px;
        }
        .box .amount {
            font-size: 24px;
            font-weight: bold;
        }
        .box .label {
            font-size: 16px;
            color: whitesmoke;
            text-shadow: #dee2e6;
        }
        @media (max-width: 768px) {
            .box {
                flex: 1 1 calc(50% - 40px);
            }
        }
        @media (max-width: 576px) {
            .box {
                flex: 1 1 100%;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="dashboard">
        <div class="box" style="background-color: #8261DA">
            <div class="icon"><img src="../../res/images/sales.png" width="50" height="50"></div>
            <div class="amount">1,234</div>
            <div class="label">Sales</div>
        </div>
        <div class="box" style="background-color: #FF00FF">
            <div class="icon"><img src="../../res/images/productss.png" alt="Icon" width="50" height="50"></div>
            <div class="amount">567</div>
            <div class="label">Products</div>
        </div>
        <div class="box" style="background-color: #00FF7F">
            <div class="icon"><img src="../../res/images/revenue.png" alt="Icon" width="50" height="50"></div>
            <div class="amount">$12,345</div>
            <div class="label">Revenue</div>
        </div>
        <div class="box" style="background-color: #40E0D0">
            <div class="icon"><img src="../../res/images/reports.png" alt="Icon" width="50" height="50"></div>
            <div class="amount">789</div>
            <div class="label">FeedBacks</div>
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
</div>

</body>
</html>