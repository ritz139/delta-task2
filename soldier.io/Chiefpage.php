
<?php
$useragent = $_SERVER['HTTP_USER_AGENT'];
$USER_AGENT="Chief";
if( strcmp($useragent,$USER_AGENT)==0  )
{
if ($fh = fopen("/home/ChiefCommander/attendance_report", "r"))
{
    while (!feof($fh)) {
        $line = fgets($fh);
        echo $line;
        echo "<br>";
    }
    fclose($fh);
}}

else
{
echo "please try soldier.io/username/index.html";
}
?>
