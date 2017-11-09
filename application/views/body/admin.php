<div class="">
  <h1>Liste des produits</h1>
  <?php
   foreach ($Produit as $pro){
    echo $pro->nom;
    echo "<a href='";
    echo base_url();
    echo "index.php/Aproduit/addpro/".$pro->id."'>Editer</a>";

    echo "<a href='";
    echo base_url();
    echo "index.php/Aproduit/deletepro/".$pro->id."'>Supprimer</a>";
    echo "</br>";
  }
  echo "<a href='";
  echo base_url();
  echo "index.php/Aproduit/addpro/'>Ajouter</a>";
   ?>
</div>
<div class="">
  <h1>Liste des user</h1>
  <?php foreach ($user as $us){
    echo $us->username;
    echo "<a href='";
    echo base_url();
    echo "index.php/Aproduit/adduser/".$us->id."'>Editer</a>";

    echo "<a href='";
    echo base_url();
    echo "index.php/Aproduit/deleteuser/".$us->id."'>Supprimer</a>";
    echo "</br>";
  }
    echo "<a href='";
    echo base_url();
    echo "index.php/Aproduit/adduser/'>Ajouter</a>";
   ?>
</div>
<div class="">
  <h1>Liste des news</h1>
  <?php foreach ($news as $ne){
    echo $ne->nom;
    echo "<a href='";
    echo base_url();
    echo "index.php/Aproduit/addnews/".$ne->id."'>Editer</a>";

    echo "<a href='";
    echo base_url();
    echo "index.php/Aproduit/deletenews/".$ne->id."'>Supprimer</a>";
    echo "</br>";
  }
  echo "<a href='";
  echo base_url();
  echo "index.php/Aproduit/addnews/'>Ajouter</a>";
   ?>
</div>
