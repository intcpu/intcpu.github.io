<?php
$logfile = 'git.log';
exec('echo "================" >> '.$logfile.';date +[%Y-%H-%d\ %H:%m:%S] >> '.$logfile.';git pull >> '.$logfile);
exit('error');
?>