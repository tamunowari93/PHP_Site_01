<?PHP
    function pageDetails() {
        getheadNav();
        getBody();
        footer();
    }
    
    function getheadNav() {
        $title = 'Add Products';
        echo $title;
    }
    
    function getBody() {
        productForm();
    }

    function productForm() {
        // For Product Input Form
        $productEntry = '<br>'.'Products Input Form';
        echo $productEntry;
    }
    
    function footer() {
        $footer = '<br>'.'Scandiweb Test';
        echo $footer;
    }
    

?>