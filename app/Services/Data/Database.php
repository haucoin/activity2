<?php

namespace App\Services\Data;

class Database {
	
	private $servername = "localhost";
	private $username = "root";
	private $password = "root";
	private $dbName = "activity2";
	
	/**
	 * getConnection uses the private class varibles to connect to the database using mysqli and return the connection object
	 * @return $connection - Connection - connection object to the database
	 */
	function getConnection()
	{
		// Create connection
		$connection = mysqli_connect($this->servername, $this->username, $this->password, $this->dbName);
		
		// Check connection
		if (!$connection)
		{
			die("Connection failed: " . mysqli_connect_error());
		}
		
		return $connection;
	}
}

