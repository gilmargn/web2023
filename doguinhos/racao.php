<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Doação de ração</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../doguinhos/assets/css/main.css'>
    <script src='main.js'></script>
</head>
<body>

<head>
		<title>Ajude com ração!</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="icon" type="image/x-icon" href="../doguinhos/favicon/android-chrome-512x512.png">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>

    <header id="header">
        <a href="index.html" class="title">Cão de Rua</a>
        <nav>
            <ul>
                <li><a href="index.html">Página principal</a></li>
                <li><a href="generic.html" class="active">Sobre nós</a></li>
            </ul>
        </nav>
    </header>

</body>

<section class="section">
    <div class="container">
    <h1>Você doou com sucesso!</h1>
    Quantidade doada: <?php echo $_POST["qtde"]; ?><br>
    Marca da ração: <?php echo $_POST["marca"]; ?> <br>
    Tipo: <?php echo $_POST["idade"]; ?><br>
    
   
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    /* // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $Nome = $_POST['Nome'];
        $Telefone = $_POST['Telefone'];
    }
 */
    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "caoderua";



    $mysqli = new mysqli($host, $username, $password, $dbname);

// Check for connection errors
if ($mysqli->connect_errno) {
    echo 'Failed to connect to MySQL: ' . $mysqli->connect_error;
    exit();
}

// Assuming your form has input fields named "name" and "email"
$qtde = $_POST['qtde'];
$marca = $_POST['marca'];
$tipo = $_POST['idade'];



// Prepare the query id            |int(11)     
//        insert into racao values(1,"pedigreee",10,"adulto");
$query = "INSERT INTO racao(qtde,marca,idade) VALUES ('$qtde', '$marca','$idade')";

// Execute the query
if ($mysqli->query($query)) {
    echo 'Você doou com sucesso! Agradecemos a sua ajuda.';
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

</html>