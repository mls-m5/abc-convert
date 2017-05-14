

var textarea = document.getElementById("abc");
var img = document.getElementById("abcimage");

String.prototype.replaceAll = function(search, replacement) {
    var target = this;
    return target.split(search).join(replacement);
};

function change() {
    var str = textarea.value;
    str = str.replaceAll("\n", "%0A");
    str = str.replaceAll(" ", "%20");
    img.src = "image.php?abc=" + str;
}

textarea.addEventListener("keyup", change);