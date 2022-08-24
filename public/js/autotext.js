{
    let title = document.getElementById('autotext');
let text = "Salut ! et Bienvenue sur mon portfolio  ";
let index =0;

 const play = () => {
        title.innerHTML  = text.slice(0, index)+" |";
        index++;
        if(index>text.length){
            index = 0;

        }
    }
    let  timer = setInterval(play,170);
									
};


          
  
    

		

{
let titre = document.getElementsById('traitement');
let texte = "...";
let indexe =0;

 const player = () => {
        titre.innerHTML  = "traitement"+texte.slice(0, indexe);
    indexe++;
    if(indexe>texte.length){
        indexe = 0;
    }
    };
let  time = setInterval(player,200);

};
