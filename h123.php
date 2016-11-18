<!--
@Author: Julien SOBRITZ <sobrit_j>
@Date:   2016-11-14T19:58:59+01:00
@Email:  julien.s@codeur.online
@Filename: h123.html
# @Last modified by:   Julien SOBRITZ
# @Last modified time: 2016-11-18T11:15:50+01:00
-->



<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <?php include("menu.php"); ?>
    <link rel="stylesheet" href="style/style.css">
    <title>h1 h2 h3 h4 h5 h6</title>
  </head>

  <body>
    <h1>les balises html basique</h1>
    <p id="txt">
     Hi !  Bienvenue sur notre site ou vous trouverez differentes significations des balises les plus utilisées pour créer une page html.
     Pour les suggestions envoyer nous un message<br/>
    </p>
    <h1>H1 H2 H3 ... :</h1>
    <p>
      Définition : Les balises h1, h2, h3 ... sont composé d'une balise ouvrante :<br/>
      <code data-claire-semantic="html">
        &lt;hx&gt;<br/>
        ainsi que d'une balise fermante:<br/>
        &lt;/hx&gt;
      </code>
    </p><br/>
    <h2>Exemples :</h2>
    <strong>
      <code data-claire-semantic="html">&lt;h1&gt;Mon Titre&lt;/h1&gt;</code><br/>
    </strong>
    <p>
      voici quelque exemples:
      <h1>exemple avec balise h1</h1>
      <h2>exemple avec balise h2</h2>
      <h3>exemple avec balise h3</h3>
    </p>
    <p>
      vous pouvez creer des titre clicable amenant a d'autre pages ane utilisant la <a href="balise lien.html">balise lien</a>.
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
