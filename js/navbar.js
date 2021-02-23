$(document).ready(function () {
    var person = localStorage.getItem("item");
    var obj = JSON.parse(person);
    console.log(obj);
    var total = 0;
    var list = localStorage.getItem("item");
    if (list !== null) {
        for (i = 0; i < obj.length; i++) {
            total += 1;
        }
        $("#itemcount").html("" + total)
    }
    $("#checkout").click(function () {
        window.location = "./shoppingCart.html"

    });
});
