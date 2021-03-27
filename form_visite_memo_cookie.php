<?php 
// Trouver le nom md5
// Verifier en utilisant isset si le cookie existe deja 
//SI LE COOKIE n'existe pas on cree un fichier et on met N et A dedans 
//Sinon on verifie a nouveau avec md5 si le resultat est egale au nom du fichier 
//Si non, on renvoi une erruer 403  
//Sinon il incremente N dans le fichier et cree un cookie visite_mem et retourne N 

function memorise_cookie(){
    if(!(isset($_COOKIE['visite']))){//verifier si le cooie  n'existe 
        //On cree un ficheir 
        $nom_fic= $_SERVER['REMOTE_ADDR']. $_SERVER['HTTP_HOST']; 
        $A=mt_rand();
        $nom_fic= md5($nom_fic.$A);//Recuperer le nom du fichier hachee 
        $N=1; 
        file_put_contents('/COOKIE/$nom_fic' , "$N\n$A"); //Ecriture dans le fichier; 
    }
    else{
        $lec=array(); 
        $lec= file($visite);//Lire le fichier et stocker les valeurs lues dans le tableau lec
        //Recalculer le nom du fichier 
        $nom_fic2= $_SERVER['REMOTE_ADDR']. $_SERVER['HTTP_HOST'].$lec[1];
        if($nom_fic2 != $visite){
            return header("Status: 403 Forbidden");
        }
        else{
            $n= $lec[0] +1; 
            $a=$lec[1]; 
            file_put_contents($visite, "$n\n$a" );
            set_cookie("visite_mem", $visite );
            return $n;  
        }
    }



?> 