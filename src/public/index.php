<?PHP
    // Redirect to Start
    header('Location: addProduct.html');
    die();
    
    protected function requireFile($file)
    {
        if (file_exists($file)) {
            require $file;
            return true;
        }
        return false;
    }
?>