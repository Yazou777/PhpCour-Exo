cl = console.log
function tableau()
{
    var tableau = [];
    do
    {
    var  Saisie = Number(window.prompt("Donnez une valeur numérique"));
    if (Saisie == null || Saisie == "" || Saisie == 0)  
    {
        return tableau;
        break;
    }

    tableau.push(Saisie)
    console.log(tableau);
        } while (Saisie != null && Saisie != "")  
    

}
var tableau =tableau();
cl(tableau);
cl("nombre de valeur saisie : "+tableau.length);
const initialValue = 0;
const sumWithInitial = tableau.reduce((previousValue, currentValue) => previousValue + currentValue, initialValue);
cl("la somme des valeurs = "+sumWithInitial);
cl("la moyenne est "+sumWithInitial/tableau.length);

