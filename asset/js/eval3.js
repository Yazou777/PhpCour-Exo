var tab = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];
console.log(tab);
console.log(tab.length)



function recherche(prenom)
{
    var i = 0
while (i <tab.length)
{
    console.log(tab[i]);
  
if ( tab[i] == prenom )
{
    console.log("trouvé : "+prenom);
    tab.splice(i,1);
    tab.length =10;
    console.log(tab);
    i=0;
    var prenom=prompt("Saisisez un prénom");
}
i++;
}
alert("error");

}
recherche(prompt("Saisisez un prénom"));
console.log(tab);
console.log(tab.length)
document.write(tab)

console.log(tab.includes("Flavien" || "Audr"))