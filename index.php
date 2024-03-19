<?php
require_once './commons/env.php';
require_once './commons/helper.php';
require_once './commons/connect_db.php';
require_once './commons/model.php';
// require_once './views/header.php';
// require_once './views/body.php';
// require_once './views/footer.php';

require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);


//
$act = $_GET['act'] ?? '/';
match ($act) {
    '/' => index(),
    'user-detail' => userDetail($_GET['id'])
};


require_once './commons/disconnect_db.php';