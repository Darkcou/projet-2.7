<?php
require_once('header.php')
?>
    
    <tr>
    	<td height="347" bgcolor="#BBBDFF" class="centre" valign="top">
        <p>
<center><h3>Quelques photos ...</h3></center>
</p><center>
<script language="javascript">

function changeImage(input) {
	var X=new Image();
	X.src="images/croix.gif";
	
	document.images.affichageImage.src = input.src;
	document.getElementById("commPhoto").innerHTML = input.name;
}
</script>
<div id="commPhoto">Matériel</div><br><img src="img/materiel2.jpg" name="affichageImage" border="0" height="500" width="650"><br><br><a href="lasalle.htm"><img src="img/fl_gauche.gif" border="0"></a><img src="img/materiel2.jpg" id="Materiel2.jpg" onclick="javascript:changeImage(this);" name="Matériel" border="0" height="110" width="150">  <img src="img/cyber.jpg" id="cyber.jpg" onclick="javascript:changeImage(this);" name="Cyber" border="0" height="110" width="150">  <img src="img/Interieur.JPG" id="interieur.jpg" onclick="javascript:changeImage(this);" name="Intérieur" border="0" height="110" width="150">  <img src="img/interieur2.jpg" id="Interieur2.JPG" onclick="javascript:changeImage(this);" name="Intérieur" border="0" height="110" width="150">   
</center>        <p></p>
      </td>
    </tr>
    <tr>
    	<td bordercolor="#0000FF" class="cadres" bgcolor="#00B509">
          <div class="footer">
           45 rue du 11 Novembre, 59000 LILLE<br>
Tel : 03.20.20.20.20 - Fax : 03.20.20.20.21 
        </div></td>
    </tr>
</tbody></table>
</center></body></html>