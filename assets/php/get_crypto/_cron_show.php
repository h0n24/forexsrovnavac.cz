<?
// show all cron jobs
$output = exec('crontab -l');
echo $output;
?>