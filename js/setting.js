function changeColor() {
    document.getElementById("txtColorChange").style.color=document.getElementById("colorPick").value;
}

function changeBgColor() {
    document.getElementById("body").style.backgroundColor=document.getElementById("bgColorPick").value;
} 

var rangeslider = document.getElementById("myRange");
var spantxt = document.getElementById("displayFontSize");
spantxt.innerHTML=rangeslider.value;
rangeslider.oninput = function () {
    spantxt.innerHTML = this.value;
}

$(document).ready(function() {
    $('input').on('input', function() {
        var txtChange = $(this).val();
        $('p').css('font-size', txtChange+'em')
    })
})