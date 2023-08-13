<html>
<body>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cadastro de Pescadores</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./assets/css/bulma.css'>
    <script src='main.js'></script>
</head>
<section class="section">
    <div class="container">
      <h1 class="title">
        Pescadores Cadastrados
      </h1>
      
Nome: <?php echo $_POST["nome"]; ?><br>
CPF: <?php echo $_POST["cpf"]; ?><br>
Email: <?php echo $_POST["email"]; ?><br>
Endereco: <?php echo $_POST["endereco"]; ?><br>
Genero: <?php echo $_POST["genero"]; ?><br>
Idade: <?php echo $_POST["idade"]; ?><br>

<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    /* // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
    }
 */
    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "coopesca";



    $mysqli = new mysqli($host, $username, $password, $dbname);

// Check for connection errors
if ($mysqli->connect_errno) {
    echo 'Failed to connect to MySQL: ' . $mysqli->connect_error;
    exit();
}

// Assuming your form has input fields named "name" and "email"
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email']; 
$endereco = $_POST['endereco'];
$genero = $_POST['genero'];
$idade = $_POST['idade'];

// Prepare the query
$query = "INSERT INTO coopesca(id, nome, cpf, email, endereco, genero, idade, ) VALUES (id,'$nome', '$cpf','$email','$endereco','$genero','$idade')";

// Execute the query
if ($mysqli->query($query)) {
    echo 'Deu bão, muitos peixes foram pescados.';
} else {
    echo 'Maldito boto!' . $mysqli->error;
}
$mysqli->close();
   

?>
</body>
<footer class="footer">
                  <div class="content has-text-centered">
                    <p>
                      <strong>IFAM.</strong> feito por <a href="https://jgthms.com">Adeilson S. Silva</a>. O código fonte foi realiado em sala
                      <a href="">LAB 2</a>. O conteúdo do site é privado
                      <a href="">Turma 2022.1</a>.
                    </p>
                  </div>
                </footer>
</html>