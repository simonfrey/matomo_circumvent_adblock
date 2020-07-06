<?php
require("./mjs_cfg.php");
$matomoJS = file_get_contents("./matomo.js");

// Replace values
$matomoJS =  str_replace("action_name=",$originalToReplaced["action_name"]."=",$matomoJS);
$matomoJS =  str_replace("idsite=",$originalToReplaced["idsite"]."=",$matomoJS);
$matomoJS =  str_replace("rec=",$originalToReplaced["rec"]."=",$matomoJS);
$matomoJS =  str_replace("urlref=",$originalToReplaced["urlref"]."=",$matomoJS);
$matomoJS =  str_replace("&r=","&".$originalToReplaced["r"]."=",$matomoJS);

$matomoJS =  str_replace("&url=","&".$originalToReplaced["url"]."=",$matomoJS);
$matomoJS =  str_replace("&_id=","&".$originalToReplaced["_id"]."=",$matomoJS);
$matomoJS =  str_replace("&_idts=","&".$originalToReplaced["_idts"]."=",$matomoJS);

$matomoJS =  str_replace("&_idvc=","&".$originalToReplaced["_idvc"]."=",$matomoJS);
$matomoJS =  str_replace("&_idn=","&".$originalToReplaced["_idn"]."=",$matomoJS);
$matomoJS =  str_replace("&_refts=","&".$originalToReplaced["_refts"]."=",$matomoJS);
$matomoJS =  str_replace("&_viewts=","&".$originalToReplaced["_viewts"]."=",$matomoJS);
$matomoJS =  str_replace("&send_image=","&".$originalToReplaced["send_image"]."=",$matomoJS);
$matomoJS =  str_replace("&gt_ms=","&".$originalToReplaced["gt_ms"]."=",$matomoJS);
$matomoJS =  str_replace("&pv_id=","&".$originalToReplaced["pv_id"]."=",$matomoJS);

header('Content-Type: application/javascript');
echo $matomoJS;
?>
