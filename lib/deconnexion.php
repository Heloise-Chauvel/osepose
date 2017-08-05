<?php
/**
 * Created by PhpStorm.
 * User: Héloïse
 * Date: 05/08/2017
 * Time: 00:10
 */
session_start();
session_destroy();
header("Location:".$_SERVER['DOCUMENT_ROOT']."/osepose/index.php");
exit;
?>