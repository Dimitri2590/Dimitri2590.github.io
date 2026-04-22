const API_URL = "https://synologynasthomas.synology.me:5443/webhook/495b6ef0-ea08-46b9-acd0-f325f66f9354";

let allArticles = [];

document.addEventListener('DOMContentLoaded', () => {
    initVeilleTechnologique();
});

async function initVeilleTechnologique() {
    allArticles = await fetchArticles();
    generateFilters(allArticles);
    renderArticles(allArticles);
    setupFilterEvents();
}

async function fetchArticles() {
    if (API_URL) {
        try {
            const response = await fetch(API_URL);
            if (!response.ok) throw new Error("Erreur réseau");
            let data = await response.json();

            if (!Array.isArray(data)) {
                if (data.data && Array.isArray(data.data)) {
                    data = data.data;
                } else {
                    data = [data];
                }
            }

            const mappedArticles = data.map(item => ({
                id: item.id || Math.random().toString(),
                titre: item.property_titre || item.name || "Sans titre",
                resume: item.property_r_sum || "Aucun résumé disponible.",
                categorie: item.property_categorie || item.property_cat_gorie || "Tech",
                date: item.property_date && item.property_date.start ? item.property_date.start : "Inconnue",
                lien: item.property_lien || item.url || "#",
                image: item.property_image || ""
            }));

            return mappedArticles.sort((a, b) => {
                if (a.date === "Inconnue") return 1;
                if (b.date === "Inconnue") return -1;
                return new Date(b.date) - new Date(a.date);
            });
        } catch (error) {
            console.error("Erreur lors de la récupération des articles Notion :", error);
            const container = document.getElementById('veille-container');
            if (container) container.innerHTML = `<div class="text-center w-100 text-danger">Serveur non joignable (Vérifiez que le webhook tourne).</div>`;
            return [];
        }
    }
}

function generateFilters(articles) {
    const filterContainer = document.querySelector('.veille-filters');
    if (!filterContainer) return;

    const categories = [...new Set(articles.map(a => a.categorie))].filter(Boolean);

    categories.forEach(cat => {
        const btn = document.createElement('button');
        btn.className = 'filter-btn';
        btn.setAttribute('data-filter', cat);
        btn.textContent = cat;
        filterContainer.appendChild(btn);
    });
}

function renderArticles(articlesData) {
    const container = document.getElementById('veille-container');
    if (!container) return;

    if (articlesData.length === 0) {
        container.innerHTML = '<div class="text-center w-100 mt-4">Aucun article trouvé.</div>';
        return;
    }

    container.innerHTML = '';

    articlesData.forEach((article, index) => {
        const card = document.createElement('div');
        card.className = 'article-card hidden-animate';

        let link = article.lien || '#';

        card.innerHTML = `
            ${article.image ? `<div class="article-image-container"><img src="${article.image}" alt="Image illustrant ${article.titre}" loading="lazy" class="article-image"></div>` : ''}
            <div class="article-content">
                <span class="article-category">${article.categorie}</span>
                <h3 class="article-title">${article.titre}</h3>
                <p class="article-date">${article.date !== "Inconnue" ? new Date(article.date).toLocaleDateString('fr-FR') : "Date inconnue"}</p>
                <p class="article-resume">${article.resume}</p>
                <a href="${link}" target="_blank" rel="noopener noreferrer" class="article-link">Lire l'article</a>
            </div>
        `;
        container.appendChild(card);

        setTimeout(() => {
            card.classList.remove('hidden-animate');
            card.classList.add('fade-in-up', 'is-visible');
        }, index * 100);
    });
}

function setupFilterEvents() {
    const filterBtns = document.querySelectorAll('.filter-btn');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const selectedCategory = btn.getAttribute('data-filter');

            const currentCards = document.querySelectorAll('.article-card');
            currentCards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
            });

            setTimeout(() => {
                const filteredArticles = selectedCategory === 'all'
                    ? allArticles
                    : allArticles.filter(a => a.categorie === selectedCategory);

                renderArticles(filteredArticles);
            }, 300);
        });
    });
}
