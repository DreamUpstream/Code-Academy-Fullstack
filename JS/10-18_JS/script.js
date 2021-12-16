// Testuosime šį masyvą
let numbers = [5, 1, 7, 2, -9, 8, 2, 7, 9, 4, -5, 2, -6, -4, 6];
console.log(numbers);
// 1. Parašykite funkciją arrDoubled, kuri sukuria ir grąžina naują masyvą, kurio elementai padauginti iš 2;
let arrDoubled = numArray => numbers.map(num => num * 2);
console.log(arrDoubled(numbers));
// 2. Parašykite funkciją arrMultiplied, kuri sukuria ir grąžina naują masyvą, kurio elementai padauginti iš argumentu nurodyto skaičiaus
let arrMultiplied = (multiplyOperand, arr) => arr.map(num => num * multiplyOperand);
console.log(arrMultiplied(5, numbers));
// 3. Parašykite funkciją arrCountTwos, kuri suskaičiuoja dvejetus masyve
let arrCountTwos = numbers.reduce((total, value) => value == 2 ? total + 1 : total, 0);
console.log(arrCountTwos);
// 4. Parašykite funkciją arrIndexOfFirst, kuri grąžintu pirmo surasto, argumentu nurodyto skaičiaus, indeksą masyve. Jei skaičius nerastas funkcija turi grąžinti -1.
let arrIndexOfFirst = (num, numbersArray) => numbersArray.indexOf(num);
console.log(arrIndexOfFirst(-9, numbers));
// 5. Parašykite funkciją arrIndexOfLast, kuri grąžintu paskutinio surasto, argumentu nurodyto skaičiaus, indeksą masyve. Jei skaičius nerastas funkcija turi grąžinti -1.
let arrIndexOfLast = (num, numbersArray) => numbersArray.lastIndexOf(num);
console.log(arrIndexOfLast(2, numbers));
// 6. Parašykite funkciją reverseNumbers, kuri pakeis skaičius vietomis taip, kad pirmas skaičius taps paskutiniu, antras piešpaskutiniu, o buvęs paskutinis taps pirmu, priešpaskutinis bus antru.
// Pvz.: Turime skaičius 32243;
// Iškvietus funkciją rezultata bus: 34223
let reverseNumbers = arr => arr.reverse();
console.log(reverseNumbers(numbers));
// 7. Parašykite  funkciją, kuri kaip argumentą priims skaičių masyvą ir suras atitinkamai mažiausią ir didžiausią skaičių bei juos grąžins.
// Pvz.: Turime masyvą: [8,5,4,2,7,1,9]
// Iškvietus funkciją rezultata bus: "Mažiausas: 1, Didžiausas: 9"
let minMax = arr => console.log("Mažiausias: " + Math.min(...arr) + " Didžiausias: " + Math.max(...arr));
minMax(numbers);
// 8. Parašykite  funkciją checkForLetters, kuri priims du argumentus: Pirmas argumentas bus sakinys (arba žodžiai (-is)) ir antras argumentas bus raidė (kaip string). Funkcija turės suskaičiuoti kiek pirmu agrumentu nurodytame sakinyje/žodžiuose(-yje) yra antru argumentu nurodytų raidžių ir gražinti tų raidžių sumą su sakiniu pvz.: “Raidė “v” sakinyje rasta 4 kartus”.
let checkForLetters = (arr, char) => console.log("Raidė \"" + char +"\" sakinyje rasta " + (arr.split("").filter(x => x == char).length) + " kartus");
checkForLetters("Sveiki", "i");
// 9. Parašykite funckiją, kuri ras visus skaičius esančius masyve ir gražins juos kaip atsikrą masyvą. Naujame masyve visi skaičiai bus surikiuoti nuo mažiausio iki didžiausio.
// let arr2 = [8, 'Hello', 'click', 'u', 7, 4, 'a', 'a', 3, 6, "chair", ,10, 1];
// Iškvietus funkciją rezultata bus: [1,3,4,6,7,8,10];
let sortedIntegerFilter = arr => arr.filter(x => typeof x === 'number').sort();
console.log(sortedIntegerFilter(["s", 5, 7, 1, "ha"]));
// 10. Sukurkite funkciję checkIfAllSmaller(arr, max), BE MASYVO METODŲ, kuri patikrintų ar visi skaičiai masyve yra didesni negu perduota reikšmė max;
// Pvz.: Turime masyvą: let arr1 = [2, 7, 6, 9, 5];
// Iškvietus funkciją checkIfAllSmaller(arr1, 5) rezultata bus: False
let checkIfAllSmaller = (arr, max) => {
  let trigger = true;
  for(let i = 0; i < arr.length; i++) {
    if (arr[i] < max) trigger = false;
  }
  return trigger ? "Visi sk. didesni nei " + max : "Ne visi sk. didesni nei " + max ;
}
console.log(checkIfAllSmaller(numbers, -10))
// 11. Parašykite funkciją filteredByLetter, kuri turi du parametrus: 1. masyvas; 2. raidė. Funkcija sukuria ir grąžina naują masyvą, kuriame yra visi masyvo, nurodyto kaip pirmas parametras elemntai, kuriuose galima rasti antru paramatetru nurodytą raidę.
// Testuosime šį masyvą
let citiesOfLithuania = [
  'Vilnius',
  'Kaunas',
  'Klaipėda',
  'Šiauliai',
  'Panevėžys',
  'Alytus',
  'Marijampolė',
  'Mažeikiai',
  'Jonava',
  'Utena',
];
let filteredByLetter = (arr, letter) => arr.filter(x => x.includes(letter));
console.log(filteredByLetter(citiesOfLithuania, "y")); 
// 12. Parašykite penkias funkcijas:
// - calculateValue()
// - addition()
// - subtraction()
// - multiplication()
// - division()
// Pagridinė funkcija bus calculateValue(num1, num2, action), kuri priims tris argumentus: a) num1 - skaičius;b) num2 - skaičius; c) action - (matematinis veiksmas kaip string pvz. “substraction”). Būtina, kad funckija validuotų ar num1 ir num2 yra skaičiai.
// Priklausomai trečio argumento (action), su pirmais dviem (num1 ir num2) bus atliekamas matematinis veiksmas ir kviečiama viena iš keturių funkcijų, kurios priims du argumentus (num1 ir num2) ir grąžins atlikta veiksmą.
// Pastaba: šios funkcijos: addition(), subtraction(), multiplication(), division() turi būti kviečiamas calculateValue() viduje, o aprašomos išorėje.
let addition = (num1, num2) => num1 + num2;
let subtraction = (num1, num2) => num1 - num2;
let multiplication = (num1, num2) => num1 * num2;
let division = (num1, num2) => num1 / num2;
function calculateValue(num1, num2, action) {
  if (typeof num1 !== 'number'|| typeof num2 !== 'number') return "num argumentas(-ai) - ne skaičius(-iai).";
  switch (action) {
    case "addition":
      return addition(num1, num2)
    case "subtraction":
      return subtraction(num1, num2)
    case "multiplication":
      return multiplication(num1, num2)
    case "division":
      return division(num1, num2)
    default:
      return "action argumento funkcija nerasta"
  }
}
console.log(calculateValue("a", 4, "addition"));
console.log(calculateValue(2, 4, "blabla"));
console.log(calculateValue(2, 4, "addition"));
console.log(calculateValue(2, 4, "subtraction"));
console.log(calculateValue(2, 4, "multiplication"));
console.log(calculateValue(2, 4, "division"));
