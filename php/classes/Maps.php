<?php
require_once 'connection.php';

class Maps {
    private $id;
    private $details;
    private $long;
    private $lat; 

    public function showCoordList(){
		$passStmt = (new Connection)->connect()->prepare("SELECT * FROM coordinates ORDER BY detail");
		$passStmt -> execute();
		return $passStmt -> fetchAll();
		$passStmt = null;
	}

    public function getLatLong() {
        $passStmt = (new Connection)->connect()->prepare("SELECT coordLong, coordLat FROM coordinates");
        $passStmt -> execute();
        return $passStmt -> fetch();
        $passStmt = null;
    }

    public function getCoordInfo($item, $value) {
        $passStmt = (new Connection)->connect()->prepare("SELECT * FROM coordinates where $item = :$item");
        $passStmt->bindParam(":".$item, $value, PDO::PARAM_INT);
        $passStmt->execute();
        return $passStmt->fetch();
        $passStmt = null;
    }
}