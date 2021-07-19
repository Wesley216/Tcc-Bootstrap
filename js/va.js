/* LIMITA OS NUMEROS NUM INPUT
function number(e) {
    let charCode = e.charCode ? e.charCode : e.keyCode;
    // charCode 8 = backspace   
    // charCode 9 = tab
   if (charCode != 8 && charCode != 9) {
       // charCode 48 equivale a 0   
       // charCode 57 equivale a 9
       let max = 2;
       let num = document.getElementById('qtd');           
            
       if ((charCode < 48 || charCode > 57)||(num.value.length >= max)) {
          return false;
       }
       
    }

    if (charCode != 8 && charCode != 9) {
        // charCode 48 equivale a 0   
        // charCode 57 equivale a 9
        let max = 2;
        let num = document.getElementById('qdt');           
             
        if ((charCode < 48 || charCode > 57)||(num.value.length >= max)) {
           return false;
        }
        
     }
}*/

// Resultado em tempo Real
let $range2 = document.querySelector('#quantidade'),
    $value2 = document.querySelector('#result');

$range2.addEventListener('input', function() {
    $value2.textContent = this.value;
});

let $range3 = document.querySelector('#quantidade1'),
    $value3 = document.querySelector('#result1');

$range3.addEventListener('input', function() {
    $value3.textContent = this.value;
});
