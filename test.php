<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    
    <form action="test.php" method="POST">
        <textarea type="text" name="text" rows="3"></textarea>
        <input id="cart" name="cart" hidden>
        <input type="submit" name="submit" value="SUbmit">
    </form>

</body>
</html>

<script>
    var cart1 = {"ok" : 2 , "me" : 4 };
    cart.value = JSON.stringify(cart1);
    // console.log(cart1);
</script>

<?php

    if (isset($_POST["submit"])){
        echo $_POST["text"];
        $obj = json_decode($_POST["cart"]) ;
        $arr = [1,3,5];
        print_r($obj->ok);
    }

?>