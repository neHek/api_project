<?php

	session_start();

	include('bd.php');

	echo '<div class = "top-right"><a href = "index.php">�� ������� </a>';

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

	<title>�������</title>

</head>

<body>	

	<?php

	//�����������

	if ($_SESSION['login'] == 'admin' && $_SESSION['password'] == '123456'){

		echo "<a href = 'admin.php?action=logout'>/ �����<br /></a>";	

		echo('����� ����������, '. $_SESSION['login'].'!<br /></div>');

		//�������� ����� ����������

		echo '<form enctype="multipart/form-data" action="upload.php" method="POST">

				<input type="hidden" name="MAX_FILE_SIZE" value="30000000" />

				�������� �����: <br />';

		echo "

			<input name = 'price' type = 'text' placeholder = '����'><br />

			<select size='3' name='size'>

				<option disabled>��. ���������</option>

				<option value='shtuka'>�����</option>

				<option selected value='meter'>����</option>

				<option value='kg'>���������</option>

				<option value='kv-metr'>��. ����</option>

		</select><br />";

		

		echo '		<input name="name" type="text" placeholder = "��������"><br />

				<input name="cat" type="text" placeholder = "���������" /><br />

				<textarea name="description" type="text" placeholder = "��������(200 ��������)" rows = "5"></textarea><br />������ ���������� - 150 � 200 px<br />

				

				<input name="photo" type="file" /><br />

				<input type="submit" value="��������" />

			</form>';

		}

	else {

		echo '<form action = "admin.php" name = "autorization" method = "post">';

			echo '<p><input name = "login" type = "login"></input><br />';

			echo '<input name = "password" type = "password"></input></p>';

			echo '<p><input type="submit" value = "�����"></p>';

		echo '</form>';

	}

	



	

	?>

</body>

*/