<html>
<body>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cadastro de Clientes</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./assets/css/bulma.css'>
    <script src='main.js'></script>
</head>
<section class="section">
    <div class="container">
      <h1 class="title">
        Peixes cadastrados
      </h1>
      
Peixe: <?php echo $_POST["peixe"]; ?><br>
Quantidade: <?php echo $_POST["qtde"]; ?><br>
Peso médio: <?php echo $_POST["peso"]; ?><br>
habitat: <?php echo $_POST["habitat"]; ?><br>

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
$peixe = $_POST['peixe'];
$qtde = $_POST['qtde'];
$peso = $_POST['peso']; 
$habitat = $_POST['habitat'];

// Prepare the query
$query = "INSERT INTO peixes(id, peixe, qtde, peso, habitat ) VALUES (id,'$peixe', '$qtde','$peso','$habitat')";

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