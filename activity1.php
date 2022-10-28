<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendo Machine</title>
</head>
<body>
    <h1>Vendo Machine</h1>

    <form method="post">
        <fieldset>
         <legend>Products:</legend>   
         <input type="checkbox" name="chkdrinks[]" id="chkCoke" value="Coke"> <label for="chkCoke">Coke - ₱15</label><br>
         <input type="checkbox" name="chkdrinks[]" id="chkSprite" value="Sprite"> <label for="chkSprite">Sprite - ₱20</label><br>
         <input type="checkbox" name="chkdrinks[]" id="chkRoyal" value="Royal"> <label for="chkRoyal">Royal - ₱20</label><br>
         <input type="checkbox" name="chkdrinks[]" id="chkPepsi" value="Pepsi"> <label for="chkPepsi">Pepsi - ₱15</label><br>
         <input type="checkbox" name="chkdrinks[]" id="chkMountain Dew" value="Mountain Dew"> <label for="chkMountain Dew">Mountain Dew - ₱20</label><br>
         </fieldset>

      <fieldset>
        <legend>Options:</legend>
        <label for="quantity">Size</label>
        <select id="size" name="drinks">
            <option value="Regular">Regular</option>
            <option value="Medium">Up-Size (add ₱5)</option>
            <option value="Jumbo">Jumbo (add ₱10)</option>
        </select>

          <label type="quantity">Quantity</label>
          <input type="number" id="quantity" name="quantity" min="1" max="1000">
          <input type="submit" name="btnProcess" value="Check Out">
      </fieldset>

    </form>
</body>
 


<?php
    if(isset($_POST['btnProcess']) && isset($_POST['chkdrinks'])) {
        $arrdrinks = $_POST['chkdrinks'];
        print_r($arrdrinks);
        echo $arrdrinks[0];
    }


?>
</html>