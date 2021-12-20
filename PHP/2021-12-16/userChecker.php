<?php 
session_start();
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
}

$file = file_get_contents("users.json");
$json = json_decode($file, true);

$emailPass = false;
$passwordPass = false;


foreach ($json["users"] as $user) {
    if ($user["email"] == $email) {
        $emailPass = true;
        $username = $user["username"];
    }
    if ($user["password"] == $password) {
        $passwordPass = true;
    }
}


if ($emailPass && $passwordPass) {
    $_SESSION["username"] = $username;
    echo "Success";

} else if ($emailPass && !$passwordPass) {
    echo "BadPass";
}
else {
    echo "BadEmail";
} 

?>