<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>乘法表</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>
    <label>数字：
    <input type="text" name="num" />
    </label>
    <label>
    <input type="submit" name="Submit" value="提交" />
    </label>
  </p>
</form>
<p><?php 

	if (!isset($_POST['Submit']) || !is_numeric($_POST['num']))
		return;
	
	$n = (int)$_POST['num'];
	
	for ($i=1; $i<=$n; $i++) {
		for ($j=1; $j<=$i; $j++)
			echo $j.' * '.$i.' = '.$j*$i. ' &nbsp; ';
		
		echo '<br/>';
	}

?></p>
</body>
</html>
