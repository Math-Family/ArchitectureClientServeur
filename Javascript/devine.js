function init(){
    // retourne une valeur  comprise entre 0 et 10 
 
    rnd= Math.floor(Math.random()*11); 
    
        }
function controle( vl ){

    if (isNaN(vl)){
        alert("Farceur");
    }
    else {
        if (Number(vl)==rnd){ alert("Gangné"); }
        if (Number(vl)>rnd){ alert("C'est moins"); }
        if (Number(vl)<rnd){ alert("C'est  Plus"); }
    }

}

let d= setTimeout(gameOver, 5000 );
function gameOver(){
     rep= window.confirm("La partie est perdue et voulez-vous rejouer encore?");
    if( rep) {

        window.open("devine_js.html", " Devinez");
      
    }
    clearTimeout(d);

 
}

