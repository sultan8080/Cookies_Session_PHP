<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_management";
$db;


$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// print("PDO::FETCH_OBJ: ");
// print("Return next row as an anonymous object with column names as properties\n");
// stdClass Object

// $total = count((array)$obj);
// data fetching in the form obj
$password = '123456';
echo "<h1> data fetching in the form of an objet </h1>";
$sqlFetchObj = $db->query("SELECT * FROM users WHERE email = 'moti@gmail.com'")->fetchAll(PDO::FETCH_OBJ);

foreach ($sqlFetchObj as $result) {
    if (count((array)$sqlFetchObj) > 0) {
        echo $result->nom . ' ' . $result->prenom . ' ' . $result->email . $result->motdepasse . '<br>';

        /* If there is a result, check if the password matches using password_verify(). */
        if (password_verify($password, $result->motdepasse)) {
            echo "<h1>YOU HAVE WON </h1>";
        } else {
            echo "NON";
        }
    };
}



// print("PDO::FETCH_ASSOC: ");

// is_array can be used to check if there is value inside the array
// print("Return next row as an array indexed by column name\n");
// echo "<h1> data fetching in the form of an array </h1>";
// $sqlFetchAssoc = $db->query("SELECT * FROM users where motdepasse = $hashed_password")->fetchAll(PDO::FETCH_ASSOC);


// foreach ($sqlFetchAssoc as $result2) {
//     echo $result2['nom'] . ' ' . $result2['nom'] . ' ' . $result2['email'] . $result2['motdepasse'] . '<br>';
// }
