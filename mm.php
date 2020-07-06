<?php
require("./mjs_cfg.php");
foreach ($replacedToOriginal as $key => $value) {
    if (isset($_GET[$key])) {
        $_GET[$value] = $_GET[$key];
        unset($_GET[$key]);
    }
}
header('Content-Type: image/jpeg');
require("./piwik.php");
?>
