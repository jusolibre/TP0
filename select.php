<!--
# @Author: Julien SOBRITZ
# @Date:   2016-11-18T10:36:53+01:00
# @Email:  julien.s@codeur.online
# @Filename: select.php
# @Last modified by:   Julien SOBRITZ
# @Last modified time: 2016-11-18T15:48:21+01:00
-->


<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <?php include("menu.php"); ?>
    <link rel="stylesheet" href="style/style.css">
    <title>Select</title>
  </head>

  <body>
    <h1>les balises html basique</h1>
    <p id="txt">
     Hi !  Bienvenue sur notre site ou vous trouverez differentes significations des balises les plus utilisées pour créer une page html.
     Pour les suggestions envoyer nous un message<br/>
    </p>
    <h1>la balise select</h1>

    le balise select est utilisé pour l'ajout d'une liste avec la possibilité de choisir une option dans celle ci. <br/>
    <p>  voici un exmple d'utilisation:</p>
    <select>
      <optgroup label="groupe1">
        <option>Alpha</option>
        <option>Beta</option>
      </optgroup>
      <optgroup label="groupe2">
        <option>Un</option>
        <option>Deux</option>
      </optgroup>
    </select>
    <p class="code">voici le code utilisé pour cette liste:<br/>
      <strong>  &lt;select &gt; <br/>
        &lt;optgroup label="groupe1"&gt; <br/>
        &lt;option&gt;Alpha&lt;/option&gt; <br/>
        &lt;option&gt;Beta&lt;/option&gt; <br/>
        &lt;/optgroup&gt; <br/>
        &lt;optgroup label="groupe2"&gt; <br/>
        &lt;option&gt;Un&lt;/option&gt; <br/>
        &lt;option&gt;Deux&lt;/option&gt; <br/>
        &lt;/optgroup&gt; <br/>
        &lt;/select&gt;
      </strong>
    </p>
  </body>


      <?php include("footer.php"); ?>
</html>
