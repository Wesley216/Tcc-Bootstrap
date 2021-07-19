let data = new Date;

/*
DiaSem[0] = "Domingo";
DiaSem[1] = "Segunda";
DiaSem[2] = "Terça";
DiaSem[3] = "Quarta";
DiaSem[4] = "Quinta";
DiaSem[5] = "Sexta";
DiaSem[6] = "Sabado";
*/
if(data.getDay() === 5 && 6){

    window.onload = function(){

            document.getElementById('b0').onclick = function(){

                alert("Promoção indisponivel, tente apartir de Segunda.")

                return false;
            }

            document.getElementById('bt').onclick = function(){

                alert("Promoção indisponivel, tente apartir de Segunda.")

                return false;
            }

        }

}else{

    window.onload = function(){

        document.getElementById('b0').onclick = function(){

            return true;
        }
    }

    window.onload = function(){

        document.getElementById('bt').onclick = function(){

            return true;
        }
    }
}