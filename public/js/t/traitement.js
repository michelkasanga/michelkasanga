
let titre = document.getElementsById('traitement');
let texte = "...";
let index =0;


 const player = () => {

    


        titre.innerHTML  = "traitement"+texte.slice(0, index);
    index++;
    if(index>texte.length){
        index = 0;

    }
    };

          
  
    

let  time = setInterval(player,200);