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
<body style="background-color: rgb(230, 230, 230);">
	<div class="bg-dark">
		<h1 class="px-5 pt-3 pb-3 text-white">Jūsų profilis</h2>
	</div>
	<div class="d-flex justify-content-center py-5">
		<div class="mb-3 mx-5 px-5 pb-5 pt-5 col-10 col-md-6 text-center" style="background-color: rgb(190, 190, 190); color:white;">
			<img src="<?php echo $profilePicture; ?>" class="mb-2" style = "width: 200px;">
			<h3 class="bg-secondary mb-2 py-1">El pašto adresas:</h3>
			<div class="bg-dark mb-2 py-1">
				<?php if (!empty($_POST['email'])): ?>
				<h4><?php echo $_POST['email'] ?></h1>
				<?php else: ?>
				<h4 style="color:red">Nenurodyta</h3>
				<?php endif;?>
			</div>
				
			<h3 class="bg-secondary mb-2 py-1">Vardas, pavardė:</h3>
			<div class="bg-dark mb-2 py-1">
				<?php if (!empty($_POST['nameSurname'])): ?>
				<h4><?php echo $_POST['nameSurname'] ?></h1>
				<?php else: ?>
				<h4 style="color:red">Nenurodyta</h3>
				<?php endif;?>
			</div>

			<h3 class="bg-secondary mb-2 py-1">Miestas:</h3>
			<div class="bg-dark mb-2 py-1">
				<?php if (!empty($_POST['miestas'])): ?>
				<h4><?php echo $_POST['miestas'] ?></h1>
				<?php else: ?>
				<h4 style="color:red">Nenurodyta</h3>
				<?php endif;?>
			</div>
			<h3 class="bg-secondary mb-2 py-1">Pasirinktos programavimo kalbos :</h3>
			<div class="bg-dark mb-2 py-1">
				<?php if (isset($_POST['check_list'])) {
						$checklist = implode(", ", $_POST['check_list']);
					} else {
						$checklist = "";
					}?>
				<h4>
				<?php if ($checklist != ""): ?>
				<h4><?php echo $checklist ?></h1>
				<?php else: ?>
				<h4 style="color:red">Nepasirinkta</h3>
				<?php endif;?>
				</h4>
			</div>

			<h3 class="bg-secondary mb-2 py-1">Papildoma informacija:</h3>
			<div class="bg-dark mb-2 py-1">
				<?php if (!empty($_POST['comment'])): ?>
				<h4><?php echo $_POST['comment'] ?></h1>
				<?php else: ?>
				<h4>⠀</h4>
				<?php endif;?>
			</div>
			<a href="index.html">
				<button class="col-8 btn btn-primary">Grįžti</button>
			</a>
		</div>
	</div>
	
	
</body>
</html>