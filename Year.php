<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP测试</title>
</head>

<body>

<form method=post>
年份：<input name=year type=text />
<input type="submit" />
</form>

<?php

	if (!isset($_POST['year']))
		reuturn;

	$y = $_POST['year'];
	if (strlen($y)>0) {
		$z = array( "猴", "鸡", "狗", "猪", "鼠", "牛", "虎", "兔","龙", "蛇", "马", "羊");
		echo $y."年是'";
		$i = $y % 12;
		echo $z[$i]."'年。";
	}
?>

</body>