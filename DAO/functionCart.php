<?php
    require 'database.php';
    require 'functionProduct.php';

    function addCart($id_product, $name_product, $img_product, $quantity_product, $price_product) {

        // kiểm tra, nếu đã có id của sản phẩm trong cart thì cộng số lượng vừa nhập vào số lượng hiện tại trong cart
        if(isset($_SESSION['cart'][$id_product])) {
            $_SESSION['cart'][$id_product]['quantity_product'] += $quantity_product;
            return; // Khi làm xong thì return để không thục hiện hàm ở dưới
        }

        $item = array(
            'name_product' => $name_product,
            'img_product' => $img_product,
            'id_product' => $id_product,
            'quantity_product' => $quantity_product,
            'price_product' => $price_product
        );

        $_SESSION['cart'][$id_product] = $item;
    }

    // Thêm vào giỏ hàng bằng icon
    function addCartWithIcon($id_product) {
        global $db;
        $product = selectProduct($id_product);

        if(isset($_SESSION['cart'][$id_product])) {
            $_SESSION['cart'][$id_product]['quantity_product'] += 1;
            return;
        }

        $item = array(
            'name_product' => $product['name_product'],
            'img_product' => $product['img_product'],
            'id_product' => $product['id_product'],
            'quantity_product' => 1,
            'price_product' => ((100 - $product['sale']) / 100 ) * $product['price_product']
        );

        $_SESSION['cart'][$id_product] = $item;
    }

    function deleteProductCard($id_product) {
        unset($_SESSION['cart'][$id_product]);
    }   

    function sumPrice() {
        $sum = 0;
        foreach($_SESSION['cart'] as $key => $product) {
            $sum += $product['price_product'] * $product['quantity_product'];
        }

        return $sum;
    }

    function updateQuantifyCart($quantity_cart) {
        foreach($quantity_cart as $key => $newQuantify) {
            $_SESSION['cart'][$key]['quantity_product'] = (int) $newQuantify;
        }
    } 
    

?>