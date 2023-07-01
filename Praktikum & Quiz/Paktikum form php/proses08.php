<?php
if (isset($_POST['pilih'])) {
    $film = $_POST['kartun'];
    echo "Film kkartun favorit anda adalah :
    <font color=blue><b>$film</b></font>";
}
?>