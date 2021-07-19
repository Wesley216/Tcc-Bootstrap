/*DEIXAR O BUTÃO DESABILITADO CASO OS INTUPS ESTEJA VAZIO*/ 
let b = document, [inputs, app] = [

    b.querySelectorAll('[type="text"]'),

    b.querySelector('#but')]

app.disabled = true;

for (i = 0; i < inputs.length; i++) {

  inputs[i].addEventListener('input',() => {

    let values = []

    inputs.forEach(v => values.push(v.value))

    app.disabled = values.includes('')

  })
  
  inputs[i].addEventListener('button',() => {

    let values = [];

    inputs.forEach(v => values.push(v.value))

    app.disabled = values.includes('')

  })
}

function mascara(tel){

  if(tel.value.length == 0)

      tel.value = '(' + tel.value; 

  if(tel.value.length == 3)

      tel.value = tel.value + ')'; 

  if(tel.value.length == 9)

      tel.value = tel.value + '-'; 

}

