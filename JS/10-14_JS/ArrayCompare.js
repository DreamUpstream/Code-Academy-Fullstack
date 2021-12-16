function isEqual(first, second)
{
  return JSON.stringify(first) === JSON.stringify(second);
}
let arr1 = [1, 2, 3, 4];
let arr2 = [1, 2, 3, 4];
let arr3 = [1, 2, 3, 5];
let arr4 = [1, 2, 3, 4, 5];
console.log(isEqual(arr1, arr2)); 
console.assert(isEqual(arr1, arr2));
console.log(isEqual(arr1, arr3)); 
console.assert(isEqual(arr1, arr3) == false);
console.log(isEqual(arr1, arr4)); 
console.assert(isEqual(arr1, arr4) == false);
console.log(isEqual(arr3, arr4)); 
console.assert(isEqual(arr3, arr4) == false);
console.log(isEqual(arr4, arr4)); 
console.assert(isEqual(arr4, arr4));