<!--
@Author: Julien SOBRITZ <sobrit_j>
@Date:   2016-11-14T19:58:59+01:00
@Email:  julien.s@codeur.online
@Filename: h123.html
# @Last modified by:   Julien SOBRITZ
# @Last modified time: 2016-11-18T22:50:48+01:00
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
    <p>
      <code data-claire-semantic="html">&lt;h1&gt;Mon Titre&lt;/h1&gt;</code><br/>
    </p>
    <p>
      voici quelque exemples:
      <h1>exemple avec balise h1</h1>
      <h2>exemple avec balise h2</h2>
      <h3>exemple avec balise h3</h3>
    </p>
    <p>
      vous pouvez creer des titre clicable amenant a d'autre pages ane utilisant la <a class="exemple" href="balise lien.html">balise lien</a>.
    </p>
  </body>

      <?php include("footer.php"); ?>
</html>
