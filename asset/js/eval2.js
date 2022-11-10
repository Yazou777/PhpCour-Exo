var x = prompt("entrez un nombre");

function TableMultiplication(x)
{ 
    var i = 1
    while (i <= 10)
    {
var resultat = i*x;
console.log(i+" * "+x+" = "+resultat);
i++;
    }
    return resultat;
}
var egal = TableMultiplication(x);
