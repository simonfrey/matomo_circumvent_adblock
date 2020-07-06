<?php
$cfgConfigFile = './mjs_config.json';
$keys = array("action_name","idsite","rec","r","urlref","url","_id","_idts","_idvc","_idn","_refts","_viewts","send_image","gt_ms","pv_id");


if (!file_exists($cfgConfigFile)) {
    // Create file with replace values

    function generateRandomString($length = 3) {
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


    $cfgObj = array();

    // Move files
    $jsFilename = generateRandomString(7).".php";
    $phpFilename = generateRandomString(7).".php";
    copy("./mm.php", "./".$phpFilename);
    copy("./mjs.php", "./".$jsFilename);
    $cfgObj["jsFilename"] = $jsFilename;
    $cfgObj["phpFilename"] = $phpFilename;


    // Generate replace values
    $newReplaceValues = array();


    foreach ($keys as $k => $key) {
        $replacedKey = generateRandomString();
        
        while(array_key_exists($replacedKey,$newReplaceValues)){
            $replacedKey = generateRandomString(4);
        }
        

        $newReplaceValues[$replacedKey] = $key;
    }


    $cfgObj["replacedToOriginal"]=$newReplaceValues;
    file_put_contents($cfgConfigFile, json_encode($cfgObj));
}

$cfgJSON = file_get_contents($cfgConfigFile);
$cfgObj =  json_decode($cfgJSON);

$replacedToOriginal =  (array) $cfgObj->replacedToOriginal;
$originalToReplaced = array_flip($replacedToOriginal);

$jsFilename =  $cfgObj->jsFilename;
$phpFilename =  $cfgObj->phpFilename;
?>