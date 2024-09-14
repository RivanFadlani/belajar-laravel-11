<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">Ripunn Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Home") ? 'active' : ''}}" href="/">Home</a>
                    {{-- {{  }} memiliki arti "Kalau kita ada di halaman 'home', maka tambahkan class 'active (boostrap)', Tapi kalau tidak di halaman 'home' tidak perlu ditambahkan class 'active'"" --}}
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "About") ? 'active' : ''}}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Tweets") ? 'active' : ''}}" href="/blog">Blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>