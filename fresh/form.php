<?

if($impots==2) $impot_wr = "0-2500";
if($impots==3) $impot_wr = "2500-4999";
if($impots==4) $impot_wr = "5000-9999";
if($impots==5) $impot_wr = "Plus 10000";

if($epargne==1) $epargne_wr = "0-99";
if($epargne==2) $epargne_wr = "100-200";
if($epargne==3) $epargne_wr = "200-300";
if($epargne==4) $epargne_wr = "Plus-300";

if($civilite==1) $civilite_wr = "Mr";
if($civilite==2) $civilite_wr = "Mme";
if($civilite==3) $civilite_wr = "Mlle";

              
?>               
<form method="post" name="inscription" action="<? echo $url_cust; ?>">
<input type="hidden" name="civilite" value="<? echo "$civilite_wr"; ?>" />
<input type="hidden" name="nom" value="<? echo "$nom"; ?>" />
<input type="hidden" name="prenom" value="<? echo "$prenom"; ?>" />
<input type="hidden" name="code_postal" value="<? echo "$cp"; ?>" />
<input type="hidden" name="email" value="<? echo "$email"; ?>" />
<input type="hidden" name="telephone" value="<? echo "$tel"; ?>" />
<input type="hidden" name="impots" value="<? echo "$impot_wr"; ?>" />
<input type="hidden" name="epargne_mensuelle" value="<? echo "$epargne_wr"; ?>" />
<input type="hidden" name="prov" value="rafflesnews">
<input type="hidden" name="page" value="send">
</form>
<? if(1==1) { ?>
<script>
document.inscription.submit();
</script>
<? } ?>