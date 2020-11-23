<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>IC-Digital</title>
</head>
<body>
<?php require_once("db.php");?>
  <div class="wrapper">
    <div class="jumbotron">
    <img src="image/mail.jpg" alt="">
    </div>
    <div class="wrapper-form" > 
    <div class="text-center">
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, quaerat illo expedita cupiditate, vel libero qui aliquam maiores ducimus voluptates voluptatem ipsam molestiae provident? Nobis nam accusamus dicta modi saepe!</p>
    </div>
    <div>
      <form action="save.php" method="post">
         <div class="d-flex justify-content-between">
         <div class="input">
           <input type="text" placeholder="Nome e Cognome*" required id="name" name="name">
         </div>
         <div class="input">
            <input type="date"placeholder="Data DI Nascita*" required id="date" name="date">
         </div>
          
         </div>
         <div class="d-flex justify-content-between">
            <div class="d-flex justify-content-around input">
            <label for=""Sesso></label>
            <div>
              <input type="radio" id="maschio" name="sesso" value="maschio"
                    >
              <label for="maschio">Maschio</label>
            </div>
            <div>
              <input type="radio" id="donna" name="sesso" value="donna"
                    >
              <label for="donna">Donna</label>
            </div>
            </div>
            <div class="input">
               <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" size="30" required placeholder="Email*"> 
            </div>
         </div>
        <div class="d-flex  justify-content-between"> 
            <select name="regione" id="regione" require>
            <option value="">Regione*</option>
            <?php foreach($regioni as $key => $regione){ ?>
                    <option value="<?php echo $regione["value"]; ?>"><?php echo $regione['regione']; ?></option> 
             <?php } ?>
            </select>
            <select name="provincia" id="provincia"  require>
            <option value="">Provincia*</option>
            <?php foreach($provincie as $key => $provincia){ ?>
                    <option value="<?php echo $provincia["Value"]; ?>"><?php echo $provincia['Provincia']; ?></option> 
             <?php } ?>
            </select>
            <select name="citta" id="citta" require >
            <option value="">Citta*</option>
            <?php foreach($citta as $key => $city){ ?>
                    <option value="<?php echo $city["value"]; ?>"><?php echo $city['citta']; ?></option> 
             <?php } ?>
            </select>
        </div>
        <div>
        <div class="d-flex justify-content-between">
            <label for="">Sport</label>
            <div>
               <input type="checkbox" id="sci" name="sci" value="sci">
                <label for="sci">Sci</label>
            </div>
            <div>
               <input type="checkbox" id="calcio" name="calcio" value="calcio">
                <label for="calcio">Calcio</label>
            </div>
            <div>
               <input type="checkbox" id="basket" name="basket" value ="basket">
                <label for="basket">Basket</label>
            </div>
        </div>
               
        </div>
        <div>
              <textarea name="sportPreferiti" id="sportPreferiti" cols="80" rows="5">
              Il tuo sport attuale
              </textarea>
        </div>
          <input type="submit" value="Submit">
      </form>
    </div>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>