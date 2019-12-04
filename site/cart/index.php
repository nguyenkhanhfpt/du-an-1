<?php
    session_start();
    require '../../global.php';
    require '../../DAO/functionCart.php';

    extract($_REQUEST);

    if(array_key_exists('addCart', $_REQUEST)) {
        addCart($id_product, $name_product, $img_product, $quantity_product, $price_product);
        header('Location: ./ ');
    }

    else if(array_key_exists('addCartWithIcon', $_REQUEST)) {
        addCartWithIcon($id_product);
        header('Location: ./ ');
    }

    else if(array_key_exists('deleteProductCard', $_REQUEST)) {
        deleteProductCard($id_product);
        header('Location: ./ ');
    }
    
    else if(array_key_exists('updateCart', $_REQUEST)) {
        updateQuantifyCart($quantity_cart);
        header('Location: ./ ');
    }


    $view_name = 'displayCart.php';

    require '../layout.php';

?>