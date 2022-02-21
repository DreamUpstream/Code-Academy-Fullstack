function createError() {
	if (document.querySelector("#buttonMenu").querySelector("p") == null) {
		console.log("sw");
		let p = document.createElement("p");
		p.innerText = "Nothing was selected";
		p.classList = "ms-3 mt-3 text-danger errorMessage";
		document.querySelector("#buttonMenu").appendChild(p);
		return;
	} else {
		console.log("wtf");
		return;
	}
}

async function fetchAnswers(selection = "none") {
	let formData = new FormData();
	formData.append("selection", selection);

	let response = await fetch("questionReturner.php", {
		method: "POST",
		body: formData,
	});

	response = await response.text();
	console.log(response);
}

// nextButton
document.addEventListener("DOMContentLoaded", async () => {
	fetchAnswers();

	document.querySelector("#nextButton").addEventListener("click", async function () {
		if (document.querySelector("input[name='radio']:checked") !== null) {
			let selection = document.querySelector("input[name='radio']:checked").parentElement.innerText;
		} else {
			createError();
			return;
		}
		document.querySelector("#mainContainer").classList.add("blink_me");
		fetchAnswers(selection);
	});
});
