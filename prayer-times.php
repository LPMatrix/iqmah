<<<<<<< HEAD
<?php
$file = file_get_contents('http://www.islamicfinder.org/prayer_service.php?country=usa&city=los_angeles&state=CA&zipcode=&latitude=33.9733&longitude=-118.2487&timezone=-8&HanfiShafi=1&pmethod=5&fajrTwilight1=10&fajrTwilight2=10&ishaTwilight=10&ishaInterval=30&dhuhrInterval=1&maghribInterval=1&dayLight=1&simpleFormat=xml');

$shalat = json_decode(json_encode((array)simplexml_load_string($file)),1);

echo "<table class=prayer-times border=0>";
echo "<tr><td colspan=2>".$shalat['hijri'];

echo "<tr><td>Fajr <td>".date("g:i a", strtotime("$shalat[fajr] am"));


$dhuhr = date("H", strtotime($shalat['dhuhr']));

if($dhuhr=11) {
echo "<tr><td>Sunrise <td>".date("g:i a", strtotime("$shalat[dhuhr] am"));	
}
if($dhuhr=12) {
echo "<tr><td>Dhuhr <td>".date("g:i a", strtotime("$shalat[dhuhr] pm"));	
}

echo "<tr><td>Ashr <td>".date("g:i a", strtotime("$shalat[asr] pm"));
echo "<tr><td>Maghrib <td>".date("g:i a", strtotime("$shalat[maghrib] pm"));
echo "<tr><td>Isha <td>".date("g:i a", strtotime("$shalat[isha] pm"));
echo "</table>";

=======
<?php
$file = file_get_contents('http://www.islamicfinder.org/prayer_service.php?country=usa&city=los_angeles&state=CA&zipcode=&latitude=33.9733&longitude=-118.2487&timezone=-8&HanfiShafi=1&pmethod=5&fajrTwilight1=10&fajrTwilight2=10&ishaTwilight=10&ishaInterval=30&dhuhrInterval=1&maghribInterval=1&dayLight=1&simpleFormat=xml');

$shalat = json_decode(json_encode((array)simplexml_load_string($file)),1);

echo "<table class=prayer-times border=0>";
echo "<tr><td colspan=2>".$shalat['hijri'];

echo "<tr><td>Fajr <td>".date("g:i a", strtotime("$shalat[fajr] am"));


$dhuhr = date("H", strtotime($shalat['dhuhr']));

if($dhuhr=11) {
echo "<tr><td>Sunrise <td>".date("g:i a", strtotime("$shalat[dhuhr] am"));	
}
if($dhuhr=12) {
echo "<tr><td>Dhuhr <td>".date("g:i a", strtotime("$shalat[dhuhr] pm"));	
}

echo "<tr><td>Ashr <td>".date("g:i a", strtotime("$shalat[asr] pm"));
echo "<tr><td>Maghrib <td>".date("g:i a", strtotime("$shalat[maghrib] pm"));
echo "<tr><td>Isha <td>".date("g:i a", strtotime("$shalat[isha] pm"));
echo "</table>";

>>>>>>> 59696affa6b7c4c6c47a217c5630c374a27f4754
?>