<?php

$sql = 'SELECT * FROM users ORDER BY RAND() LIMIT 1' ;
$rel = mysqli_query($conn,$sql);
$users = mysqli_fetch_all($rel, MYSQLI_ASSOC);