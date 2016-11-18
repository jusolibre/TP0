<!--
# @Author: Julien SOBRITZ
# @Date:   2016-11-18T10:36:53+01:00
# @Email:  julien.s@codeur.online
# @Filename: table-tr-td.php
# @Last modified by:   Julien SOBRITZ
# @Last modified time: 2016-11-18T15:48:28+01:00
-->


<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <?php include("menu.php"); ?>
    <link rel="stylesheet" href="style/style.css">
    <title>Table Tr Td</title>
  </head>

  <body>
    <h1>les balises html basique</h1>
    <p id="txt">
     Hi !  Bienvenue sur notre site ou vous trouverez differentes significations des balises les plus utilisées pour créer une page html.
     Pour les suggestions envoyer nous un message<br/>
    </p>
    <h1>TABLE TR TD:</h1><br/>
    <p>
      L'ensemble de balise &lt;table&gt;, &lt;tr&gt; et &lt;td&gt; sont trois balise qui permettent de creer des tableau tels que celui-ci:
    </p>
    <table border="1" class="exemple">
      <tr class="exemple">
        <caption>Membres de l'Access Code School : </caption>
        <td>Vincent (tr1 td1)</td>
        <td>20ans (tr1 td2)</td>
        <td>Vesoul (tr1 td3)</td>
      </tr>
      <tr class="exemple">
        <td>Kevin (tr2 td1)</td>
        <td>28 ans (tr2 td2)</td>
        <td>Montbeliard (tr2 td3)</td>
      </tr>
    </table>

    <p class="code">
      ce qui correspond à ce code:
    &lt;table border="1"&gt;<br/>
      &lt;tr&gt;<br/>
        &lt;caption&gt;Membres de l'Access Code School : &lt;/caption&gt;<br/>
        &lt;td&gt;Vincent (tr1 td1)&lt;/td&gt;<br/>
        &lt;td&gt;20ans (tr1 td2)&lt;/td&gt;<br/>
        &lt;td&gt;Vesoul (tr1 td3)&lt;/td&gt;<br/>
      &lt;/tr&gt;<br/>
      &lt;tr&gt;<br/>
        &lt;td&gt;Kevin (tr2 td1)&lt;/td&gt;<br/>
        &lt;td&gt;28 ans (tr2 td2)&lt;/td&gt;<br/>
        &lt;td&gt;Montbeliard (tr2 td3)&lt;/td&gt;<br/>
      &lt;/tr&gt;<br/>
    &lt;/table&gt;<br/>
  </p>
    </body>


        <?php include("footer.php"); ?>
</html>
