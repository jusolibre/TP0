<!--
@Author: Julien SOBRITZ
@Date:   2016-11-18T10:36:53+01:00
@Email:  julien.s@codeur.online
@Filename: body.html
# @Last modified by:   Julien SOBRITZ
# @Last modified time: 2016-11-18T15:32:25+01:00
-->



<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <?php include("menu.php"); ?>
    <link rel="stylesheet" href="style/style.css">
    <title>Body</title>
  </head>

  <body>
    <h1>les balises html basique</h1>
    <p id="txt">
     Hi !  Bienvenue sur notre site ou vous trouverez differentes significations des balises les plus utilisées pour créer une page html.
     Pour les suggestions envoyer nous un message<br/>
    </p>
    <h1>BODY :</h1><br/>
    <p>
      Définition : C'est une balise qu'il ne faut pas oublier.<br/>
      La balise HTML et XHTML BODY fait partie des 4 balises HHTML ou XHTML qui doivent être présentes dans tous les documents HTML ou XHTML (HTML, HEAD, TITLE, BODY)..
    </p><br/>
    <h2>Attributs :</h2><br/>

    <p>
      Divers attribut peuvent etre utilisé tels que "bgcolor" qui permet de changer la couleur de fond de la page,<br/>
    id, qui permet d'identifier la balise afin de creer des <a href="a.html#marque-page">marque-pages</a>.
    Parmis les differents attributs possible on retrouver aussi :
        <ul class="exemple">
          <li>background="..." : L'URL pour l'image de fond.</li>
          <li>bgcolor="..." : définit la couleur du fond.</li>
          <li>text="..." : deprecated. Couleur du texte.</li>
          <li>link="..." : deprecated. Couleur des liens.</li>
          <li>vlink="..." : deprecated. Couleur des liens déjà visités.</li>
          <li>alink="..." : deprecated. Couleur des liens actifs.</li>
          <li>onload="..." : événement intrinsèque déclenché lors du chargement du document.</li>
          <li>onunload="..." : événement intrinsèque déclenché lors du déchargement du document.</li>
        </ul>
      </p>
  </body>

    <?php include("footer.php"); ?>
</html>
