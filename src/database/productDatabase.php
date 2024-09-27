<?php 
include_once 'connection.php';

class ProductsDatabase extends Connection{

    public function CreateProduct($label,$price,$category,$brand,$barcodeimage,$unitmeasurement,$description){
        $query = "INSERT INTO Products(label,price,category,brand,barcodeimage,unitmeasurement,description)
                  VALUES(:label,:price,:category,:brand,:barcodeimage,:unitmeasurement,:description)";
        $stmt = $this->pdo->prepare($query);
        try{
            $stmt->execute(
                            [
                                'label' => $label,
                                'price' => $price,
                                'category' => $category,
                                'brand' => $brand,
                                'barcodeimage' => $barcodeimage,
                                'unitmeasurement' => $unitmeasurement,
                                'description' => $description
                            ]
                          );
    
        }catch(Exception $e){
            error_log("Error: " . $e->getMessage());
            return false;
        }
    }

    public function UpdateProduct($id,$label,$price,$category,$brand,$barcodeimage,$unitmeasurement,$description){
        $query = "UPDATE Products set label = :label, price = :price, category = :category, brand = :brand,
                 barcodeimage = :barcodeimage, unitmeasurement = :unitmeasurement, description = :description
                 WHERE productid = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(
            [
                'id' => $id,
                'label' => $label,
                'price' => $price,
                'category' => $category,
                'brand' => $brand,
                'barcodeimage' => $barcodeimage,
                'unitmeasurement' => $unitmeasurement,
                'description' => $description
            ]
        );
    }

    public function ShowAllProducts(){
        $query = "SELECT * FROM Products LIMIT 0,9";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function Select($id){
        $query = "SELECT * FROM products where productid = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(
            [
                'id' => $id
            ]
        );

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}

?>