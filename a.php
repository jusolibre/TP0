<!--
@Author: Julien SOBRITZ
@Date:   2016-11-16T15:20:37+01:00
@Email:  julien.s@codeur.online
@Filename: a.html
# @Last modified by:   Julien SOBRITZ
# @Last modified time: 2016-11-18T16:44:02+01:00
-->



<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="style/style.css">
    <title>a</title>
  </head>

  <body>
  <?php include("menu.php"); ?>
    <div id="test">
    <h1>les balises html basique</h1>
    <p id="txt">
     Hi !  Bienvenue sur notre site ou vous trouverez differentes significations des balises les plus utilisées pour créer une page html.
     Pour les suggestions envoyer nous un message<br/>
    </p>
      <h1>A :</h1>
      <p >
        Définition : en html un lien est défini par une balise
        <strong>
          <code data-claire-semantic="html">
            &lt;;a href="valeur"&gt; texte du lien&lt;;/a&gt;
          </code>
        </strong>
        afin de permettre en place un lien, vers une autre page ou une autre section de la page.
      </p><br/>
      <h2>Attributs :</h2>
      <p>
        L'attribut <strong>href</strong> specifie l'adresse de destination.<br/><br/>
        Le texte entre les deux balise spécifie le texte représentant le lien.<br/><br/>
        L'attribut <strong>target</strong> peut avoir plusieur valeures a savoir :<br/>
        <strong>_blank</strong> qui ouvre le lien dans un nouvel onglet,<br/>
        <strong>_self</strong> qui ouvre le lien dans la même fenêtre, le même onglet,<br/>
        <strong>_parent</strong> qui ouvre le lien dans la fenetre parente<br/>
        <strong>_top</strong> qui ouvre le lient dans le corp de la fenetre,<br/>
        et enfin <strong>framename</strong> qui ouvre le lien dans une fenetre nommé.<br/>
        Bien qu'essentiellement fait a partir de texte, un lien peut aussi etre fait a partir d'une image.<br/>
        L'utilisation d'un lien se réfèrent a la meme page permet de creer des "marques pages" qui permettent de se rendre directement a un point précis de la page.<br/>
      </p>
      <br/><h2>Exemples :</h2><br/>
      <strong>Lien externe :</strong><br/>
      <code data-claire-semantic="html">&lt;;a href="nom de la page.html"&gt; texte de lien&lt;;/a&gt;</code><br/>
      De cette manière, je redirige l'utilisateur vers une autre page.<br/><br/>
      <strong id="marque-page">Bookmark :</strong><br/>
      <code data-claire-semantic="html">&lt;h1 id="titre1"&gt; Mon Titre Principal &lt;/h1&gt;</code><br/>
      Ici je crée un marque page nommé titre 1.<br/>
      en utilisant ce morceau de code :<br/>
      <code data-claire-semantic="html">&lt;a href="#tips"&gt; Texte De Lien &lt;/a&gt;</code><br/>
      Un clic nous mènera directement au titre.<br/><br/>
      De la meme manière on peut rediriger vers une id d'une autre page en combinant les deux derniers exemples.
    </div>
  </body>

  <?php include("footer.php"); ?>
</html>
