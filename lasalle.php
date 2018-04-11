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
<div id="commPhoto">Façade</div><br><img src="img/Facade.jpg" name="affichageImage" width="650" height="500" border="0"><br><br><img src="img/Facade.jpg" width="150" height="110" id="Facade.jpg" border="0" onclick="javascript:changeImage(this);" name="Façade">  <img src="img/vitrine.jpg" width="150" height="110" id="Vitrine.JPG" border="0" onclick="javascript:changeImage(this);" name="Vitrine">  <img src="img/materiel2.jpg" width="150" height="110" id="materiel2.jpg" border="0" onclick="javascript:changeImage(this);" name="Matériel">  <img src="img/Materiel.JPG" width="150" height="110" id="Materiel.JPG" border="0" onclick="javascript:changeImage(this);" name="Matériel">  <a href="lasalle2.htm"><img src="img/fl_droite.gif" border="0"></a> 
</center>        <p></p>
      </td>
    </tr>
    <tr>
    	<td bordercolor="#0000FF" bgcolor="#00B509" class="cadres">
          <div class="footer">
           45 rue du 11 Novembre, 59000 LILLE<br>
Tel : 03.20.20.20.20 - Fax : 03.20.20.20.21 
        </div></td>
    </tr>
</tbody></table>
</center></body></html>