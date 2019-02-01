<?php
	function connect(){
		$server='localhost';
		$username='root';
		$password='';
		$dbName='labkhand_database';		
		if(!@$connection = mysqli_connect($server,$username,$password,$dbName))
			die(' :( ');
		mysqli_query($connection,'SET CHARACTER SET utf8;');
		return $connection;
	}
?>