<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?= validation_errors(); ?>



        <?=form_open('Aproduit/addnews');
?>
<h1>Formulaire des news</h1>
        <table>
          <tr>

              <td><input type="hidden"  name="id" value="<?= $news['id']; ?>" ></td>
          </tr>
            <tr>
                <td><label for="nom">Nom de la news : </label></td>
                <td><input type="input" name="nom" value="<?= $news['nom']; ?>"></td>
            </tr>
            <tr>
                <td><label for="texte">Textes :</label></td>
                <td><input type="input" name="texte" value="<?= $news['texte']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Valider"/></td>
            </tr>
        </table>
    </body>
</html>
