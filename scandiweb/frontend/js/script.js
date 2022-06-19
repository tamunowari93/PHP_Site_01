function viewProducts() {
    document.location.href = "viewProducts.php";
}
$(document).ready(function() {
    var size = document.getElementById("size");
    var height = document.getElementById("height");
    var width = document.getElementById("width");
    var length = document.getElementById("length");
    var weight = document.getElementById("weight");
    var description = document.getElementById("description");
    var prod_type = {
        dvd: size,
        furniture: [height, width, length],
        book: weight,
    }
    $("select").change(function() {
        $(size).hide();
        $(height).hide();
        $(width).hide();
        $(length).hide();
        $(weight).hide();
        var typeId = prod_type[this.value];
        $(typeId).show(), $(description).show();
    });
});