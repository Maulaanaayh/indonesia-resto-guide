<div id="navbar">
    <header>
        <div class="inner-width">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="/img/logo.png" alt="IRG-LOGO">
                </a>
            </div>
            <div class="navigation-menu">
                <ul>
                    <li><a class="{{ ($url == 'beranda') ? 'active' : '' }}" href="{{ url('/') }}">Beranda</a></li>
                    <li><a class="{{ ($url == 'fitur') ? 'active' : '' }}" href="{{ url('/fitur') }}">Fitur</a></li>
                    <li><a class="{{ ($url == 'harga') ? 'active' : '' }}" href="{{ url('/harga') }}">Harga</a></li>
                </ul>
            </div>
            <div class="button">
                <a class="btn btn-outline-danger" href="#app-platform">Daftar</a>
            </div>
            <div class="menu-toggle-btn">
                <div class="stick"></div>
                <div class="stick"></div>
                <div class="stick"></div>
            </div>
        </div>
    </header>
</div>
