<html>
<link rel="css" href="/css/css.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<form action="addProducts.php" id="add_product" method="post">
    <div class="header">
        <table>
            <tr>
                <td>
                    <h2>Product Add</h2>
                </td>
                <td>
                    <button type="submit" value="submit">Save</button>
                </td>
                <td>
                    <button type="reset" id="cancel" onclick="viewProducts()">Cancel</button>
                </td>
            </tr>
        </table>
        <hr>
    </div>
    <div class="body">
        <table>
            <!-- CREATE FORM & GET INPUT VARIABLES FROM USER -->
            <tr>
                <td><label for="sku">SKU</label><br></td>
                <td><input type="text" id="sku" name="sku" required></td>
            </tr>
            <tr>
                <td><label for="name">Name</label></td>
                <td><input type="text" id="name" name="name" required></td>
            </tr>
            <tr>
                <td><label for="price">Price ($)</label></td>
                <td><input type="text" id="price" name="price" required></td>
            </tr>
            <tr>
                <td><label for="type">Product type</label></td>
                <td><select name="prodtype" style="padding: 5px;" required>
                        <option selected disabled>--select Type--</option>
                        <option id="dvd" value="dvd">DVD</option>
                        <option id="furniture" value="furniture">Furniture</option>
                        <option id="book" value="book">Book</option>
                    </select>
                </td>
            </tr>
            <tr id="size" style="display:none; border: top 2px solid;">
                <td><label for="size">Size (MB)</label></td>
                <td><input type="text" name="size"></td>
            </tr>
            <tr id="height" style="display:none; border: top 2px solid;">
                <td><label for="height">Height (CM)</label></td>
                <td><input type="text" name="height"></td>
            </tr>
            <tr id="width" style="display:none; border: top 2px solid;">
                <td><label for="width">Width (CM)</label></td>
                <td><input type="text" name="width"></td>
            </tr>
            <tr id="length" style="display:none; border: top 2px solid;">
                <td><label for="length">Length (CM)</label></td>
                <td><input type="text" name="length"></td>
            </tr>
            <tr id="weight" style="display:none; border: top 2px solid;">
                <td><label for="weight">Weight (kg)</label></td>
                <td><input type="text" name="weight"></td>
            </tr>
            <tr id="description" style="display:none; border: top 2px solid;">
                <td><label for="description">Description</label></td>
                <td>
                    <textarea type="text" name="description" style="font-family:12px Helvetica, serif;"
                        required></textarea>
                </td>
            </tr>
        </table>
    </div>
</form>

<script type="text/javascript">
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
</script>

<div class="footer ">
    <hr>
    <p>ScandiWeb Test Assignment</p>
</div>

</html>