import debounce from "lodash.debounce";
import * as fcRender from "./forecastRender";
import * as latin from "./latiniser";

function loadPlaceForecasts(placeCode, placeName) {
	fcRender.renderer(placeName, placeCode);
}
const placeInput = document.querySelector("#place");
const placeSuggestions = document.querySelector("#place-suggestions");

placeInput.addEventListener(
	"input",
	debounce(function () {
		String = latin.latinMaker();
		fetch(`/weather/places/find/${this.value.latinise()}`, {
			// mode: 'no-cors',
			method: "GET",
			headers: {
				Accept: "application/json",
			},
		})
			.then((r) => r.json())
			.then((places) => {
				placeSuggestions.innerHTML = "";
				for (let tagNumber in places) {
					let button = document.createElement("button");
					button.addEventListener("click", function () {
						button.classList.add("active");

						setTimeout(() => {
							placeSuggestions.innerHTML = "";
						}, 100);
						placeInput.value = places[tagNumber].name;
						loadPlaceForecasts(places[tagNumber].code, places[tagNumber].name);
					});

					button.classList.add("list-group-item", "list-group-item-action");
					button.innerText = places[tagNumber].name;

					placeSuggestions.appendChild(button);
				}
			});
	}, 500)
);
