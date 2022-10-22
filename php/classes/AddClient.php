<?php 
require_once 'connection.php';

class AddClient {
    private $id;
    private $lname;
    private $fname;
    private $mi;
    private $coname;
    private $address;
    private $long;
    private $lat;

    private function getClientData(){
        $this->lname = $_POST["fName"];
        $this->fname = $_POST["lName"];
        $this->mi = $_POST["mi"];
        $this->coname = $_POST["coName"];
        $this->address = $_POST["address"];
        $this->long = $_POST["coordLong"];
        $this->lat = $_POST["coordLat"];
    }

    public function addClient(){
		if((isset($_POST["lName"]))&&(isset($_POST["fName"]))&&(isset($_POST["mi"])) &&(isset($_POST["coordLong"])) &&(isset($_POST["coordLat"]))){
			$this->getClientData();
			$passStmt = (new Connection)->connect()->prepare("INSERT INTO client(lname, fname, mi, coname, address, coordLong, coordLat) VALUES (:lname, :fname, :mi, :coname, :address, :coordLong, :coordLat)");

			$passStmt->bindParam(":lname", $this->lname, PDO::PARAM_STR);
			$passStmt->bindParam(":fname", $this->fname, PDO::PARAM_STR);
			$passStmt->bindParam(":mi", $this->mi, PDO::PARAM_STR);
			$passStmt->bindParam(":coname", $this->coname, PDO::PARAM_STR);
			$passStmt->bindParam(":address", $this->address, PDO::PARAM_STR);
            $passStmt->bindParam(":coordLong", $this->long, PDO::PARAM_STR);
			$passStmt->bindParam(":coordLat", $this->lat, PDO::PARAM_STR);

			if($passStmt->execute()){
				return "OK";
			}else{
				return "ERROR";
			}

            $passStmt = null;
		}
	}
}