function getTime() {
    let date = new Date(),
        min = date.getMinutes(),
        sec = date.getSeconds(),
        hour = date.getHours();

    return "" + 
        (hour < 10 ? ("0" + hour) : hour) + ":" + 
        (min < 10 ? ("0" + min) : min) + ":" + 
        (sec < 10 ? ("0" + sec) : sec);
}

window.onload = () => 
{
    let xhr = new XMLHttpRequest();
    xhr.open('GET', 'http://api.openweathermap.org/data/2.5/weather?id=1705545&appid=92d5fe3cecffc99c80d53779bf2413bb&units=metric');

    xhr.onload = () => {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                let json = JSON.parse(xhr.responseText);
                console.log(json);
                document.getElementById("temp").innerHTML = json.main.temp + " °C";
                document.getElementById("weather-description").innerHTML = json.weather[0].description;
                document.getElementById("feels_like").innerHTML = json.main.feels_like + " °C";
            } else {
                console.log('error msg: ' + xhr.status);
            }
        }
    }
    xhr.send();
    document.getElementById("time").innerHTML = getTime();
    setInterval( () => {
        document.getElementById("time").innerHTML = getTime();
    },100);
}