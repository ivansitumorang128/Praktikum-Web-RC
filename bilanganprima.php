<?php 

function bilprima() {
for($a=1;$a<=50;$a++){ 
    $k=0;
    for($b=1;$b<=$a;$b++){
        if($a % $b == 0){
            $k++;
        }
    }
        if($k == 2){
        echo $a.',';
        }
}

}?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php bilprima(); ?>
</body>
</html>