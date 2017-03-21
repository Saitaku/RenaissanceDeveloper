<?php
/**
 * 	Write if / else statements in PHP using these syntax variants:
 * 		Traditional if/else syntax.
 * 		Traditional if / else if syntax.
 * 		Alternative if / else syntax.
 * 		Alternative if / else if syntax.
 * 		Ternary if / else syntax.
 */

$conditional1 = true;
$conditional2 = "conditional";
$conditional3 = false;
$conditional4 = "another";
$conditional5 = true;

// Traditional if / else syntax
if($conditional1){
	echo "Conditional 1 is true".PHP_EOL;
} else {
	echo "Conditional 1 is false".PHP_EOL;
}

// Traditional if / else if syntax
if($conditional2 == "conditional"){
	echo "Conditional 2 passes".PHP_EOL;
} else if(empty($conditional2)){
	echo "Conditional 2 is empty".PHP_EOL;
}

// Alternative if / else syntax
if($conditional3):?>
Conditional3 is true<?php echo PHP_EOL?>
<?php else:?>
Conditional3 is false<?php echo PHP_EOL?>
<?php endif;

// Alternative if / else if syntax 
if($conditional4 == "another"):?>
Conditional4 is equal to "another"<?php echo PHP_EOL?>
<?php elseif(empty($conditional4)):?>
Conditional4 is empty<?php echo PHP_EOL?>
<?php endif;

// Ternary if / else syntax
echo $conditional5 ? "Conditional5 is true!".PHP_EOL : "Conditional5 is false".PHP_EOL;