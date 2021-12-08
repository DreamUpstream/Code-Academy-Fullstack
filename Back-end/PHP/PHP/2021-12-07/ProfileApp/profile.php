<?php
require_once 'upload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<div class="bg-dark">
		<h1 class="px-5 pt-3 pb-3 text-white">Jūsų profilis</h2>
	</div>

	<div class="mb-3 mx-5 px-5 pb-5 pt-5 col-10 col-md-6" style="background-color: gainsboro;">
		<div class="mx-5">
				<img src="<?php echo $profilePicture; ?>" style = "width: 200px;">
				<h3>El pašto adresas:</h3>
				<?php if (!empty($_POST['email'])): ?>
				<h4><?php echo $_POST['email'] ?></h1>
				<?php else: ?>
				<h4 style="color:red">Nerasta</h3>
				<?php endif;?>

				<h3>Vardas, pavardė:</h3>
				<?php if (!empty($_POST['nameSurname'])): ?>
				<h4><?php echo $_POST['nameSurname'] ?></h1>
				<?php else: ?>
				<h4 style="color:red">Nerasta</h3>
				<?php endif;?>

				<h3>Miestas:</h3>
				<?php if (!empty($_POST['miestas'])): ?>
				<h4><?php echo $_POST['miestas'] ?></h1>
				<?php else: ?>
				<h4 style="color:red">Nerasta</h3>
				<?php endif;?>

				<h3>Pasirinktos programavimo kalbos :</h3>
				<?php if (!empty($_POST['check_list[0]']) || !empty($_POST['check_list[0]']) || !empty($_POST['check_list[0]'])): ?>
				<h4><?php echo $_POST['check_list[0]'] ?></h1>
				<h4><?php echo $_POST['check_list[1]'] ?></h1>
				<h4><?php echo $_POST['check_list[2]'] ?></h1>
				<?php else: ?>
				<h4 style="color:red">Nerasta</h3>
				<?php endif;?>

				<h3>Papildoma informacija:</h3>
				<?php if (!empty($_POST['comment'])): ?>
				<h4><?php echo $_POST['comment'] ?></h1>
				<?php else: ?>
				<h4 style="color:red">Nerasta</h3>
				<?php endif;?>
    		</div>
  		</div>
	</div>
	
</body>
</html>