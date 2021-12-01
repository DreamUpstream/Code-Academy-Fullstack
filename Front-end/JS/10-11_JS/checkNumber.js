function checkNumber(num) {
    let ats = "Skaicius nesidalija is 3 ir 5";
    if (+num % 3 == 0 && +num % 5 == 0) ats = "Skaicius dalijasi is 3 ir 5";
    else if (+num % 3 == 0) ats = "Skaicius dalijasi is 3";
    else if (+num % 5 == 0) ats = "Skaicius dalijasi is 5";
    return ats;
}
console.log(checkNumber(15));