<?php

require("conexao.php");

sleep(3);
$output = '';

if(isset($_FILES['file']['name']) &&  $_FILES['file']['name'] != ''){
	$valid_extension = array('xml');
	$file_data = explode('.', $_FILES['file']['name']);
	$file_extension = end($file_data);

	if(in_array($file_extension, $valid_extension)) {
		$data = simplexml_load_file($_FILES['file']['tmp_name']);
	  
		//$username = 'root';
//$password = '123456';
		//$connect = new PDO('mysql:host=localhost;dbname=desafio', $username, $password);

	foreach($data->torcedor as $torcedor ){
		 $query = "INSERT INTO clientes  
										(
										nome,
										documento,
										cep,
										endereco,
										bairro,
										cidade,
										uf,
										telefone,
										email,
										ativo) 
										VALUES (
										:nome,
										:documento,
										:cep,
										:endereco,
										:bairro,
										:cidade,
										:uf,
										:telefone,
										:email,
										:ativo);
										";
		$statement = $connect->prepare($query);
	  
		$statement->execute(
							array(
							 ':nome'   => (string)$torcedor->attributes()->nome,
							 ':documento'  => (string)$torcedor->attributes()->documento,
							 ':cep'  => (string)$torcedor->attributes()->cep,
							 ':endereco' => (string)$torcedor->attributes()->endereco,
							 ':bairro'   => (string)$torcedor->attributes()->bairro,
							 ':cidade'   => (string)$torcedor->attributes()->cidade,
							 ':uf'   => (string)$torcedor->attributes()->uf,
							 ':telefone'   => (string)$torcedor->attributes()->telefone,
							 ':email'   => (string)$torcedor->attributes()->email,
							 ':ativo'   => (string)$torcedor->attributes()->ativo
							)
	   );
		  
	}
		$result = $statement->fetchAll();
		if(isset($result)){
			$output = '<div class="alert alert-success">Arquivo Importado com sucesso!</div>';
		}
	} else{
			$output = '<div class="alert alert-warning">Arquivo Inválido</div>';
	}
}else{
	$output = '<div class="alert alert-warning">Por favor, selecione um arquivo XML </div>';
}

echo $output;
	
?>

	
	
	
