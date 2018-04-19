<?php

$mysqli = new mysqli('host', 'name', 'pass', 'bd');

if ($mysqli->connect_error) {

    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);

}



class articles{

	var $id;

		function id() {return $this -> id;}

	var $topic;

		function topic() {return $this -> topic;}

	var $description;

		function description() {return $this -> description;}

	var $img;

		function img() {return $this -> img;}



		

	

	function goods($name){

		$mysqli = new mysqli('host', 'name', 'pass', 'bd');

		$result = mysqli_query($mysqli, "SELECT * FROM goods where name = '$name'");

		while($row = mysqli_fetch_assoc($result) ){   

			$this->id = $row['id']; 

			$this->name = $row['name']; 

			$this->cat = $row['cat']; 

			$this->subCat = $row['subCat']; 

			$this->description = $row['description']; 

		} 

	}

	

	function add($name, $cat, $subCat, $description, $img, $price, $size){

		$mysqli = new mysqli('mysql.hostinger.ru', 'u770943689_root', '375577', 'u770943689_shop');

		mysqli_query($mysqli, "INSERT INTO `goods` (`name`, `cat`, `subCat`, `description`, `img`, `price`, `size`) VALUES ('$name','$cat','$subCat','$description','$img','$price', '$size')");

	}

}

	



?>