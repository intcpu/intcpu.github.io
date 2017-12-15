<?php
$logfile = 'git.log';
$logstr  = "========================\r\n";
$logstr  .= "[".date("Y-m-d H:i:s")."]";
exec('echo '.$logstr.' >> '.$logfile);
exec('git pull >> '.$logfile);
exit('error');
?>