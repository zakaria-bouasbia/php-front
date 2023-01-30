<?php
namespace App\Classes;

class Users{
    public function __construct(){
		
	}
    public function insert($pdo = null, $data){
        
    }
    public function getAll($pdo = null){
		$sql = "SELECT * from users";
		$result = $pdo->prepare($sql); 
		$result->execute();  
		return $result; 
    }
    public function getOne($pdo = null,$id){
		$sql = "select * from users where id = $id limit 1";
		$result = $pdo->prepare($sql); 
		$result->execute(); 
		return $result; 
    }
    public function edit($pdo = null, $data){
        
    }
    public function delete($pdo = null, $id){
        $sql = "DELETE from users where id = $id";
		$result = $pdo->prepare($sql); 
		$result->execute(); 
		return $result; 
    }
}
?>
