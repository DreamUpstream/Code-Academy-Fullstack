
let getFavoriteCity = (name, surname, city) => {
    let user = `${name} ${surname}`;
    let favoriteCity = city;

    return `${user} favorite city is ${favoriteCity}`}
    let cities = ["Vilnius", "Kaunas", "Klaipėda", "Šiauliai", "Panevėžys", "Marijampolė"];

console.log(getFavoriteCity("Ernestas", "Rutkauskas", cities[5]));

''