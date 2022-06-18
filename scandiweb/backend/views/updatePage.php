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
        productsData();
    }

    function productsData() {
        // For Product Input Form
        $productEntry = '<br>'.'Products Input Form';
        echo $productEntry;
    }
    
    function footer() {
        $footer = '<br>'.'Scandiweb Test';
        echo $footer;
    }
    

?>