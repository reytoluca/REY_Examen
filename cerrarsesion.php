<?php
setCookie ('idu',"");
setCookie ('accesos',"");
session_start();
session_unset();
session_destroy();
Print "<meta http-equiv='refresh' content='0; url=index.php'>";
?>



