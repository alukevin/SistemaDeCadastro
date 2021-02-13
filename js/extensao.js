// Função para formatar 1 em 01


window.onload = function() {
    ShowTime();
    };
    function ShowTime() {
    var dt = new Date();
    document.getElementById("data-hora").innerHTML = dt.toLocaleTimeString();
    window.setTimeout("ShowTime()", 1000); // Here 1000(milliseconds) means one 1 Sec  
    }