<?php
require("./mjs_cfg.php");

header('Content-Type: text/html');


$path_parts = pathinfo($_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
$baseURL = "//".$path_parts['dirname']."/";

$siteID = "[REPLACE_WITH_SITE_ID]";
if (isset($_GET["siteID"])) {
    $siteID = $_GET["siteID"];
}
?>
<pre>
&lt;script&gt;
    var _paq = _paq || [];
    _paq.push(["trackPageView"]), _paq.push(["enableLinkTracking"]),
    function() {
        _paq.push(["setTrackerUrl", "<?php echo $baseURL.$phpFilename;?>"]), _paq.push(["setSiteId", "<?php echo $siteID;?>"]);
        var a = document, r = a.createElement("script"), s = a.getElementsByTagName("script")[0];
        r.async = !0, r.defer = !0, r.src = "<?=$baseURL.$jsFilename;?>", s.parentNode.insertBefore(r, s)
    }();
&lt;/script&gt;
&lt;noscript&gt;&lt;img src="<?php echo $baseURL.$phpFilename."?".$originalToReplaced["idsite"]."=".$siteID."&".$originalToReplaced["rec"];?>=1" /&gt;&lt;/noscript&gt;
</pre>