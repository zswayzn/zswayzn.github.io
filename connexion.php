<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connexion | Hôtel Neptune</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/inscription.css"/>
        <link rel="icon" href="images/saturne.png" type="image/png">
</head>
<body>
<div class="wrapper">
    <div class="title">
      Formulaire de connexion
    </div>
    <div class="form" form action="request.php" method="post">
       <div class="inputfield">
          <label>Pseudo</label>
          <input type="text" class="input" name="pseudo">
       </div>  
       <div class="inputfield">
          <label>Mot de passe</label>
          <input type="password" class="input" name="password">
       </div>  
      
        
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Êtes-vous admin ?</p>
       </div> 
       <div class="inputfield terms">
       <p>Vous n'avez pas de compte ? Créez-en un en cliquant <a href="inscription.php">ici.</a></p>
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


