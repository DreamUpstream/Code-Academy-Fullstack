let i = 0
let minmaxArray = []
alert("Veskite skaicius. Kai noresite sustoti, iveskite -999")
while (true)
{
    i += 1;
    let temp = +prompt("Iveskite " + i + " skaiciu:");
    if(temp == -999) break;
    minmaxArray.push({
        "Skaiciaus nr.:": i,
        "Verte": temp
    });
}

function finder(minMaxMath, argumentArray, key) {
    let val = argumentArray[0][key];
    console.log(val);
    for(let i=1;i<argumentArray.length;i++) {
        val = minMaxMath(val, argumentArray[i][key])
    }
    return val;
}

alert("Didziausias skaicius yra: " + finder(Math.max, minmaxArray, "Verte"));
alert("Maziausias skaicius yra: " + finder(Math.min, minmaxArray, "Verte"));