<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
	.mid {
		margin-bottom: 50px;
	}
	label {
		margin-right: 20px;
	}
</style>
<body>
	<div class="mid">
		<form action="parser.php" name="parser" method="post">
			<label for="site">Введіть сайт</label><input type="text" name="site">
			<input type="submit" />
	</div>
</form>

</body>
</html>


<?php 
if (isset($_POST['site'])) {


echo "robots.txt за адресою ".$_POST['site'];



echo '<table border="1" cellspacing="5" cellpadding="5">
	<tr>
		<td>№</td>
		<td>Название проверки
	</td>
		<td>Статус
	</td>
		<td></td>
		<td>Текущее состояние
	</td>
	</tr>
	<tr>
		<td rowspan="2">1</td>
		<td rowspan="2">Проверка наличия файла robots.txt</td>';




$site = $_POST['site'];

$urlToParser = 'http://' . $site . '/robots.txt';

$file_headers = get_headers($urlToParser);
if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
	$exists = false;
	echo '<td rowspan="2" style="background-color:red">Ошибка</td>
		<td>Состояние</td>
		<td>Файл robots.txt отсутствует</td>
	</tr>
	<tr>
		<td>Рекомендации</td>
		<td>Программист: Создать файл robots.txt и разместить его на сайте.</td>
	</tr>';
}
	else {
		$exists = true;
		$robotsSize = get_headers($urlToParser, 1)['Content-Length'];

	$robotsTxt = file_get_contents($urlToParser);
	$host_count = substr_count(strtolower($robotsTxt), 'host:');


	if (is_array($robotsSize)) {
		$robotsSize = array_pop(get_headers($urlToParser, 1)['Content-Length']);
	}

	// Перевірка наявності sitemap
	$sitemapCount = substr_count(strtolower($robotsTxt), 'sitemap:');





	$file_headers = get_headers($urlToParser);
	if($file_headers[0] != 'HTTP/1.1 404 Not Found') {
		echo '<td rowspan="2" style="background-color:green">Ок</td>
			<td>Состояние</td>
			<td>Файл robots.txt присутствует</td>
		</tr>
		<tr>
			<td>Рекомендации</td>
			<td>Доработки не требуются</td>
		</tr>';
	}





	if($host_count==0) {
		echo '<tr>
			<td rowspan="2">6</td>
			<td rowspan="2">Проверка указания директивы Host</td>
			<td rowspan="2" style="background-color:red">Ошибка</td>
			<td>Состояние</td>
			<td>В файле robots.txt не указана директива Host</td>
		</tr>
		<tr>
			<td>Рекомендации</td>
			<td>Программист: Для того, чтобы поисковые системы знали, какая версия сайта является основных зеркалом,необходимо прописать адрес основного зеркала в директиве Host. В данный момент это не прописано. Необходимо добавить в файл robots.txt директиву Host. Директива Host задётся в файле 1 раз, после всех правил.</td>
		</tr>';
	}
	else {
		echo '<tr>
			<td rowspan="2">6</td>
			<td rowspan="2">Проверка указания директивы Host</td>
			<td rowspan="2" style="background-color:green">Ок</td>
			<td>Состояние</td>
			<td>Директива Host указана</td>
		</tr>
		<tr>
			<td>Рекомендации</td>
			<td>Доработки не требуются</td>
		</tr>';


		if($host_count==1) {
			echo '<tr>
				<td rowspan="2">8</td>
				<td rowspan="2">Проверка количества директив Host, прописанных в файле</td>
				<td rowspan="2" style="background-color:green">Ок</td>
				<td>Состояние</td>
				<td>В файле прописана 1 директива Host</td>
			</tr>
			<tr>
				<td>Рекомендации</td>
				<td>Доработки не требуются</td>
			</tr>';
		}
		else {
			echo '<tr>
				<td rowspan="2">8</td>
				<td rowspan="2">Проверка количества директив Host, прописанных в файле</td>
				<td rowspan="2" style="background-color:red">Ошибка</td>
				<td>Состояние</td>
				<td>В файле прописано несколько директив Host</td>
			</tr>
			<tr>
				<td>Рекомендации</td>
				<td>Программист: Директива Host должна быть указана в файле толоко 1 раз. Необходимо удалить все дополнительные директивы Host и оставить только 1, корректную и соответствующую основному зеркалу сайта</td>
			</tr>';
		}
	}

	echo '<tr>
			<td rowspan="2">10</td>
			<td rowspan="2">Проверка количества директив Host, прописанных в файле</td>';
	if($robotsSize<32000) {
		echo '<td rowspan="2" style="background-color:green">Ок</td>
			<td>Состояние</td>
			<td>Размер файла robots.txt составляет '.$robotsSize.', что находится в пределах допустимой нормы</td>
		</tr>
		<tr>
			<td>Рекомендации</td>
			<td>Доработки не требуются</td>
		</tr>';
	}
	else {
		echo '<td rowspan="2" style="background-color:red">Ошибка</td>
			<td>Состояние</td>
			<td>Размера файла robots.txt составляет '.$robotsSize.', что превышает допустимую норму</td></tr>
		<tr>
			<td>Рекомендации</td>
			<td>Программист: Программист: Максимально допустимый размер файла robots.txt составляем 32 кб. Необходимо отредактировть файл robots.txt таким образом, чтобы его размер не превышал 32 Кб</td>
		</tr>';
	}


	echo '<tr>
			<td rowspan="2">11</td>
			<td rowspan="2">Проверка указания директивы Sitemap</td>';
	if($sitemapCount!=0) {
		echo '<td rowspan="2" style="background-color:green">Ок</td>
			<td>Состояние</td>
			<td>Директива Sitemap указана</td>
		</tr>
		<tr>
			<td>Рекомендации</td>
			<td>Доработки не требуются</td>
		</tr>';
	}
	else {
		echo '<td rowspan="2" style="background-color:red">Ошибка</td>
			<td>Состояние</td>
			<td>В файле robots.txt не указана директива Sitemap</td>
		</tr>
		<tr>
			<td>Рекомендации</td>
			<td>Программист: Добавить в файл robots.txt директиву Sitemap</td>
		</tr>';
}


}


echo '<tr>
		<td rowspan="2">12</td>
		<td rowspan="2">Проверка кода ответа сервера для файла robots.txt</td>';


$string = substr(get_headers($urlToParser, 1)['0'], 9, 3);

if($string == 200) {
	echo '<td rowspan="2" style="background-color:green">Ок</td>
		<td>Состояние</td>
		<td>Файл robots.txt отдаёт код ответа сервера 200</td>
	</tr>
	<tr>
		<td>Рекомендации</td>
		<td>Доработки не требуются</td>
	</tr>';
}
else {
	echo '<td rowspan="2" style="background-color:red">Ошибка</td>
		<td>Состояние</td>
		<td>При обращении к файлу robots.txt сервер возвращает код ответа '.$string.'</td>
	</tr>
	<tr>
		<td>Рекомендации</td>
		<td>Программист: Файл robots.txt должны отдавать код ответа 200, иначе файл не будет обрабатываться. Необходимо настроить сайт таким образом, чтобы при обращении к файлу robots.txt сервер возвращает код ответа 200</td>
	</tr>';
}





echo '</table>';
}
?>




