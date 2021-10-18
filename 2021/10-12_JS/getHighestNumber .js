// let getHighestNumber = (...args) => {
//   let maxNumber = -Infinity;
//   let i = 0;
//   while (i < args.length)
//     return maxNumber = i == args.length-1 ? maxNumber =  args[i] > maxNumber ? args[i] :  maxNumber : i++;
// }
// console.log(getHighestNumber(34,7,8,55,6,56,7,9,52));

// for (let i = 0; i < args.length; i++) i == args.length-1 ? maxNumber =  args[i] > maxNumber ? args[i] :  maxNumber : returni++;

let getHighestNumberandLowest = (...args)=>[args.sort((x,y)=>x-y)[0],args.pop()].join(" ir ");
console.log(getHighestNumberandLowest(5, 6 ,10 ,54))
