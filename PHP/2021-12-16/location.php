<?php
session_start();

$file = file_get_contents("users.json");
$json = json_decode($file, JSON_PRETTY_PRINT);

$trigger = false;
try {
    foreach ($json["users"] as $user) {
        if ($user["username"] == $_SESSION["username"]) {
            echo "<h1> TODO: Pagražinti </h1> <br>";
            var_dump($user);
            $trigger = true;
        }
    }
    if ($trigger == false) {
        throw new Exception("Klaida, vartotojo informacija nerasta");
    }
} catch (Exception $e) {
    echo "WTF";
}

// $sessionfile = fopen("sessions/sessionfile.txt", "r+");
// session_decode(fputs($sessionfile, 4096));
// fclose($sessionfile);

// $sessionfile = fopen("sessions/sessionfile.txt", "w+");
// var_dump($sessionfile);
// fwrite($sessionfile, "bbz");
// fclose($sessionfile);

// if (isset($_SESSION['username'])) {
//     $_SESSION["lastLogin"] = time();
//     $sessionfile = fopen("sessions/sessionfile.txt", "a");
//     fputs($sessionfile, session_encode());
//     fclose($sessionfile);
//     var_dump($_SESSION);
//     session_destroy();
// }

?>