<?php
// Print the request date and time
echo "<h3>Request Date and Time:</h3>";
echo date("Y-m-d H:i:s") . "<br><br>";

// Get and print the request method (GET, POST, etc.)
echo "<h3>Request Method:</h3>";
echo $_SERVER['REQUEST_METHOD'] . "<br><br>";

// Get and print all request headers
echo "<h3>Request Headers:</h3>";
foreach (getallheaders() as $name => $value) {
    echo "$name: $value<br>";
}
echo "<br>";

// Get and print GET parameters, if any
if (!empty($_GET)) {
    echo "<h3>GET Parameters:</h3>";
    foreach ($_GET as $key => $value) {
        echo "$key: $value<br>";
    }
    echo "<br>";
}

// Get and print POST data, if any
if (!empty($_POST)) {
    echo "<h3>POST Parameters:</h3>";
    foreach ($_POST as $key => $value) {
        echo "$key: $value<br>";
    }
    echo "<br>";
}

// Print raw input data (for JSON or other types of request bodies)
$inputData = file_get_contents('php://input');
if ($inputData) {
    echo "<h3>Raw Input Data:</h3>";
    echo $inputData . "<br><br>";
}
?>
