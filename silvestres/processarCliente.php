<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cadrastro dos Animais</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href=''>
    <script src='main.js'></script>
</head>
<body>
<section class="section">
    <div class="container">
    <h1>Cadrastro dos Animais</h1>
    Nome do Animal: <?php echo $_POST["Nome do Animal"]; ?><br>
    Espécie: <?php echo $_POST["Espécie"]; ?> <br>
    Local Encontrado: <?php echo $_POST["Local Encontrado"]; ?> <br>
    Situação do Animal: <?php echo $_POST["Situação do Animal"]; ?> <br>
    Observação: <?php echo $_POST["Observação"]; ?> <br>


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
    $dbname = "";



    $mysqli = new mysqli($host, $username, $password, $dbname);

// Check for connection errors
if ($mysqli->connect_errno) {
    echo 'Failed to connect to MySQL: ' . $mysqli->connect_error;
    exit();
}

// Assuming your form has input fields named "name" and "email"
$nome = $_POST['nome'];
$email = $_POST['prato_preferido'];
$phone = $_POST['sobremessa'];

// Prepare the query
$query = "INSERT INTO clientes (nome, prato_preferido,sobremessa) VALUES ('$nome', '$prato_preferido','$sobremessa')";

// Execute the query
if ($mysqli->query($query)) {
    echo 'Cliente cadastrado com sucesso.';
} else {
    echo 'Algo de errado não deu certo: ' . $mysqli->error;
}
$mysqli->close();
    // creating a connection
   /* $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("A conexão com o banco falhou!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO clientes (nome, email) VALUES ('0', '$nome', '$email')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Dados salvos com sucesso!";
    }
  */
    // close connection
    //mysqli_close($con);

?>
    </div>
</section>
</body>
</html>