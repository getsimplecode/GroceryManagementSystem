<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color:  #4483eb;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
        }
        h2 {
        text-align: center;
        margin-bottom: 20px;
        color: whitesmoke;
        font-weight: bold; /* Makes the text bold */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Adds a subtle shadow effect */
}
        .form-group {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: whitesmoke;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Adds a subtle shadow effect */
        }
        input[type="text"], input[type="number"], input[type="file"], textarea, select {
            width: 95%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }
        textarea {
            resize: vertical;
        }
        .form-group-half {
            flex: 0 0 48%; /* Make each input field take up about half of the row */
        }
        .form-group-full {
            flex: 0 0 100%; /* Full width for text area */
        }
        .form-group-action {
            text-align: center;
        }
        button {
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }
        .btn-update {
            background-color: #ff00ae;
            color: white;
        }
        .btn-cancel {
            background-color: crimson;
            color: white;
        }
        button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>UPDATE PRODUCT INFORMATION</h2>
    <form action="?update=<?php echo $id ?>" method="post" enctype="multipart/form-data">
        
        <div class="form-group">
            <div class="form-group-half">
                <label for="label">Label</label>
                <input type="text" id="label" name="label" placeholder="Enter product label" value="<?php echo $label ?>"  required>
            </div>
            <div class="form-group-half">
                <label for="price">Price</label>
                <input type="number" id="price" name="price" step="0.01" placeholder="Enter product price" value="<?php echo $price ?>"  required>
            </div>
        </div>

        <div class="form-group">
            <div class="form-group-half">
                <label for="category">Category</label>
                <select id="category" name="category" required>
                    <option value=""><?php echo $category ?> </option>
                    <option value="Dairy">Dairy</option>
                    <option value="Beverages">Beverages</option>
                    <option value="Bakery">Bakery</option>
                    <option value="Produce">Produce</option>
                </select>
            </div>
            <div class="form-group-half">
                <label for="brand">Brand</label>
                <input type="text" id="brand" name="brand" placeholder="Enter product brand" value="<?php echo $brand ?>" required>
            </div>
        </div>

        <div class="form-group">
            <div class="form-group-half">
                <label for="barcode">Barcode Image</label>
                <input type="file" id="barcode" name="barcode" accept="image/*"  >
            </div>
            <div class="form-group-half">
                <label for="um">Unit of Measurement (U.M)</label>
                <input type="text" id="um" name="um" placeholder="e.g., kg, liters, pieces" value="<?php echo $unitmeasurement ?>" required>
            </div>
        </div>

        <div class="form-group form-group-full">
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="3" placeholder="Enter product description"  required><?php echo $description ?></textarea>
        </div>

        <div class="form-group-action">
            <button type="submit" class="btn-update" name="update" >Update</button>
            <button type="button" class="btn-cancel" onclick="window.history.back();">Cancel</button>
        </div>

    </form>
</div>

</body>