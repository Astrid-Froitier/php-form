<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    Merci <?php echo $lastname = $_POST['user_lastname']?> <?php echo $firstname = $_POST['user_firstname'] ?>  de nous avoir contacté à propos de <?php echo $object = $_POST['object'] ?>.
    Un de nos conseiller vous contactera soit à l’adresse <?php echo $mail = $_POST['user_mail'] ?> ou par téléphone au <?php echo $phoneNumber = $_POST['user_phone']?> dans les plus brefs délais pour traiter votre demande : 
    <?php echo $message = $_POST['user_message'] ?> 
</div>
</body>
</html>