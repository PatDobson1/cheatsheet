$db_servername = "localhost";
$db_username = "[DB USERNAME]";
$db_password = "[DB PASSWORD]";
$db_dbName = "[DB NAME]";

$pdo = new PDO("mysql:host=$db_servername;dbname=$db_dbName", $db_username, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $createOrder = "    INSERT INTO order_detail (name, email, telephone)
                        VALUES(:name, :email, :telephone)";
    $createOrder = $pdo -> prepare($createOrder);
    $createOrder -> bindParam(':name', $customer['name']);
    $createOrder -> bindParam(':email', $customer['email']);
    $createOrder -> bindParam(':telephone', $customer['telephone']);
    $createOrder -> execute();
    $orderId = $pdo -> lastInsertId();
$pdo = null;
