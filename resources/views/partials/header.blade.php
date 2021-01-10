{{-- 
    MAIN HEADER 
--}}
<header class="main-header">
    {{-- Top --}}
    <div class="header-top">
        <ul class="container">
            <li>
                Dc Power&trade; VISA&reg;
            </li>
            <li>
                <a href="">
                    Additional DC Sites
                    <i class="fas fa-caret-down"></i>
                </a>
            </li>
        </ul>
    </div>
    
    <div class="container">
        {{-- Logo --}}
        <a href="{{ route('home') }}" class="navbar-brand">
            <img src="{{ asset('images/logo.png') }}" alt="DC-Comics">
        </a>
        {{-- MEnù --}}
        <nav class="navbar-nav">
            <ul>
                <li>
                    <a href="">Character</a>
                </li>
                <li>
                    <a href="">Comics</a>
                </li>
                <li>
                    <a href="">Movies</a>
                </li>
                <li>
                    <a href="">Tv</a>
                </li>
                <li>
                    <a href="">Games</a>
                </li>
                <li>
                    <a href="">Collectibles</a>
                </li>
                <li>
                    <a href="">Videos</a>
                </li>
                <li>
                    <a href="">Fans</a>
                </li>
                <li>
                    <a href="">News</a>
                </li>
                <li>
                    <a href="">Shop <i class="fas fa-caret-down"></i></a>
                </li>
            </ul>
        </nav>
        {{-- Logo --}}
        <input (type="text" id="search" required) placeholder="Search">
        <i class="fas fa-search"></i>
        <label (for="name") Name>
    </div>

</header>