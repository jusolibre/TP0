<!--
# @Author: Julien SOBRITZ
# @Date:   2016-11-18T10:36:53+01:00
# @Email:  julien.s@codeur.online
# @Filename: meta.php
# @Last modified by:   Julien SOBRITZ
# @Last modified time: 2016-11-18T22:54:10+01:00
-->


<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <?php include("menu.php"); ?>
    <link rel="stylesheet" href="style/style.css">
    <title>Meta</title>
  </head>

  <body>
    <h1>les balises html basique</h1>
    <p id="txt">
     Hi !  Bienvenue sur notre site ou vous trouverez differentes significations des balises les plus utilisées pour créer une page html.
     Pour les suggestions envoyer nous un message<br/>
    </p>
    <h1>META :</h1><br/>
    <p>
      Les balises Meta, Link et Title sont des tag  html insérés dans la section &lt;head> d'une page web (avant le  &lt;body>).<br/>
      Elles permettent de donner des indications aux moteurs de  recherche,<br/>
      aux réseaux sociaux ou à d'autres systèmes pour catégoriser  le contenu de la page à l'aide de méta-données.
    </p><br/>
    <section>
			<h2> Exemple : </h2>
			<p class="code">
				<code data-claire-semantic="html"> <!-- code de la balise sous forme : &lt;BALISE&gt; -->
				&lt;html&gt; <br />
				     &lt;head&gt; <br />
				     &lt;meta name="keywords" content="HTML, CSS, XML, XHTML, JavaScript"&gt; <br />
				     &lt;title&gt; Le titre du document!! &lt;/title&gt;<br />
				     &lt;/head&gt; <br />
			     &lt;body&gt; <br />
				     &lt;/body&gt; <br />
				&lt;/html&gt;
				</code>
			</p>
      <p>Faire en sorte que la page soit actualiser toutes les 20 secondes : < meta http-esquiv =="refresh" content="20"></p>
      <p>Définir l'auteur du fichier : < meta name="author" content="Romain Mustang"> </p>
      <h2>Ressources complémentaires</h2>
      <p><a href="http://www.w3schools.com/tags/tag_meta.asp">www.w3schools.com/tags/tag_meta.asp</a></p>
    </section>
  </body>


      <?php include("footer.php"); ?>
</html>
