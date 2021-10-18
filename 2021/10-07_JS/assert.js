let alphabetOrder = a => a.toString().split('').sort().join('');
console.assert(alphabetOrder('alphabetical') == 'aaabcehillpt');
//========Option 2:========
function alphabetOrder (s){
    let count = Array(256).fill(0);
    for(let i=0; i<= s.length; i++) {
    c=s.charCodeAt(i);
    count[c]++;
    }
    let out="";
    for(let i=0; i<= 255; i++) {
        for(let rep=0; rep<count[i]; rep++){
            out+=String.fromCharCode(i);
        }
    }
    return out;
}
console.assert(alphabetOrder('alphabetical') == 'aaabcehillpt');