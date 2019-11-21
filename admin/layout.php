<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Link char -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://www.chartjs.org/dist/2.9.3/Chart.min.js"></script>
    <script src="https://www.chartjs.org/samples/latest/utils.js"></script>

    <link rel="stylesheet" href="<?=$URL_CSS?>/admin.css">
</head>

<body>
    <div class="container-fluid p-0">
        <?php require('menu.php'); ?>

        <div class="content-right">
            <!-- Menu top -->
            <?php require('menu-top.php'); ?>

            <!-- Phần nội dung hiển thị -->
            <div class="content">
                <div class="main-content">
                    <?php require $view_name; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>