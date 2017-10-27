<?php

$curl_handle = curl_init();
curl_setopt( $curl_handle, CURLOPT_URL, 'http://thardferr.net/game/khof.php' );
curl_setopt($curl_handle, CURLOPT_COOKIESESSION, true );
curl_setopt( $curl_handle, CURLOPT_RETURNTRANSFER, true ); // Fetch the contents too
$html = curl_exec( $curl_handle ); // Execute the request
curl_close( $curl_handle );

echo $html;

?>