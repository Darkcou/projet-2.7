<?php
require_once('header.php')
?>
    
    <tr>
    	<td height="347" bgcolor="#BBBDFF" class="centre" valign="top">
        <p><center><h3>Des services � la demande</h3></center>
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

</p><div>&nbsp;</div><img src="img/plus.gif" name="Cyber-Caf�" id="Cyber-Caf�" border="0" onclick="javascript:clickImg(this);">&nbsp;&nbsp;Cyber-Caf�<div id="Cyber-Caf�Div" style="display:none; padding-left: 3em;">4 Ordinateurs pour vos recherches Internet ou vos jeux. Tarifs de l'heure 3,50�. Des cartes de 5h ou 10h sont aussi disponible ( Ex : 5h/15� )</div><br><img src="img/plus.gif" name="Fax" id="Fax" border="0" onclick="javascript:clickImg(this);">&nbsp;&nbsp;Fax<div id="FaxDiv" style="display:none; padding-left: 3em;">Envoi d'un fax 1�</div><br><img src="img/plus.gif" name="Fournisseurinternet" id="Fournisseurinternet" border="0" onclick="javascript:clickImg(this);">&nbsp;&nbsp;Fournisseur internet<div id="FournisseurinternetDiv" style="display:none; padding-left: 3em;">En Partenariat avec NORDNET ( Groupe France Telecom ) ou OVH, vous pouvez venir vous abonner � Internet avec un Simple RIB ou RIP. </div><br><img src="img/plus.gif" name="Pcportable" id="Pcportable" border="0" onclick="javascript:clickImg(this);">&nbsp;&nbsp;Pc portable<div id="PcportableDiv" style="display:none; padding-left: 3em;">Differentes Marques sont � votre disposition au magasin en exposition.... ASUS, MSI, HP, ACER.</div><br><img src="img/plus.gif" name="Pcsurmesure" id="Pcsurmesure" border="0" onclick="javascript:clickImg(this);">&nbsp;&nbsp;Pc sur mesure<div id="PcsurmesureDiv" style="display:none; padding-left: 3em;">Envie de cr�er votre PC sur mesure en choisissant chacun des composants, OSSER met � votre disposition son catalogue et sa Rubrique " Devis Gratuit ". Tout autre composant ou p�riph�rique peut �tre command� sur simple demande.</div><br><img src="img/plus.gif" name="Photocopies" id="Photocopies" border="0" onclick="javascript:clickImg(this);">&nbsp;&nbsp;Photocopies<div id="PhotocopiesDiv" style="display:none; padding-left: 3em;">Une Photocopieuse est � votre disposition. Tarifs &gt; 20Cts la feuille Noir et Blanc et 50Cts La couleur</div><br><img src="img/plus.gif" name="R�parationInformatiquesurplaceouadomicile" id="R�parationInformatiquesurplaceouadomicile" border="0" onclick="javascript:clickImg(this);">&nbsp;&nbsp;R�paration Informatique sur place ou � domicile<div id="R�parationInformatiquesurplaceouadomicileDiv" style="display:none; padding-left: 3em;">Choisissez le type de r�paration. Vous obtiendrez un devis sous 24h maximum</div><br><img src="img/plus.gif" name="R�seauxd&#39;Entreprises" id="R�seauxd&#39;Entreprises" border="0" onclick="javascript:clickImg(this);">&nbsp;&nbsp;R�seaux d'Entreprises<div id="R�seauxd&#39;EntreprisesDiv" style="display:none; padding-left: 3em;">Vous venez de cr�er votre entreprise et vous avez besoin de s�curiser vos donn�es ou partager votre imprimante? OSSER vous aide � la construction de votre reseau.</div><br>        <p></p>
      </td>
    </tr>
<?php
require_once('footer.php')
?>