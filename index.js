function getTime() {
    let date = new Date(),
        day = date.getDate(),
        month = date.getMonth(),
        year = date.getYear();

    return "" + 
        (year + 1900) + "/" + 
        (month < 10 ? ("0" + month) : month) + "/" + 
        (day < 10 ? ("0" + day) : day);
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