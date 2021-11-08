<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<form method="post">
		<input type="number" name="bilangan1">
		<select name="operasi">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
			<option value="%">%</option>
		</select>
		<input type="numbers" name="bilangan2">
		<button type="submit" name="asp">Hasil</button>		
	</form>

	<?php 

	function kalkulator(){
	$a = $_POST['bilangan1'];
	$b = $_POST['bilangan2'];

		if ($_POST['operasi']=='+') {
			echo $a+$b;
		}elseif ($_POST['operasi']=='-') {
			echo $a-$b;
		}elseif ($_POST['operasi']=='*') {
			echo $a*$b;
		}elseif ($_POST['operasi']=='/') {
			echo $a/$b;
		}elseif ($_POST['operasi']=='%') {
			echo $a%$b;
		}
	};

	if (isset($_POST['asp'])) {
		kalkulator();
	};

	?>

</body>
</html>