// Process AddPage Requests & Validaton
// Get ViewPage Details


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

});

function pageDetails() {
    getheadNav();
    getBody();
    footer();
}

function getheadNav() {
    $title = 'Add Products';
    $title;
}

function getBody() {
    productForm();
}

function productForm() {
    // For Product Input Form
    $productEntry = '<br> Products Input Form';
    $productEntry;
}

function footer() {
    $footer = '<br> Scandiweb Test';
    $footer;
}