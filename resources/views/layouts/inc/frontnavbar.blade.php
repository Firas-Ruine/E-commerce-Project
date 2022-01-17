<nav class="navbar navbar-expand-lg navbar-light bg-light py-3" style="font-size: 20px;">
    <div class="container">
      <a class="navbar-brand" href=" {{url('/')}} "><img src="{{asset('assets/images/Shop.png')}}" class="img-fluid" alt="Logo" style="width:90px; height:90px;"></a>
<style>

    .navbar-center{
        position: absolute;
            left: 30%;
            transform: translatex(-50%);
            width:400px;
    }
    .sb-example-1 .search {
  width: 100%;
  position: relative;
  display: flex;
}
.sb-example-1 .searchTerm {
  width: 100%;
  border: 3px solid #5a5a5a;
  border-right: none;
  padding: 5px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
}
.sb-example-1 .searchTerm:focus{
  color: #5a5a5a;
}
.sb-example-1 .searchButton {
  width: 40px;
  height: 50px;
  border: transparent;
  background: transparent;
  text-align: center;
  color: #fff;

  cursor: pointer;
  font-size: 20px;
}
.sb-example-1 .searchButton i{
  color: white;
}

.notification {
  background-color:transparent;
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
 display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: transparent;
}

.notification .badge {
  position: absolute;
  top: 2px;
  right: 0px;
  padding: 4px 5px;
  border-radius: 50%;
  background: red;
  color: white;
}
    }
</style>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <form action="/search" class="navbar-form mb-5">
        <div class="sb-example-1 navbar-center">
          <div class="search">
             <input type="text" name="query" class="form-control" placeholder="Search here">
             <button type="submit" class="searchButton">
               <i class="fa fa-search text-dark"></i>
            </button>
          </div>
       </div>
      </form>


      <div class="collapse navbar-collapse text-center" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item" >
                <a class="nav-link px-3 text-dark mt-2" href=" {{url('/')}} "> Home</a>
              </li>
            <li class="nav-item">
                <a class="nav-link px-3 text-dark mt-2" href=" {{url('category')}} "> Shop</a>
              </li>

              <li class="nav-item">
                <a class="nav-link px-3 text-dark mt-2" href="#"> Pages</a>
              </li>

              <li class="nav-item">
                <a class="nav-link px-3 text-dark mt-2" href="#"> Blog</a>
              </li>

              <li class="nav-item">
                <a class="nav-link px-3 text-dark mt-2" href="{{url('contact')}}"> Contact</a>
              </li>

              <li class="nav-item">
                <a class="nav-link px-3 text-dark notification mt-0" href=" {{url('cart')}} "><i class="fa fa-shopping-cart fa-lg"></i>
                   <span class="badge mb-6 cart-count">0</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link px-3 text-dark notification mt-0" href=" {{url('wishlist')}} "><i class="fa fa-heart fa-lg"></i>
                    <span class="badge  wishlist-count">0</span>
                </a>
              </li>





            @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link px-3 text-dark" href="{{ route('login') }}"><i class="material-icons" style="font-size: 35px" >
                        account_circle
                    </i> </a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link px-3 text-dark" href="{{ route('register') }}"> </a>
                </li>
            @endif
        @else
        <li class="nav-item dropdown px-3">
<a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa fa-user fa-lg mt-2"></i>
</a>
<ul class="dropdown-menu " aria-labelledby="navbarDropdown">
    <li>
        <a class="dropdown-item text-dark" href=" {{url('my-orders')}} ">
             My Orders
        </a>
        </li>
<li>
<a class="dropdown-item text-dark" href="#">
     My Profile
</a>
</li>

<li>
<a class="dropdown-item text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
      {{ __('Logout') }}
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
</li>
</ul>
</li>



        @endguest
    </ul>
</div>
</div>
</nav>
