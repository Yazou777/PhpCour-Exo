
document.write("Saisissez un texte puis pressez le bouton 'Contrôle'"+"<p><input type=text name=adresse id=input>"+"<button id=button1>Contrôler</button></p>");

document.querySelector('#button1').onclick = function() 
{
    var prenom = document.querySelector('#input').value;
    alert('Vous avez saisi: '+prenom);
} 


