<?php 
$visitorIP = $_SERVER['REMOTE_ADDR']; 
$apiURL = 'https://freegeoip.app/json/'.$visitorIP;
 
$ch = curl_init($apiURL); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
$apiResponse = curl_exec($ch); 
curl_close($ch); 

$ipInfo = json_decode($apiResponse, true); 

if(!empty($ipInfo)){ 

$country_code = $ipInfo['country_code']; 
$country_name = $ipInfo['country_name']; 
$region_name = $ipInfo['region_name']; 
$region_code = $ipInfo['region_code']; 
$city = $ipInfo['city']; 
$zip_code = $ipInfo['zip_code']; 
$latitude = $ipInfo['latitude']; 
$longitude = $ipInfo['longitude']; 
$time_zone = $ipInfo['time_zone']; 

echo 'Country Name: '.$country_name.'<br>'; 
echo 'Country Code: '.$country_code.'<br>'; 
echo 'Region Name: '.$region_name.'<br>'; 
echo 'Region Code: '.$region_code.'<br>'; 
echo 'City: '.$city.'<br>'; 
echo 'Zipcode: '.$zip_code.'<br>'; 
echo 'Latitude: '.$latitude.'<br>'; 
echo 'Longitude: '.$longitude.'<br>'; 
echo 'Time Zone: '.$time_zone; 
}else{ 
echo 'IP details is not found!'; 
} ?>