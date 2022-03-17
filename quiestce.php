<!DOCTYPE html>

<html>
<head>

<link rel="stylesheet" href="http://btsio.org/2022/jint/quiestce/quiestce.css">

<style>
h1 {text-align: center;}
</style>

  <meta charset="utf-8">
  <title>Qui-est ce ?</title>
  
</head>

<body>

<h1>Qui-est ce ?</h1>

<!--Image-->
<img src="http://btsio.org/2022/jint/quiestce/images/0.jpg" alt="image0">
<img src="http://btsio.org/2022/jint/quiestce/images/1.jpg" alt="image1">
<img src="http://btsio.org/2022/jint/quiestce/images/2.jpg" alt="image2">
<img src="http://btsio.org/2022/jint/quiestce/images/3.jpg" alt="image3">
<img src="http://btsio.org/2022/jint/quiestce/images/4.jpg" alt="image4">
<img src="http://btsio.org/2022/jint/quiestce/images/5.jpg" alt="image5">
</br>
<img src="http://btsio.org/2022/jint/quiestce/images/6.jpg" alt="image6">
<img src="http://btsio.org/2022/jint/quiestce/images/7.jpg" alt="image7">
<img src="http://btsio.org/2022/jint/quiestce/images/8.jpg" alt="image8">
<img src="http://btsio.org/2022/jint/quiestce/images/9.jpg" alt="image9">
<img src="http://btsio.org/2022/jint/quiestce/images/10.jpg" alt="image10">
</br>
<img src="http://btsio.org/2022/jint/quiestce/images/11.jpg" alt="image11">
<img src="http://btsio.org/2022/jint/quiestce/images/12.jpg" alt="image12">
<img src="http://btsio.org/2022/jint/quiestce/images/13.jpg" alt="image13">
<img src="http://btsio.org/2022/jint/quiestce/images/14.jpg" alt="image14">
<img src="http://btsio.org/2022/jint/quiestce/images/15.jpg" alt="image15">
</br>

<!--Questions/Formulaire , chaque question renvoie un 1 ou un 0-->
<form method="post" action="quiestce.php">

<fieldset>
    
<h3>Question 1: Votre personnage porte-il des lunettes ?</h3>
Oui<input type="radio" name="question1" value="1" /> |
Non<input type="radio" name="question1" value="0" /> 

</br>
<h3>Question 2: Votre personnage a-t-il une moustache ?</h3>
Oui<input type="radio" name="question2" value="1" /> |
Non<input type="radio" name="question2" value="0" /> 

</br>
<h3>Question 3: Votre personnage a-t-il un chapeau ?</h3>
Oui<input type="radio" name="question3" value="1" /> |
Non<input type="radio" name="question3" value="0" /> 

</br>
<h3>Question 4: Votre personnage a-t-il des cheveux ?</h3>
Oui<input type="radio" name="question4" value="1" /> |
Non<input type="radio" name="question4" value="0" /> 

</br>
<h3>Question 5: Votre personnage a-t-il une boucle d'oreille ?</h3>
Oui<input type="radio" name="question5" value="1" /> |
Non<input type="radio" name="question5" value="0" /> 

</br>
<h3>Question 6: Votre personnage a-t-il une barbe ?</h3>
Oui<input type="radio" name="question6" value="1" /> |
Non<input type="radio" name="question6" value="0" /> 

</br>
<h3>Question 7: Votre personnage a-t-il un noeud papillon ?</h3>
Oui<input type="radio" name="question7" value="1" /> |
Non<input type="radio" name="question7" value="0" /> 

<br/><br/>
<input type="submit" value="Envoyer votre réponse">
<br/> <br/>


<?php
try {
echo "Vous dite être : <b>" . $_POST['question1']. $_POST['question2'] . $_POST['question3']. $_POST['question4'] . $_POST['question5'] . $_POST['question6']. $_POST['question7']. "</b><br>";
} catch (Exception $e) {
  echo 'Exception reçue : ',  $e->getMessage(), "\n";
}
?>
</fieldset>






</body>
</html>
