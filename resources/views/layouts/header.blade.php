 <header>
    
    <div class="container_info">
        <div class="logo_info">
            <a href=""><img src="assets/images/groeco.png"></a>
        </div>
            <div class="nav_info">
                            <ul>
                                                    
                                <li class="active ">
                                    <a href="{{route('home')}}">Home</a>
                                </li>
                                                    
                                <li class=" ">
                                    <a href="/about">About Us</a>
                                </li>
                                                    
                    @if(Route::has('login'))
                    @auth
                    @if(Auth::user()->utype === 'ADM')
                    <li class="login-form"> <a href="#" title="Register">My Account(Admin)</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li> <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        </ul>
                    </li>
                    @elseif(Auth::user()->utype==='SVP')
                    <li class="login-form"> <a href="#" title="Register">My Account(S Provider)</a>
                    <ul class="drop-down one-column hover-fade">
                    <li><a href="{{'sprovider.dashboard'}}">Dashboard</a></li>
                    <li> <a class="dropdown-item" href="{{ route('logout') }}"                               
                     onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

                    </ul>
                    </li>
                    @else
                    <li class="login-form"> <a href="#" title="Register">My Account(Seller)</a>
                    <ul class="drop-down one-column hover-fade">
                    <li><a href="{{'customer.dashboard'}}">Dashboard</a></li>
                    <li> <a class="dropdown-item" href="{{ route('logout') }}"                                
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    </ul>
                    </li>
                    @endif

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf</form> 
                    @else
                    <li class="login-form"> <a href="{{route('register')}}" title="Register">Register</a>
                    </li>
                     <li class="login-form"> <a href="{{route('login')}}" title="Login">Login</a>
                    </li>
                    @endif
                    @endif

                                <li class=" ">
                                    <a href="/careers">Contacts</a>
                                </li>
                                                    
                                <li class=" ">
                                    <a href="/ecofarm">Eco Farm</a>
                                </li>
                                                    
                                <li class=" ">
                                    <a href="">Blog</a>
                                </li>
                                            </ul>
                            </div>
            <div class="navopen_icon">
                <span class="nav_iconline nav_iconline1"></span>
                <span class="nav_iconline nav_iconline2"></span>
                <span class="nav_iconline nav_iconline3"></span>
            </div>
            
                
            
    </div>
</header>
