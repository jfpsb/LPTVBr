<?php
if ($_SERVER ['HTTP_HOST'] === "linkinparktvbr.com" || $_SERVER ['HTTP_HOST'] === "www.linkinparktvbr.com") {
	if (@$_COOKIE ["LPTVBrCookie"] !== "1124") {
		include_once ("../analyticstracking.php");
	}
}
?>