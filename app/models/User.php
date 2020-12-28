<?php 
	class User{
		private $db;
		public function __construct(){
			$this->db = new Database;
		}

		public function registerm($data){
			$this->db->query('INSERT INTO pharmacist (username, FirstName, LastName, NIC,DOB, email, phoneNumber, password, fromDate, toDate, licenseNo) VALUES(:username, :FirstName, :LastName, :NIC, :DOB, :email, :phoneNumber, :password, :fromDate, :toDate, :licenseNo)');

			$this->db->bind(':username', $data['username']);
			$this->db->bind(':FirstName', $data['FirstName']);
			$this->db->bind(':LastName', $data['LastName']);
			$this->db->bind(':NIC', $data['NIC']);
			$this->db->bind(':DOB', $data['DOB']);
			$this->db->bind(':email', $data['email']);
			$this->db->bind(':phoneNumber', $data['phoneNumber']);
			$this->db->bind(':password', $data['password']);
			$this->db->bind(':fromDate', $data['fromDate']);
			$this->db->bind(':toDate', $data['toDate']);
			$this->db->bind(':licenseNo', $data['licenseNo']);

			if($this->db->execute()){
				return true;
			}
			else{
				return false;
			}

		}


		public function login($username, $password){
			$this->db->query('SELECT * FROM pharmacist WHERE username = :username');

			$this->db->bind(':username', $username);

			$row = $this->db->single();
			$hashedPassword = $row->password;
			if(password_verify($password, $hashedPassword)){
				return $row;
			}
			else{
				return false;
			}

		}

		public function findUserByEmail($email){
			$this->db->query('SELECT * FROM pharmacist WHERE email = :email');

			$this->db->bind(':email',$email);

			if($this->db->rowCount() > 0){
				return true;
			}
			else{
				return false;
			}
		}
	}

 ?>