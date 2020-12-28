<?php 
	class View_drug extends Controller {
    public function __construct() {
		$this->postModel = $this->model('Operation');
	}



    public function show_medicine(){
    	$medicine = $this->postModel->findMedName();
    		// $data2 = [
    		// 'orderData' => ""
			// ];
		$name = ''; 
		$orderData="null";
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);		
    		if(isset($_POST['add'])){
    			$name = $_POST['medi_name'];
			}
			
			if(isset($_POST['process'])){
				$orderId = $_POST['orderId'];
				$orderData = $this->postModel->fetchData($orderId);
					//$this->postModel->pending_process($orderId);
					$data = [
						$data1 = [
							'medicine' => $medicine
						],
						$data2 = [
							'orderData' => $orderData 
						]
					];
	
			}
			else{
				$data = [
	    			$data1 = [
	    				'medicine' => $medicine
	    			],
	    			$data2 = [
						'orderData' => $orderData 
					]
	    		];
			}
		}

				

		$this->view('make_order', $data);
	}


	public function show_confirm_orders(){
    	$orders = $this->postModel->findconOrders();
    		

				$data = [
	    				'orders' => $orders
	    		];

		$this->view('confirmed_orders', $data);
	}

    
    

    public function show_orders(){
    	
		    	$nonOrders = $this->postModel->showNonOrders();
		    	$orders = $this->postModel->showOrders();

		    	if($_SERVER['REQUEST_METHOD']=='POST'){

    				$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
    				
    				$updateOrder = [
    					 'orderId'=>'',
			   			 'currentLocation'=>'',
			   			 'DateTime'=>'',
			   			 'customerId'=>'',
			   			 'image_path'=>'',
			   			 'price'=>''
			   			 
   					];

    				if(isset($_POST['done'])){

    					$orderId = $_POST['orderId'];
    					$order_data = $this->postModel->find_order($orderId);
    					$data3 = [
				    		'order_data' => $order_data
				    	];
				    	foreach($data3['order_data'] as $order_data){
				    		$updateOrder = [
					   			 'currentLocation'=>trim($order_data->currentLocation),
					   			 'customerId'=>trim($order_data->customerId),
					   			 'image_path'=>trim($order_data->image_path),
					   			 'price'=>trim($order_data->price)
			   			 
   					];
				    	}

    					$this->postModel->update_order($updateOrder);
    					$this->postModel->process_delete($orderId);
    				}

    				if(isset($_POST['done'])){
    					$orderId = $_POST['orderId'];
    					$this->postModel->process_delete($orderId);	
    				}
    			}

		    		
		    					$data = [
						    			$data1 = [
						    				'nonOrders' => $nonOrders
						    			],

						    			$data2 = [
						    				'orders' => $orders
						    			]
		    					];
		    				$this->view('view_order', $data);
		    			
    }

    
    public function deleteOrder(){
    	    		

     }

    

    
   }
 ?>

