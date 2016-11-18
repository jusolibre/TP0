<!--
# @Author: Julien SOBRITZ
# @Date:   2016-11-18T10:36:53+01:00
# @Email:  julien.s@codeur.online
# @Filename: link.php
# @Last modified by:   Julien SOBRITZ
# @Last modified time: 2016-11-18T12:01:13+01:00
-->


<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <?php include("menu.php"); ?>
    <link rel="stylesheet" href="style/style.css">
    <title>Link</title>
  </head>

  <body>
    <h1>les balises html basique</h1>
    <p id="txt">
     Hi !  Bienvenue sur notre site ou vous trouverez differentes significations des balises les plus utilisées pour créer une page html.
     Pour les suggestions envoyer nous un message<br/>
    </p>
    <h1>la balise de lien</h1>
    <p>
      la balise de lien permet au developpeur different moyen de circuler sur le site ou d'envoyer l'utilisateur sur d'autre site,<br/>
      afin que ce dernier puisse poursuivre sa navigation de façon simple.<br/>
      La balise HTML et XHTML LINK permet de spécifier les relations entre les pages du site.<br/>
      La balise HTML et XHTML LINK permet aussi de lier un feuille de style (css) au document.<br/>
      La balise HTML et XHTML LINK ne peut être mise que dans la balise HTML &lt;HEAD>&lt;/HEAD> du document HTML.<br/>
      Elle n'est donc pas visible comme par exemple la balise META.
    </p>
    exemple de balise de lien : &lt; a href="lien de la page"&lg;texte a cliquer&lt;/a&lg;
    <p>
     elle peut etre utilisé avec une image comme indiqué <a href="img.html">ici</a><br/>
     ou bien core sure des titres comme indiqué sur cette page.
    </p><br/>
  </body>

  <footer>
    <br/><br/>
    <div class="float"><a href="https://twitter.com/VincentTime0"><img src="./image/twitter.png" width="40" height="30" alt="Mon Image"></a><a href="Contact\perso-vincentimes.html">Contact VincenTimes</a><br/></div>
  <div class="float"><a href="https://twitter.com/julien_grimm"><img src="./image/twitter.png" width="40" height="30" alt="Mon Image"></a><a href="https://www.facebook.com/profile.php?id=100014175188748&fref=ts"><img src="./image/facebook.png" width="40" height="30" alt="Mon Image"></a>  <a href="Contact\julien\index.html">Contact Julien GRIMM</a><br/></div>
<div class="float"><a href="https://twitter.com/dantikevin"><img src="./image/twitter.png" width="40" height="30" alt="Mon Image"></a><a href="Contact\danti-kevin.html">Contact Kevin DANTI</a><br/></div>
    <div class="float"><a href="https://twitter.com/thomasmartins31"><img src="./image/twitter.png" width="40" height="30" alt="Mon Image"></a><a href="https://www.facebook.com/thomas.martins.7712"><img src="./image/facebook.png" width="40" height="30" alt="Mon Image"></a><a href="Contact\thomas-martin.html">Contact Thomas MARTIN</a><br/></div>
  </footer>
</html>
