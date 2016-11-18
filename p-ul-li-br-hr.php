<!--
# @Author: Julien SOBRITZ
# @Date:   2016-11-18T10:36:53+01:00
# @Email:  julien.s@codeur.online
# @Filename: p-ul-li-br-hr.php
# @Last modified by:   Julien SOBRITZ
# @Last modified time: 2016-11-18T15:48:13+01:00
-->


<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <?php include("menu.php"); ?>
    <link rel="stylesheet" href="style/style.css">
    <title>P Ul Li Hr</title>
  </head>

  <body>
    <h1>les balises html basique</h1>
    <p id="txt">
     Hi !  Bienvenue sur notre site ou vous trouverez differentes significations des balises les plus utilisées pour créer une page html.
     Pour les suggestions envoyer nous un message<br/>
    </p>
    <h1>P :</h1><br/>
    <p>
      La balise &lt;p&gt; est une balise de formatage, elle permet de définir un nouveau paragraphe tel que :
      <p>Un premier paragraphe.</p>
      <p>Un deuxieme paragraphe.</p>
    </p><br/>
    <h1>UL :</h1><br/>
    <p>
      La balise &lt;ul&gt; &lt;/ul&gt; permet de mettre en place une liste verticale simple quand on la couple a une balise &lt;li&gt; au debut et une balise &lt;/li&gt; tel que
      <li class="exemple">
        <ul class="exemple">elem1</ul>
        <ul class="exemple">elem2</ul>
      </li class="exemple">
    </p><br/>
    <h1>LI :</h1><br/>
    <p>
      La balise &lt;li&gt; &lt;/li&gt; permet de mettre en place une liste verticale a puce quand on la couple a une balise &lt;ul&gt; au debut et une balise &lt;/ul&gt; tel que
      <ul class="exemple">
        <li class="exemple">elem1</li>
        <li class="exemple">elem2</li>
      </ul class="exemple">
    </p><br/>
    <h1>HR :</h1><br/>
    <p>
      La balise &lt;hr/&gt; est une balise qui permet de creer une séparation verticale.
    </p><br/>
  </body>


      <?php include("footer.php"); ?>
</html>
