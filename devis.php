<html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>OSSER</title>
<link rel="stylesheet" type="text/css" href="style/style.css"></head>


<body><center>
<table width="1016" border="0">
  <tbody><tr>
  <td bordercolor="#0000FF" bgcolor="#00B509" class="cadres">
  <div class="utilisateur" style="float: left; padding-left:0.5em;">Bienvenue chez OSSER</div>
  <div class="utilisateur" style="float: right; padding-right:0.5em;">N'hésitez pas, contactez nous !!</div></td>
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

<div class="menu" id="accueil" onmouseover="surv(this);" onmouseout="psurv(this);"><a href="index.htm" class="lienMenu">Accueil</a></div><div class="menu" id="catalogue" onmouseover="surv(this);" onmouseout="psurv(this);"><a href="catalogue.htm" class="lienMenu">Catalogue</a></div><div class="menu" id="salle" onmouseover="surv(this);" onmouseout="psurv(this);"><a href="lasalle.htm" class="lienMenu">La salle</a></div><div class="menu" id="services" onmouseover="surv(this);" onmouseout="psurv(this);"><a href="services.htm" class="lienMenu">Services</a></div><div class="menu" id="devis" style="background-image:URL(img/menuOver.png);"><a href="devis.htm" class="lienMenu" >Devis gratuit</a></div><div class="menu" id="depannage" onmouseover="surv(this);" onmouseout="psurv(this);"><a href="depannage.htm" class="lienMenu">Dépannage</a></div>       </td>
 
   
    <tr>
    	<td class="centre" bgcolor="#BBBDFF" height="347" valign="top">
        <p> <center><h3>Pour un devis de base</h3></center>
        <script>
	var tabNom = new Array();
	var tabPrix = new Array();
	
	tabNom[0] = "debut";
	tabPrix[tabNom[0]] = 0;

	function affPrix(adresse) {
		i = 0;
		test = false;
		iAjout = tabNom.length + 1;
		prix = adresse.value;
		prix = prix.split('::');
		
		document.getElementById(adresse.name + "Prix").innerHTML = prix[0];
		
		for (i=0; i < tabNom.length; i++) {
			if (tabNom[i] == adresse.name) {
				test = true;
				tabPrix[tabNom[i]] = adresse.value;
			}
		}
		
		if (test == false) {
			tabNom[iAjout] = adresse.name;
			tabPrix[tabNom[iAjout]] = adresse.value;
		}
		
		calculTotal();
	}
	
	function calculTotal() {
		total = 0;
		for (i=0; i < tabNom.length; i+=2) {
			total += parseFloat(tabPrix[tabNom[i]]);
		}
		document.forms['devis'].elements['mTotalH'].value = total;
		document.getElementById("mTotal").innerHTML = total;
	}
</script>
<p>C'est un devis express sur des composants de base d'un ordinateur. Les prix sont indicatifs car ils peuvent variés très rapidement</p>
<p>En tout cas, n'hésitez pas à nous contacter ou à venir directement au magasin.</p>
</p><form name="devis" method="post" action="devisPDF.php">
<input name="alimChoix" value="on" type="hidden"><input name="alimNombre" value="1" type="hidden"><fieldset><legend>Alimentation, Onduleur</legend><table>
						<tbody><tr>
							<td width="800">
				
					<select name="alim0" style="min-width:800px;" onchange="javascript:affPrix(this);">
					<option value="0::Aucun" selected="selected">Aucun</option>
				<option value="10::Multiprise de protection 2 connecteurs">Multiprise de protection 2 connecteurs</option><option value="19::Multiprise de protection 6 connecteur alim. + tel/fax">Multiprise de protection 6 connecteur alim. + tel/fax</option><option value="29::Alimentation ATX/BTX 480W 20/24 Pins en boîte avec bouton d'allumage">Alimentation ATX/BTX 480W 20/24 Pins en boîte avec bouton d'allumage</option><option value="35::Alimentation ATX/BTX 480W 20/24 Pins en boîte avec ventilo 12cm 2 SATA - ANTI RAYON - NOIR PLATINE ">Alimentation ATX/BTX 480W 20/24 Pins en boîte avec ventilo 12cm 2 SATA - ANTI RAYON - NOIR PLATINE </option><option value="45::Alimentation ATX/BTX 550W 20/24 Pins en boîte avec ventilo 12cm">Alimentation ATX/BTX 550W 20/24 Pins en boîte avec ventilo 12cm</option><option value="39::Alimentation ATX/BTX 500W 20/24 Pins en boîte + ventilo 12cm  HEDEN">Alimentation ATX/BTX 500W 20/24 Pins en boîte + ventilo 12cm  HEDEN</option><option value="47::Alimentation ATX/BTX 560W 20/24 Pins en boîte + Double ventilateurs   HEDEN">Alimentation ATX/BTX 560W 20/24 Pins en boîte + Double ventilateurs   HEDEN</option><option value="35::Alimentation Micro ATX 250W en boîte  HEDEN">Alimentation Micro ATX 250W en boîte  HEDEN</option><option value="55::Alimentation HIPER 435W - 4S435 ">Alimentation HIPER 435W - 4S435 </option><option value="129::Alimentation HIPER 680W - 5K680">Alimentation HIPER 680W - 5K680</option></select>
							</td>
							<td width="100">
				
				<div id="alim0Prix" style="float: left;">0</div><div style="float: left; padding-left: 0.5em;">€</div>
			
							</td>
						</tr>
					</tbody></table>
				</fieldset><br><br><input name="boitChoix" value="on" type="hidden"><input name="boitNombre" value="1" type="hidden"><fieldset><legend>Boitier</legend><table>
						<tbody><tr>
							<td width="800">
				
					<select name="boit0" style="min-width:800px;" onchange="javascript:affPrix(this);">
					<option value="0::Aucun" selected="selected">Aucun</option>
				<option value="59::Boîtier ATX Noir/Gris 480w GHOST USB/AUDIO, + affichage LCD en Façade ACOMAX">Boîtier ATX Noir/Gris 480w GHOST USB/AUDIO, + affichage LCD en Façade ACOMAX</option><option value="59::Boîtier ATX Noir/Gris 480w SHADOW USB/AUDIO, + affichage LCD en Façade ACOMAX">Boîtier ATX Noir/Gris 480w SHADOW USB/AUDIO, + affichage LCD en Façade ACOMAX</option><option value="49::Boîtier ATX/BTX 20/24 Pins 480W 4x 5" 1="" 4="" +="" 2="" x="" 3"1="" noir="" argent="" sata="" acomaxbleu="" gris="" avec="" alim"="">Boîtier ATX/BTX 20/24 Pins 480W 4x 5"1/4 + 2 x 3"1/2 Noir/Argent + Sata ACOMAXBleu Gris Avec Alim</option><option value="139::PUNTIT P2-P5945GCX NOIR  Boitier + carte mère Chipset 945GC, LGA775, 2 DDR II 667, VGA intégré 128M, audio 8ch">PUNTIT P2-P5945GCX NOIR  Boitier + carte mère Chipset 945GC, LGA775, 2 DDR II 667, VGA intégré 128M, audio 8ch</option><option value="79::HED-B289CA Boitier M-CUBE Micro ATX 480W NOIR">HED-B289CA Boitier M-CUBE Micro ATX 480W NOIR</option><option value="49::HED-B9202C9 Boîtier ATX 480W Silver + USB &amp; audio, 4X5" 25,="" 6x3"5="" dont="" 2="" visibles"="">HED-B9202C9 Boîtier ATX 480W Silver + USB &amp; audio, 4X5"25, 6X3"5 dont 2 visibles</option><option value="65::HED-B9601CA Boîtier ATX 500W Noir + USB &amp; audio, 4X5" 25,="" 6x3"5="" dont="" 2="" visibles"="">HED-B9601CA Boîtier ATX 500W Noir + USB &amp; audio, 4X5"25, 6X3"5 dont 2 visibles</option><option value="69::HED-B9725CA Boîtier ATX 480W façade vitrifiée + indicateur de température, noir ">HED-B9725CA Boîtier ATX 480W façade vitrifiée + indicateur de température, noir </option></select>
							</td>
							<td width="100">
				
				<div id="boit0Prix" style="float: left;">0</div><div style="float: left; padding-left: 0.5em;">€</div>
			
							</td>
						</tr>
					</tbody></table>
				</fieldset><br><br><input name="csonChoix" value="on" type="hidden"><input name="csonNombre" value="1" type="hidden"><fieldset><legend>Carte Son</legend><table>
						<tbody><tr>
							<td width="800">
				
					<select name="cson0" style="min-width:800px;" onchange="javascript:affPrix(this);">
					<option value="0::Aucun" selected="selected">Aucun</option>
				<option value="15::Carte son  PCI 5.1 ACOMAX">Carte son  PCI 5.1 ACOMAX</option><option value="139::SB Audigy II ZS Platinium Pro">SB Audigy II ZS Platinium Pro</option></select>
							</td>
							<td width="100">
				
				<div id="cson0Prix" style="float: left;">0</div><div style="float: left; padding-left: 0.5em;">€</div>
			
							</td>
						</tr>
					</tbody></table>
				</fieldset><br><br><input name="svgaChoix" value="on" type="hidden"><input name="svgaNombre" value="1" type="hidden"><fieldset><legend>Carte Vidéo/Graphique</legend><table>
						<tbody><tr>
							<td width="800">
				
					<select name="svga0" style="min-width:800px;" onchange="javascript:affPrix(this);">
					<option value="0::Aucun" selected="selected">Aucun</option>
				<option value="79::Carte Vidéo Géforce EN8600GT-512Mo Pci Express">Carte Vidéo Géforce EN8600GT-512Mo Pci Express</option><option value="49::ATI RADEON X1550 - 512Mo PCI Express DDR2 128Bits TV - DVI">ATI RADEON X1550 - 512Mo PCI Express DDR2 128Bits TV - DVI</option><option value="135::ATI RADEON X1950PRO - 256Mo DDR3 - TV Dual DVI Lite, PCI-Express">ATI RADEON X1950PRO - 256Mo DDR3 - TV Dual DVI Lite, PCI-Express</option><option value="29::FX5200-T128 128Mo DDR Agp">FX5200-T128 128Mo DDR Agp</option><option value="35::FX6200 256Mo DDR Agp">FX6200 256Mo DDR Agp</option><option value="29::Geforce 7200GS - 256Mo DDR2 TV - DVI- PCI Express 64Bits">Geforce 7200GS - 256Mo DDR2 TV - DVI- PCI Express 64Bits</option><option value="49::Geforce 8400GS - 512Mo DDR2 + TV + DVI  PCI-Express">Geforce 8400GS - 512Mo DDR2 + TV + DVI  PCI-Express</option><option value="79::Geforce 8600GT - 1Go DDR2 + TV + DVI  PCI-Express">Geforce 8600GT - 1Go DDR2 + TV + DVI  PCI-Express</option><option value="75::Geforce 8600GT - 256Mo DDR3 + TV + DVI  PCI-Express">Geforce 8600GT - 256Mo DDR3 + TV + DVI  PCI-Express</option><option value="65::Geforce 8600GT - 512Mo DDR2 + TV + DVI  PCI-Express">Geforce 8600GT - 512Mo DDR2 + TV + DVI  PCI-Express</option><option value="109::Geforce 8600GTS - 256Mo DDR3 + TV + Dual DVI  PCI-Express">Geforce 8600GTS - 256Mo DDR3 + TV + Dual DVI  PCI-Express</option><option value="159::Geforce 8800GT - 512Mo DDR3  HDTV  DVI  PCI-Express Heatpipe Cooling">Geforce 8800GT - 512Mo DDR3  HDTV  DVI  PCI-Express Heatpipe Cooling</option><option value="99::Geforce 9600GT- 1Go PCI Express DDR3 DUAL DVI HDTV/HDCP">Geforce 9600GT- 1Go PCI Express DDR3 DUAL DVI HDTV/HDCP</option><option value="89::Geforce 9600GT-512 Mo PCI Express DDR3 DUAL DVI HDTV/HDCP">Geforce 9600GT-512 Mo PCI Express DDR3 DUAL DVI HDTV/HDCP</option><option value="199::Geforce 9800GTX- 512Mo PCI Express DDR3 DUAL DVI HDTV/HDCP">Geforce 9800GTX- 512Mo PCI Express DDR3 DUAL DVI HDTV/HDCP</option><option value="349::Geforce 9800GX2- 1Go PCI Express DDR3 DUAL DVI">Geforce 9800GX2- 1Go PCI Express DDR3 DUAL DVI</option><option value="449::Geforce GTX 280 - 1Go PCI Express 2.0 DDR3 DUAL DVI">Geforce GTX 280 - 1Go PCI Express 2.0 DDR3 DUAL DVI</option></select>
							</td>
							<td width="100">
				
				<div id="svga0Prix" style="float: left;">0</div><div style="float: left; padding-left: 0.5em;">€</div>
			
							</td>
						</tr>
					</tbody></table>
				</fieldset><br><br><input name="cmereChoix" value="on" type="hidden"><input name="cmereNombre" value="1" type="hidden"><fieldset><legend>Cartes Mères</legend><table>
						<tbody><tr>
							<td width="800">
				
					<select name="cmere0" style="min-width:800px;" onchange="javascript:affPrix(this);">
					<option value="0::Aucun" selected="selected">Aucun</option>
				<option value="69::ASROCK-939N68PV-GLAN sock939 NVIDIA® GeForce 7050, 4x DDR400, 4xSATA2, RAID 0.1.5, Son7.1">ASROCK-939N68PV-GLAN sock939 NVIDIA® GeForce 7050, 4x DDR400, 4xSATA2, RAID 0.1.5, Son7.1</option><option value="59::ASROCK-K7S41GX sock462/A SIS 741 - FSB333 - Micro ATX, 2xDDR 400 - Audio 5.1 - VGA 64 Mo">ASROCK-K7S41GX sock462/A SIS 741 - FSB333 - Micro ATX, 2xDDR 400 - Audio 5.1 - VGA 64 Mo</option><option value="49::ASROCK-K8-UPGRADE-NF3 sock754  nForce3 250 - 2 x USB 2.0 - 2 DDR 400 - 1x AGP8X - 4 x PCI">ASROCK-K8-UPGRADE-NF3 sock754  nForce3 250 - 2 x USB 2.0 - 2 DDR 400 - 1x AGP8X - 4 x PCI</option><option value="59::ASROCK-P4I65G- sock478 VIA® P4M900 - 800MHz FSB - PCI Ex16 - DDR400 - SATA - VGA Intégré">ASROCK-P4I65G- sock478 VIA® P4M900 - 800MHz FSB - PCI Ex16 - DDR400 - SATA - VGA Intégré</option><option value="79::ASUS-M2A-VM-HDMI AMD 690G, Radeon X1250 intégré, 2 DDR2 533/667/800, USB 2.0, audio 7.1 canaux, GbLAN, mATX, Sortie HDMI intégrée ">ASUS-M2A-VM-HDMI
 AMD 690G, Radeon X1250 intégré, 2 DDR2 533/667/800, USB 2.0, audio 7.1 
canaux, GbLAN, mATX, Sortie HDMI intégrée </option><option value="69::M2N Socket AM2, nForce 430, 4DDR2 800, Pci Expr, Gblan">M2N Socket AM2, nForce 430, 4DDR2 800, Pci Expr, Gblan</option><option value="89::M2N-SLI AMD Socket AM2, NVIDIA nForce 560 SLI, 4xDDR2 800, 2x PCI Express x16, 2x PCI 2.2">M2N-SLI AMD Socket AM2, NVIDIA nForce 560 SLI, 4xDDR2 800, 2x PCI Express x16, 2x PCI 2.2</option><option value="95::M2N-Sli-Deluxe Am2 Nforce 570 Sli Mcp HT2000, 4DDR2 800">M2N-Sli-Deluxe Am2 Nforce 570 Sli Mcp HT2000, 4DDR2 800</option><option value="69::P5B LGA 775 Core 2Intel P965 4xDDR2 800">P5B LGA 775 Core 2Intel P965 4xDDR2 800</option><option value="115::P5K LGA 775 quad core intel P35 4DDR2 1066 Gigalan">P5K LGA 775 quad core intel P35 4DDR2 1066 Gigalan</option><option value="145::P5K Premium Wifi quad core Intel P35 LGA775 4DDR2 1066">P5K Premium Wifi quad core Intel P35 LGA775 4DDR2 1066</option><option value="55::P5LD2-X Sock775 Core 2 duo Intel 945g 4xDDR2 667p">P5LD2-X Sock775 Core 2 duo Intel 945g 4xDDR2 667p</option><option value="49::P5VD2-VM-SE Lga775 Core 2P4VM900 FSB1066, 2xDDR2 667">P5VD2-VM-SE Lga775 Core 2P4VM900 FSB1066, 2xDDR2 667</option><option value="79::MSI-945P NEO5-F sock 775 Core 2 Duo, Intel 945P, 1 PCIe x16, 2 PCIe, 4 PCI, 4 DDR2 533/667, USB2.0, ">MSI-945P NEO5-F sock 775 Core 2 Duo, Intel 945P, 1 PCIe x16, 2 PCIe, 4 PCI, 4 DDR2 533/667, USB2.0, </option><option value="55::MSI-K9N6SGM-V Socket 940 AM2, nVidia Geforce 6100 + Nforce 405, 1 PCIe x16 2xDDR2 533/667/800, USB 2.0, audio 7.1 canaux, Vidéo intégré, LAN, micro ATX">MSI-K9N6SGM-V
 Socket 940 AM2, nVidia Geforce 6100 + Nforce 405, 1 PCIe x16 2xDDR2 
533/667/800, USB 2.0, audio 7.1 canaux, Vidéo intégré, LAN, micro ATX</option></select>
							</td>
							<td width="100">
				
				<div id="cmere0Prix" style="float: left;">0</div><div style="float: left; padding-left: 0.5em;">€</div>
			
							</td>
						</tr>
					</tbody></table>
				</fieldset><br><br><input name="clesusbChoix" value="on" type="hidden"><input name="clesusbNombre" value="1" type="hidden"><fieldset><legend>Cles Usb</legend><table>
						<tbody><tr>
							<td width="800">
				
					<select name="clesusb0" style="min-width:800px;" onchange="javascript:affPrix(this);">
					<option value="0::Aucun" selected="selected">Aucun</option>
				<option value="7::Cles USB2.0 - 1 Go Sous Blister">Cles USB2.0 - 1 Go Sous Blister</option><option value="27::Cles USB2.0 JETFLASH 220 - 2Go empreinte digital">Cles USB2.0 JETFLASH 220 - 2Go empreinte digital</option><option value="35::Cles USB2.0 JETFLASH 220 - 4Go empreinte digital">Cles USB2.0 JETFLASH 220 - 4Go empreinte digital</option><option value="69::Cles USB2.0 JETFLASH V10 - 16Go">Cles USB2.0 JETFLASH V10 - 16Go</option><option value="35::Cles USB2.0 JETFLASH V10 - 8Go">Cles USB2.0 JETFLASH V10 - 8Go</option><option value="8::Cles USB2.0 JETFLASH V30 - 1Go">Cles USB2.0 JETFLASH V30 - 1Go</option><option value="10::Cles USB2.0 JETFLASH V30 - 2Go">Cles USB2.0 JETFLASH V30 - 2Go</option><option value="18::Cles USB2.0 JETFLASH V30 - 4Go">Cles USB2.0 JETFLASH V30 - 4Go</option></select>
							</td>
							<td width="100">
				
				<div id="clesusb0Prix" style="float: left;">0</div><div style="float: left; padding-left: 0.5em;">€</div>
			
							</td>
						</tr>
					</tbody></table>
				</fieldset><br><br><input name="ddChoix" value="on" type="hidden"><input name="ddNombre" value="1" type="hidden"><fieldset><legend>Disque Dur</legend><table>
						<tbody><tr>
							<td width="800">
				
					<select name="dd0" style="min-width:800px;" onchange="javascript:affPrix(this);">
					<option value="0::Aucun" selected="selected">Aucun</option>
				<option value="29::Boitier Externe 3.5" usb2,0="" en="" aluminium="" pour="" disque="" dur="" ide="" ata133"="">Boitier Externe 3.5" USB2,0 en Aluminium pour disque dur IDE ATA133</option><option value="25::Boitier Externe 3,5" usb2,0="" pour="" disque="" dur="" sata="" heden"="">Boitier Externe 3,5" USB2,0 Pour disque dur SATA  HEDEN</option><option value="29::Disque Dur MAXTOR     40GB 2Mo    SATAII 7200RPM">Disque Dur MAXTOR     40GB 2Mo    SATAII 7200RPM</option><option value="39::Disque Dur MAXTOR     80GB 2Mo    SATAII 7200RPM">Disque Dur MAXTOR     80GB 2Mo    SATAII 7200RPM</option><option value="45::Disque Dur MAXTOR    160GB 2Mo   SATAII 7200RPM">Disque Dur MAXTOR    160GB 2Mo   SATAII 7200RPM</option><option value="55::Disque Dur MAXTOR    250GB 8Mo   SATAII 7200RPM">Disque Dur MAXTOR    250GB 8Mo   SATAII 7200RPM</option><option value="59::Disque Dur MAXTOR    320GB 8Mo   SATAII 7200RPM">Disque Dur MAXTOR    320GB 8Mo   SATAII 7200RPM</option><option value="69::Disque Dur MAXTOR    500GB 32Mo SATAII 7200RPM">Disque Dur MAXTOR    500GB 32Mo SATAII 7200RPM</option><option value="45::Disque Dur MAXTOR    80GB 2Mo     IDE 7200RPM">Disque Dur MAXTOR    80GB 2Mo     IDE 7200RPM</option><option value="49::Disque Dur MAXTOR   160GB 2Mo    IDE 7200RPM">Disque Dur MAXTOR   160GB 2Mo    IDE 7200RPM</option><option value="55::Disque Dur MAXTOR   250GB 8Mo    IDE 7200RPM">Disque Dur MAXTOR   250GB 8Mo    IDE 7200RPM</option><option value="59::Disque Dur MAXTOR   320GB 8Mo    IDE 7200RPM">Disque Dur MAXTOR   320GB 8Mo    IDE 7200RPM</option><option value="75::Disque Dur SAMSUNG 400GB 8Mo    IDE 7200RPM ">Disque Dur SAMSUNG 400GB 8Mo    IDE 7200RPM </option><option value="85::Disque Dur SEAGATE  500GB 16Mo  IDE 7200RPM ">Disque Dur SEAGATE  500GB 16Mo  IDE 7200RPM </option><option value="55::Disque Dur SAMSUNG   80GB  8Mo 2" 1="" 2="" ide="" 5400rpm="" "="">Disque Dur SAMSUNG   80GB  8Mo 2"1/2   IDE  5400RPM </option><option value="55::Disque Dur SAMSUNG   80GB  8Mo 2" 1="" 2="" sata="" 5400rpm="" "="">Disque Dur SAMSUNG   80GB  8Mo 2"1/2   SATA  5400RPM </option><option value="49::Disque Dur SAMSUNG  200GB 8Mo   SATAII 7200RPM">Disque Dur SAMSUNG  200GB 8Mo   SATAII 7200RPM</option><option value="75::Disque Dur SAMSUNG  500GB 16Mo SATAII 7200RPM ">Disque Dur SAMSUNG  500GB 16Mo SATAII 7200RPM </option><option value="89::Disque Dur SAMSUNG  640GB 16Mo SATAII 7200RPM ">Disque Dur SAMSUNG  640GB 16Mo SATAII 7200RPM </option><option value="99::Disque Dur SAMSUNG  750GB 32Mo SATAII 7200RPM ">Disque Dur SAMSUNG  750GB 32Mo SATAII 7200RPM </option><option value="139::Disque Dur SAMSUNG 1000GB 32Mo SATAII 7200RPM ">Disque Dur SAMSUNG 1000GB 32Mo SATAII 7200RPM </option><option value="59::Disque Dur SAMSUNG 120GB  8Mo 2" 1="" 2="" ide="" 5400rpm="" "="">Disque Dur SAMSUNG 120GB  8Mo 2"1/2   IDE  5400RPM </option><option value="59::Disque Dur SAMSUNG 120GB  8Mo 2" 1="" 2="" sata="" 5400rpm="" "="">Disque Dur SAMSUNG 120GB  8Mo 2"1/2   SATA  5400RPM </option><option value="65::Disque Dur SAMSUNG 160GB  8Mo 2" 1="" 2="" sata="" 5400rpm="" "="">Disque Dur SAMSUNG 160GB  8Mo 2"1/2   SATA  5400RPM </option><option value="49::Disque Dur SEAGATE    40GB  8Mo 2" 1="" 2="" sata="" 5400rpm="" "="">Disque Dur SEAGATE    40GB  8Mo 2"1/2   SATA  5400RPM </option><option value="17::Boitier Externe USB2.0 2.5" ide="" bleu="" rouge="" ou="" silver"="">Boitier Externe USB2.0 2.5" IDE Bleu rouge ou silver</option><option value="19::Boitier Externe USB2.0 2.5" sata="" bleu="" rouge="" ou="" argent"="">Boitier Externe USB2.0 2.5" SATA Bleu rouge ou argent</option></select>
							</td>
							<td width="100">
				
				<div id="dd0Prix" style="float: left;">0</div><div style="float: left; padding-left: 0.5em;">€</div>
			
							</td>
						</tr>
					</tbody></table>
				</fieldset><br><br><input name="ecransChoix" value="on" type="hidden"><input name="ecransNombre" value="1" type="hidden"><fieldset><legend>Ecrans</legend><table>
						<tbody><tr>
							<td width="800">
				
					<select name="ecrans0" style="min-width:800px;" onchange="javascript:affPrix(this);">
					<option value="0::Aucun" selected="selected">Aucun</option>
				<option value="99::Moniteur LCD 19Pouces - 5ms - Acer">Moniteur LCD 19Pouces - 5ms - Acer</option><option value="109::Moniteur LCD 19 ASUS">Moniteur LCD 19 ASUS</option><option value="189::Moniteur LCD 22Pouces WIDE 16/10  - 5ms - ASUS - NOIR  + WEBCAM 1,3M pixel">Moniteur LCD 22Pouces WIDE 16/10  - 5ms - ASUS - NOIR  + WEBCAM 1,3M pixel</option><option value="209::Moniteur LCD 22Pouces WIDE 16/10 Multimédia - 2ms - ASUS - NOIR  ">Moniteur LCD 22Pouces WIDE 16/10 Multimédia - 2ms - ASUS - NOIR  </option><option value="119::Moniteur LCD 19Pouces 4/3  Multimédia - 8ms -DVI -HANNS-G  Silver/Noir">Moniteur LCD 19Pouces 4/3  Multimédia - 8ms -DVI -HANNS-G  Silver/Noir</option><option value="125::Moniteur LCD 19Pouces WIDE 16/10 Multimédia - 5ms -DVI- HANNS XM NEW YORK Black">Moniteur LCD 19Pouces WIDE 16/10 Multimédia - 5ms -DVI- HANNS XM NEW YORK Black</option></select>
							</td>
							<td width="100">
				
				<div id="ecrans0Prix" style="float: left;">0</div><div style="float: left; padding-left: 0.5em;">€</div>
			
							</td>
						</tr>
					</tbody></table>
				</fieldset><br><br><input name="hparlChoix" value="" type="hidden"><input name="hparlNombre" value="1" type="hidden"><input name="isdivChoix" value="on" type="hidden"><input name="isdivNombre" value="1" type="hidden"><fieldset><legend>Imprimantes, Scanners, Divers</legend><table>
						<tbody><tr>
							<td width="800">
				
					<select name="isdiv0" style="min-width:800px;" onchange="javascript:affPrix(this);">
					<option value="0::Aucun" selected="selected">Aucun</option>
				<option value="4::Cbl USB TYPE AB M/M 1.8m	(Pour imprimante)">Cbl USB TYPE AB M/M 1.8m	(Pour imprimante)</option><option value="79::Cadre Photo Numérique 7" "="">Cadre Photo Numérique 7"</option><option value="85::Cadre Photo Numérique 7" multimédia="" +="" télécommande"="">Cadre Photo Numérique 7" multimédia + Télécommande</option><option value="19::Carte PCI 2 SATA + IDE avec cable">Carte PCI 2 SATA + IDE avec cable</option><option value="15::Carte PCI IEEE 1394">Carte PCI IEEE 1394</option><option value="12::Casque stereo + Micro">Casque stereo + Micro</option><option value="9::Hub USB2,0  4 ports avec Auto-Alimenté">Hub USB2,0  4 ports avec Auto-Alimenté</option><option value="19::Hub USB2.0  4 Ports + Alimentation externe secteu">Hub USB2.0  4 Ports + Alimentation externe secteu</option><option value="29::Webcam Metal PC Hi Res. 1,3M Pixels Pc Camera">Webcam Metal PC Hi Res. 1,3M Pixels Pc Camera</option><option value="69::Brother DCP-167C Multifonction">Brother DCP-167C Multifonction</option><option value="79::DCP-135C Mulitfonction avec lect de cartes">DCP-135C Mulitfonction avec lect de cartes</option><option value="19::Carte 4xUsb VIA 2.0 Pci">Carte 4xUsb VIA 2.0 Pci</option><option value="29::Carte PCMCIA 32bit 10/100/1000 RJ45">Carte PCMCIA 32bit 10/100/1000 RJ45</option><option value="25::Carte PCMCIA USB2.0 - 2 Ports">Carte PCMCIA USB2.0 - 2 Ports</option><option value="19::Rechauffe Tasse USB">Rechauffe Tasse USB</option><option value="19::Casque Stereo PRO Ctrl volume + Micro">Casque Stereo PRO Ctrl volume + Micro</option><option value="75::Epson DX4450 Multifonction">Epson DX4450 Multifonction</option><option value="75::Hp Multifonction C4280">Hp Multifonction C4280</option><option value="25::Hub USB 4 ports  V2.0 avec alim Aluminium">Hub USB 4 ports  V2.0 avec alim Aluminium</option><option value="9::Lampe USB pour notebook avec Clip et LED blanches">Lampe USB pour notebook avec Clip et LED blanches</option></select>
							</td>
							<td width="100">
				
				<div id="isdiv0Prix" style="float: left;">0</div><div style="float: left; padding-left: 0.5em;">€</div>
			
							</td>
						</tr>
					</tbody></table>
				</fieldset><br><br><input name="lectgrChoix" value="on" type="hidden"><input name="lectgrNombre" value="1" type="hidden"><fieldset><legend>Lecteur, Graveur</legend><table>
						<tbody><tr>
							<td width="800">
				
					<select name="lectgr0" style="min-width:800px;" onchange="javascript:affPrix(this);">
					<option value="0::Aucun" selected="selected">Aucun</option>
				<option value="9::Lecteur Disquette  3" 1="" 2="" oem="" beige"="">Lecteur Disquette  3" 1/2 OEM Beige</option><option value="9::Lecteur Disquette  3" 1="" 2="" oem="" noir="" "="">Lecteur Disquette  3" 1/2 OEM Noir </option><option value="29::Lecteur Disquette Externe 3" 1="" 2="" usb2.0="" en="" noir"="">Lecteur Disquette Externe 3" 1/2 USB2.0 en Noir</option><option value="9::Lecteur interne Multicartes 3,5" -="" 23="" en="" 1="" +="" port="" usb2,0="" 2="" façades"="">Lecteur interne Multicartes 3,5" - 23 en 1 + 1 port USB2,0 + 2 Façades</option><option value="13::Lecteur interne Multicartes 3.5" -="" 23="" en="" 1="" +="" port="" usb="" façade="" 3="" façades"="">Lecteur interne Multicartes 3.5" - 23 en 1 + 1 port USB en Façade + 3 Façades</option><option value="199::Graveur DVD BlueRay LG interne en Boite Retail GGW-H20LRB">Graveur DVD BlueRay LG interne en Boite Retail GGW-H20LRB</option><option value="30::Graveur DVD LG 20x SATA GSA-GH20NS10 en bulk Noir Sans Soft ">Graveur DVD LG 20x SATA GSA-GH20NS10 en bulk Noir Sans Soft </option><option value="29::Graveur DVD LG H55N Double couche 20x en bulk Noir Sans Soft ">Graveur DVD LG H55N Double couche 20x en bulk Noir Sans Soft </option><option value="19::Lecteur DVD LG 16x/52x en bulk Beige">Lecteur DVD LG 16x/52x en bulk Beige</option><option value="19::Lecteur DVD LG 16x/52x en bulk SATA Noir">Lecteur DVD LG 16x/52x en bulk SATA Noir</option><option value="19::Lecteur DVD SAMSUNG 16x/48x en bulk Noir">Lecteur DVD SAMSUNG 16x/48x en bulk Noir</option><option value="19::Lecteur DVD SAMSUNG 16x/48x en bulk SATA Noir ">Lecteur DVD SAMSUNG 16x/48x en bulk SATA Noir </option><option value="19::Lecteur-enregistreur multicartes USB2.0 externe 28 en 1 en Silver/noir">Lecteur-enregistreur multicartes USB2.0 externe 28 en 1 en Silver/noir</option><option value="29::Graveur DVD SAMSUNG SH-S202H/BEBE OU BEBN 20x en bulk Noir Avec Soft ">Graveur DVD SAMSUNG SH-S202H/BEBE OU BEBN 20x en bulk Noir Avec Soft </option><option value="29::Graveur DVD SAMSUNG SH-S202H/BEWE / SH-S202J 20x en bulk Beige Avec Soft ">Graveur DVD SAMSUNG SH-S202H/BEWE / SH-S202J 20x en bulk Beige Avec Soft </option><option value="39::Graveur DVD SAMSUNG SH-S202N/BEBN LIGHT SCRIBE 20x en bulk Noir Avec Soft ">Graveur DVD SAMSUNG SH-S202N/BEBN LIGHT SCRIBE 20x en bulk Noir Avec Soft </option><option value="39::Graveur DVD SAMSUNG SH-S202N/BEBN LIGHT SCRIBE 20x en bulk Noir Avec Soft ">Graveur DVD SAMSUNG SH-S202N/BEBN LIGHT SCRIBE 20x en bulk Noir Avec Soft </option><option value="35::Graveur DVD SAMSUNG SH-S203D/BEWE   20x SATA en bulk Beige Avec Soft ">Graveur DVD SAMSUNG SH-S203D/BEWE   20x SATA en bulk Beige Avec Soft </option><option value="19::Lecteur DVD SAMSUNG 16x/48x en bulk Beige">Lecteur DVD SAMSUNG 16x/48x en bulk Beige</option><option value="19::Lecteur de carte USB2 Externe Noir Réf : TS-RDM3K">Lecteur de carte USB2 Externe Noir Réf : TS-RDM3K</option><option value="19::Lecteur de carte USB2 Externe Rouge Réf : TS-RDM3R">Lecteur de carte USB2 Externe Rouge Réf : TS-RDM3R</option></select>
							</td>
							<td width="100">
				
				<div id="lectgr0Prix" style="float: left;">0</div><div style="float: left; padding-left: 0.5em;">€</div>
			
							</td>
						</tr>
					</tbody></table>
				</fieldset><br><br><input name="logChoix" value="" type="hidden"><input name="logNombre" value="1" type="hidden"><input name="reseChoix" value="" type="hidden"><input name="reseNombre" value="1" type="hidden"><input name="ramChoix" value="on" type="hidden"><input name="ramNombre" value="1" type="hidden"><fieldset><legend>Mémoire</legend><table>
						<tbody><tr>
							<td width="800">
				
					<select name="ram0" style="min-width:800px;" onchange="javascript:affPrix(this);">
					<option value="0::Aucun" selected="selected">Aucun</option>
				<option value="34::Mémoire DDR  1 Go    PC 2100 / 266mb Garantie à vie">Mémoire DDR  1 Go    PC 2100 / 266mb Garantie à vie</option><option value="34::Mémoire DDR  1 Go    PC 2700 / 333mb Garantie à vie">Mémoire DDR  1 Go    PC 2700 / 333mb Garantie à vie</option><option value="34::Mémoire DDR  1 Go    PC 3200 / 400mb Garantie à vie">Mémoire DDR  1 Go    PC 3200 / 400mb Garantie à vie</option><option value="17::Mémoire DDR 256 Mo PC 2100 / 266mb Garantie à vie">Mémoire DDR 256 Mo PC 2100 / 266mb Garantie à vie</option><option value="17::Mémoire DDR 256 Mo PC 2700 / 333mb Garantie à vie">Mémoire DDR 256 Mo PC 2700 / 333mb Garantie à vie</option><option value="17::Mémoire DDR 256 Mo PC 3200 / 400mb Garantie à vie">Mémoire DDR 256 Mo PC 3200 / 400mb Garantie à vie</option><option value="29::Mémoire DDR 512 Mo PC 2100 / 266mb Garantie à vie">Mémoire DDR 512 Mo PC 2100 / 266mb Garantie à vie</option><option value="29::Mémoire DDR 512 Mo PC 2700 / 333mb Garantie à vie">Mémoire DDR 512 Mo PC 2700 / 333mb Garantie à vie</option><option value="29::Mémoire DDR 512 Mo PC 3200 / 400mb Garantie à vie">Mémoire DDR 512 Mo PC 3200 / 400mb Garantie à vie</option><option value="29::Mémoire DDR2   1  Go PC 4200 / 533mb  Garantie a vie">Mémoire DDR2   1  Go PC 4200 / 533mb  Garantie a vie</option><option value="29::Mémoire DDR2   1  Go PC 5300 / 667mb  Garantie a vie">Mémoire DDR2   1  Go PC 5300 / 667mb  Garantie a vie</option><option value="29::Mémoire DDR2   1  Go PC 6400 / 800mb  Garantie a vie">Mémoire DDR2   1  Go PC 6400 / 800mb  Garantie a vie</option><option value="49::Mémoire DDR2   2  Go PC 5300 / 667mb  Garantie a vie">Mémoire DDR2   2  Go PC 5300 / 667mb  Garantie a vie</option><option value="49::Mémoire DDR2   2  Go PC 6400 / 800mb  Garantie a vie">Mémoire DDR2   2  Go PC 6400 / 800mb  Garantie a vie</option><option value="19::Mémoire DDR2 512 Mo PC 4200 / 533mb Garantie a vie">Mémoire DDR2 512 Mo PC 4200 / 533mb Garantie a vie</option><option value="19::Mémoire DDR2 512 Mo PC 5300 / 667mb Garantie a vie">Mémoire DDR2 512 Mo PC 5300 / 667mb Garantie a vie</option><option value="19::Mémoire DDR2 512 Mo PC 6400 / 800mb Garantie a vie">Mémoire DDR2 512 Mo PC 6400 / 800mb Garantie a vie</option><option value="59::Mémoire DDR3   1  Go PC 8500 / 1066mb  Garantie a vie">Mémoire DDR3   1  Go PC 8500 / 1066mb  Garantie a vie</option><option value="99::Mémoire DDR3   2  Go PC 8500 / 1066mb  Garantie a vie">Mémoire DDR3   2  Go PC 8500 / 1066mb  Garantie a vie</option><option value="35::Mémoire SDRAM 256 Mo PC 133 - 16x8 Garantie a vie">Mémoire SDRAM 256 Mo PC 133 - 16x8 Garantie a vie</option><option value="29::Mémoire SDRAM 256 Mo PC 133 - 32x8 Garantie a vie">Mémoire SDRAM 256 Mo PC 133 - 32x8 Garantie a vie</option><option value="49::Mémoire SDRAM 512 Mo PC 133 Garantie a vie">Mémoire SDRAM 512 Mo PC 133 Garantie a vie</option><option value="49::Mémoire SODIM DDR  1 Go    PC2700 / 333mb TRANSCEND">Mémoire SODIM DDR  1 Go    PC2700 / 333mb TRANSCEND</option><option value="49::Mémoire SODIM DDR  1 Go    PC3200 / 400mb TRANSCEND">Mémoire SODIM DDR  1 Go    PC3200 / 400mb TRANSCEND</option><option value="19::Mémoire SODIM DDR 256 Mo PC2100 / 266mb TRANSCEND">Mémoire SODIM DDR 256 Mo PC2100 / 266mb TRANSCEND</option><option value="19::Mémoire SODIM DDR 256 Mo PC2700 / 333mb TRANSCEND">Mémoire SODIM DDR 256 Mo PC2700 / 333mb TRANSCEND</option><option value="25::Mémoire SODIM DDR 512 Mo PC2100 / 266mb TRANSCEND">Mémoire SODIM DDR 512 Mo PC2100 / 266mb TRANSCEND</option><option value="25::Mémoire SODIM DDR 512 Mo PC2700 / 333mb TRANSCEND">Mémoire SODIM DDR 512 Mo PC2700 / 333mb TRANSCEND</option><option value="25::Mémoire SODIM DDR 512 Mo PC3200 / 400mb TRANSCEND">Mémoire SODIM DDR 512 Mo PC3200 / 400mb TRANSCEND</option><option value="25::Mémoire SODIM DDR2  1 Go    PC4200 / 533mb TRANSCEND">Mémoire SODIM DDR2  1 Go    PC4200 / 533mb TRANSCEND</option><option value="25::Mémoire SODIM DDR2  1 Go    PC5300 / 667mb TRANSCEND">Mémoire SODIM DDR2  1 Go    PC5300 / 667mb TRANSCEND</option><option value="27::Mémoire SODIM DDR2  1 Go    PC6400 / 800mb TRANSCEND">Mémoire SODIM DDR2  1 Go    PC6400 / 800mb TRANSCEND</option><option value="49::Mémoire SODIM DDR2  2 Go    PC5300 / 667mb TRANSCEND">Mémoire SODIM DDR2  2 Go    PC5300 / 667mb TRANSCEND</option><option value="49::Mémoire SODIM DDR2  2 Go    PC6400 / 800mb TRANSCEND">Mémoire SODIM DDR2  2 Go    PC6400 / 800mb TRANSCEND</option><option value="19::Mémoire SODIM DDR2 512 Mo PC4200 / 533mb TRANSCEND">Mémoire SODIM DDR2 512 Mo PC4200 / 533mb TRANSCEND</option><option value="19::Mémoire SODIM DDR2 512 Mo PC5300 / 667mb TRANSCEND">Mémoire SODIM DDR2 512 Mo PC5300 / 667mb TRANSCEND</option><option value="29::Mémoire SODIM SDRAM 256 Mo PC133  TRANSCEND">Mémoire SODIM SDRAM 256 Mo PC133  TRANSCEND</option><option value="69::Mémoire SODIM SDRAM 512 Mo PC133  TRANSCEND">Mémoire SODIM SDRAM 512 Mo PC133  TRANSCEND</option></select>
							</td>
							<td width="100">
				
				<div id="ram0Prix" style="float: left;">0</div><div style="float: left; padding-left: 0.5em;">€</div>
			
							</td>
						</tr>
					</tbody></table>
				</fieldset><br><br><input name="modChoix" value="" type="hidden"><input name="modNombre" value="1" type="hidden"><input name="procChoix" value="on" type="hidden"><input name="procNombre" value="1" type="hidden"><fieldset><legend>Processeur</legend><table>
						<tbody><tr>
							<td width="800">
				
					<select name="proc0" style="min-width:800px;" onchange="javascript:affPrix(this);">
					<option value="0::Aucun" selected="selected">Aucun</option>
				<option value="49::Athlon 64 Dual core  LE-1640 ">Athlon 64 Dual core  LE-1640 </option><option value="65::Athlon 64 Dual core X2 240 Socket AM2 +">Athlon 64 Dual core X2 240 Socket AM2 +</option><option value="85::Athlon 64 Dual core X2 6000 Socket AM2">Athlon 64 Dual core X2 6000 Socket AM2</option><option value="49::Celeron 440 2 Ghz Socket 775 Fsb800">Celeron 440 2 Ghz Socket 775 Fsb800</option><option value="109::Intel Core 2 Duo E4600 - 2.40GHz SOCKET 775 2MB FSB 800MHz BOX">Intel Core 2 Duo E4600 - 2.40GHz SOCKET 775 2MB FSB 800MHz BOX</option><option value="139::Intel Core 2 Duo E6550 - 2.33GHz SOCKET 775 4MB FSB 1333MHz BOX">Intel Core 2 Duo E6550 - 2.33GHz SOCKET 775 4MB FSB 1333MHz BOX</option><option value="149::Intel Core 2 Duo E6750 - 2.66GHz SOCKET 775 4MB FSB 1333MHz BOX">Intel Core 2 Duo E6750 - 2.66GHz SOCKET 775 4MB FSB 1333MHz BOX</option><option value="169::Intel Core 2 Duo E6850 - 3.00GHz SOCKET 775 4MB FSB 1333MHz BOX">Intel Core 2 Duo E6850 - 3.00GHz SOCKET 775 4MB FSB 1333MHz BOX</option><option value="109::Intel Core 2 Duo E7200 - 2.53GHz SOCKET 775 3MB FSB 1066MHz BOX">Intel Core 2 Duo E7200 - 2.53GHz SOCKET 775 3MB FSB 1066MHz BOX</option><option value="149::Intel Core 2 Duo E8200 - 2.66GHz SOCKET 775 6MB FSB 1333MHz BOX">Intel Core 2 Duo E8200 - 2.66GHz SOCKET 775 6MB FSB 1333MHz BOX</option><option value="169::Intel Core 2 Duo E8400 - 3.00GHz SOCKET 775 6MB FSB 1333MHz BOX">Intel Core 2 Duo E8400 - 3.00GHz SOCKET 775 6MB FSB 1333MHz BOX</option><option value="235::Intel Core 2 Duo E8500 - 3.16GHz SOCKET 775 6MB FSB 1333MHz BOX">Intel Core 2 Duo E8500 - 3.16GHz SOCKET 775 6MB FSB 1333MHz BOX</option><option value="175::Intel Core 2 Quad Q6600 - 2.40GHz SOCKET 775 8MB FSB 1066MHz BOX">Intel Core 2 Quad Q6600 - 2.40GHz SOCKET 775 8MB FSB 1066MHz BOX</option><option value="239::Intel Core 2 Quad Q6700 - 2.66GHz SOCKET 775 8MB FSB 1066MHz BOX">Intel Core 2 Quad Q6700 - 2.66GHz SOCKET 775 8MB FSB 1066MHz BOX</option><option value="169::Intel Core 2 Quad Q9300 - 2,50GHz SOCKET 775 2 x 3Mb FSB 1333MHz BOX">Intel Core 2 Quad Q9300 - 2,50GHz SOCKET 775 2 x 3Mb FSB 1333MHz BOX</option><option value="269::Intel Core 2 Quad Q9450 - 2,66GHz SOCKET 775 2 x 6Mb FSB 1333MHz BOX">Intel Core 2 Quad Q9450 - 2,66GHz SOCKET 775 2 x 6Mb FSB 1333MHz BOX</option></select>
							</td>
							<td width="100">
				
				<div id="proc0Prix" style="float: left;">0</div><div style="float: left; padding-left: 0.5em;">€</div>
			
							</td>
						</tr>
					</tbody></table>
				</fieldset><br><br><input name="sclavChoix" value="on" type="hidden"><input name="sclavNombre" value="1" type="hidden"><fieldset><legend>Souris, Clavier</legend><table>
						<tbody><tr>
							<td width="800">
				
					<select name="sclav0" style="min-width:800px;" onchange="javascript:affPrix(this);">
					<option value="0::Aucun" selected="selected">Aucun</option>
				<option value="7::Clavier PS/2 Standart (silver/noir)">Clavier PS/2 Standart (silver/noir)</option><option value="15::Pavé Numérique universel USB Noir avec 2 Ports USB Sur le coté">Pavé Numérique universel USB Noir avec 2 Ports USB Sur le coté</option><option value="19::Souris Laser 1600dpi 8bouton  2B + scroll Filaire USB2.0 Silver/Noir">Souris Laser 1600dpi 8bouton  2B + scroll Filaire USB2.0 Silver/Noir</option><option value="9::Souris Optique PS2  2 Boutons 1 Molette Noir / Gris">Souris Optique PS2  2 Boutons 1 Molette Noir / Gris</option><option value="19::Souris Optique Sans fils  2B+scroll avec Dongle intégré Silver/Noir">Souris Optique Sans fils  2B+scroll avec Dongle intégré Silver/Noir</option><option value="9::Souris Optique USB  2 Boutons 1 Molette Gris / Noir">Souris Optique USB  2 Boutons 1 Molette Gris / Noir</option><option value="29::Souris optique Sans fil RF2.4G USB">Souris optique Sans fil RF2.4G USB</option><option value="19::Clavier LOGITECH Classic Noir avec fil PS2 ou Usb en Boite">Clavier LOGITECH Classic Noir avec fil PS2 ou Usb en Boite</option><option value="16::Clavier LOGITECH Deluxe 250 Noir ou Beige filaire PS2 ou Usb">Clavier LOGITECH Deluxe 250 Noir ou Beige filaire PS2 ou Usb</option><option value="95::Clavier LOGITECH G15 GAMMER REFRESH filaire PS2 en boite">Clavier LOGITECH G15 GAMMER REFRESH filaire PS2 en boite</option><option value="25::Clavier LOGITECH MEDIA KEYBORD Noir avec fil PS2 en Boite">Clavier LOGITECH MEDIA KEYBORD Noir avec fil PS2 en Boite</option><option value="35::Clavier LOGITECH ULTRA FLAT Noir avec fil PS2 en Boite">Clavier LOGITECH ULTRA FLAT Noir avec fil PS2 en Boite</option><option value="29::Clavier LOGITECH UltraX Média Keyboard Noir avec fil PS2">Clavier LOGITECH UltraX Média Keyboard Noir avec fil PS2</option><option value="79::KIT Clavier + Souris Laser Sans fil LOGITECH LX710">KIT Clavier + Souris Laser Sans fil LOGITECH LX710</option><option value="89::KIT Clavier + Souris Laser Sans fil LOGITECH MX3200">KIT Clavier + Souris Laser Sans fil LOGITECH MX3200</option><option value="135::KIT Clavier + Souris Laser Sans fil LOGITECH MX5000">KIT Clavier + Souris Laser Sans fil LOGITECH MX5000</option><option value="49::KIT Clavier + Souris Optique Sans fil  LOGITECH en Noir EX90">KIT Clavier + Souris Optique Sans fil  LOGITECH en Noir EX90</option><option value="39::KIT Clavier + Souris Optique Sans fil DELUXE 650 LOGITECH en Noir">KIT Clavier + Souris Optique Sans fil DELUXE 650 LOGITECH en Noir</option><option value="35::KIT Clavier + Souris Optique Sans fil INTERNET PRO LOGITECH en Beige">KIT Clavier + Souris Optique Sans fil INTERNET PRO LOGITECH en Beige</option><option value="59::KIT Clavier + Souris Optique Sans fil sur socle Rechargeable LOGITECH en NOIR">KIT Clavier + Souris Optique Sans fil sur socle Rechargeable LOGITECH en NOIR</option><option value="35::Souris laser filaire USB Noir LOGITECH RX1000">Souris laser filaire USB Noir LOGITECH RX1000</option><option value="35::Souris laser filaire USB Silver LOGITECH V150">Souris laser filaire USB Silver LOGITECH V150</option><option value="49::Souris Laser G3 LOGITECH">Souris Laser G3 LOGITECH</option><option value="69::Souris Laser G5 LOGITECH">Souris Laser G5 LOGITECH</option><option value="99::Souris Laser G9 LOGITECH">Souris Laser G9 LOGITECH</option><option value="69::Souris Laser SANS FIL RECHARGEABLE MX-1100 BLUE LOGITECH">Souris Laser SANS FIL RECHARGEABLE MX-1100 BLUE LOGITECH</option><option value="35::Souris LOGITECH Sans fil LX6">Souris LOGITECH Sans fil LX6</option><option value="39::Souris LOGITECH V200 Sans fil +HUB ">Souris LOGITECH V200 Sans fil +HUB </option><option value="13::Souris PS2 ou Usb optique  2 Boutons 1 Molette Noir SBF96 LOGITECH ">Souris PS2 ou Usb optique  2 Boutons 1 Molette Noir SBF96 LOGITECH </option><option value="19::Pavé Numérique universel USB silver led bleue">Pavé Numérique universel USB silver led bleue</option></select>
							</td>
							<td width="100">
				
				<div id="sclav0Prix" style="float: left;">0</div><div style="float: left; padding-left: 0.5em;">€</div>
			
							</td>
						</tr>
					</tbody></table>
				</fieldset><br><br><input name="tunChoix" value="" type="hidden"><input name="tunNombre" value="1" type="hidden"><input name="ventChoix" value="on" type="hidden"><input name="ventNombre" value="1" type="hidden"><fieldset><legend>Ventilateur</legend><table>
						<tbody><tr>
							<td width="800">
				
					<select name="vent0" style="min-width:800px;" onchange="javascript:affPrix(this);">
					<option value="0::Aucun" selected="selected">Aucun</option>
				<option value="19::Ventilateur AMD Soc A/462 Ultra silencieux 19dba/ 12VDC Fan XP3200 WhisperRock V ">Ventilateur AMD Soc A/462 Ultra silencieux 19dba/ 12VDC Fan XP3200 WhisperRock V </option><option value="15::Ventilateur INTEL Socket 478 OEM">Ventilateur INTEL Socket 478 OEM</option><option value="15::Ventilateur AMD Socket A / 462">Ventilateur AMD Socket A / 462</option><option value="16::Ventilateur INTEL Socket 775">Ventilateur INTEL Socket 775</option><option value="15::Ventilateur INTEL Soc 775  silencieux 26 dba/12VDC Fan">Ventilateur INTEL Soc 775  silencieux 26 dba/12VDC Fan</option><option value="19::Ventilateur AMD Socket 754,940,939,AM2 avec base cuivre ">Ventilateur AMD Socket 754,940,939,AM2 avec base cuivre </option><option value="17::Ventilateur INTEL Soc 775 Ultra silencieux 23 dba/12VDC Fan Base Cuivre CoreDuo-">Ventilateur INTEL Soc 775 Ultra silencieux 23 dba/12VDC Fan Base Cuivre CoreDuo-</option><option value="15::Ventilateur INTEL Socket 478 Base cuivre">Ventilateur INTEL Socket 478 Base cuivre</option><option value="17::Ventilateur INTEL Socket 478 Ultra silencieux 19 dba / 12VDC FAN P4~3.7 GHz / ">Ventilateur INTEL Socket 478 Ultra silencieux 19 dba / 12VDC FAN P4~3.7 GHz / </option></select>
							</td>
							<td width="100">
				
				<div id="vent0Prix" style="float: left;">0</div><div style="float: left; padding-left: 0.5em;">€</div>
			
							</td>
						</tr>
					</tbody></table>
				</fieldset><br><br><div style="float: left;">Montant total :</div><div id="mTotal" style="float: left; padding-left: 0.3em;">0</div><div style="float: left; padding-left: 0.3em;">€</div><input name="mTotalH" value="0" type="hidden"><br>
</form>

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
</center></div></body></html>