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
    document.getElementById("time-main").innerHTML = getTime();
    setInterval( () => {
        document.getElementById("time-main").innerHTML = getTime();
    },100);
}

document.addEventListener("click", event => 
{
    console.log("hi");
    document.getElementById('login').style.display = 'flex';
    document.getElementById('time-main').style.display = 'none';

});