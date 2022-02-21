<?php
	session_start();

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Testas</title>
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="styles.css" />
		<script src="app.js"></script>
	</head>
	<body class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
		<div class="container h-100" id="mainContainer">
			<div class="question ml-sm-5 pl-sm-5 pt-2" id = "questionBlock">
				<div class="py-2 h5"><b><?php echo "Q. which option best describes your job role?" ?></b></div>
				<div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options">
					<label class="options">Small Business Owner or Employee <input type="radio" name="radio" /> <span class="checkmark"></span> </label>
					<label class="options">Nonprofit Owner or Employee <input type="radio" name="radio" /> <span class="checkmark"></span> </label>
					<label class="options">Journalist or Activist <input type="radio" name="radio" /> <span class="checkmark"></span> </label>
					<label class="options">Other <input type="radio" name="radio" /> <span class="checkmark"></span> </label>
				</div>
			</div>
			<div class="d-flex align-items-center pt-3" id="buttonMenu">
				<div id="prev">
					<button class="btn btn-primary" id="previousButton">Previous</button>
				</div>
				<div class="ml-auto mr-sm-5 ms-2">
					<button class="btn btn-success" id="nextButton">Next</button>
				</div>
			</div>
		</div>
	</body>
</html>
