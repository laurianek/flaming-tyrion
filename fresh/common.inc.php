<?

$ip							= $_SERVER['REMOTE_ADDR'];
$useragent					= mysql_real_escape_string($_SERVER['HTTP_USER_AGENT']);
$now						= date("Y-m-d H:i:s");
$nows						= date("Y-m-d");
 
$jourtx['1']				= "Lundi";
$jourtx['2']				= "Mardi";
$jourtx['3']				= "Mercredi";
$jourtx['4']				= "Jeudi";
$jourtx['5']				= "Vendredi";
$jourtx['6']				= "Samedi";
$jourtx['7']				= "Dimanche";

$moisd['1']					= "janvier";
$moisd['2']					= "f&eacute;vrier";
$moisd['3']					= "mars";
$moisd['4']					= "avril";
$moisd['5']					= "mai";
$moisd['6']					= "juin";
$moisd['7']					= "juillet";
$moisd['8']					= "août";
$moisd['9']					= "septembre";

$moisd['01']				= "janvier";
$moisd['02']				= "f&eacute;vrier";
$moisd['03']				= "mars";
$moisd['04']				= "avril";
$moisd['05']				= "mai";
$moisd['06']				= "juin";
$moisd['07']				= "juillet";
$moisd['08']				= "août";
$moisd['09']				= "septembre";
$moisd['10']				= "octobre";
$moisd['11']				= "novembre";
$moisd['12']				= "d&eacute;cembre";



date_default_timezone_set('Europe/Paris');


$date0 		= date("Y-m-d");
$split0 	= explode( "-", $date0);
$year0		= $split0[0];
$month0		= $split0[1];
$mois 		= $moisd[$month0];
$day0		= $split0[2];

$njour = date("N",mktime(0,0,0,$month0,$day0,$year0));

$jm1 = $jourtx[$njour]." ".$day0." ".$mois." ".$year0;
?>