<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Portfolio - Dimitri DEMONT</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Play&display=swap');
    </style>
</head>
<body>

    <header>
        <h1>Portfolio</h1>
        <nav id="nav">
            <a href="#a-propos">About</a>
            <a href="#projet">My Projects</a>
            <a href="#Veille-technologique">Tech Watch</a>
            <a href="#Compétences">My Skills</a>
            <a href="#Onenote">One note</a>
        </nav>
        <button onclick="window.location.href='index.php'" class="language-switch">
    <img src="../assets/images/flag-for-flag-france-svgrepo-com.svg" alt="Switch to French">
</button>

    </header>

<main>
    <section class="intro">
        <div class="intro-text">
            <h2>Hello,</h2>
            <h1>Dimitri DEMONT</h1>
            <h2>Student in <span class="highlight">BTS SIO</span></h2>
            <div class="socials">
                <a href="https://github.com/Dimitri2590?tab=repositories" target="_blank" class="icon"><img src="../assets/images/logo github.webp" alt="GitHub"></a>
                <a href="https://www.linkedin.com/in/dimitri-demont" target="_blank" class="icon"><img src="../assets/images/logo linkedin.jpg" alt="LinkedIn"></a>
            </div>
        </div>

        <div class="wrapper four">
            <div class="type">
                <p class="typing">The <span class="highlight">BTS SIO</span> (<span class="highlight">S</span>ervices <span class="highlight">I</span>nformatiques aux <span class="highlight">O</span>rganisations)<br>
                    <br>is a training focused on computer science. <br>
                    <br>Three main areas: <B>RÉSEAU, DÉVELOPPEMENT, and CYBERSECURITÉ.</B> <br>
                    <br>I specialize in the <B>SLAM</B> option (<B>S</B>olutions <B>L</B>ogicielles et <B>A</B>pplications <B>M</B>étiers).
                </p>
            </div>
        </div>

        <h4><em>Presentation of my projects on the "My Projects" page: </em><br>
            <br>
            <u> Bikedle </u> : This is a site created during an exam in my course where I had to make a game where you have to guess a motorcycle from an image that becomes less and less blurry.
          <br>
          <br>
            <u> The 7 Errors Game </u> : This is a game created as part of a presentation of the BTS SIO called "La Voie des Talents". The goal is to find the errors present on the site.
        </h4>
    </section>

    <section id="a-propos">
        <h2>About</h2>
        <p> Hello,
            my name is Dimitri DEMONT
            and I am a student in BTS SIO (Services Informatiques aux Organisations) in the class of 2026 at Lycée Saint-Bénigne.
            I have been passionate about computer science since I was younger, having grown up in this environment with my father who works in this field.
            My passions are bodybuilding, music, books, and video games.
            <br>Later, I would like to work as a web or application developer.
        </p>
        <img src="../assets/images/image cv.png" alt="Dimitri DEMONT">
    </section>

    <section id="projet">
        <h2>About</h2>
        <p>Here is my first project that I led this year: <a href=https://jeudes7errers-e8b4c3hqgnayf5cm.francecentral-01.azurewebsites.net/jeu%20des%207%20erreurs.html target="_blank"> The 7 Errors Game</a>
                <a href="../assets/images/screen jeu des 7 erreurs.png" target="_blank"> <img src="../assets/images/screen jeu des 7 erreurs.png" class="erreur"></a>
        </p>
        <br>
        <br>
        <p id="moto">Here is another project I completed this year during an evaluation: <a href=https://sitemoto-d8huctcfcsfvc9gt.francecentral-01.azurewebsites.net/index.html target="_blank"> Bikedle</a>
                <a href="../assets/images/screen bikedle.png" target="_blank"> <img src="../assets/images/screen bikedle.png" class="bikedle"></a>
        </p>
    </section>

<section id="#Veille-technologique">
        <h2>Tech Watch</h2>
        <br>
        <br>
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="image-container">
                        <a href="https://techcrunch.com/2024/12/12/chatgpt-everything-to-know-about-the-ai-chatbot/" target="_blank">
                            <img src="../assets/images/veille technologique IA.png" class="d-block w-100" alt="ChatGPT">
                        </a>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <p>Article on the essential points of ChatGpt that you absolutely need to know</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="image-container">
                        <a href="https://techcrunch.com/2024/12/03/cyber-monday-49-7b-spent-online-globally-cyber-week-totalled-314-9b/" target="_blank">
                            <img src="../assets/images/Veille technologique cyber monday.png" class="d-block w-100" alt="Cyber Monday">
                        </a>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <p>Record revenue for Cyber Week in the United States</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="image-container">
                        <a href="https://techcrunch.com/sponsor/bigid/intuits-data-classification-challenge-setting-a-new-standard-for-data-security/" target="_blank">
                            <img src="../assets/images/Veille technologique data.png" class="d-block w-100" alt="Data Classification Challenge">
                        </a>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <p>Data Classification Challenge: a competition to push the boundaries of data protection.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="image-container">
                        <a href="https://techcrunch.com/2024/12/10/wordpress-vs-wp-engine-drama-explained/" target="_blank">
                            <img src="../assets/images/la bataille entre wordpress et wp engine.png" class="d-block w-100" alt="WordPress vs WP Engine">
                        </a>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <p>Conflict between WordPress and WP Engine, the explanations</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="image-container">
                        <a href="https://techcrunch.com/2024/12/11/googles-ai-overviews-will-soon-answer-math-and-coding-questions/" target="_blank">
                            <img src="../assets/images/evolution ia google.png" class="d-block w-100" alt="IA Google">
                        </a>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <p>Google's AI continues to push its limits and develop!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="image-container">
                        <a href="https://techcrunch.com/2024/12/11/microsoft-begins-testing-the-ability-to-share-files-between-iphones-and-windows-pcs/" target="_blank">
                            <img src="../assets/images/partage windows Iphone.png" class="d-block w-100" alt="Iphone/Windows">
                        </a>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <p>Sharing between Windows and iPhone soon possible?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="Compétences">
    <h2>My skills</h2>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="../assets/images/849d4286475e04155fd5f21861f16f53db95ac72.png" class="d-block mx-auto carousel-logo" alt="html">
            </div>
            <div class="carousel-item">
            <img src="../assets/images/CSS-Logo.png" class="d-block mx-auto carousel-logo" alt="css">
            </div>
            <div class="carousel-item">
            <img src="../assets/images/JavaScript-logo.png" class="d-block mx-auto carousel-logo" alt="js">
            </div>
            <div class="carousel-item">
            <img src="../assets/images/Sql_data_base_with_logo.png" class="d-block mx-auto carousel-logo" alt="sql">
            </div>
            <div class="carousel-item">
            <img src="../assets/images/images.png" class="d-block mx-auto carousel-logo" alt="php">
            </div>
            <div class="carousel-item">
            <img src="../assets/images/wmabXQq4tEpmp8ZiZqBivrxxkvYf1E-metabGFyYXZlbC5wbmc-.webp" class="d-block mx-auto carousel-logo" alt="Laravel">
            </div>
            <div class="carousel-item">
            <img src="../assets/images/ci-cd.png" class="d-block mx-auto carousel-logo" alt="ci-cd">
            </div>
            <div class="carousel-item">
            <img src="../assets/images/docker.png" class="d-block mx-auto carousel-logo" alt="docker">
            </div>
            </div>
        </div>
</section>

<section id="#Onenote">
    <h2>Link to my Onenote</h2>
    <p>Here is the link to my Onenote where you can find my courses and projects completed during my training: <a href="https://groupesb.sharepoint.com/sites/BTSSIO2026/_layouts/Doc.aspx?sourcedoc={D19F7864-7EC3-4FC2-A84A-990667434DC3}&wd=target%28Welcome.one%7CF956E614-67C3-4569-BE73-775EF272B706%2F%29&wdsectionfileid={F956E614-67C3-4569-BE73-775EF272B706}
onenote:https://groupesb.sharepoint.com/sites/BTSSIO2026/SiteAssets/BTS%20SIO%202026%20Notebook/Welcome.one#section-id={F956E614-67C3-4569-BE73-775EF272B706}&end" target="_blank">Onenote</a></p>
<p>Onenote is the workspace we use most often to take notes, complete our assignments, and list the companies we contact. We also use Teams so that our teachers can share courses, documents, and information related to the training.
    For development, we keep our codes on Azure DevOps, where we also work as a team on projects throughout the year.
</p>
    </section>

     </main>
     <footer>
        <div class="crédit" id="crédit">
            <h2>Credits</h2>
        </div>
        <div class="footer-content">
            <small>Copyright © 2025 All rights reserved </small>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>
