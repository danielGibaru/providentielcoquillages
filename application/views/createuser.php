<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?= validation_errors(); ?>



        <?=form_open('Aproduit/adduser');
?>
<h1>Formulaire des users</h1>
        <table>
          <tr>

              <td><input type="hidden"  name="id" value="<?= $user['id']; ?>" ></td>
          </tr>
            <tr>
                <td><label for="username">Nom de l'utilisateur : </label></td>
                <td><input type="input" name="username" value="<?= $user['username']; ?>"></td>
            </tr>
            <tr>
                <td><label for="password">Password :</label></td>
                <td><input type="input" name="password" value="<?= $user['password']; ?>"></td>
            </tr>
            <tr>
                <td><label for="mail">Mail : </label></td>
                <td><input type="input" name="mail" value="<?= $user['mail']; ?>"></td>
            </tr>
            <tr>
                <td><label for="iddroits">Droit de l'utilisateur : (0-> droit de base, 1-> droit d'admin)</label></td>
                <td><input type="input" name="iddroits" value="<?= $user['iddroits']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Valider"/></td>
            </tr>
        </table>
    </body>
</html>
