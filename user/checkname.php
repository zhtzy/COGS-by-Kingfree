<?php
require_once("../include/header.php");
$p = new DataAccess();
if($name = $_GET['name']) {
    $sql = "SELECT uid FROM userinfo WHERE usr='$name'";
    $rows = $p->dosql($sql);
    $uid = 0;
    if($rows) {
        $d=$p->rtnrlt(0);
        $uid = (int) $d['uid'];
    }
    echo $uid;
} else if($code = trim($_GET['code'])) {
    if($code == $_SESSION["IMGCODE"])
        echo 'right';
    else echo $code;
}
?>
