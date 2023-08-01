<?php
use PHPMailer\PHPMailer\PHPMailer;
$messageEnvoi = ''; // Initialise la variable avec une valeur par défaut


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require 'vendor/autoload.php'; // Inclure la bibliothèque PHPMailer
    
    
    // Récupérer les données du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Créer le contenu de l'e-mail
    $contenu = "De: $nom $prenom\n\nEmail: $email\n\nMessage: $message";

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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Je suis Soufiane Mohamad, je suis développeur web sur Paris. J'ai réalisé ce portfolio dans le but de vous présenter mes compétences ainsi que mes expériences.">
    <meta name="author" content="Soufiane Mohamad">
    <meta name="keywords" content="soufiane mohamad, Portfolio, Portfolio Soufiane Mohamad, Soufiane Mohamad portfolio, développeur web, portfolio développeur web, soufiane mohamad développeur web, développeur web, développeur web paris, Portfolio développeur web Paris, Webmaster, developpeur web Paris, portfolio développeur web ile de france">
    <meta name="title" content="Soufiane Mohamad - Portfolio développeur web">
    <title>Portefolio - Contact</title>
    <!-- logo icon -->
    <link rel="icon" type="image/png" href="img/logo.png">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/adc35cf513.js" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color:#922B21">

    <div>
        <?php include 'components/header.php';?>
    </div>

    <main >
    <div class="container mt-5">
        <h1 class="about-me-heading text-center">Contact</h1>

        <div class="row justify-content-center">
            <div class="col-lg-6 bg-form rounded text-light">
            <form id="mon-formulaire" method="POST">
                <div class="mb-3">
                <label for="nom" class="form-label">Nom :</label>
                <input type="text" id="nom" name="nom" class="form-control" required>
                </div>
                <div class="mb-3">
                <label for="prenom" class="form-label">Prénom :</label>
                <input type="text" id="prenom" name="prenom" class="form-control" required>
                </div>

                <div class="mb-3">
                <label for="email" class="form-label">Adresse e-mail :</label>
                <input type="email" id="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                <label for="message" class="form-label">Message :</label>
                <textarea id="message" name="message" class="form-control" required></textarea>
                </div>

                <div class="mb-3 text-right">
                <input type="submit" value="Envoyer" class="btn btn-light">
                </div>

                <div id="message-envoi" class="<?php echo ($messageEnvoi ? 'alert alert-success' : ''); ?>"><?php echo $messageEnvoi; ?></div>
            </form>
            </div>
        </div>
    </div>
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

