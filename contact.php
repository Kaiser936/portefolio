<?php
use PHPMailer\PHPMailer\PHPMailer;
$messageEnvoi = ''; // Initialise la variable avec une valeur par défaut


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require 'vendor/autoload.php'; // Inclure la bibliothèque PHPMailer
    
    
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Créer le contenu de l'e-mail
    $contenu = "De: $nom\n\nEmail: $email\n\nMessage: $message";

    // Créer une instance de PHPMailer
    $mail = new PHPMailer;
    $mail->isSMTP();
    // Configurer les paramètres SMTP
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->SMTPAuth = true;
    $mail->Username = 'soufiane.mohamad@gmail.com';
    $mail->Password = 'qrvowxepcdkwvrcm';
    $mail->setFrom('soufiane.mohamad@gmail.com', $nom);
    $mail->addAddress('soufiane.mohamad@gmail.com', 'Soufiane Mohamad');
    // Configurer le sujet et le contenu de l'e-mail
    $mail->Subject = "Nouveau message de $nom";
    $mail->Body = $contenu;

    if ($mail->send()) {
        // Message de succès
        $messageEnvoi = "Votre message a bien été envoyé !";
    } else {
        // Message d'erreur
        $messageEnvoi = "Une erreur s'est produite : " . $mail->ErrorInfo;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/adc35cf513.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Portefolio - Contact</title>
</head>
<body>

    <div>
        <?php include 'components/header.php';?>
    </div>

    <main>
        <section id="contact">
            <article>
                <h1>Contact</h1>

                <form id="mon-formulaire" method="POST">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" required>
                
                    <label for="email">Adresse e-mail :</label>
                    <input type="email" id="email" name="email" required>
                
                    <label for="message">Message :</label>
                    <textarea id="message" name="message" required></textarea>
                
                    <input type="submit" value="Envoyer" class="btn btn-primary">

                    <div id="message-envoi" class="<?php echo ($messageEnvoi ? 'alert alert-success' : ''); ?>"><?php echo $messageEnvoi; ?></div>
                </form>
            </article>
        </section>
    </main>

    <div>
        <?php include 'components/footer.php';?>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tsparticles-confetti@2.9.3/tsparticles.confetti.bundle.min.js"></script>
    <script src="js/script.js"></script>

</body>
</html>

