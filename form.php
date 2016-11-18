<!--
@Author: Julien SOBRITZ <sobrit_j>
@Date:   2016-11-14T19:59:13+01:00
@Email:  julien.s@codeur.online
@Filename: form.html
# @Last modified by:   Julien SOBRITZ
# @Last modified time: 2016-11-18T11:15:42+01:00
-->



<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <?php include("menu.php"); ?>
    <link rel="stylesheet" href="style/style.css">
    <title>Form</title>
  </head>

  <body>
    <h1>les balises html basique</h1>
    <p id="txt">
     Hi !  Bienvenue sur notre site ou vous trouverez differentes significations des balises les plus utilisées pour créer une page html.
     Pour les suggestions envoyer nous un message<br/>
    </p>
    <h1>Défintion de Form</h1>
    <img src="./image/google-forms-512.png">
    <p> La balise <b>form</b> déclare une zone de formulaire dans laquelle les utilisateurs peuvent saisir des informations qui pourront par la suite être récupérées et traitées côté serveur. Il est possible d'utiliser plusieurs formulaires dans une même page sous condition de ne pas les imbriquer.</p>
    <p> Finalement, pour que le formulaire puisse être envoyé il faut qu'il soit soumis .</p>
    <p> soit à l'aide de la balise input : input type="submit" ...</p>
    <p> soit à l'aide du javascript en appliquant la fonction "submit()" au formulaire (en se basant sur son identifiant)</p>
    <br/>
    <p>
      <em>
        La balise HTML et XHTML <strong>TEXTAREA</strong> n'est pas reconnue par Netscape si elle n'est pas dans la balise &lt;FORM>.<br/>
        D'autre part, pour utiliser cette notion de formulaire, il est important  de donner les valeurs adéquates aux principaux attributs de la balise  &lt;form> :<br/>
        - <b>name</b> : nom du formulaire utilisé pour faire référence à celui-ci.<br/>
        - <b>action</b> : indique l'adresse d'envoi des données du formulaire lors de sa soumission.<br/>
        - <b>method</b> : indique comment seront transmises les données au serveur ("get" ou "post").
      </em>
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
