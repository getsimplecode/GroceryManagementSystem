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

    public function ShowAllProducts(){
        $query = "SELECT * FROM Products LIMIT 0,9";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}

?>