<?php
session_start();
session_destroy();
header('Location: ../SiteCachorro/index.html');
exit();