function longestWordCharacters(string) {   
    let array = string.split(" ");
    let wordLength = array.map(function(i) {
      return i.length;                       
    });   
    let longest  = Math.max.apply(Math, wordLength);   
    return longest; 
 }
 console.log(longestWord('Maronas Ponas'));