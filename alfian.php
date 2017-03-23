<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/1bbf6baf249cbf7f/history_20060405/q/CA/San_Francisco.json");
  $parsed_json = json_decode($json_string);
  $tanggal = $parsed_json->{'history'}->{'date'}->{'pretty'};
  $hour = $parsed_json->{'history'}->{'date'}->{'hour'};
  $tzname = $parsed_json->{'history'}->{'date'}->{'tzname'};
  echo "date of ${tanggal}";
  echo "<br>hour in san francisco of ${hour}";
  echo "<br>tzname in san francisco of ${tzname}";
  
?>
