function findSpecificWord(str, value){
    if (value == 'max')
    {
        return str.split(" ").reduce((a, b)=> b.length >= a.length ? b : a)
    }
    else
    {
        return str.split(" ").reduce((a, b)=>a.length <= b.length ? a : b)
    }
}

let max = findSpecificWord('Lorem ipsum, dolor sit amet consectetur', 'max');
let min = findSpecificWord('Lorem ipsum, dolor sit amet consectetur', 'm');

console.log(max);
console.log(min);
console.assert(max == 'consectetur');
console.assert(min == 'sit');