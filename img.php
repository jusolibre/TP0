<!--
@Author: Julien SOBRITZ <sobrit_j>
@Date:   2016-11-14T19:58:49+01:00
@Email:  julien.s@codeur.online
@Filename: img.html
# @Last modified by:   Julien SOBRITZ
# @Last modified time: 2016-11-18T11:16:02+01:00
-->



<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <?php include("menu.php"); ?>
    <link rel="stylesheet" href="style/style.css">
    <title>Project1</title>
  </head>

  <body>
    <h1>les balises html basique</h1>
    <p id="txt">
     Hi !  Bienvenue sur notre site ou vous trouverez differentes significations des balises les plus utilisées pour créer une page html.
     Pour les suggestions envoyer nous un message<br/>
    </p>
    <h1> definition de la balise img</h1>

    <p> la balise img est utilisé en html pour insérer une image  dans une page, afin d'illustrer ou expliquer un propos </p>

    <p>
      elle se compose comme suit:
      <strong><b>&lt;img src="source de l'image"&gt;</b></strong>
    </p>
    <p>elle peut etre redimensionné au dimension voulu par le developpeur.</p>

    <p>
      pour rendre une page plus interactive, le developpeur peut ajouter un lien vers une autre page en cliquant sur l'image<br/>
      pour ce faire, il doit utiliser la balise <strong>&lt;a href="lien"&gt;balise img + source ici&lt;/a&gt;</strong></br>
    </p>
    <p>pour plus d'information sur la balise &lt;a&gt; vous pouvez cliquer <a href="a.html">ici</a></p>
    <h2>Attributs :</h2>
    <p>
      Différents attribut peuvent etre utiliser tels que align, avec pour valeur top, bottom, middle, left et right.<br/>
      Alt peut etre utiliser pour spécifier une alternative textuelle a l'image.<br/>
      Border peut etre utiliser pour specifier un bord a l'image, on peut en règler l'épaisseur en pixel.<br/>
      Croisorigin qui peut permetre a un lien d'etre charger depuis un autre site.<br/>
      Height qui permet de règler la hauteur d'une image en pixels.<br/>
      Hspace qui permet de règler l'espacement en haut et en dessous d'une image en pixels.<br/>
      Ismap qui permet de répèter une image sur toute la surface de la fenetre.<br/>
      Longdesc permet de lier l'image a une descprition complète de celle-ci.<br/>
      Src permet de stocker le lien de l'image.<br/>
      Usemap.
      Vspace qui peut règler en pixel le padding d'une image a droite et a gauche.<br/>
      Et Width qui permet de règler la taille en largeur de l'image en pixel.<br/>
    </p>
  </body>

  <footer>
    <br/><br/>
    <div class="float"><a href="https://twitter.com/VincentTime0"><img src="./image/twitter.png" width="40" height="30" alt="Mon Image"></a><a href="Contact\perso-vincentimes.html">Contact VincenTimes</a><br/></div>
  <div class="float"><a href="https://twitter.com/julien_grimm"><img src="./image/twitter.png" width="40" height="30" alt="Mon Image"></a><a href="https://www.facebook.com/profile.php?id=100014175188748&fref=ts"><img src="./image/facebook.png" width="40" height="30" alt="Mon Image"></a>  <a href="Contact\julien\index.html">Contact Julien GRIMM</a><br/></div>
<div class="float"><a href="https://twitter.com/dantikevin"><img src="./image/twitter.png" width="40" height="30" alt="Mon Image"></a><a href="Contact\danti-kevin.html">Contact Kevin DANTI</a><br/></div>
    <div class="float"><a href="https://twitter.com/thomasmartins31"><img src="./image/twitter.png" width="40" height="30" alt="Mon Image"></a><a href="https://www.facebook.com/thomas.martins.7712"><img src="./image/facebook.png" width="40" height="30" alt="Mon Image"></a><a href="Contact\thomas-martin.html">Contact Thomas MARTIN</a><br/></div>
  </footer>
</html>
