<?php
function utf8decode( $champ )
{
	global $useradmin;
	$champ = str_replace(chr(0xE2).chr(0x82).chr(0xAC), '&euro;', $champ); // convert euro sign
	if(mb_detect_encoding($champ, 'UTF-8,ISO-8859-1') == 'UTF-8') {
		return utf8_decode($champ);
	}
	return $champ;
}
function utf8encode( $champ )
{
	global $useradmin;
	//$champ = str_replace(chr(0xE2).chr(0x82).chr(0xAC), '&euro;', $champ); // convert euro sign
	if(mb_detect_encoding($champ, 'UTF-8,ISO-8859-1') == 'ISO-8859-1') {
		return utf8_encode($champ);
	}
	return $champ;
}

	
function keepOnlyNumeric($text){
   $strOnlyNumeric = '';
   $len = strlen($text);
   for($i = 0; $i < $len; $i++) {
      if(strpos("0123456789", $text[$i]) !== FALSE) $strOnlyNumeric .= $text[$i];
   }
   return $strOnlyNumeric;
}

function removeSpace($text){
   $text = 	preg_replace('/\s+/', '', $text);
   return $text;
}

	
function checkemail($email)
{
 if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
     return 0;
} else {
     return 1;
}
}


function checkmobile($tel)
{
 $motif ='`^0[6-7][0-9]{8}$`';
 // (substr($tel,0,2) <> '06' && substr($tel,0,2)<>'07') || strlen($tel)<>'10' 
 if(!preg_match($motif,$tel) || $tel=="0600000000" || $tel=="0666666666" || $tel=="0606060606" || $tel=="0612345678") return 1;
 else return 0;
}

function checktel($numero)
{
 $motif ='`^0[1-9][0-9]{8}$`';
 if(!preg_match($motif,$numero)) return 0;
 else return 1;
}

?>