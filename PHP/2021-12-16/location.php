<?php
session_start();

$file = file_get_contents("users.json");
$json = json_decode($file, JSON_PRETTY_PRINT);
$trigger = false;
try {
    if (!isset($_SESSION['username'])) {
        throw new Exception("Neprisijungta");
    }
    foreach ($json["users"] as $user) {
        if ($user["username"] == $_SESSION["username"]) {
            $userinfo = $user; // TODO: PAGRAZINTI
            $trigger = true;
        }
    }
    if ($trigger == false) {
        throw new Exception("Klaida, vartotojo informacija nerasta");
    }
} catch (Exception $e) {
    echo "<h1>" . $e->getMessage();
    exit;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src = "location.js"></script>
</head>
<body>
    <div class = "d-flex justify-content-center align-items-center vh-100">
        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header text-center">Locator v1.0</div>
            <div class="card-body text-center">
                <h5 class="card-title">
                    <?php echo "Vartotojo " . $_SESSION["username"] . " informacija:" ?>
                </h5>
                <p class="card-text">
                    <?php 
                    var_dump($userinfo)
                    ?>
                </p>
                <p>
                    <?php
                    $pass = false;
                    $dir = new DirectoryIterator(dirname(__FILE__) . "/sessions");
                    foreach ($dir as $fileinfo) {
                        if (!$fileinfo->isDot()) {
                            $filename = ($fileinfo->getFilename());
                            $namer = explode("_", $fileinfo);
                            if ($namer[0] == $_SESSION["username"]) {
                                $last = file_get_contents('sessions/' . $fileinfo);
                            }
                        }
                    }
                    echo $last;
                    ?>
                </p>
            </div>
            <button type="button" class="btn btn-danger" id="logOff">Atsijungti</button>
        </div>
    </div>
    
</body>
</html>

<?php 

$date = new DateTime();
$date = $date->format('Y-m-d-H-i-s');
$myfile = fopen("sessions/" . $_SESSION["username"] . "_" . $date . ".txt", "w") or die("Unable to open file!");
$date = new DateTime();
$date = $date->format('Y-m-d H:i:s');
$txt = $_SESSION["username"] ." pastarąjį kartą buvo prisijungęs " . $date;
fwrite($myfile, $txt);
fclose($myfile);
?>