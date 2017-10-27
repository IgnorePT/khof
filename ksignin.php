<?php 

/*$ch = curl_init();
curl_setopt( $ch, CURLOPT_URL, 'http://thardferr.net/signin.php' );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true ); // Fetch the contents too
$html = curl_exec( $ch ); // Execute the request
curl_close( $ch );
*/

define("COOKIE_FILE", "cookie.txt");

$ch = curl_init();

curl_setopt($ch,    CURLOPT_URL,"http://thardferr.net/signin.php");
curl_setopt($ch,    CURLOPT_COOKIEJAR, COOKIE_FILE); 
curl_setopt($ch,    CURLOPT_COOKIEFILE, COOKIE_FILE);
curl_setopt($ch,    CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch,    CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,    CURLOPT_HEADER, true);
curl_setopt($ch,    CURLOPT_POSTFIELDS,"email=n3ls6n%40gmail.com&password=%40solo020888&submit=Login");

$server_output = curl_exec ($ch);
$httpcode = curl_getinfo($ch,CURLINFO_HTTP_CODE);
curl_close( $ch );

echo $server_output;

// further processing ....
if ($httpcode == "200") { 
    $ch = curl_init();
    curl_setopt($ch,   CURLOPT_URL, 'http://thardferr.net/game/khof.php' );
    curl_setopt($ch,   CURLOPT_COOKIEJAR, COOKIE_FILE); 
    curl_setopt ($ch,   CURLOPT_COOKIEFILE, COOKIE_FILE);
    curl_setopt($ch,    CURLOPT_FOLLOWLOCATION, 0);
    curl_setopt($ch,   CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch,   CURLOPT_HEADER, true);
    $html = curl_exec( $ch ); // Execute the request
    curl_close( $ch );
    
    echo $html;
 } else { echo "ERROR";}



/*
 define("COOKIE_FILE", "cookie.txt");
 
 // Login the user
 $ch = curl_init('http://api.example.com/login/joe/smith');
 curl_setopt ($ch, CURLOPT_COOKIEJAR, COOKIE_FILE); 
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_HEADER, true);
 echo curl_exec ($ch);
 
 // Read the session saved in the cookie file
 echo "<br/><br/>";
 $file = fopen("cookie.txt", 'r');
 echo fread($file, 100000000);   
 echo "<br/><br/>";
 
 // Get the users details
 $ch = curl_init('http://api.example.com/user');
 curl_setopt ($ch, CURLOPT_COOKIEJAR, COOKIE_FILE); 
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_HEADER, true);
 echo curl_exec ($ch);


*/





?>