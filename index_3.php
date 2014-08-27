<!DOCTYPE html>
<html>
<?php
  $json_string = file_get_contents("http://weather.yahooapis.com/forecastrss?w=12776667");
  $parsed_json = json_decode($json_string);
  $location = $parsed_json->{'location'}->{'city'};
  $temp_f = $parsed_json->{'current_observation'}->{'temp_f'};
  echo "Current temperature in ${location} is: ${temp_f}\n";
  
  $weather = new SimpleXMLElement(file_get_contents("http://weather.yahooapis.com/forecastrss?w=12776667");
  echo $weather->channel[0]->item[0]->title[0];
  
  ?>

</html>