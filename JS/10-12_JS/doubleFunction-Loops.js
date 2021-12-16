function resultPrinter1 ()
{
    let result = "";
    let number = '1';
    for (let i = 0; i < 9; i++)
    {
        
        result+=`${number}`.repeat(3);
        number++;
    }
    console.log(result);
}
function resultPrinter2 ()
{
    let result="";
    for (let i = 11; i <= 31; i += 10){
        for (let j = 0; j <= 2; j++){
            let num = i + j;
            result+=num + " ";
        }
    }
    console.log(result);
}
resultPrinter1();
resultPrinter2();