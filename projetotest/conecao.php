 <?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;port=3306;dbname=db_test_unicesumar", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    //die();
    }
catch(PDOException $e)
    {
       //echo "Connection failed: " . $e->getMessage();
    	echo "Connection failed ";
    die();
    }
?> 