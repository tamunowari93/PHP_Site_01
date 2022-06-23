<?PHP
  // Get Form Data & Redirect to List Page
  $sku = htmlspecialchars($_POST['sku']);
  $name = htmlspecialchars($_POST['name']);
  $price = htmlspecialchars($_POST['price']);
  $type = htmlspecialchars($_POST['prodtype']);
  $size = htmlspecialchars($_POST['size']);
  $height = htmlspecialchars($_POST['height']);
  $width = htmlspecialchars($_POST['width']);
  $length = htmlspecialchars($_POST['length']);
  $weight_kg = htmlspecialchars($_POST['weight']);

  echo $sku;
  // Pass Form Data to Model Controller
    
  // Validate and Save to Database


?>