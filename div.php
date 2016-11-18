<!--
# @Author: Julien SOBRITZ
# @Date:   2016-11-18T10:36:53+01:00
# @Email:  julien.s@codeur.online
# @Filename: div.php
# @Last modified by:   Julien SOBRITZ
# @Last modified time: 2016-11-18T12:00:46+01:00
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
  <footer>
    <br/><br/>
    <div class="float"><a href="https://twitter.com/VincentTime0"><img src="./image/twitter.png" width="40" height="30" alt="Mon Image"></a><a href="Contact\perso-vincentimes.html">Contact VincenTimes</a><br/></div>
  <div class="float"><a href="https://twitter.com/julien_grimm"><img src="./image/twitter.png" width="40" height="30" alt="Mon Image"></a><a href="https://www.facebook.com/profile.php?id=100014175188748&fref=ts"><img src="./image/facebook.png" width="40" height="30" alt="Mon Image"></a>  <a href="Contact\julien\index.html">Contact Julien GRIMM</a><br/></div>
<div class="float"><a href="https://twitter.com/dantikevin"><img src="./image/twitter.png" width="40" height="30" alt="Mon Image"></a><a href="Contact\danti-kevin.html">Contact Kevin DANTI</a><br/></div>
    <div class="float"><a href="https://twitter.com/thomasmartins31"><img src="./image/twitter.png" width="40" height="30" alt="Mon Image"></a><a href="https://www.facebook.com/thomas.martins.7712"><img src="./image/facebook.png" width="40" height="30" alt="Mon Image"></a><a href="Contact\thomas-martin.html">Contact Thomas MARTIN</a><br/></div>
  </footer>
</html>
