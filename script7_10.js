
//Set time
function currentTime() {
    
    let date = new Date();
    let hh = date.getHours();
    let mm = date.getMinutes();
    let ss = date.getSeconds();
    
    showTheTime(hh, mm, ss);
    var t = setTimeout(function(){ currentTime() }, 1000);
}

// Show the time
function showTheTime(hh, mm, ss) {
    
    hh = (hh < 10) ? "0" + hh : hh;
    mm = (mm < 10) ? "0" + mm : mm;
    ss = (ss < 10) ? "0" + ss : ss;
   
    let time = hh + ":" + mm + ":" + ss + " ";

    document.getElementById("clock1").innerText = time; // az első időblokk feltöltése
    document.getElementById("clock2").innerText = time; // a második időblokk feltöltése
    document.getElementById("clock3").innerText = time;  //  a harmadik időblokk feltöltése
}

//Carousel
var slideIndex = 0;
function carousel() {

    let x = document.getElementsByClassName("mySlides");
    for (var i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }

    slideIndex++;
    if (slideIndex > x.length) {
        slideIndex = 1
    } 
    x[slideIndex-1].style.display = "block";

    setTimeout(carousel, 4000); 
}


function weatherAbony(){
    //var button = document.querySelector('.button');
    //var inputValue = document.querySelector('.inputValue');

    /*button.addEventListener('click', function(){*/      //     inputValue.value
    fetch('https://api.openweathermap.org/data/2.5/weather?q=' + 'Abony' + '&units=metric&lang=hu&appid=1b9398d38b13dfefd81a6195c9d4a284')
    .then(response => response.json())
    .then(data => {
        var nameValue = data['name'];
        var tempValue = data['main']['temp'];
        var descValue = data['weather'][0]['description'];

        // az első hőmérsékleti blokk feltöltése
        document.getElementById('name').innerHTML = nameValue.toUpperCase();
        document.getElementById('temp').innerHTML = "Hőmérséklet: " + tempValue + "&degC";
        document.getElementById('desc').innerHTML = descValue.toUpperCase();

// a második hőmérsékleti blokk feltöltése
        document.getElementById('name2').innerHTML = nameValue.toUpperCase();
        document.getElementById('temp2').innerHTML = "Hőmérséklet: " + tempValue + "&degC";
        document.getElementById('desc2').innerHTML = descValue.toUpperCase();

    // a harmadik hőmérsékleti blokk feltöltése
        document.getElementById('name3').innerHTML = nameValue.toUpperCase();
        document.getElementById('temp3').innerHTML = "Hőmérséklet: " + tempValue + "&degC";
        document.getElementById('desc3').innerHTML = descValue.toUpperCase();
        //console.log(data);
    })  
    
    setTimeout(weatherAbony, 600 * 1000);
}

function Main(){
    
    currentTime();
    carousel();
    weatherAbony();
}
Main();