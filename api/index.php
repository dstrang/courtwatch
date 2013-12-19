<?php

session_start();
require 'Slim/Slim.php';
require 'blowfish.class.php';
\Slim\Slim::registerAutoLoader();

$app = new \Slim\Slim();

$app->post('/login', 'login');
$app->post('/addNewVolunteer', 'addNewVolunteer');
$app->post('/updatePassword', 'updatePassword');
$app->post('/updateProfile', 'updateProfile');
$app->post('/promoteVolunteer', 'promoteVolunteer');
$app->post('/insertNewForm', 'insertNewForm');
$app->get('/loggedIn', 'loggedIn');
$app->get('/getVolunteers', 'getVolunteers');
$app->get('/getProfile', 'getProfile');
$app->get('/logout', 'logout');
$app->get('/getGenderBreakdown', 'getGenderBreakdown');

$app->run();

function logout(){
	session_destroy();
	echo json_encode("logged out");
}

function getGenderBreakdown(){
	$sql = "SELECT count(*) AS male FROM form_data WHERE judgeGender = 'male'";
	$sql2 = "SELECT count(*) AS female FROM form_data WHERE judgeGender = 'female'";

	$pdo = new PDO("mysql:host=localhost;dbname=court_watch", "root", "root");
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	$male = $row['male'];

	$stmt = $pdo->prepare($sql2);
	$stmt->execute();
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	$female = $row['female'];

	$data = array('male' => $male, 'female' => $female);
	echo json_encode($data);
}

function updateProfile(){

	$sql = "UPDATE users SET email = :email, phone = :phone, name = :name WHERE username = '".$_SESSION['user']['userID']."'";
	try{
		$pdo = new PDO("mysql:host=localhost;dbname=court_watch", "root", "root");
		$stmt = $pdo->prepare($sql);
		$stmt->bindParam(":email", $_POST['email'], PDO::PARAM_STR);
		$stmt->bindParam(":phone", $_POST['phone'], PDO::PARAM_STR);
		$stmt->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
		$stmt->execute();
		$data = "SUCCESS";
		echo json_encode($data);
		
	}catch(PDOExecption $e){
		$error = array("error"=> array("text"=>$e->getMessage()));
        echo json_encode($error);
	}
}

function promoteVolunteer(){
	$sql = "SELECT role FROM users WHERE username = :username";
	
	try{
		$pdo = new PDO("mysql:host=localhost;dbname=court_watch", "root", "root");

		$stmt = $pdo->prepare($sql);
		$stmt->bindParam(":username", $_POST['username'], PDO::PARAM_STR);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$role = $row['role'];

		if($role == 'admin'){
			$sql = "UPDATE users SET role = 'volunteer' WHERE username = :username";
		}else{
			$sql = "UPDATE users SET role = 'admin' WHERE username = :username";
		}

		$stmt = $pdo->prepare($sql);
		$stmt->bindParam(":username", $_POST['username'], PDO::PARAM_STR);
		$stmt->execute();
		$data = "SUCCESS";
		echo json_encode($data);
		
	}catch(PDOExecption $e){
		$error = array("error"=> array("text"=>$e->getMessage()));
        echo json_encode($error);
	}
}

function insertNewForm(){
	$keys = implode(",",array_keys($_POST));
    $values = "'".implode("','",array_values($_POST))."'";
    $sql = "INSERT INTO form_data (".$keys.") VALUES (".$values.")";
    $pdo = new PDO("mysql:host=localhost;dbname=court_watch", "root", "root");
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    if($stmt){
        $error = array("error"=> array("text"=>"Form was successfully inserted."));
        echo json_encode($error);
    }else{
        $error = array("error"=> array("text"=>"Error inserting into database."));
        echo json_encode($error);
    }
}

function login(){
	if(!empty($_POST['username']) && !empty($_POST['password'])){
		$sql = "SELECT * FROM users WHERE username = :username";
		try{
			$pdo = new PDO("mysql:host=localhost;dbname=court_watch", "root", "root");
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(":username", $_POST['username'], PDO::PARAM_STR);
			$stmt->execute();
			if($stmt->rowCount() == 1){
				$row = $stmt->fetch(PDO::FETCH_ASSOC);
				$bcrypt = new Bcrypt(4);
				if($bcrypt->verify($_POST['password'], $row['password'])){
					$data = array('userID' => $row['username'], 'role' => $row['role'], 'phone' => $row['phone'], 'email' => $row['email']);
					$_SESSION['user'] = $data;
					echo json_encode($data);
				}else{
					$error = array("error"=> array("text"=>"User ID or password is incorrect."));
            		echo json_encode($error);
				}
			}else{
				$error = array("error"=> array("text"=>"User ID or password is incorrect."));
            	echo json_encode($error);
			}
		}catch(PDOExecption $e){
			$error = array("error"=> array("text"=>$e->getMessage()));
            echo json_encode($error);
		}
	}else{
		$error = array("error" => array("text" => "ID and Password are required."));
		echo json_encode($error);
	}
}



function addNewVolunteer(){
	if(!empty($_POST['username'])){
		$sql = "SELECT 1 FROM users WHERE username = :username";
		try{
			$pdo = new PDO("mysql:host=localhost;dbname=court_watch", "root", "root");
			$stmt = $pdo->prepare($sql);
			$stmt->bindParam(":username", $_POST['username'], PDO::PARAM_STR);
			$stmt->execute();
			if($stmt->rowCount() > 0){
				$error = array("error"=> array("text"=>"Volunteer ID already exists."));
	            echo json_encode($error);
			}else{
				$sql = "INSERT INTO users VALUES('', :username, '$2a$04$0R15h3jgjxXztf/fvU/5mOZfH75mf0GXzofDXVShKFIKzPAdMf4qS', 'volunteer', '', '', '')";
				$stmt = $pdo->prepare($sql);
				$stmt->bindParam(":username", $_POST['username'], PDO::PARAM_STR);
				$stmt->execute();
				$data = array("username"=>$_POST['username'], "phone"=>"", "email"=>"", "role"=>"volunteer");
				echo json_encode($data);
			}
		}catch(PDOExecption $e){
			$error = array("error"=> array("text"=>$e->getMessage()));
	        echo json_encode($error);
		}
	}else{
		$error = array("error"=> array("text"=>"You must provide a volunteer ID"));
		echo json_encode($error);
	}
}

function updatePassword(){
	if(!empty($_POST['currentPassword']) && !empty($_POST['newPassword']) && !empty($_POST['newPasswordConfirm'])){
		$sql = "SELECT password FROM users WHERE role = 'volunteer' LIMIT 1";
		try{
			$pdo = new PDO("mysql:host=localhost;dbname=court_watch", "root", "root");
			$stmt = $pdo->prepare($sql);
			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			$bcrypt = new Bcrypt(4);
			if($bcrypt->verify($_POST['currentPassword'], $row['password'])){
				if($_POST['newPassword'] == $_POST['newPasswordConfirm']){
					$bcrypt = new Bcrypt(4);
					$hash = $bcrypt->hash($_POST['newPassword']);
					$sql = "UPDATE users SET password = '$hash' WHERE role = 'volunteer'";
					$stmt = $pdo->prepare($sql);
					$stmt->execute();
					if($stmt->rowCount() > 0){
						$error = array("error"=> array("text"=>"Password was successfully updated."));
	        			echo json_encode($error);
					}else{
						$error = array("error"=> array("text"=>"Error with database."));
	        			echo json_encode($error);
					}
				}else{
					$error = array("error"=> array("text"=>"New password does not match."));
	       			echo json_encode($error);
				}
			}else{
				$error = array("error"=> array("text"=>"Current password is incorrect."));
	        	echo json_encode($error);
			}			
		}catch(PDOExecption $e){
			$error = array("error"=> array("text"=>$e->getMessage()));
	        echo json_encode($error);
		}
	}else{
		$error = array("error"=> array("text"=>"All fields are required."));
		echo json_encode($error);
	}
}

function loggedIn(){
	if(isset($_SESSION['user'])){
		$data = array("username"=>$_SESSION['user']['userID'], "role"=>$_SESSION['user']['role'], "phone"=>$_SESSION['user']['phone'], "email"=>$_SESSION['user']['email']);
		echo json_encode($data);
	}else{
		echo json_encode(false);
	}
}

function getVolunteers(){
	$sql = "SELECT username, role, email, phone, name FROM users WHERE username != '".$_SESSION['user']['userID']."' AND username != 'admin'";
	try{
		$pdo = new PDO("mysql:host=localhost;dbname=court_watch", "root", "root");
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		if($stmt->rowCount() >= 1){
			$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}else{
			$data = array("error"=> array("text"=>"no volunteers"));
		}
		echo json_encode($data);		
	}catch(PDOExecption $e){
		$error = array("error"=> array("text"=>$e->getMessage()));
        echo json_encode($error);
	}
}

function getProfile(){
	$sql = "SELECT username, role, email, phone, name FROM users WHERE username = '".$_SESSION['user']['userID']."'";
	try{
		$pdo = new PDO("mysql:host=localhost;dbname=court_watch", "root", "root");
		$stmt = $pdo->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetch(PDO::FETCH_ASSOC);
		echo json_encode($data);		
	}catch(PDOExecption $e){
		$error = array("error"=> array("text"=>$e->getMessage()));
        echo json_encode($error);
	}
}

?>