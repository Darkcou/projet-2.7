<html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>OSSER</title>
<link rel="stylesheet" type="text/css" href="style/style.css"></head>


<body><center>
<table width="1016" border="0">
  <tbody><tr>
  <td bordercolor="#0000FF" bgcolor="#00B509" class="cadres">
  <div class="utilisateur" style="float: left; padding-left:0.5em;">Bienvenue chez OSSER</div>
  <div class="utilisateur" style="float: right; padding-right:0.5em;">N'hésitez pas, contactez nous !!</div>  </td>
  </tr>
  <tr>
  <td width="100%" height="145" nowrap="" background="img/bandeau.jpg" valign="bottom" class="cadres">
		<script>
	function surv(menu) {
		menu.style.background = "url(img/menuOver.png)";
	}
	function psurv(menu) {
		menu.style.background = "url(img/menu.png)";
	}
</script>

<div class="menu" id="accueil" style="background-image:URL(img/menuOver.png);"><a href="index.htm" class="lienMenu">Accueil</a></div><div class="menu" id="catalogue" onmouseover="surv(this);" onmouseout="psurv(this);"><a href="catalogue.htm" class="lienMenu">Catalogue</a></div><div class="menu" id="salle" onmouseover="surv(this);" onmouseout="psurv(this);"><a href="lasalle.htm" class="lienMenu">La salle</a></div><div class="menu" id="services" onmouseover="surv(this);" onmouseout="psurv(this);"><a href="services.htm" class="lienMenu">Services</a></div><div class="menu" id="devis" onmouseover="surv(this);" onmouseout="psurv(this);"><a href="devis.htm" class="lienMenu">Devis gratuit</a></div><div class="menu" id="depannage" onmouseover="surv(this);" onmouseout="psurv(this);"><a href="depannage.htm" class="lienMenu">Dépannage</a></div>       </td>   </tr>
    <tr>
    	<td height="347" bgcolor="#BBBDFF" class="centre" valign="top">
        <p>
        </p><center>

<script>
	var tmp=new Image();
	
	function overNews(cNews) {
		mDate = document.getElementById("date" + cNews.id).style;
		mNews = document.getElementById("news" + cNews.id).style;
		mIm1 = document.images["im1" + cNews.id];
		mIm2 = document.images["im2" + cNews.id];
		mCouleurFond = document.getElementById(cNews.id).style;
		mDate.fontSize = 19;
		mNews.fontSize = 18;
		tmp.src = mIm1.src;
		mIm1.src = mIm2.src;
		mIm2.src = tmp.src;
		mCouleurFond.backgroundColor = "#bdffbb";
	}
	
	function outNews(cNews) {
		mDate = document.getElementById("date" + cNews.id).style;
		mNews = document.getElementById("news" + cNews.id).style;
		mIm1 = document.images["im1" + cNews.id].src;
		mIm2 = document.images["im2" + cNews.id].src;
		mCouleurFond = document.getElementById(cNews.id).style;
		mDate.fontSize = 17;
		mNews.fontSize = 16;
		tmp.src = mIm1;
		mIm1 = mIm2;
		mIm2 = tmp.src;
		mCouleurFond.backgroundColor = "";
	}
</script>


<div id="21" onmouseover="overNews(this);" onmouseout="outNews(this);" style=""><table width="950">
	<tbody><tr>
    	<td width="200" align="center"><img src="logos/logitech.jpg" id="im121"></td>
        <td width="500">
        	<table width="550">
            	  <tbody><tr>
   					 <td height="24" id="date21" style="font-size: 17px;">&nbsp;&nbsp; </td>
 				 </tr>
 				 <tr>
    				<td witdh="550" id="news21" style="font-size: 16px;"><center><b>Vente de matériels neufs et occasions. Nous vous proposons des gammes de produits de qualité. Votre espace informatique à Valenciennes et ses alentours vous propose un large choix de produits, et de technicien qualifié, à votre service, en magasin ou sur site. Un depannage informatique à domicile rapide pour particuliers et PME. </b></center>

<center><center></center><img src="img/ordinateurs (76).gif" border="0"><center><b></b></center><b>
<center></center></b></center></td>
 				 </tr>
            </tbody></table>
        </td>
        <td width="200" align="center"><img src="logos/hp.jpg" id="im221"></td>
    </tr>
</tbody></table></div><br><center><br> 
</center>        <p></p>
      </center></td>
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