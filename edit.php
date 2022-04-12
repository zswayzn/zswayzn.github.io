<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modifier | Hôtel Neptune</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/inscription.css"/>
        <link rel="icon" href="images/saturne.png" type="image/png">
</head>
<body>
<div class="wrapper">
    <div class="title">
      Modifier la chambre
    </div>
    <div class="form" form action="request.php" method="post">
       <div class="inputfield">
          <label>Nom</label>
          <input type="text" class="input"  name="pseudo">
       </div> 
       <div class="inputfield">
          <label>Description de la chambre</label>
          <input type="text" class="input"  name="description">
       </div> 
       <div class="inputfield">
          <label>Taille</label>
          <input type="text" class="input" name="taille">
       </div> 
       <div class="inputfield">
          <label>Capacité</label>
          <input type="text" class="input" name="capacite">
       </div>  
       <div class="inputfield">
          <label>Exposition</label>
          <input type="text" class="input" name="exposition">
       </div>
       <div class="inputfield">
          <label>Étage</label>
          <input type="text" class="input" name="etage">
       </div> 
       <div class="inputfield">
          <label>Prix (à la nuit)</label>
          <input type="text" class="input" name="prix">
       </div>
      
        
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Douche </p>
       </div>
      <div class="inputfield">
        <input type="submit" value="Modifier la chambre." class="btn">
      </div>
      
      <div class="copyright">
			<ul class="menu">
                <p style="font-size: 20px;padding-bottom:10px;">Retour a la liste des chambres <a href="liste.php">ici.</a>
				<a href="index.php"><li>&copy;Hôtel Neptune.</li></a>

				</ul>
			</div>
    </div>
    
</div>


    
</div>
</body>
</html>


