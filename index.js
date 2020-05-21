var carlin = document.getElementById('carlin');

carlin.onclick = function() {
    var mySrc = carlin.getAttribute('src');

    if(mySrc === 'images/map_carlin.jpg') {
        carlin.setAttribute ('src','images/carlin-art.gif');
        carlin.style.height="350px"
        carlin.style.width="700px"
        carlin.style.transition="all 300ms linear";
    } else {
        carlin.setAttribute ('src','images/map_carlin.jpg');
        carlin.style.height="340px"
        carlin.style.width="350px"
        carlin.style.transition="all 300ms linear";
    }
}

var thais = document.getElementById('thais');

thais.onclick = function() {
    var mySrc = thais.getAttribute('src');

    if(mySrc === 'images/map_thais.jpg') {
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
}

var venore = document.getElementById('venore');

venore.onclick = function() {
    var mySrc = venore.getAttribute('src');

    if(mySrc === 'images/map_venore.jpg') {
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
}

var kazordoon = document.getElementById('kazordoon');

kazordoon.onclick = function() {
    var mySrc = kazordoon.getAttribute('src');

    if(mySrc === 'images/map_kazordoon.jpg') {
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
}

var abdendriel = document.getElementById('abdendriel');

abdendriel.onclick = function() {
    var mySrc = abdendriel.getAttribute('src');

    if(mySrc === 'images/map_abdendriel.jpg') {
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
}

