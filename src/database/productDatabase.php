<?php 
include_once 'connection.php';

class ProductsDatabase extends Connection{

    public $minimum = 0;
    public $maximum = 9;

    public function CreateProduct($label,$price,$category,$brand,$unitmeasurement,$description){
        $query = "INSERT INTO products(label,price,category,brand,unitmeasurement,description)
                  VALUES(:label,:price,:category,:brand,:unitmeasurement,:description)";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute(
                        [
                        'label'     => $label,
                        'price'     => $price,
                        'category'  => $category,
                        'brand'     => $brand,

                        'unitmeasurement' => $unitmeasurement,
                        'description'     => $description
                        ]
                     );
    
    }

    public function UpdateProduct($id,$label,$price,$category,$brand,$unitmeasurement,$description){
        $query = "UPDATE Products set 
                label    = :label,
                price    = :price,
                category = :category,
                brand    = :brand,
                unitmeasurement = :unitmeasurement,
                description     = :description
                WHERE productid = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(
            [
                'id'       => $id,
                'label'    => $label,
                'price'    => $price,
                'category' => $category,
                'brand'    => $brand,
                'unitmeasurement' => $unitmeasurement,
                'description'     => $description
            ]
        );
    }

    public function ShowAllProducts(){
        $query = "SELECT * FROM Products ORDER BY productid DESC LIMIT $this->minimum,$this->maximum";
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

    public function Destroy($id){
        $query = "DELETE FROM products WHERE productid = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(
            [
                'id' => $id
            ]
        );
    }

    public function CountAllProducts(){
        $query = "SELECT COUNT(*) AS totalproducts FROM products";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return ceil($result['totalproducts'] / $this->maximum - 1);
    }

}

?>