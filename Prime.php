<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>给定范围内的质数</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <label>数值范围：
  <input type="text" name="range" />
  </label>
  <label>
  <input type="submit" name="Submit" value="提交" />
  </label>
</form>

<p><?php 

	function Primez($range) {
 		$pz = array_fill(1, $range, true);
		$pz[1] = false; //1不是质数
		
		
		$n = (int)sqrt($range);
		
		for ($i=2; $i<=$n; $i++) {
            if ($pz[$i]) //查看是不是已经置false过了
                 for ($j=$i; $i*$j <= $range; $j++) //将是i倍数的位置置为false
                     $pz[$j * $i] = false;
		}
		
		return $pz;
 	}
	
	if (!isset($_POST['Submit']))
		return;
		
	if (!is_numeric($_POST['range']))
		return;
	
	$r = (int)$_POST['range'];
	if ($r <= 0)
		return;
		
	$pz = Primez($r);
	
	$q = 0;
	
	for ($i=1; $i<=(int)$r; $i++)
		if ($pz[$i]) {
			echo $i.'&nbsp; ';
			$q++;
		}
?></p>
<p><?php echo $r.' 以内共有 '.$q.' 个质数。' ?></p>
</body>
</html>
