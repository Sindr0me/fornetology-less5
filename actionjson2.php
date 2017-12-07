<?php

$content = '{
  "firstName": "Владимир",
  "lastName": "Куприянов",
  "address": "г.Москва, ул. Пушкина,2",
  "phoneNumber": "+7 985 978 50 30"
}';

$json = json_decode($content, true);

// echo '<pre>';
// print_r($json);

$firstname = $json['firstName'];
$lastname = $json['lastName'];
$adress = $json['address'];
$phoneNumber = $json['phoneNumber'];

echo "<table>
	<tr> <td>Имя:</td> <td>$firstname</td> </tr>
	<tr> <td>Фамилия:</td> <td>$lastname</td> </tr>
	<tr> <td>Адрес:</td> <td>$adress</td> </tr>
	<tr> <td>Телефон:</td> <td>$phoneNumber</td> </tr>
	</table>";