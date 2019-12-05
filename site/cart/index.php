<?php
    session_start();
    require '../../global.php';
    require '../../DAO/functionCart.php';
    require '../../DAO/functionBuyProduct.php';

    extract($_REQUEST);

    $err = '';
    $message = '';

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

    else if(array_key_exists('buyProduct', $_REQUEST)) {
        if(isset($_SESSION['id_customer'])){
            $id_bill = rand(10000,999999999);
            insertBill($id_bill, $_SESSION['id_customer']);
            // dùng vòng lặp lặp tất cả các sản phẩm trong cart để insert vào CSLD
            foreach($_SESSION['cart'] as $key => $product) {
                insertDetailBill($id_bill, $key, $product['quantity_product'], $product['price_product']);
                unset($_SESSION['cart'][$key]); // Mỗi lần thêm thì sẽ xóa sản phẩm ra khỏi cart
            }
            $message = 'Mua hàng thành công!';
        }
        else {
            $err = 'Phải đăng nhập để mua hàng';
        }
    }

    $view_name = 'displayCart.php';

    require '../layout.php';

?>