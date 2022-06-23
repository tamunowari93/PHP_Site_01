// Process AddPage Requests & Validaton
// Get ViewPage Details
$(document).ready(function() {
    let size = document.getElementById("divSize"),
        height = document.getElementById("divHeight"),
        width = document.getElementById("divWidth"),
        length = document.getElementById("divLength"),
        weight = document.getElementById("divWeight"),
        prod_type = {
            dvd: size,
            furniture: [height, width, length],
            book: weight
        };
    $("select").change(function() {
        $(size).hide();
        $(height).hide();
        $(width).hide();
        $(length).hide();
        $(weight).hide();
        var typeId = prod_type[this.value];
        $(typeId).show();
    });
    var validateForm = document.querySelectorAll('.needs-validation');
    const element = document.getElementById("saveButton");
    element.addEventListener("click", addProduct);

    function addProduct() {
        let productInfo = document.getElementById("productform");
        document.getElementById("productform").innerHTML = "Hello World";

    }
    // let products = [];
    // const addProduct = (ev) => {
    //     ev.preventDefault();
    //     let products = {
    //         sku: document.getElementById('sku').value,
    //         name: document.getElementById('name').value,
    //         price: document.getElementById('price').value,
    //     }
    //     products.push(product);
    //     document.forms[0].reset();

    //     console.log('added', { products });
    //     $("#productform").submit();

    // }
    // console.addEventListener('DOMContentLoad', () => {
    //     document.getElementById('saveButton').addEventListener('click', addProduct);
    // });

});