<?php
  require_once 'private/initialize.php';
  //Retireve product from Database
  $dvd = find_DVD();
  while ($prodDVD = $dvd->fetch_object()) {      
    $sku[] = $prodDVD->sku;
    $name[] = $prodDVD->name;
    $price[] = $prodDVD->price;
    $type[] = $prodDVD->size;
  }
  $furniture = find_Furniture();
  while ($prodFrn = $furniture->fetch_object()) {      
    $sku[] = $prodFrn->sku;
    $name[] = $prodFrn->name;
    $price[] = $prodFrn->price;
    $type[] = $prodFrn->dimensions;
  }
  $book = find_Book();
  while ($prodBK = $book->fetch_object()) {      
    $sku[] = $prodBK->sku;
    $name[] = $prodBK->name;
    $price[] = $prodBK->price;
    $type[] = $prodBK->weight;
  }
  $reSKU = $sku;
  $reNM = $name;
  $rePR = $price;
  $reTY = $type;
  
    // function deleteAll(){
      //   mass_delete_DVD();
      //   mass_delete_FRN();
      //   mass_delete_BK();
      // }
      // $massDel = deleteAll();  
      
?>
<html>
<link rel="stylesheet" href="/stylesheets/styles.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<div class="header">
    <table>
        <tr>
            <td>
                <h2>Product List</h2>
            </td>
            <td>
                <button type=" add" value="add" onclick="addProducts()">Add</button>
            </td>
            <td>
                <button type="delete" value="delete" onclick="removeProducts()" style="width: 112px; padding: 7px;">Mass
                    Delete</button>
            </td>
        </tr>
    </table>
    <hr>
</div>

<body>
    <div class="body" style="margin: auto;">
        <?php $prodC = count($reSKU);?>

        <div class="grid-container">
            <?php for($i=0;$i<$prodC;$i++) {?>
            <span id="sku" style="">
                <input type="checkbox" name="prodSKU[]" value="productID">
                <div style="text-align:center; line-height: 1.6em;">
                    <td>
                        <?php print_r($reSKU[$i]); ?><br>
                        <?php print_r($reNM[$i]); ?><br>
                        <?php print_r($rePR[$i]); ?><br>
                        <?php print_r($reTY[$i]); ?><br><br>
                    </td>
                </div>
            </span>
            <?php } ?>
        </div>

    </div>
</body>
<script type="text/javascript ">
function addProducts() {
    document.location.href = "/";
}
</script>


<div class="footer ">
    <hr>
    <p>ScandiWeb Test Assignment</p>
</div>

</html>