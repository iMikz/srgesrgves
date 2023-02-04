<?php

function isValid1($card_number) {
    $card_number_checksum = '';

    foreach (str_split(strrev((string) $card_number)) as $i => $d) {
        $card_number_checksum .= $i %2 !== 0 ? $d * 2 : $d;
    }

    return array_sum(str_split($card_number_checksum)) % 10 === 0;
}
function isValid2($num) {
    $num = preg_replace('/[^\d]/', '', $num);
    $sum = '';

    for ($i = strlen($num) - 1; $i >= 0; -- $i) {
        $sum .= $i & 1 ? $num[$i] : $num[$i] * 2;
    }

    return array_sum(str_split($sum)) % 10 === 0;
}
function isValid3($number){
	settype($number, 'string');
	$number = preg_replace("/[^0-9]/", "", $number);
	$numberChecksum= '';
	$reversedNumberArray = str_split(strrev($number));
	foreach ($reversedNumberArray as $i => $d) {
		$numberChecksum.= (($i % 2) !== 0) ? (string)((int)$d * 2) : $d;
	}
	$sum = array_sum(str_split($numberChecksum));
		return ($sum % 10) === 0;
}
function isValid4(string $number): bool
{
    $sum = 0;
    $revNumber = strrev($number);
    $len = strlen($number);

    for ($i = 0; $i < $len; $i++) {
        $sum += $i & 1 ? ($revNumber[$i] > 4 ? $revNumber[$i] * 2 - 9 : $revNumber[$i] * 2) : $revNumber[$i];
    }

    return $sum % 10 === 0;
}
function isValid5(string $number): bool
{
    $sum = 0;
    $flag = 0;

    for ($i = strlen($number) - 1; $i >= 0; $i--) {
        $add = $flag++ & 1 ? $number[$i] * 2 : $number[$i];
        $sum += $add > 9 ? $add - 9 : $add;
    }

    return $sum % 10 === 0;
}
if(isValid5("4111111111111111") == true){
	echo "trueeeeeee";
}else{
	echo "falsee";
}

?>
