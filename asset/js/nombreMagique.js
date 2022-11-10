function getRandomInt(max) {
    return Math.floor(Math.random() * max);
  }
  
  var random = getRandomInt(11) 
  console.log(random)

function verif()
  {
    var input = document.querySelector('#input').value;
    if (input < random)
    {
        document.getElementById('label1').innerHTML = "<h1>TROP PETIT</h1>";
    }
    else if (input > random)
    {
        document.getElementById('label1').innerHTML = "<h1>TROP GRAND</h1>";
    }
     else
    {
        document.getElementById('label1').innerHTML = "<h1>GAGNÉ !</h1>";
    }
  }
