<!--
# @Author: Julien SOBRITZ
# @Date:   2016-11-18T10:36:53+01:00
# @Email:  julien.s@codeur.online
# @Filename: div.php
# @Last modified by:   Julien SOBRITZ
# @Last modified time: 2016-11-18T15:33:08+01:00
-->


<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <?php include("menu.php"); ?>
    <link rel="stylesheet" href="style/style.css">
    <title>Div</title>
  </head>

  <body>
    <h1>les balises html basique</h1>
    <p id="txt">
     Hi !  Bienvenue sur notre site ou vous trouverez differentes significations des balises les plus utilisées pour créer une page html.
     Pour les suggestions envoyer nous un message<br/>
    </p>
    <h1>la balise div</h1>
    <p>
      la balise div permet de creer une boite contenant divers éléments,des choix pour un formulaire par exemple.
    </p>
    <p>
      elle se compose comme suit: <br/>
      &lt;div style="width:300px; height:120px; overflow:auto; border:solid 1px black;"&gt; <br/>
   <.ul><br/>
      &lt;li&gt;Elémént 1&lt;/li&gt; <br/>
      &lt;li&gt;Elémént 2&lt;/li&gt; <br/>
      &lt;li&gt;Elémént 3&lt;/li&gt; <br/>
      &lt;li&gt;Elémént 4&lt;/li&gt; <br/>
      &lt;li&gt;Elémént 5&lt;/li&gt; <br/>
      &lt;li&gt;Elémént 6&lt;/li&gt; <br/>
      &lt;li&gt;Elémént 7&lt;/li&gt; <br/>
      &lt;li&gt;Elémént 8&lt;/li&gt; <br/>
      &lt;li&gt;Elémént 9&lt;/li&gt; <br/>
      &lt;li&gt;Elémént 10&lt;/li&gt; <br/>
      &lt;li&gt;Elémént 11&lt;/li&gt; <br/>
      &lt;li&gt;Elémént 12&lt;/li&gt; <br/>
   <./ul> <br/>
<./div> <br/>
    </p>
    <p>
      ce qui donne une fois mise en application:
      <!--...quelque chose ne va pas ici, le tableau passe pas avec le css-->

<center>

      <div id="vid" style="width:auto; height:auto; overflow:auto;">

      <ul>
      <li class="exemple">Elémént 1</li>
      <li class="exemple">Elémént 2</li>
      <li class="exemple">Elémént 3</li>
      <li class="exemple">Elémént 4</li>
      <li class="exemple">Elémént 5</li>
      <li class="exemple">Elémént 6</li>
      <li class="exemple">Elémént 7</li>
      <li class="exemple">Elémént 8</li>
      <li class="exemple">Elémént 9</li>
      <li class="exemple">Elémént 10</li>
      <li class="exemple">Elémént 11</li>
      <li class="exemple">Elémént 12</li>
   </ul>
</div>
</center>
    </p>
  </body>

      <?php include("footer.php"); ?>
</html>
