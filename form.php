<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>My test page</title>
  </head>
  <body>
    <form action="thanks.php" method="post">
        <div>
            <label for="lastname">Nom :</label>
            <input type="text" id="lastname" name="user_lastname">
        </div>
        <div>
            <label for="firstname">Prénom :</label>
            <input type="text" id="firstname" name="user_firstname">
        </div>
        <div>
            <label for="mail">e-mail&nbsp;:</label>
            <input type="email" id="mail" name="user_mail">
        </div>
        <div>
            <label for="number">Téléphone :</label>
            <input type="tel" id="phoneNumber" name="user_phone">
        </div>
        <div>
            <label for="object_selection">Objet :</label>
            <select name="object" id="object">
                <option value="">Destinations</option>
                <option value="canada">Canada</option>    
                <option value="usa">USA</option>
                <option value="france">France</option>
                <option value="germany">Allemagne</option>
            </select>
        </div>
        <div>
            <label for="msg">Message :</label>
            <textarea id="msg" name="user_message"></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer le message</button>
        </div>
            <?php var_dump($_POST); ?>
    </form>
  </body>
</html>