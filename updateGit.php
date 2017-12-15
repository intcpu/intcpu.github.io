<?php
$logfile = '../log/git/'.date('Ym').'.log';
$logstr  = "========================\n";
$logstr  .= "[".date("Y-m-d H:i:s")."]";
exec('mkdir -p ../log/git');
exec('echo \''.$logstr.'\' >> '.$logfile);
exec('git pull >> '.$logfile);
exit('error');
?>