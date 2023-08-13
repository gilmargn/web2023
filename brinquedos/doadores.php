<html>
<body>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Doador cadastrar</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./bulma/css/bulma.css'>
    <script src='main.js'></script>
</head>
<body>
    <section class="section">
        <div class="container">
 <h1>Cadastrar Leitores</h1>

Nome: <?php echo $_POST["nome"]; ?><br>
Email: <?php echo $_POST["email"]; ?><br>
Telefone: <?php echo $_POST["telefone"];?><br>
Status do brinquedo: <?php echo $_POST["brinquedo"];?>
Material do brinquedo: <?php echo $_POST["brinquedo"];?>
</div>
</div>
</section>
<?php
// database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "brinquedos";



    $mysqli = new mysqli($host, $username, $password, $dbname);

// Check for connection errors
if ($mysqli->connect_errno) {
    echo 'Algo deu errado :(  ' . $mysqli->connect_error;
    exit();
}

// Assuming your form has input fields named "name" and "email"
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$brinquedo = $_POST['brinquedo'];

// Prepare the query
$query = "INSERT INTO doadores (id, nome, email, telefone, brinquedo) VALUES (id,'$nome', '$email','$telefone','$brinquedo')";

// Execute the query
if ($mysqli->query($query)) {
    echo 'Doador cadastrado com sucesso.';
} else {
    echo 'Algo de errado não deu certo: ' . $mysqli->error;
}
$mysqli->close();
?>
</body>
</html>