function customFill(len, letter)
{
    let i = 0;
    let arr = [];
    while (i < len)
    {
        arr.push(letter);
        i++;
    }
    return arr;
}
console.log(customFill(3, 'a'));
console.assert(customFill(3, 'a') == ['a', 'a', 'a']);
console.log(customFill(4, 'b'));
console.assert(customFill(4, 'b') == ['b', 'b', 'b', 'b']);