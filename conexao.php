<?php



try {
	$username = 'root';
	$password = '123456';
    $conn = new PDO('mysql:host=localhost;dbname=desafio', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //$data = $conn->query('SELECT * FROM clientes WHERE nome = ' . $conn->quote($name));
	
    foreach($data as $row) {
        print_r($row); 
    }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}



?>