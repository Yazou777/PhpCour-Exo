var bouton =document.querySelector('button');
bouton.addEventListener("click" ,function() {
    console.log(typeof this);
    console.log(this);
})