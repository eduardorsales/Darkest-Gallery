<html>
<head>
<title>
Darkest Gallery
</title>
</head>

<body>
<?php
$nome = $_GET['nome'];
$telefone = $_GET['telefone'];
$email = $_GET['email'];
$msg = $_GET['msg'];

$sql = "insert into 'contato' (nome, telefone, email, msg) values ('$nome', '$telefone', '$email', '$msg')";

$dsn = 'mysql:host=remotemysql.com;dbname=ELkWTKhD3B';
$username = 'ELkWTKhD3B';
$password = 'NucXi7JVVR';

 try {
    
    $pdo = new PDO($dsn, $username, $password);

  }catch (PDOException $Exception ) {
    
    //aqui testa se conectou
     throw new MyDatabaseException( $Exception->getMessage( ) , $Exception->getCode( ) );
  }

$pdo->exec($sql);
?>
</body>
</html>