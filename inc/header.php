<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">RM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?= isActive('home', $currentRoute) ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= isActive('about', $currentRoute) ?>" href="?route=about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= isActive('services', $currentRoute) ?>" href="?route=services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= isActive('portfolio', $currentRoute) ?>" href="?route=portfolio">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= isActive('skills', $currentRoute) ?>" href="?route=skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= isActive('contact', $currentRoute) ?>" href="?route=contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>