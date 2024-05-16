<?php
    // connect to the database to get the PDO instance
    $pdo = require 'connect.php';

        // execute a query Home
        $sql = 'SELECT * FROM Home';
        $statement = $pdo->query($sql);
        $home_data = $statement->fetch(PDO::FETCH_ASSOC);

        // execute a query section_control
        $sql = 'SELECT * FROM section_control';
        $statement = $pdo->query($sql);
        $home_data = $statement->fetch(PDO::FETCH_ASSOC);

        
// execute a query to get the images from the database
$sql = 'SELECT * FROM images';
$statement = $pdo->query($sql);
while ($image = $statement->fetch(PDO::FETCH_ASSOC)) {
    echo '<img src="image_bdd/'. $image['img']. '" alt="'. $image['alt']. '">';
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio de SAMUEL</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
 
</head>
<body>
    <header>
    <a href="#" class="logo">Portfolio</a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#home">Accueil</a></li>
            <li><a href="#about">À propos de moi</a></li>
            <li><a href="#skills">Compétences</a></li>
            <li><a href="#portfolio">Réalisations</a></li>
            <li><a href="#contact">Contact</a></li>
    </header>


    <section class="home" id="home">
        <div class="social">
            <a href="#"><i class='bx bxl-github'></i></a>
            <a href="#"><i class="bx bxl-linkedin"></i></a>
            <a href="#"><i class="bx bxl-instagram"></i></a>
            <a href="#"><i class="bx bxl-twitter"></i></a>
            <a href="#"><i class="bx bxl-wordpress"></i></a>
        </div>
        <div class="home-text">
            <span>Bonjour, c'est moi</span>
            <h1>De Sousa Samuel</h1>
            <h2>Étudiant en BUT MMI à Corte</h2>
            <p> Bienvenue sur mon portfolio! <br>  Découvrez mon univers où créativité et technologie se rencontrent pour façonner des expériences en ligne captivantes.</p>
            <a href="#contact" class="btn">Contactez moi</a>
            <a href="admin/login.php" class="btn">Se connecter</a>
        </div>
        <div class="home-img">
             <img src="IMG-3565-photo.jpg" alt="IMG-3565-photo"></a>
 
    </section>
    
    <section class="about" id="about">
        <div class="heading">
            <h2>À propos de moi</h2>
            <span>About me</span>
        </div>
        
        <div class="about-container">
            <div class="about-img">
                <img src="56143.jpg" alt="56143" ></a>
            </div>
            <div class="about-text">
                <p>  Je suis De Sousa Samuel, étudiant en BUT MMI à Corte. Je suis passionné par le développement web et le design. Depuis mon enfance, la technologie et les jeux-vidéo ont captivé mon intérêt. En MMI, j'ai découvert le potentiel captivant du développement web, consolidant ma passion pour l'univers du web. Ce parcours me permet d'explorer divers domaines, de la gestion de projet à la communication et à l'audiovisuel. Au-delà des compétences techniques, je m'investis pleinement pour comprendre le multimédia et l'internet. En dehors des cours, je suis un amateur de sport, trouvant un équilibre crucial entre le numérique et une vie active. </p>
                <div class="information">

                    <div class="info-box">
                        <i class='bx bxs-user' ></i>
                        <span>De Sousa Samuel</span>
                    </div>
                    </div>

                    <div class="info-box">
                        <i class='bx bxs-envelope'   ></i>
                        <span>     samueldesousamartins@gmail.com</span>
                        </div>

                        <div class="info-box"
                        class='bx bxs-phone-call' ></i>
                    <a href="images/cv.php" class="btn">Télécharger le Cv</a>
        </div>
    </section>
                
    <section class="skills" id="skills">
        <div class="heading">
            <h2>Compétences</h2>
            <span>My Skills</span>
        </div>
        
        <div class="skills-container">
            <div class="bars">
                <div class="bars-box">
                    <h3>HTML</h3>
                    <span>60%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar html-bar"></div>
                </div>

                <div class="bars-box">
                    <h3>CSS</h3>
                    <span>50%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar css-bar"></div>
                </div>

                <div class="bars-box">
                    <h3>Photoshop</h3>
                    <span>60%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar js-bar"></div>
                </div>
          
                <div class="bars-box">
                    <h3>Illustrator</h3>
                    <span>50%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar react-bar"></div>
                </div>
      
                <div class="bars-box">
                    <h3>PHP</h3>
                    <span>40%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar ls-bar"></div>
                </div>
            </div>
            </div>
        </div>
 
    </section>
            
</div>

    <section class="portfolio" id="portfolio">
        <div class="heading">
            <h2>Réalisations</h2>
            <span>Achievements</span>
        </div>

        <div class="portfolio-content">
            <div class="portfolio-img">
            <img src="Affiche-Altaleghje.jpg" alt="Affiche-Altaleghje"></a>
            </div>
            <div class="portfolio-img">
                 <img src="site-web-mediacultura-copie-2.png" alt="site-web-mediacultura"></a>
            </div>
            <div class="portfolio-img"
            href="https://imgbb.com/"><img  src="fleur eden.jpg" alt="fleur eden.jpg" ></a>
            
        </div>
    </section>
    
    <section class="contact" id="contact">
        <div class="heading">
            <h2>Contact</h2>
            <span>Connect With Us</span>
        </div>
        <div class="contact-form">
            <form action="">
                <input type="text" placeholder="Votre nom">
                <input type="email" name="" id="" placeholder="Votre e-mail">
                <textarea name="" id="" cols="30" rows="10" placeholder=" Écrivez un message ici..."></textarea>
                <input type="button" value="Envoyer" class="contact-button">
            </form>
        </div>
    </section>
    
    <div class="footer">
        <h2>Accueil</h2>
    
    </div>
    
    <div class="copyright">
        <p>Créer par<a href=""> SAMUEL</a> | Tous droits réservés.</p>
    </div>
 
</body>
</html>

