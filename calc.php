<html>
<title>Result Page</title>
<body>
	<?php 
		$n=(int)$_REQUEST['num'];
		$num=0;

		echo "<p>Sucess , The generated series is </p><br/>";
		
		/* 1 2 3 5 8 13 ... */

		$prev1=1;
		$prev2=2;

		while($num <= $n)
		{

			$num=$prev1 + $prev2;
			if($num > $n)
				break;
			echo " ".$num." ";

			$prev1=$prev2;
			$prev2=$num;
		}	



			?>
</body>


</html>