<?php
session_start();

echo "loggingout You out. Please wait...";

session_destroy();
header("Location: /forum")

?>