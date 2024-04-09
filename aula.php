<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fibonacci</title>
</head>
<body>

<section>
       <span>Sequência de fibonacci</span> 
       <div>
        <form action="" method="post">
           <input type="number" name="numero">
           <br><br>
           <input type="submit"> 
        </form>
       </div>
       <div>

<?php
function fibonacci($q, $zero = false){
	if($q >= 2){ 
		$f = ($zero) ? [0,2] : [1,2]; 
		for($i = 2; $i < $q; $i++){
			$f[$i] = $f[$i-1] + $f[$i-2];		
		}
		return $f;
	}
	return ($q == 1) ? [1] : [];
}
 
//exibindo os primeiros 20 números da sequência de fibonacci, começando por 0
$fib = fibonacci(20, true);
foreach($fib as $v){
	echo (end($fib) == $v) ? $v : $v.', ';	
}
?>
</body>
</html>
