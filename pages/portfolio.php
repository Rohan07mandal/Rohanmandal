<section class="section" style="padding-top: 150px;">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <p class="section-subtitle">Portfolio</p>
            <h2 class="section-title">My Work</h2>
            <p>A collection of projects I've worked on.</p>
        </div>
        
        <div class="portfolio-filters text-center mb-5 animate-on-scroll">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="design">Design</button>
            <button class="filter-btn" data-filter="development">Development</button>
            <button class="filter-btn" data-filter="apps">Apps</button>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 portfolio-item design">
                <div class="portfolio-card animate-on-scroll">
                    <div class="portfolio-img project-gradient-1">
                        <div class="project-icon">🛒</div>
                    </div>
                    <div class="portfolio-info">
                        <span class="portfolio-category">Web Design</span>
                        <h4>E-Commerce Website</h4>
                        <p>Modern shopping platform.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 portfolio-item development">
                <div class="portfolio-card animate-on-scroll">
                    <div class="portfolio-img project-gradient-2">
                        <div class="project-icon">💼</div>
                    </div>
                    <div class="portfolio-info">
                        <span class="portfolio-category">Development</span>
                        <h4>Personal Portfolio</h4>
                        <p>Modern animated portfolio.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 portfolio-item apps">
                <div class="portfolio-card animate-on-scroll">
                    <div class="portfolio-img project-gradient-3">
                        <div class="project-icon">📱</div>
                    </div>
                    <div class="portfolio-info">
                        <span class="portfolio-category">Mobile App</span>
                        <h4>Task Manager</h4>
                        <p>Productivity application.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 portfolio-item design">
                <div class="portfolio-card animate-on-scroll">
                    <div class="portfolio-img project-gradient-4">
                        <div class="project-icon">🎯</div>
                    </div>
                    <div class="portfolio-info">
                        <span class="portfolio-category">Web Design</span>
                        <h4>Landing Page</h4>
                        <p>High converting design.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 portfolio-item development">
                <div class="portfolio-card animate-on-scroll">
                    <div class="portfolio-img project-gradient-5">
                        <div class="project-icon">🏢</div>
                    </div>
                    <div class="portfolio-info">
                        <span class="portfolio-category">Development</span>
                        <h4>Business Website</h4>
                        <p>Corporate website.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-4 portfolio-item apps">
                <div class="portfolio-card animate-on-scroll">
                    <div class="portfolio-img project-gradient-6">
                        <div class="project-icon">☁️</div>
                    </div>
                    <div class="portfolio-info">
                        <span class="portfolio-category">Mobile App</span>
                        <h4>Weather App</h4>
                        <p>Weather forecast app.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.portfolio-filters {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 1rem;
}

.filter-btn {
    background: transparent;
    border: 1px solid rgba(255,255,255,0.1);
    color: #fff;
    padding: 0.75rem 1.5rem;
    border-radius: 30px;
    cursor: pointer;
    transition: var(--transition);
}

.filter-btn:hover,
.filter-btn.active {
    background: var(--gradient);
    border-color: transparent;
    color: #fff;
}

.portfolio-card {
    background: rgba(255,255,255,0.03);
    border: 1px solid rgba(255,255,255,0.05);
    border-radius: 20px;
    overflow: hidden;
    transition: var(--transition);
}

.portfolio-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow);
}

.portfolio-img {
    height: 180px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.project-gradient-1 { background: linear-gradient(135deg, #0BCEAF, #00d4aa); }
.project-gradient-2 { background: linear-gradient(135deg, #ff6b6b, #feca57); }
.project-gradient-3 { background: linear-gradient(135deg, #667eea, #897ff5); }
.project-gradient-4 { background: linear-gradient(135deg, #f5a623, #ee5a24); }
.project-gradient-5 { background: linear-gradient(135deg, #a55eea, #865ce6); }
.project-gradient-6 { background: linear-gradient(135deg, #2ed573, #1dd1a1); }

.project-icon {
    font-size: 3.5rem;
}

.portfolio-info {
    padding: 1.5rem;
}

.portfolio-category {
    color: var(--primary);
    font-size: 0.85rem;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.portfolio-info h4 {
    margin: 0.5rem 0;
    font-size: 1.3rem;
}

.portfolio-info p {
    color: #888;
    font-size: 0.9rem;
    margin-bottom: 0;
}

@media (max-width: 767px) {
    .portfolio-card {
        margin-bottom: 1rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            
            const filter = btn.getAttribute('data-filter');
            
            portfolioItems.forEach(item => {
                if (filter === 'all' || item.classList.contains(filter)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>