<?php
/*
$y = file_get_contents('http://api.weatherapi.com/v1/current.json?key=04d6fd34af6947b3a00115418212602&q=London&aqi=yes');
$t = json_encode($y);
echo $t;
exit;

if ($curl = curl_init('https://api.weather.yandex.ru/v2/informers?lat=55.75396&lon=37.620393')) {
	$headers = array(
		'Content-type: application/json',
		'Content-length: 0',
	);

	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($curl);
	curl_close($curl);
	
	return $response;
}
*/

$context = stream_context_create(array('ssl'=>array(
    'verify_peer' => false, 
    "verify_peer_name"=>false
    )));

libxml_set_streams_context($context);

$url = "http://www.nationalbank.kz/rss/rates_all.xml";
   $dataObj = simplexml_load_file($url);
   print_r($dataObj);


// API ключ
$apiKey = "fe57b721fd47b8600afac45a7829c1ea";
// Город погода которого нужна
$city = "NUR-SULTAN";
// Ссылка для отправки
$url = "http://api.openweathermap.org/data/2.5/weather?q=" . $city . "&lang=ru&units=metric&appid=" . $apiKey;

// Создаём запрос
$ch = curl_init();
 
// Настройка запроса
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);
 
// Отправляем запрос и получаем ответ
$data = json_decode(curl_exec($ch));
 
// Закрываем запрос
curl_close($ch);

?>

<div class="weather">
    <h2>Погода в городе <?php echo $data->name; ?></h2>
    <p>Погода: <?php echo $data->main->temp_min; ?>°C</p>
    <p>Влажность: <?php echo $data->main->humidity; ?> %</p>
    <p>Ветер: <?php echo $data->wind->speed; ?> км/ч</p>
</div>

<?php
exit;

	$city_id=29642; // id города
	$data_file="https://gridforecast.com/api/v1/forecast/49.8479;35.6541/202103021200?api_token=Lol3f8ou5RWgduo0"; // адрес xml файла 

              $xml = simplexml_load_file($data_file); // раскладываем xml на массив
              print_r($xml);
 
    // выбираем требуемые параметры (город, температура, пиктограмма и тип погоды текстом (облачно, ясно)

	$city=$xml->fact->station;
	$temp=$xml->fact->temperature;
	$pic=$xml->fact->image;
	$type=$xml->fact->weather_type;

	// Если значение температуры положительно, для наглядности добавляем "+"
	if ($temp>0) {$temp='+'.$temp;}

?>

 
<div id="weather">
<?php
echo ("<a href=\"http://pogoda.yandex.ru/$city_id/\">$city</a>");
echo ("<img src=\"http://img.yandex.net/i/wiz$pic.png\" alt=\"$type\" title=\"$type\">$temp<sup>o</sup>C");
?>
</div>


exit;


<?php
function getRates(){
$url = "http://www.nationalbank.kz/rss/rates_all.xml";
$dataObj = simplexml_load_file($url);

    if ($dataObj){
    foreach ($dataObj->channel->item as $item){
        echo "title: ".$item->title."<br>";
        echo "pubDate: ".$item->pubDate."<br>";
        echo "description: ".$item->description."<br>";;
        echo "quant: ".$item->quant."<br>";
        echo "index: ".$item->index."<br>";
        echo "change: ".$item->change."<br>";
        echo '<hr/>';
    }
}
}

getRates();


?>