<?php 
	class Users extends Controller{
		public function __construct(){
			$this->userModel = $this->model('User');
		}

		public function login(){
			$data = [
				//'title' =>'Login Page',
				'username'=>'',
				'password'=>'',
				'usernameError'=>'',
				'passwordError'=>''
			];

			if($_SERVER['REQUEST_METHOD']=='POST'){
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				$data = [
				'username'=>trim($_POST['username']),
				'password'=>trim($_POST['password']),
				'usernameError'=>'',
				'passwordError'=>''
				];

				if(empty($data['username'])){
						$data['usernameError'] = 'Please enter the username.';
				}
				if(empty($data['password'])){
						$data['passwordError'] = 'Please enter the password.';
				}
				if(empty($data['usernameError']) && empty($data['passwordError'])){
					$loggedInUser = $this->userModel->login($data['username'], $data['password']);
					if($loggedInUser) {
						$this->createUserSession($loggedInUser);
						//$this->view('login', $data);
					}
					else{
						$data['passwordError'] = 'Password or username is incorrect. Please try again.';
						$this->view('login', $loggedInUser);
					}
				}

			}
			else{
				$data = [
				'title' =>'Login Page',
				'username'=>'',
				'password'=>'',
				'usernameError'=>'',
				'passwordError'=>''
			];
			}

			$this->view('Login', $data);
		}


	

		public function createUserSession($user) {
	        $_SESSION['username'] = $user->username;
	        $_SESSION['email'] = $user->email;
        	header('location:' . URLROOT . '/view_drug/show_orders');
    	}
    


		public function register(){
			$data = [
				'username'=>'',
				'FirstName'=>'',
				'LastName'=>'',
				'NIC'=>'',
				'DOB'=>'',
				'email'=>'',
				'phoneNumber'=>'',
				'password'=>'',
				'fromDate'=>'',
				'toDate'=>'',
				'usernameError'=>'',
				'emailError'=>'',
				'passwordError'=>'',
				'licenseNo'=> ''
			];

			if($_SERVER['REQUEST_METHOD']=='POST'){
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
				$data = [
				'username'=>trim($_POST['username']),
				'FirstName'=>trim($_POST['FirstName']),
				'LastName'=>trim($_POST['LastName']),
				'NIC'=>trim($_POST['NIC']),
				'DOB'=>trim($_POST['DOB']),
				'email'=>trim($_POST['email']),
				'phoneNumber'=>trim($_POST['phoneNumber']),
				'password'=>trim($_POST['password']),
				'fromDate'=>trim($_POST['fromDate']),
				'toDate'=>trim($_POST['toDate']),
				'licenseNo'=>trim($_POST['licenseNo']),
				'usernameError'=>'',
				'emailError'=>'',
				'passwordError'=>''
			];

				$nameValidation = "/^[a-zA-Z0-9]*$/";
				$passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";
				

				if(empty($data['username'])){
					$data['usernameError'] = 'Please enter username.';
				}
				elseif(!preg_match($nameValidation, $data['username'])){
					$daata['usernameError'] = 'Name can only contain letters and numbers.';
				}

				if(empty($data['email'])){
					$data['emailError'] = 'please enter email.';
				}
				elseif(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
					$data['emailError'] = 'Please enter the correct format.';
				}
				else{
					if($this->userModel->findUserByEmail($data['email'])){
						$data['emailError'] = 'Email is already taken.';
					}
				}

				if(empty($data['password'])){
					$data['passwordError'] = 'Please enter the password.';
				}
				elseif(strlen($data['password'])<8){
					$data['passwordError'] = 'Password must be at least 8 characters';
				}
				elseif(preg_match($passwordValidation, $data['password'])){
					$data['passwordError'] = 'Password must have at least one numeric value';
				}
				
				if(empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError'])){
					$data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);

					if($this->userModel->registerm($data)){
						header('location: ' . URLROOT . '/users/login');
					}
					else{
						die('Something went wrong'); 
					}
				}

			}


			$this->view('registration', $data);
		}
		public function btn_logout(){

		if($_SERVER['REQUEST_METHOD']=='POST'){
			$_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);		
    		if(isset($_POST['logout'])){
    			$this->logout();
    		}
    	}
	}
		
   		public function logout() {
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        header('location:' . URLROOT . '/users/login');
    }

	}

 ?>