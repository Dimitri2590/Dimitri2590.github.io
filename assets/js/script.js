document.addEventListener('DOMContentLoaded', function () {
    setTimeout(() => {
        document.body.classList.add('loaded');
    }, 2000);

    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.15
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    const hiddenElements = document.querySelectorAll('.animate-on-scroll');
    hiddenElements.forEach((el) => observer.observe(el));

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            document.body.classList.add('scrolled');
        } else {
            document.body.classList.remove('scrolled');
        }
    });
});

function switchToEnglish() {
    window.location.href = "../public/indexen.php";
}

const hamburger = document.getElementById('hamburger');
const nav = document.getElementById('nav');

if (hamburger) {
    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        nav.classList.toggle('active');
    });

    document.querySelectorAll('#nav a').forEach(item => {
        item.addEventListener('click', () => {
            hamburger.classList.remove('active');
            nav.classList.remove('active');
        });
    });
}


document.addEventListener("DOMContentLoaded", () => {
    const progressCircle = document.querySelector('.progress_circle');
    
    if (progressCircle) {
        progressCircle.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        window.addEventListener('scroll', handleScroll);

        function handleScroll() {
            const height = document.documentElement.scrollHeight;
            const windowHeight = window.innerHeight;
            const position = window.scrollY;
            const trackLength = height - windowHeight;
            const percentage = trackLength > 0 ? Math.floor((position / trackLength) * 100 + 1) : 0;

            progressCircle.style.background = `conic-gradient(var(--primary-color) ${percentage}%, rgba(255, 255, 255, 0.05) ${percentage}%)`;
        }

        handleScroll();
    }
});



// async function GetProject() {
//     const url = "https://api.github.com/users/Dimitri2590/repos";

//     try {
//         const response = await fetch(url);
//         if (!response.ok) {
//             throw new Error(`Statut de réponse : ${response.status}`);
//         }
//         const resultat = await response.json();

//         const projectContainer = document.getElementById("projet");
//         projectContainer.innerHTML = "";

//         resultat.forEach(repo => {
//             const card = document.createElement("div");
//             card.className = "project-item animate-on-scroll fade-in-up";

//             const content = document.createElement("div");
//             content.className = "project-content";

//             content.innerHTML = `
//                 <h3>${repo.name}</h3>
//                 <p>${repo.description ?? "Pas de description"}</p>
//                 <a href="${repo.html_url}" target="_blank">Voir le projet</a>
//             `;

//             card.appendChild(content);
//             projectContainer.appendChild(card);
//         })
//     } catch (Erreur) {
//         console.error(Erreur.message);
//     }
// }

// document.addEventListener("DOMContentLoaded", () => {
//     GetProject();
// }) 