<?

$civilite	= 0;
$nom		= "";
$prenom		= "";
$email		= "";
$cp			= 0;
$tel		= 0;
$annee		= 0;
$epargne	= 0;
$impots		= 0;
$idv		= 0;
$guide		= 0;
$chg		= 0;
$utm_medium	= "";
$ville		= "";

if(isset($_GET['civilite']))		$civilite		= intval($_GET['civilite']);
if(isset($_GET['nom']))				$nom 			= mysql_real_escape_string(utf8_decode($_GET['nom']));
if(isset($_GET['prenom']))			$prenom 		= mysql_real_escape_string(utf8_decode($_GET['prenom']));
if(isset($_GET['cp']))				$cp				= mysql_real_escape_string(removeSpace($_GET['cp']));
if(isset($_GET['email']))			$email			= mysql_real_escape_string(removeSpace($_GET['email']));
if(isset($_GET['tel']))				$tel			= mysql_real_escape_string(removeSpace($_GET['tel']));
if(isset($_GET['annee']))			$annee			= intval($_GET['annee']);
if(isset($_GET['epargne']))			$epargne		= intval($_GET['epargne']);
if(isset($_GET['impots']))			$impots			= intval($_GET['impots']);

if(isset($_GET['idv']))				$idv			= intval($_GET['idv']);
if(isset($_GET['guide']))			$guide			= intval($_GET['guide']);
if(isset($_GET['chg']))				$chg			= intval($_GET['chg']);
if(isset($_GET['color']))			$color			= mysql_real_escape_string($_GET['color']);
if(isset($_GET['utm_medium']))		$utm_medium		= mysql_real_escape_string($_GET['utm_medium']);
if(isset($_GET['ville']))			$ville			= mysql_real_escape_string($_GET['ville']);

if(!empty($utm_medium)) 
{
$_SESSION['utm_medium'] = $utm_medium;
}
$utm_medium 	= (isset($_SESSION['utm_medium']) ? $_SESSION['utm_medium'] : null);

$erreur_tel 	= checkmobile($tel);
$erreur_email	= checkemail($email);

?>