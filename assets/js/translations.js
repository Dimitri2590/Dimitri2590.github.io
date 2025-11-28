const translations = {
    fr: {
        nav: {
            about: "À propos",
            projects: "Mes projets",
            watch: "Veille technologique",
            skills: "Mes compétences",
            onenote: "One note",
            experience: "Expérience"
        },
        intro: {
            hello: "Bonjour,",
            student: "Étudiant en",
            description: `Le <span class="highlight">BTS SIO</span> (<span class="highlight">S</span>ervices <span
              class="highlight">I</span>nformatiques aux <span class="highlight">O</span>rganisations)<br><br>
            est une formation axée sur l'informatique. <br><br>
            Trois domaines principaux : <b>RÉSEAU, DÉVELOPPEMENT et CYBERSÉCURITÉ.</b> <br><br>
            Je me spécialise dans l'option <b>SLAM</b> (<b>S</b>olutions <b>L</b>ogicielles et <b>A</b>pplications
            <b>M</b>étiers).`,
            projects_summary_title: "<em>Présentation de mes projets dans la page \"mes projets\" :</em><br><br>",
            projects_summary_bikedle: "<u>Bikedle</u> : C'est un site réalisé lors d'un partiel au cours de mon cursus dans lequel j'ai dû faire un jeu où l'on doit deviner une moto à partir d'une image qui devient de moins en moins floue.",
            projects_summary_7erreurs: "<u>Le jeu des 7 erreurs</u> : C'est un jeu réalisé dans le cadre d'une présentation du BTS SIO appelée la \"Voie des Talents\". Le but étant de trouver les erreurs présentes sur le site."
        },

    },
    en: {
        nav: {
            about: "About",
            projects: "My Projects",
            watch: "Technology Watch",
            skills: "My Skills",
            onenote: "OneNote",
            experience: "Experience"
        },
        intro: {
            hello: "Hello,",
            student: "Student in",
            description: `The <span class="highlight">BTS SIO</span> (<span class="highlight">S</span>ervices <span
              class="highlight">I</span>nformatiques aux <span class="highlight">O</span>rganisations)<br><br>
            is a training course focused on IT. <br><br>
            Three main areas: <b>NETWORK, DEVELOPMENT and CYBERSECURITY.</b> <br><br>
            I specialize in the <b>SLAM</b> option (<b>S</b>olutions <b>L</b>ogicielles et <b>A</b>pplications
            <b>M</b>étiers).`,
            projects_summary_title: "<em>Presentation of my projects in the \"my projects\" page:</em><br><br>",
            projects_summary_bikedle: "<u>Bikedle</u>: This is a site created during an exam in my course where I had to make a game where you have to guess a motorcycle from an image that becomes less and less blurry.",
            projects_summary_7erreurs: "<u>Le jeu des 7 erreurs</u>: This is a game created as part of a BTS SIO presentation called the \"La voie des talents\". The goal is to find the errors present on the site."
        }
    }
};

function changeLanguage(lang) {
    // Update all elements with data-i18n attribute
    document.querySelectorAll('[data-i18n]').forEach(element => {
        const key = element.getAttribute('data-i18n');
        const keys = key.split('.');
        let translation = translations[lang];

        // Traverse the object to find the key
        for (const k of keys) {
            if (translation) {
                translation = translation[k];
            }
        }

        if (translation) {
            element.innerHTML = translation;
        }
    });

    // Update active button state
    document.querySelectorAll('.lang-btn').forEach(btn => {
        btn.classList.remove('active');
        if (btn.getAttribute('onclick').includes(lang)) {
            btn.classList.add('active');
        }
    });
}
