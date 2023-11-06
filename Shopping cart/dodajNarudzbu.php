<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_SESSION['cart']) && isset($_SESSION['userid'])){
        include "db.php";
        $userId = (int)$_SESSION['userid'];
        $data = json_decode(file_get_contents('php://input'), true);
        $stmt = $conn->prepare("INSERT INTO narudzba (userId) VALUES (?)");
        $stmt->bind_param("i", $userId);           
        if($stmt->execute()){ 
            echo "success";
            
            $sqlGetlastId = "SELECT id FROM narudzba ORDER BY id DESC LIMIT 1";
            $result = $conn->query($sqlGetlastId);
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                $narudzbaId = $row['id'];
                foreach ($_SESSION['cart'] as $item) {
                    if (isset($item['product_id'])) {
                        $product_id = $item['product_id'];
                        $stmt = $conn->prepare("INSERT INTO narudzbaproduct (narudzbaId, productId) VALUES (?,?)");
                        $stmt->bind_param("ii", $narudzbaId, $product_id);           
                        if($stmt->execute()){ 
                            
                        }else{ 
                            echo "Došlo je do pogreške prilikom spremanja narudzbaproduct: " . $i; 
                        } 
                        $stmt->close(); 
                    
                    }
                }
            }
            unset($_SESSION['cart']);
            
        }else{ 
            echo "Došlo je do pogreške prilikom spremanja narudzbe"; 
        } 
        
        
    }
} 