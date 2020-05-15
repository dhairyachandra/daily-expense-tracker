<?php
function currencyConverter($fromConvert,$toConvert,$amount) {
$fromConvert = urlencode($fromConvert);
$toConvert = urlencode($toConvert);
$url = "https://www.google.com/search?q=".$fromConvert."+to+".$toConvert;
$get = file_get_contents($url);
$data = preg_split('/\D\s(.*?)\s=\s/',$get); 
$exchangeRate = (float) substr($data[1],0,7);
$convertedAmount = $amount*$exchangeRate;

$data =  array('$fromConvert' => strtoupper($fromConvert), 'toConvert' => strtoupper($fromConvert).   " to "   .strtoupper($toConvert),
'exchangeRate' => $exchangeRate, 'convertedAmount' =>$convertedAmount);
echo json_encode($data);
}

function currencyConvert($fromConvert,$toConvert,$amount)
{
    $data = False;
    $method = "GET";
    $url = "https://api.exchangeratesapi.io/latest?symbols=".$fromConvert.",".$toConvert."&base=".$fromConvert;
    
    $curl = curl_init();

    switch ($method)
    {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }

    // Optional Authentication:
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_USERPWD, "username:password");

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);

    curl_close($curl);

    return $result;
}
?>
