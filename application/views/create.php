<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?= validation_errors(); ?>



        <?=form_open('Aproduit/addpro');
?>
<h1>Formulaire de Produits</h1>
        <table>
          <tr>

              <td><input type="hidden"  name="id" value="<?= $Produit['id']; ?>" ></td>
          </tr>
            <tr>
                <td><label for="nom">Nom du produit : </label></td>
                <td><input type="input" name="nom" value="<?= $Produit['nom']; ?>"></td>
            </tr>
            <tr>
                <td><label for="description">Description du produit : </label></td>
                <td><input type="description" name="description" value="<?= $Produit['description']; ?>"></td>
            </tr>
            <tr>
                <td><label for="idfiltres">Type de produits(1=visage 2=corps 3=hygiene 4=cappilaire) : </label></td>
                <td><input type="input" name="idfiltres" value="<?= $Produit['idfiltres']; ?>"></td>
            </tr>
            <tr>
                <td><label for="idgenre">Genre(1=femme,2=homme) : </label></td>
                <td><input type="input" name="idgenre" value="<?= $Produit['idgenre']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Valider"/></td>
            </tr>
        </table>
    </body>
</html>
