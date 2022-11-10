
   var jeune = 0; 
   var adulte = 0;
   var vieux = 0;
do{
   
    var x= Number(prompt("Quelle age avez vous ?"));
    if (x <20)
    {
         jeune++;
         console.log(jeune);    
    }

    if (x >=20 && x <=40)
    {
         adulte++;
         console.log(adulte);    
    }

    if (x >40)
    {
         vieux++;
         console.log(vieux);    
    }
} while (x !=100)

console.log("il y a "+jeune+" jeune(s).");
console.log("il y a "+adulte+" adulte(s).");  
console.log("il y a "+vieux+" vieux.");  