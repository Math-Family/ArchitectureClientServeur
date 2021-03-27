<?php
// https://www.phpliveregex.com/

$code="12string";
if(preg_match("/^[0-9]{2}[aA-zZ]*/", $code)) {
     echo " accepted " . $code;
}
?>
