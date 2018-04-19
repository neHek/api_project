<?php

	session_start();

	include('bd.php');

	echo '<div class = "top-right"><a href = "index.php">На главную </a>';

	if ( isset( $_GET["action"]) and $_GET["action"]=="logout" ) unset( $_SESSION["login"] );

	if ($_POST['login'] == 'admin' && $_POST['password'] == '123456'){

		$_SESSION['login'] = 'admin';

		$_SESSION['password'] = '123456';

	}

?>	



/*

<head>

	<meta charset="UTF-8" />

	<meta http-equiv="Content-Type" content="text/html">

	<link href="style.css" rel="stylesheet">

	<link rel="icon" type="image/gif" href="icons/icon.png">

	<title>Админка</title>

</head>

<body>	

	<?php

	//Авторизация

	if ($_SESSION['login'] == 'admin' && $_SESSION['password'] == '123456'){

		echo "<a href = 'admin.php?action=logout'>/ Выйти<br /></a>";	

		echo('Добро пожаловать, '. $_SESSION['login'].'!<br /></div>');

		//Загрузка файла фотографий

		echo '<form enctype="multipart/form-data" action="upload.php" method="POST">

				<input type="hidden" name="MAX_FILE_SIZE" value="30000000" />

				Добавить товар: <br />';

		echo "

			<input name = 'price' type = 'text' placeholder = 'Цена'><br />

			<select size='3' name='size'>

				<option disabled>Ед. измерения</option>

				<option value='shtuka'>Штука</option>

				<option selected value='meter'>Метр</option>

				<option value='kg'>Килограмм</option>

				<option value='kv-metr'>Кв. метр</option>

		</select><br />";

		

		echo '		<input name="name" type="text" placeholder = "Название"><br />

				<input name="cat" type="text" placeholder = "Категория" /><br />

				<textarea name="description" type="text" placeholder = "Описание(200 символов)" rows = "5"></textarea><br />Размер фотографии - 150 х 200 px<br />

				

				<input name="photo" type="file" /><br />

				<input type="submit" value="Добавить" />

			</form>';

		}

	else {

		echo '<form action = "admin.php" name = "autorization" method = "post">';

			echo '<p><input name = "login" type = "login"></input><br />';

			echo '<input name = "password" type = "password"></input></p>';

			echo '<p><input type="submit" value = "Войти"></p>';

		echo '</form>';

	}

	



	

	?>

</body>

*/