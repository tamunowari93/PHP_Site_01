<?PHP

    // Get Posted Data
    if ($_POST['productform'] == true) {
        $sku = htmlspecialchars($_POST['sku']);
        $name = htmlspecialchars($_POST['name']);
        $price = htmlspecialchars($_POST['price']);
        $size = htmlspecialchars($_POST['size']);
        $height = htmlspecialchars($_POST['height']);
        $width = htmlspecialchars($_POST['width']);
        $length = htmlspecialchars($_POST['length']);
        $weight_kg = htmlspecialchars($_POST['weight']);
      
        echo $sku;
    }

    // Redirect to List View
    // header('Location: listProduct.html');
    // die();

?>