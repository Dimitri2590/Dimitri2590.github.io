
import { createClient } from 'https://cdn.jsdelivr.net/npm/@supabase/supabase-js/+esm'

const supabaseUrl = 'https://hbesepeaalowthyivyrx.supabase.co'
const supabaseKey = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6ImhiZXNlcGVhYWxvd3RoeWl2eXJ4Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3NjI5Mjc3NzAsImV4cCI6MjA3ODUwMzc3MH0.kLmBGGGeYOxdejYx-Y_MxYJhqebeNp8Q6YUg4grp_GM'
const supabase = createClient(supabaseUrl, supabaseKey)

async function fetchArticles() {
    try {
        console.log('Fetching articles from Supabase...')
        const { data, error } = await supabase
            .from('Articles')
            .select('Name, Resume, Categorie, Lien, Date')
            .order('Date', { ascending: false })
            .limit(10)

        if (error) {
            console.error('Error fetching articles:', error)
            const container = document.getElementById('veille-container')
            if (container) container.innerHTML = `<div class="text-center text-danger">Erreur: ${error.message}</div>`
            return
        }

        console.log('Articles fetched:', data)
        if (!data || data.length === 0) {
            console.warn('No articles found.')
            const container = document.getElementById('veille-container')
            if (container) container.innerHTML = '<div class="text-center">Aucun article trouvé.</div>'
            return
        }

        renderArticles(data)
    } catch (err) {
        console.error('Unexpected error:', err)
        const container = document.getElementById('veille-container')
        if (container) container.innerHTML = `<div class="text-center text-danger">Erreur inattendue: ${err.message}</div>`
    }
}

function renderArticles(articles) {
    const container = document.getElementById('veille-container')
    if (!container) return

    container.innerHTML = '' // Clear loading state

    articles.forEach(article => {
        const card = document.createElement('div')
        card.className = 'article-card'

        // Ensure link is absolute and sanitized
        let link = article.Lien || '#'
        if (typeof link === 'string') {
            link = link.trim().replace(/^["']|["']$/g, ''); // Remove whitespace and quotes
            if (link !== '#' && !link.startsWith('http://') && !link.startsWith('https://')) {
                link = 'https://' + link
            }
        }
        console.log(`Processed link for ${article.Name}:`, link)

        card.innerHTML = `
            <div class="article-content">
                <span class="article-category">${article.Categorie || 'Technologie'}</span>
                <h3 class="article-title">${article.Name}</h3>
                <p class="article-resume">${article.Resume}</p>
                <a href="${link}" target="_blank" rel="noopener noreferrer" class="article-link">Lire l'article</a>
            </div>
        `
        container.appendChild(card)
    })
}

document.addEventListener('DOMContentLoaded', fetchArticles)
