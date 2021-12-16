

function joinStuff() {
    let output = '';
    for (let i = 0; i < arguments.length; i++) {
      output+=arguments[i];
    }
    return +output;
  }
  
console.assert(joinStuff(1,5,6,7,8) === 15678);