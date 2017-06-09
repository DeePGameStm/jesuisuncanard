<?php
    echo 'result(' . $_GET['msg'] . '): ' . crypt($_GET['msg']);
    echo '<br /> ' . realpath('testGet.php');
?>