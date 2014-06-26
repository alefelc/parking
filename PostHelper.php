<?

function do_action_post($action, $fields) {

//accion que queres realizar:

    $url = "http://www.ztechsys.com/BER/wsHandler.php?action=$action";

//url-ify the data for the POST
    foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
    rtrim($fields_string, '&');

//open connection
    $ch = curl_init();

//set the url, number of POST vars, POST data
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch,CURLOPT_POST, count($fields));
    curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//execute post: en esta variable vas a tener un json con todos los puntos de venta
    $result = curl_exec($ch);

//close connection
    curl_close($ch);

    return $result;
}

?>