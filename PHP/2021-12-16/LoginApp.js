function validator(emailInput, passwordInput) {
	if (passwordInput.value != "" && ValidateEmail(emailInput.value)) {
		enableButton();
	}
}

function disableButton() {
	document.getElementById("mainButton").classList.add("disabled");
}

function enableButton() {
	document.getElementById("mainButton").classList.remove("disabled");
}

function ValidateEmail(mail) {
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) {
		return true;
	}
	return false;
}

function displayError(id, message) {
	removeError(id);
	let element = document.getElementById(id);
	let error = document.createElement("p");
	error.innerText = message;
	error.id = `${id}_error`;
	error.classList = "text-danger mt-2";
	element.after(error);
}

function removeError(id) {
	let element = document.querySelector(`#${id}_error`);
	if (element !== null) {
		element.remove();
	}
}

document.addEventListener("DOMContentLoaded", () => {
	emailInput = document.getElementById("InputEmail");
	passwordInput = document.getElementById("InputPassword");
	mainButton = document.getElementById("mainButton");

	emailInput.addEventListener("blur", function () {
		removeError(emailInput.id);
		disableButton();
		if (ValidateEmail(emailInput.value)) {
			validator(emailInput, passwordInput);
		} else if (emailInput.value == "") {
			displayError(emailInput.id, "Laukas tuščias");
		} else {
			displayError(emailInput.id, "Klaidingai įvedėte el. pašto adresą");
		}
	});
	passwordInput.addEventListener("keyup", function () {
		disableButton();
		removeError(passwordInput.id);
		if (passwordInput.value != "") {
			validator(emailInput, passwordInput);
		} else {
			displayError(passwordInput.id, "Laukas tuščias");
		}
	});

	mainButton.addEventListener("click", async function () {
		formData = new FormData();
		formData.append("password", passwordInput.value);
		formData.append("email", emailInput.value);
		let response = await fetch("userChecker.php", {
			method: "POST",
			body: formData,
		});

		response = await response.text();
		if (response == "Success") {
			window.location.href = "location.php";
		} else if (response == "BadPass") {
			displayError("InputPassword", "Slaptažodis neteisingas");
			disableButton();
		} else {
			displayError("InputEmail", "Toks vartotojas nerastas");
			disableButton();
		}
	});
});
