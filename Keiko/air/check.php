<?php

// $_SESSIONを使うにはsession_startが必要
session_start();
var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div>
		下記の情報で登録してもよろしいでしょうか。<br>
		<br>
		ユーザー名:<?php echo $_SESSION['user_info']['username']; ?><br>
		メールアドレス:<?php echo $_SESSION['user_info']['email']; ?><br>
		パスワード:●●●●●●●●<br>
		<img src="../profile_image/<?php echo $_SESSION['user_info']['profile_image']; ?>" width="150">

	</div>

	<form method="POST" action="">
	<input type="submit" value="ユーザ登録">
	</form>

	<a href="signup.php">前の画面へ戻る</a><br>


</body>
</html>