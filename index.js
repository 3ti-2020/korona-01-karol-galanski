var carlin = document.getElementById('carlin');

carlin.addEventListener('click', function() {
    var imageSrc = carlin.getAttribute('src'); // sprawdza jaka nazwa znajduje się w src i przypisuje ją do zmiennej imageSrc

    if(imageSrc === 'images/map_carlin.jpg') { // jesli src jest równy map_carlin.jpg to: 
        carlin.setAttribute ('src','images/carlin-art.gif'); // wkleja w atrybut src inny obrazek 
        carlin.style.height="350px" // 
        carlin.style.width="700px" // przypisuje mu dana wysokość i szerokość 
        carlin.style.transition="all 300ms linear"; // smooth przejście między zmieniającymi się obrazkami 
    } else {
        carlin.setAttribute ('src','images/map_carlin.jpg');
        carlin.style.height="340px"
        carlin.style.width="350px"
        carlin.style.transition="all 300ms linear";
    }
});


var thais = document.getElementById('thais');

thais.addEventListener('click', function() {
    var imageSrc = thais.getAttribute('src'); 

    if(imageSrc === 'images/map_thais.jpg') {
        thais.setAttribute ('src','images/thais-art.png');
        thais.style.height="350px"
        thais.style.width="700px"
        thais.style.transition="all 300ms linear";
    } else {
        thais.setAttribute ('src','images/map_thais.jpg');
        thais.style.height="340px"
        thais.style.width="350px"
        thais.style.transition="all 300ms linear";
    }
});

var venore = document.getElementById('venore');

venore.addEventListener('click', function() {
    var imageSrc = venore.getAttribute('src'); 

    if(imageSrc === 'images/map_venore.jpg') {
        venore.setAttribute ('src','images/Venore_Swamp.jpg');
        venore.style.height="350px"
        venore.style.width="700px"
        venore.style.transition="all 300ms linear";
    } else {
        venore.setAttribute ('src','images/map_venore.jpg');
        venore.style.height="340px"
        venore.style.width="350px"
        venore.style.transition="all 300ms linear";
    }
});

var kazordoon = document.getElementById('kazordoon');

kazordoon.addEventListener('click', function() {
    var imageSrc = kazordoon.getAttribute('src'); 

    if(imageSrc === 'images/map_kazordoon.jpg') {
        kazordoon.setAttribute ('src','images/kazoodron-art.jpg');
        kazordoon.style.height="300px"
        kazordoon.style.width="400px"
        kazordoon.style.transition="all 300ms linear";
    } else {
        kazordoon.setAttribute ('src','images/map_kazordoon.jpg');
        kazordoon.style.height="340px"
        kazordoon.style.width="350px"
        kazordoon.style.transition="all 300ms linear";
    }
});

var abdendriel = document.getElementById('abdendriel');

abdendriel.addEventListener('click', function() {
    var imageSrc = abdendriel.getAttribute('src'); 

    if(imageSrc === 'images/map_abdendriel.jpg') {
        abdendriel.setAttribute ('src','images/Abdendriel-art.png');
        abdendriel.style.height="350px"
        abdendriel.style.width="700px"
        abdendriel.style.transition="all 300ms linear";
    } else {
        abdendriel.setAttribute ('src','images/map_abdendriel.jpg');
        abdendriel.style.height="340px"
        abdendriel.style.width="350px"
        abdendriel.style.transition="all 300ms linear";
    }
});

