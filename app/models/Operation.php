<?php 
	class operation {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function findMedName(){
            $this->db->query('SELECT * FROM medicine' );

            $results = $this->db->resultSet();

            return $results;
        }

        public function showOrders(){
            $this->db->query('SELECT 
            prepared_order. orderId, prepared_order. DateTime, prepared_order. price,customer. FirstName, customer. LastName
            FROM 
            customer
            INNER JOIN 
            prepared_order 
            ON
            customer. customerId=prepared_order. customerId' );

            $results = $this->db->resultSet();
            return $results;   
        }

        public function showNonOrders(){
            $this->db->query('SELECT 
            nonprepared_order. orderId, nonprepared_order. DateTime, nonprepared_order. image_path,customer. FirstName, customer. LastName
            FROM 
            customer
            INNER JOIN 
            nonprepared_order 
            ON
            customer. customerId=nonprepared_order. customerId' );

            $results = $this->db->resultSet();
            return $results;   
        }
        // public function pending_process($orderId){
        //     $this->db->query("DELETE FROM nonprepared_order WHERE orderId = :orderId");
        //     $this->db->bind(':orderId', $orderId);
            
        //     if ($this->db->execute()){
        //     return true;
        //      }
        //     else{
        //     return false;
        //     }

        // }
        public function find_order($orderId){
            $this->db->query("SELECT * FROM prepared_order WHERE orderId = :orderId LIMIT 1");
            $this->db->bind(':orderId', $orderId);

            $results = $this->db->resultSet();
            return $results;

        }
        public function update_order($updateOrder){
             $this->db->query('INSERT INTO completed_orders (orderId, currentLocation, DateTime, customerId, image_path, price) VALUES (NULL, :currentLocation, current_timestamp(), :customerId, :image_path, :price)');

             $this->db->bind(':currentLocation', $updateOrder['currentLocation']);
             $this->db->bind(':customerId', $updateOrder['customerId']);
             $this->db->bind(':image_path', $updateOrder['image_path']);
             $this->db->bind(':price', $updateOrder['price']);
             if ($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }
        public function process_delete($orderId){
            $this->db->query("DELETE FROM prepared_order WHERE orderId = :orderId");
            $this->db->bind(':orderId', $orderId);
            
            if ($this->db->execute()){
            return true;
             }
            else{
            return false;
            }

        }

        public function findconOrders(){
             $this->db->query('SELECT 
            completed_orders. orderId, completed_orders. DateTime, completed_orders. price,customer. FirstName, customer. LastName
            FROM 
            customer
            INNER JOIN 
            completed_orders 
            ON
            customer. customerId=completed_orders. customerId' );

            $results = $this->db->resultSet();
            return $results;   
        }

        
        public function fetchData($orderId){
            $this->db->query("SELECT customer.PhoneNum, nonprepared_order.customerId, customer.FirstName, customer.LastName, nonprepared_order.currentLocation, nonprepared_order.image_path 
            FROM nonprepared_order 
            INNER JOIN 
            customer 
            ON
            customer. customerId=nonprepared_order. customerId
            WHERE orderId = :orderId LIMIT 1");
            $this->db->bind(':orderId', $orderId);

            $results = $this->db->resultSet();
            return $results;

            
        }
        

        public function medicineData($medName){
            $this->db->query("SELECT * FROM medicine where name = '$medName' LIMIT 1" );
            $medData = $this->db->resultSet();
            return $medData;           
        }
    }
 ?>