<?php

$json = file_get_contents(__DIR__ . '/json.json');
$data = json_decode($json, true);
echo '<pre>';
print_r($data);
?>

<html>
<head>
	<title></title>
</head>
<body>
	
	<table border="1">
		<tr>
			<td>Имя</td>
			<td>Фамилия</td>
			<td>Адрес</td>
			<td>Номер телефона</td>
		</tr>
		<?php foreach ($data as $item) : ?>
		<tr>
			<td><?= $item ['firstName'] ?></td>
			<td><?= $item ['lastName'] ?></td>
			<td><?= $item ['address'] ?></td>
			<td><?= $item ['phoneNumber'] ?></td>
		</tr>
		<?php endforeach; ?>
	</table>

</body>
</html>