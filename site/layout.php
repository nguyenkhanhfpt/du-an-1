<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food & Drinks</title>
    <script src="https://kit.fontawesome.com/a5910b1756.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- MA5 Slider-->
    <script src="<?= $URL_JS ?>/jquery-ui.min.js"></script>
    <link href="<?= $URL_CSS ?>/ma5slider.min.css" rel="stylesheet" type="text/css">
    <script src="<?= $URL_JS ?>/ma5slider.min.js"></script>
    <script>
        $(window).on('load', function() {
            $('.ma5slider').ma5slider();
        });
    </script>

    <link rel="stylesheet" href="<?= $URL_CSS ?>/index.css">
    <link rel="stylesheet" href="<?= $URL_CSS ?>/viewProduct.css">
    <link rel="stylesheet" href="<?= $URL_CSS ?>/product.css">
</head>

<body>
    <!-- phần hotline -->
    <?php require 'components/hotline.php' ?>

    <!-- Phần menu -->
    <?php require 'components/menu.php' ?>

    <?php require $view_name; ?>

    <?php require 'components/footer.php' ?>


    <div id="stop" class="scrollTop d-none d-md-block" style="position:fixed;bottom: 90px;right: 55px;">
        <a href=""><i class="fa fa-angle-double-up"></i></a>
    </div>

    <script>
        $(document).ready(function() {
            var scrollTop = $(".scrollTop");

            $(scrollTop).css("opacity", "0");


            $(window).scroll(function() {
                var topPos = $(this).scrollTop();

                if (topPos > 100) {
                    $(scrollTop).css("opacity", "1");

                } else {
                    $(scrollTop).css("opacity", "0");
                    $(scrollTop).css("transition", "linear .3s");
                }
            });
            $(scrollTop).click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 800);
                return false;
            }); 
        }); 
    </script>

</body>

</html>