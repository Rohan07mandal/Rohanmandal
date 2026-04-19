<section class="section" style="padding-top: 150px;">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-5 text-center">
                <div class="about-wrapper animate-on-scroll">
                    <img src="img/about.jpg" alt="About Me" style="max-width: 280px; border-radius: 15px; margin-bottom: 1rem;" onerror="this.src='data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 400 500%22><rect fill=%22%23222%22 width=%22400%22 height=%22500%22/><text fill=%22%230BCEAF%22 x=%22200%22 y=%22250%22 text-anchor=%22middle%22 font-size=%22100%22>About</text></svg>'">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about-content">
                    <p class="section-subtitle animate-on-scroll">About Me</p>
                    <h2 class="section-title animate-on-scroll">BCA Student & Developer</h2>
                    <p class="animate-on-scroll" style="color: #aaa; line-height: 1.8;">
                        Hi, I'm Rohan Mandal from Janakpur, Nepal. Currently, I'm a BCA student at Lalitpur Engineering College (LEC) in Tinkune, Kathmandu. My journey started with science, but I discovered my passion for technology and computers.
                    </p>
                    <p class="animate-on-scroll" style="color: #aaa; line-height: 1.8;">
                        I'm an avid movie enthusiast with a love for soulful music. I believe life is like code - full of syntax errors, but we debug and keep going! Always eager to learn and create innovative digital solutions.
                    </p>
                    
                    <div class="row g-4 mt-3">
                        <div class="col-6">
                            <div class="info-card animate-on-scroll">
                                <i class="fas fa-graduation-cap text-gradient h3 mb-3"></i>
                                <h5>Education</h5>
                                <p class="text-secondary mb-0">BCA (Running)</p>
                                <small>Tribhuvan University</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="info-card animate-on-scroll">
                                <i class="fas fa-map-marker-alt text-gradient h3 mb-3"></i>
                                <h5>Location</h5>
                                <p class="text-secondary mb-0">Janakpur</p>
                                <small>Nepal</small>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4 animate-on-scroll">
                        <a href="?route=contact" class="btn btn-primary-custom">
                            <i class="fas fa-paper-plane me-2"></i>Let's Connect
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" style="background: rgba(255,255,255,0.02);">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <p class="section-subtitle">My Journey</p>
            <h2 class="section-title">Education & Experience</h2>
        </div>
        
        <div class="row g-5">
            <div class="col-lg-6">
                <h3 class="mb-4 animate-on-scroll">Education</h3>
                <div class="timeline animate-on-scroll">
                    <div class="timeline-item">
                        <div class="timeline-date">2023 - 2027</div>
                        <h4 class="timeline-title">Bachelor of Computer Applications</h4>
                        <p class="timeline-subtitle">Tribhuvan University</p>
                        <p class="timeline-description">Pursuing BCA at Lalitpur Engineering College, focusing on software development and programming.</p>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-date">2020 - 2021</div>
                        <h4 class="timeline-title">Plus Two (Science)</h4>
                        <p class="timeline-subtitle">Model Multiple College</p>
                        <p class="timeline-description">Completed secondary level education in Science stream.</p>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-date">2014 - 2019</div>
                        <h4 class="timeline-title">Secondary Education (SEE)</h4>
                        <p class="timeline-subtitle">Annapurna School</p>
                        <p class="timeline-description">Completed primary education with excellent results.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="mb-4 animate-on-scroll">Experience</h3>
                <div class="timeline animate-on-scroll">
                    <div class="timeline-item">
                        <div class="timeline-date">2024 - Present</div>
                        <h4 class="timeline-title">Web Developer</h4>
                        <p class="timeline-subtitle">Freelance</p>
                        <p class="timeline-description">Building websites and learning modern web technologies.</p>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-date">2023 - Present</div>
                        <h4 class="timeline-title">App Development</h4>
                        <p class="timeline-subtitle">Self Learning</p>
                        <p class="timeline-description">Exploring mobile app development and AI technologies.</p>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-date">2023 - Present</div>
                        <h4 class="timeline-title">Content Creator</h4>
                        <p class="timeline-subtitle">Digital</p>
                        <p class="timeline-description">Creating engaging content for various platforms.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.about-image {
    position: relative;
    display: inline-block;
}

.about-image img {
    width: 100%;
    max-width: 350px;
    border-radius: 15px;
}

.experience-badge {
    display: inline-block;
    position: absolute;
    bottom: 15px;
    right: 15px;
    background: var(--gradient);
    padding: 0.5rem 0.75rem;
    border-radius: 10px;
    text-align: center;
    box-shadow: var(--shadow);
}

.about-wrapper img {
    max-width: 300px;
    border-radius: 15px;
}

.info-card {
    background: rgba(255,255,255,0.03);
    border: 1px solid rgba(255,255,255,0.05);
    border-radius: 15px;
    padding: 1.5rem;
    transition: var(--transition);
}

.info-card:hover {
    border-color: var(--primary);
    transform: translateY(-5px);
}

@media (max-width: 991px) {
    .about-wrapper img {
        max-width: 250px;
    }
}
</style>