<div class="nav">
    
            <div class="nav-left">
                  <div   class="nav-item">
                  
                      <a class="nav-text" href="/" >Home</a>

                  </div>

                  <div   class="nav-item">
                  
                      <a class="nav-text" href="/#/about">About</a>

                  </div>
                  <div   class="nav-item">
                  
                      <a class="nav-text" href="/#/contact">Contact</a>

                  </div>
                  {{-- @if (Auth::check())
                  <router-link  to="/account" class="nav-item">
                  
                      <a class="nav-text" href="/#/account">Account</a>

                  </router-link>
                  @endif --}}
            </div>
     <div class="nav-right">
      @if (Auth::check())
      {{-- <a class="nav-item" href="{{ url('/home') }}">       
        <p  class="nav-text">Account</p>
      </a> --}}

      {{-- <a class="nav-item" href="{{ url('/shopping_cart') }}">       
      
         <p class="nav-text"> Shopping cart | {{Session::has('cart') ? Session::get('cart')->totalQty : '' }} </p>
      </a> --}}
      <a href="{{ route('logout') }}" onclick="event.preventDefault(); 
      document.getElementById('logout-form').submit();" class="nav-item"><p class="nav-text">Logout</p></a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
      </form>
      @else
      <a class="nav-item" href="{{ url('/login') }}">       
       <p class="nav-text">Login</p>
      </a>
      <a class="nav-item" href="{{ url('/register') }}"><p class="nav-text">Register</p></a>
      
      @endif
    
    </div>
    </div>