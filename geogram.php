<?php 

if(!empty($_GET['location'])){
    $maps_url = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($_GET['location']);
    
    $maps_json = file_get_contents($maps_url);
    $maps_array = json_decode($maps_json, true);
    
    $lat = $maps_array['results'][0]['geometry']['location']['lat'];
    
    $lng = $maps_array['results'][0]['geometry']['location']['lng'];
    
    echo $lat . $lng;
    
    //$ig_url = 'https://api.instagram.com/v1/media/search?lat=' . $lat . '&lng=' . $lng . '&client_id=2f10c09615294dc685aa3fb70c5e51aa';
    
    $ig_url = 'https://api.instagram.com/v1/client_id=2f10c09615294dc685aa3fb70c5e51aa&redirect_uri=http://www.thephotostream.org/user_home.php&response_type=code&scope=basic';

    
    echo $ig_url;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Google maps coordinates and Instagram Login</title>
</head>
<body>
<form action="">
    Give me a location and I'll give you the Google maps coordinates.</br>
    <input type="text" name="location"/>
    <button type="submit">submit</button>
</form>
</body>
</html>
