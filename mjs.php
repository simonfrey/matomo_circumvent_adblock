<?php
require("./mjs_cfg.php");
$matomoJS = file_get_contents("./matomo.js");

// Replace values
$matomoJS =  str_replace("action_name=",$originalToReplaced["action_name"]."=",$matomoJS);

foreach ($keys as $k => $rKey) {
    if ($rKey == "action_name"){
        continue;
    }

    $matomoJS =  str_replace("&".$rKey."=","&".$originalToReplaced[$rKey]."=",$matomoJS);
}

header('Content-Type: application/javascript');
echo $matomoJS;
?>
