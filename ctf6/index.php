<html>
<h3> is this really numeric? </h3>
<form method="get">
	<input name="number" type="text">
	<input type="submit">
</form>
<a href=".\source.txt"> Click here </a>

</html>
<?php
$dev = $_GET['number'];
$flag = "MSPCTF{Exp0n3nt_1s_4lth0ugh_num3r1c}";
if (isset($dev)) {
	if (is_numeric($dev)){
		if (!strpos($dev, ".")){
			if (strlen($dev) < 6){

					if ( $dev>99999)
					echo 'Flag:  '.$flag;
				else
				print '<h1>Oh Oh Think again</h1>';
			} else
				print '<h1>Wrong Move Champ</h1>';
		} else
		print '<h1>Not That hard . keep trying</h1>';	
	} else
		print '<h1>Just read the source code once again</h1>';
}
?>