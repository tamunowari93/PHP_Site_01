<?PHP
    require_once'../data/initialize.php';    
    require_once'updatePage.php';
    require_once'viewPage.php';

    function getPage() {
        pageDetails();
    }

    echo 'Scandiweb Start!' . '<br><br>';
    getPage();

    
  

?>