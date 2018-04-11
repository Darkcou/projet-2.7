<?php
require_once('header.php')
?>
    
    <tr>
    	<td height="347" bgcolor="#BBBDFF" class="centre" valign="top">
        <p><center><h3>Des services à la demande</h3></center>
        <script language="javascript">
var pls=new Image();
pls.src="img/plus.gif";
var mos=new Image();
mos.src="img/moins.gif";

function clickImg(nomInput) {
	nomImage = nomInput.name;
	divAAfficher = document.getElementById(nomImage + "Div").style;
	
	if (nomInput.src == pls.src) {
		document.images[nomImage].src = mos.src;
		divAAfficher.display = "";	
	} else {
		document.images[nomImage].src = pls.src;
		divAAfficher.display = "none";
	}
}
</script>

</p><div>&nbsp;</div><img src="img/plus.gif" name="Cyber-Café" id="Cyber-Café" border="0" onclick="javascript:clickImg(this);">&nbsp;&nbsp;Cyber-Café<div id="Cyber-CaféDiv" style="display:none; padding-left: 3em;">4 Ordinateurs pour vos recherches Internet ou vos jeux. Tarifs de l'heure 3,50€. Des cartes de 5h ou 10h sont aussi disponible ( Ex : 5h/15€ )</div><br><img src="img/plus.gif" name="Fax" id="Fax" border="0" onclick="javascript:clickImg(this);">&nbsp;&nbsp;Fax<div id="FaxDiv" style="display:none; padding-left: 3em;">Envoi d'un fax 1€</div><br><img src="img/plus.gif" name="Fournisseurinternet" id="Fournisseurinternet" border="0" onclick="javascript:clickImg(this);">&nbsp;&nbsp;Fournisseur internet<div id="FournisseurinternetDiv" style="display:none; padding-left: 3em;">En Partenariat avec NORDNET ( Groupe France Telecom ) ou OVH, vous pouvez venir vous abonner à Internet avec un Simple RIB ou RIP. </div><br><img src="img/plus.gif" name="Pcportable" id="Pcportable" border="0" onclick="javascript:clickImg(this);">&nbsp;&nbsp;Pc portable<div id="PcportableDiv" style="display:none; padding-left: 3em;">Differentes Marques sont à votre disposition au magasin en exposition.... ASUS, MSI, HP, ACER.</div><br><img src="img/plus.gif" name="Pcsurmesure" id="Pcsurmesure" border="0" onclick="javascript:clickImg(this);">&nbsp;&nbsp;Pc sur mesure<div id="PcsurmesureDiv" style="display:none; padding-left: 3em;">Envie de créer votre PC sur mesure en choisissant chacun des composants, OSSER met à votre disposition son catalogue et sa Rubrique " Devis Gratuit ". Tout autre composant ou périphérique peut être commandé sur simple demande.</div><br><img src="img/plus.gif" name="Photocopies" id="Photocopies" border="0" onclick="javascript:clickImg(this);">&nbsp;&nbsp;Photocopies<div id="PhotocopiesDiv" style="display:none; padding-left: 3em;">Une Photocopieuse est à votre disposition. Tarifs &gt; 20Cts la feuille Noir et Blanc et 50Cts La couleur</div><br><img src="img/plus.gif" name="RéparationInformatiquesurplaceouadomicile" id="RéparationInformatiquesurplaceouadomicile" border="0" onclick="javascript:clickImg(this);">&nbsp;&nbsp;Réparation Informatique sur place ou à domicile<div id="RéparationInformatiquesurplaceouadomicileDiv" style="display:none; padding-left: 3em;">Choisissez le type de réparation. Vous obtiendrez un devis sous 24h maximum</div><br><img src="img/plus.gif" name="Réseauxd&#39;Entreprises" id="Réseauxd&#39;Entreprises" border="0" onclick="javascript:clickImg(this);">&nbsp;&nbsp;Réseaux d'Entreprises<div id="Réseauxd&#39;EntreprisesDiv" style="display:none; padding-left: 3em;">Vous venez de créer votre entreprise et vous avez besoin de sécuriser vos données ou partager votre imprimante? OSSER vous aide à la construction de votre reseau.</div><br>        <p></p>
      </td>
    </tr>
<?php
require_once('footer.php')
?>