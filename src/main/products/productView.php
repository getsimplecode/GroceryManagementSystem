<link rel="stylesheet" href="../../res/Style/productdesign.css">

<div class="mainboard">
    <nav class="topnav">
      <div class="Addbtn">
          <button onclick="location.href='?add' "><i class="fas fa-plus"></i> Product</button>
            <div class="search-container">
              <input type="text" placeholder="Search...">
              <button type="submit"><i class="fa fa-search"></i></button>
            </div>
      </div>
    </nav>
    <div class="table">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Label</th>
                <th>Price</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Barcode Image</th>
                <th>U.M</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach($product->ShowAllProducts() as $row){ ?>
            <tr>
                <td><?php echo $row['productid'] ?></td>
                <td><?php echo $row['label'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><?php echo $row['category'] ?></td>
                <td><?php echo $row['brand'] ?></td>
                <td><?php echo $row['barcodeimage'] ?></td>
                <td><?php echo $row['unitmeasurement'] ?></td>
                <td><?php echo $row['description'] ?></td>
                <td>
                <button id="editbtn" onclick="location.href='?edit=<?php echo $row['productid'] ?>' "><i class="fas fa-edit"></i></button>
                <button id="deletebtn"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
</div>
<div class="buttonsprevnext">
  <button id="next"><i class="fas fa-arrow-left"></i></button>
  <button id="prev"><i class="fas fa-arrow-right"></i></button>
</div>

