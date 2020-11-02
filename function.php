<!-- googlemapを使おうとしたが費用かかるから断念した -->
function my_acf_google_map_api( $api ){
$api['key'] = 'AIzaSyDi7hWAcr5OCExpwjwsemDiKY7K301HNHU';
return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');