
function getLaugh(num){
    let temporaryArray = []
    for (let i = 0; i < num; i += 1){ 
        temporaryArray.push("ha")
    }
    temporaryArray.push("!")
    return temporaryArray.join("")
}
console.log(getLaugh(+prompt("How many haha's?:")));
function getLaugh(num){
    let stringhah = "";
    for (let i = 0; i < num; i += 1){ 
        stringhah+="ha";
    }
    return stringhah+="!";
}
console.log(getLaugh(+prompt("How many haha's?:")));
console.log(`${[...Array(+prompt("How many haha's?:")).keys()].map(val => "ha").join('')}` + "!");