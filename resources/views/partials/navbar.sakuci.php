<nav>
    <!--Main contents-->
    <div class="nav-main" id="nav-main">
        <!--Settings section-->
        <div class="settings">
            <!--Lightmode or darkmode-->
            <div class="themes">
                <h4 id="lightMode">LightMode<!--Changeable text--></h4>
                <button class="toggle-theme-switch" id="toggleThemeSwitch" role="switch" aria-checked="false">
                    <div class="toggle-noch"></div>
                </button>
            </div>

            <!--Account types-->
            <div class="account">
                <a href="{{route('area.show')}}" id="A1">Current active account type: </a>
                <div class="hexagon" id="accountShape"><!--Changeable Shape--></div>
            </div>
            <div class ="big-line"></div>
        </div>

        <!--Buttons section-->
        <div class="nav-btns" id="userType">
            @if ($current ==='admin') <!--Admin options-->
                <div class="search-bar" id="searchBar">
                    <h4>Search </h4>
                    <input type="text" id="search-box" placeholder="Ask">
                    <div id="results"></div>
                </div>
                <div class="area-menu">
                    <h4>Area menu  </h4>
                    <div class ="small-line"></div>
                    <ul class="area-links" id="areaLinks">
                        <li><a href="{{route('area.show')}}" id="a1" class="link-item">area-A1</a></li>
                        <li><a href="{{route('area.show')}}" id="a2" class="link-item">area-A2</a></li>
                        <li><a href="{{route('area.show')}}" id="a3e" class="link-item">area-A3E</a></li>
                        <li><a href="{{route('area.show')}}" id="b1" class="link-item">area-B1</a></li>
                        <li><a href="{{route('area.show')}}" id="b2e" class="link-item">area-B2E</a></li>
                        <li><a href="{{route('area.show')}}" id="c1" class="link-item">area-C1</a></li>
                        <li><a href="{{route('area.show')}}" id="c2" class="link-item">area-C2</a></li>
                        <li><a href="{{route('area.show')}}" id="c3e" class="link-item">area-C3E</a></li>
                        <li><a href="{{route('area.show')}}" id="d" class="link-item">area-D</a></li>
                    </ul>
                </div>
                <div class ="big-line"></div>
                <div class="config-menu">
                    <h4>Config menu</h4>
                    <ul>
                        <li><a href="{{route('tax.show')}}">Tax values</a></li>
                        <li><a href="{{route('log.show')}}">System logs</a></li>
                    </ul>
                </div>
                <div class="list-menu">
                    <h4>List menu</h4>
                    <ul>
                        <li><a href="{{route('reserve.show')}}">Reserve</a></li>
                        <li><a href="{{route('whitelist.show')}}">Whitelist</a></li>
                        <li><a href="{{route('blacklist.show')}}">Blacklist</a></li>
                    </ul>
                </div>

            @elseif ($current ==='security') <!--Security options-->
                <div class="search-bar" id="searchBar">
                    <h4>Search </h4>
                    <input type="text" id="search-box" placeholder="Ask">
                    <div id="results"></div>
                </div>
                <div class="area-menu">
                    <div class="joint">
                        <h4>Area menu  </h4>
                        <button class="area-toggle" id="areaToggle">
                            <div class="lines" id="changeableShape"></div>
                        </button>
                    </div>
                    <div class ="small-line"></div>
                    <ul class="area-links" id="areaLinks">
                        <li><a href="{{route('area.show')}}" id="a1" class="link-item">area-A1</a></li>
                        <li><a href="{{route('area.show')}}" id="a2" class="link-item">area-A2</a></li>
                        <li><a href="{{route('area.show')}}" id="a3e" class="link-item">area-A3E</a></li>
                        <li><a href="{{route('area.show')}}" id="b1" class="link-item">area-B1</a></li>
                        <li><a href="{{route('area.show')}}" id="b2e" class="link-item">area-B2E</a></li>
                        <li><a href="{{route('area.show')}}" id="c1" class="link-item">area-C1</a></li>
                        <li><a href="{{route('area.show')}}" id="c2" class="link-item">area-C2</a></li>
                        <li><a href="{{route('area.show')}}" id="c3e" class="link-item">area-C3E</a></li>
                        <li><a href="{{route('area.show')}}" id="d" class="link-item">area-D</a></li>
                    </ul>
                </div>
                <div class ="big-line"></div>
                <div class="list-menu">
                    <h4>List menu</h4>
                    <ul>
                        <li><a href="{{route('reserve.show')}}">Reserve</a></li>
                        <li><a href="{{route('whitelist.show')}}">Whitelist</a></li>
                        <li><a href="{{route('blacklist.show')}}">Blacklist</a></li>
                    </ul>
                </div>

            @else <!--Employee & Visitor options-->
                <div class="search-bar" id="searchBar">
                    <h4>Search </h4>
                    <input type="text" id="search-box" placeholder="Ask">
                    <div id="results"></div>
                </div>
                <div class="area-menu">
                    <div class="joint">
                        <h4>Area menu  </h4>
                        <button class="area-toggle" id="areaToggle">
                            <div class="lines" id="changeableShape"></div>
                        </button>
                    </div>
                    <div class ="small-line"></div>
                    <ul class="area-links" id="areaLinks">
                        <li><a href="{{route('area.show')}}" id="a1" class="link-item">area-A1</a></li>
                        <li><a href="{{route('area.show')}}" id="a2" class="link-item">area-A2</a></li>
                        <li><a href="{{route('area.show')}}" id="b1" class="link-item">area-B1</a></li>
                        <li><a href="{{route('area.show')}}" id="c1" class="link-item">area-C1</a></li>
                        <li><a href="{{route('area.show')}}" id="c2" class="link-item">area-C2</a></li>
                        <li><a href="{{route('area.show')}}" id="d" class="link-item">area-D</a></li>
                    </ul>
                </div>
            @endif
        </div>
    <!--Toggle navigation bar-->
    <button class="nav-toggle" id="navToggle">
        <div class="lines" id="changeableShape"></div>
    </button>
</nav>
