{{-- Footer-Top --}}
<footer>
    <div class="footer-top">
        <div class="container">
            {{-- Row --}}
            <div class="row">
                {{-- Column --}}
                <div class="col">
                    <h2>DC Comics</h2>
                    <ul>
                        <li><a href="#">Characters</a></li>
                        <li><a href="{{ route('comics') }}">Comics</a></li>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">Games</a></li>
                        <li><a href="#">Videos</a></li>
                        <li><a href="#">News</a></li>
                    </ul>
                    
                    <h2>DC Shop</h2>
                    <ul>
                        <li><a href="#">Shop DC</a></li>
                        <li><a href="#">Shop DC Collectibles</a></li>
                    </ul>
                </div>

                {{-- Column --}}
                <div class="col">
                    <h2>DC</h2>

                    <ul>
                        <li><a href="#">Terms Of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Advertising</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Subscriptions</a></li>
                        <li><a href="#">CPSC Certificates</a></li>
                        <li><a href="#">Ratings</a></li>
                        <li><a href="#">Shop Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>

                {{-- Column --}}
                <div class="col">
                    <h2>Sites</h2>

                    <ul>
                        <li><a href="#">DC</a></li>
                        <li><a href="#">DC Universe Infinite</a></li>
                        <li><a href="#">DC Kids</a></li>
                        <li><a href="#">DC Shop</a></li>
                        <li><a href="#">MAD Magazine</a></li>
                    </ul>
                </div>

                {{-- Column --}}
                <p>All Site Content TM and © 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved. <a href="#">Cookies Settings</a></p>
            </div>
        </div>
    </div>
</footer>

{{-- Footer-Bottom --}}
<div class="footer-bottom">
    <div class="container">

        {{-- Signup --}}
        <div class="signup">
            <button>SIGN-UP NOW!</button>
        </div>

        {{-- Socials Menu --}}
        <nav>
            <h2>FOLLOW US</h2>

            <ul class="main-menu">
                <li>
                    <img src="{{ asset('img/footer-facebook.png') }}" alt="">
                </li> 
                <li>
                    <img src="{{ asset('img/footer-twitter.png') }}" alt="">
                </li> 
                <li>
                    <img src="{{ asset('img/footer-youtube.png') }}" alt="">
                </li> 
                <li>
                    <img src="{{ asset('img/footer-pinterest.png') }}" alt="">
                </li> 
                <li>
                    <img src="{{ asset('img/footer-periscope.png') }}" alt="">
                </li> 
            </ul>
        </nav>
    </div>
</div>