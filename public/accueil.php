<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Bienvenue</title>

  <style>
    
        @import url('https://fonts.googleapis.com/css2?family=Play&display=swap');

    
    * { margin: 0; padding: 0; box-sizing: border-box; }
    html, body { width: 100%; height: 100%; overflow: hidden; }
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      background: #1a1a1a;    /* change ici pour ta couleur de site */
      perspective: 1200px;     /* donne de la profondeur à la 3D */
      font-family: sans-serif;
    }

    /* 2) La « page » qui tourne */
    .page {
      width: 75%;
      height: 75%;
      background: #8c85ff;        /* couleur de la page */
      color: #333;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 5rem;
      border-radius: 8px;
      box-shadow: 0 12px 24px rgba(0,0,0,0.3);
      transform-origin: left center; 
      transition: transform 1s ease-in-out;
      backface-visibility: hidden;
    }

    /* 3) L'état « tourné » */
    .page.turn {
      transform: rotateY(-90deg);
    }

    body::before {
    content: '';
    position: absolute;
    top: 10%;
    left: -10%;
    width: 300px;
    height: 300px;
    background: linear-gradient(135deg, #8c85ff, #6a63d1);
    opacity: 0.3;
    border-radius: 50%;
    animation: float 6s ease-in-out infinite;
}

body::after {
    content: '';
    position: absolute;
    bottom: -0%;
    right: -10%;
    width: 300px;
    height: 300px;
    background: linear-gradient(135deg, #6a63d1, #8c85ff);
    opacity: 0.3;
    border-radius: 50%;
    animation: float 8s ease-in-out infinite reverse;
}

@keyframes float {
    0%, 100% {
        transform: translateY(0) scale(1);
    }
    50% {
        transform: translateY(-20px) scale(1.05);
    }
}
  </style>
</head>
<body>

  <div class="page">Bienvenue</div>

  <script>
    window.addEventListener('load', () => {
      // Après 3s, on ajoute la classe qui déclenche la rotation
      setTimeout(() => {
        document.querySelector('.page').classList.add('turn');
      }, 3000);

      // Après 4s (1s de rotation en plus), on redirige vers ton site
      setTimeout(() => {
        window.location.href = 'index.php'; 
      }, 4000);
    });
  </script>
</body>
</html>
