<?php 

//DATABASE CONNECTION
class DB
{
	private $host;
	private $username;
	private $password;
	private $database;
	
	public function __construct($config)
	{
		$this->host = $config["host"];
		$this->username = $config["username"];
		$this->password = $config["password"];
		$this->database = $config["database"];
	}

	public function connect()
	{
		try 
		{
			$conn = new PDO("mysql:hostname=".$this->host.";dbname=".$this->database,$this->username,$this->password);
			$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			return $conn;
		} 
		catch (PDOException $e) {
			return false;
		}
	}

	public function query($sql,$data,$conn)
	{
		$stmt = $conn->prepare($sql);
		$stmt->execute($data);

		$result=$stmt->fetchAll();

		return $result ? $result : false;
	}


	public function add($tableName,$data,$conn)
	{ 
		$sql = "INSERT INTO ".$tableName."(name,job,pic,about) VALUES(:name,:job,:pic,:about)";
		$stmt = $conn->prepare($sql);
		$stmt->execute($data);


		if (count($stmt->rowCount())) {
			return $stmt->rowCount();
		}
		else{
			return false;
		}
	}


	public function delete($tableName,$id,$conn)
	{
		 
		$sql = "DELETE FROM ".$tableName." WHERE id= :id";
		$stmt = $conn->prepare($sql);
		$data = ["id" => $id];
		$stmt->execute($data);

	}



	/*	public function update($tableName,$id,$conn)
	{
		 
		$sql = "UPDATE ".$tableName." SET title='$title', body='$body' WHERE id='$id'";
		$stmt = $conn->prepare($sql);
		$data = ["id"=>$id];
		$stmt->execute($data);

    }
    */


}
	
?>