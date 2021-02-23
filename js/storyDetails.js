$(document).ready(function () {
    var person = localStorage.getItem("item");
    var obj = JSON.parse(person);
    console.log(obj);
    var total = 0;
    var list = localStorage.getItem("item");
    if (list !== null) {
        for (i = 0; i < obj.length; i++) {
            total += parseInt(obj[i].qty);
        }
        $("#itemcount").html("" + total)
    }
    $("#products").click(function () {
        var personList = [];
        var list = localStorage.getItem("item");
        if (list !== null) {
            personList = JSON.parse(list);
        }
        var item = {};
        item.name = $row['title'];
        item.price = $("[name=itemprice]").val();
        item.qty = $("[name=itemqty]").val();
        personList[personList.length] = item;
        localStorage.setItem("item", JSON.stringify(personList));

    });
});


