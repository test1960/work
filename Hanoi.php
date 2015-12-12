<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>汉诺塔</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <label>层数：
  <input type="text" name="n" />
  </label>
  <label>
  <input type="submit" name="Submit" value="提交" />
  </label>
</form>
<p>
  <?php 
  
  function move($n, $a, $b, $c) {
	if($n==1)
        echo $a.' -> '.$c.' <br/>';    //当n只有1个的时候直接从a移动到c
    else
    {
        move($n-1, $a, $c, $b);            //第n-1个要从a通过c移动到b
        echo $a.' -> '.$c.' <br/>';
        move($n-1, $b, $a, $c);	//n-1个移动过来之后b变开始盘，b通过a移动到c，这边很难理解
    }  	
  }
  
  
  
	if (isset($_POST['Submit'])) {
		$n = $_POST['n'];
		
		if ($n > 16) {
			echo '数字'.$n.'太大了！';
			return;
		} elseif ($n < 1) {
			echo $n.'输入错误！';
			return;
		} else {
			echo $n.' 层：<br/><br/>';
		}
		
		move($n, 'A', 'B', 'C');
	}

?>
</p>
</body>
</html>
