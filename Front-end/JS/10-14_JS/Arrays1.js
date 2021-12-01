// let styles = ['Jazz', 'Blues']
// styles.push('Rock-n-Roll');
// styles[1] = 'Classics';
// console.log(styles.shift());
// styles.unshift("Rap", "Reggae");
// console.log(styles);
function getMaxSubSum(arr) {
    let sum = 0;
    for (let i = 0; i < arr.length; i++)
    {
        if (arr[i] > 0)
        sum += arr[i]
    }
    return sum;
}

let arr = [11, -2, 34, 45, 19, 6];
console.assert(getMaxSubSum(arr) == 115);