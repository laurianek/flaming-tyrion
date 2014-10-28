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

if(isset($_POST['civilite']))		$civilite		= intval($_POST['civilite']);
if(isset($_POST['nom']))			$nom 			= mysql_real_escape_string(utf8_decode($_POST['nom']));
if(isset($_POST['prenom']))			$prenom 		= mysql_real_escape_string(utf8_decode($_POST['prenom']));
if(isset($_POST['cp']))				$cp				= mysql_real_escape_string(keepOnlyNumeric($_POST['cp']));
if(isset($_POST['email']))			$email			= mysql_real_escape_string(removeSpace($_POST['email']));
if(isset($_POST['tel']))			$tel			= mysql_real_escape_string(keepOnlyNumeric($_POST['tel']));
if(isset($_POST['annee']))			$annee			= intval($_POST['annee']);
if(isset($_POST['epargne']))		$epargne		= intval($_POST['epargne']);
if(isset($_POST['impots']))			$impots			= intval($_POST['impots']);

if(isset($_POST['idv']))			$idv			= intval($_POST['idv']);
if(isset($_POST['guide']))			$guide			= intval($_POST['guide']);
if(isset($_POST['chg']))			$chg			= intval($_POST['chg']);
if(isset($_POST['color']))			$color			= mysql_real_escape_string($_POST['color']);
if(isset($_POST['utm_medium']))		$utm_medium		= mysql_real_escape_string($_POST['utm_medium']);
if(isset($_POST['ville']))			$ville			= mysql_real_escape_string($_POST['ville']);

if(!empty($utm_medium)) 
{
$_SESSION['utm_medium'] = $utm_medium;
}
$utm_medium 	= $_SESSION['utm_medium'];

$erreur_tel 	= checkmobile($tel);
$erreur_email	= checkemail($email);

?>