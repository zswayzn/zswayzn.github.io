<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscription | Hôtel Neptune</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/inscription.css"/>
        <link rel="icon" href="images/saturne.png" type="image/png">
</head>
<body>
<div class="wrapper">
    <div class="title">
      Formulaire d'inscription
    </div>
    <div class="form" form action="request.php" method="post">
       <div class="inputfield">
          <label>Prénom</label>
          <input type="text" class="input" name="nom">
       </div>  
        <div class="inputfield">
          <label>Nom</label>
          <input type="text" class="input" name="prenom">
       </div>  
       <div class="inputfield">
          <label>Pseudo</label>
          <input type="text" class="input" name="pseudo">
       </div> 
       <div class="inputfield">
          <label>Adresse Mail</label>
          <input type="text" class="input" name="mail" placeholder="hotel@exemple.fr">
       </div> 
      <div class="inputfield">
          <label>Numéro de téléphone</label>
          <input type="text" class="input" name="telephone" placeholder="06.XX.XX.XX.XX">
       </div> 
       <div class="inputfield">
          <label>Mot de passe</label>
          <input type="password" class="input" name="password">
       </div>  
      <div class="inputfield">
          <label>Confirmer votre mot de passe</label>
          <input type="password" class="input" name="password">
       </div> 
        
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>J'acceptes les termes et les conditions. </p>
       </div> 
       <div class="inputfield terms">
       <p>Vous avez déja un compte ? Connectez-vous en cliquant juste <a href="connexion.php">ici.</a></p>
</div>
      <div class="inputfield">
        <input type="submit" value="S'inscrire." class="btn">
      </div>
      <div class="copyright">
			<ul class="menu">
				<a href="index.php"><li>&copy;Hôtel Neptune.</li></a>
				</ul>
			</div>
    </div>
</div>

</body>
</html>


