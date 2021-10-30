<?php
    function get_buttons()
	{
		$str='';
		$btns=array(
		1=>'Accept',
		2=>'Reject',
		);
		while(list($k,$v)=each($btns))
		{
			$str.='&nbsp;<input type="submit" value="'.$v.'" name="btn_'.$k.'" id="btn_'.$k.'"/>';
		}
		return $str;
	}
	if(isset($_POST['btn_1']))
	{
		echo "heee";
		//header('location:accept.php');
	}
	if(isset($_POST['btn_2']))
	{
		echo "heee";
		//header('location:accept.php');
	}
	else
		echo "sorry";
?>
<html>
<head>
    <title>Order</title>
	</head>
<body>
<form action="<?php echo $_SERVER['php_SELF'];?>" method="post">
	<div class="tablestyle">
	<?php echo get_buttons(); ?>
	</div>
</form>
</body>
</html>