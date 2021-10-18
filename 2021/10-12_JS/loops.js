function forLoopExample(sk){
    let temporaryArray = []
    for (let i = 2; i <= sk; i += 2){ 
        temporaryArray.push(i)
    }
    return "For loop: " + temporaryArray.join(", ")
}
function doWhileLoopExample(sk){
    let temporaryArray = []
    let i = 2;
    if (sk >= 2){
        do{ 
            temporaryArray.push(i)
            i+=2;
        } while (i <= sk)
    }
    return "Do while loop: " + temporaryArray.join(", ");
}
function whileLoopExample(sk){
    let temporaryArray = []
    let i = 2;
    while (i <= sk){ 
        temporaryArray.push(i)
        i+=2;
    }
    return "While loop: " + temporaryArray.join(", ")
}

console.log(forLoopExample(+prompt("[FOR LOOP] Enter a number until which you would like to print even numbers")));
console.log(doWhileLoopExample(+prompt("[DO WHILE LOOP] Enter a number until which you would like to print even numbers")));
console.log(whileLoopExample(+prompt("[WHILE LOOP] Enter a number until which you would like to print even numbers")));
