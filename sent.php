
<!doctype html>
<head>
  <meta charset="utf-8">
  <title>Support</title>
</head>
<body>

<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
echo "Merci $firstname $lastname de nous avoir contacté à propos du $subject." ."<br>". "Un de nos conseillers vous contactera soit à l’adresse email $email ou par téléphone au $phone 
dans les plus brefs délais pour traiter votre demande : " ."<br>". "\"$message\"";
?>
</body>
</html>