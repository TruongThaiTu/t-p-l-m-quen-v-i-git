<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        <?= $title ?> | Quản trị Admin
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <?php
    if (isset ($style) && $style) {
        require_once PATH_VIEW_ADMIN . 'styles/' . $style . '.php';
    }

    if (isset ($style2) && $style2) {
        require_once PATH_VIEW_ADMIN . 'styles/' . $style2 . '.php';
    }
    ?>

    <?php
    if (isset ($script2) && $script2) {
        require_once PATH_VIEW_ADMIN . $script2 . '.php';
    } ?>
</head>

<body onload="time()" class="app sidebar-mini rtl">


    <!-- Navbar-->
    <?php require_once PATH_VIEW_ADMIN . "layout/partials/topbar.php"; ?>


    <!-- Sidebar-->

    <?php require_once PATH_VIEW_ADMIN . "layout/partials/sidebar.php"; ?>
    <?php require_once PATH_VIEW_ADMIN . $view . '.php'; ?>

    <!-- footer-->
    <?php require_once PATH_VIEW_ADMIN . "layout/partials/footer.php"; ?>



    <script src="<?= BASE_URL ?>assets/doc/js/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= BASE_URL ?>assets/doc/js/popper.min.js"></script>
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <!--===============================================================================================-->
    <script src="<?= BASE_URL ?>assets/doc/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= BASE_URL ?>assets/doc/js/main.js"></script>
    <!--===============================================================================================-->
    <script src="<?= BASE_URL ?>assets/doc/js/plugins/pace.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="<?= BASE_URL ?>assets/doc/js/plugins/chart.js"></script>
    <!--===============================================================================================-->
    <!-- <script type="text/javascript">
        var data = {
            labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6"],
            datasets: [{
                label: "Dữ liệu đầu tiên",
                fillColor: "rgba(255, 213, 59, 0.767), 212, 59)",
                strokeColor: "rgb(255, 212, 59)",
                pointColor: "rgb(255, 212, 59)",
                pointStrokeColor: "rgb(255, 212, 59)",
                pointHighlightFill: "rgb(255, 212, 59)",
                pointHighlightStroke: "rgb(255, 212, 59)",
                data: [20, 59, 90, 51, 56, 100]
            },
            {
                label: "Dữ liệu kế tiếp",
                fillColor: "rgba(9, 109, 239, 0.651)  ",
                pointColor: "rgb(9, 109, 239)",
                strokeColor: "rgb(9, 109, 239)",
                pointStrokeColor: "rgb(9, 109, 239)",
                pointHighlightFill: "rgb(9, 109, 239)",
                pointHighlightStroke: "rgb(9, 109, 239)",
                data: [48, 48, 49, 39, 86, 10]
            }
            ]
        };
        var ctxl = $("#lineChartDemo").get(0).getContext("2d");
        var lineChart = new Chart(ctxl).Line(data);

        var ctxb = $("#barChartDemo").get(0).getContext("2d");
        var barChart = new Chart(ctxb).Bar(data);
    </script> -->
    <?php require_once PATH_VIEW_ADMIN . 'scripts/' . $script . '.php'; ?>
</body>

</html>