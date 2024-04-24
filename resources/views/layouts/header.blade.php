<header class="header">
  <div class="inner">
      @auth
      <ul class="header-nav">
        <li><a href="{{ route('welcome') }}">Home</a></li>
        <li><a href="{{ route('restaurants.index') }}">Food</a></li>
        <li><a href="#">Activity</a></li>
        <li><a href="#">Chat Message</a></li>
        @auth
        @if(auth()->user()->role_id === 1)
        <li><a href="{{ route('admin.dashboard') }}">Admin Page</a></li>
        <li><a href="{{ route('rbooking.index') }}">Restaurant Reservation List</a></li>
        <li><a href="{{ route('newsBookings.index') }}">Activity Reservation List</a></li>
        @endif
        @endauth
      </ul>
      <ul class="header-right">
        <li><a href="#">{{ Auth::user()->name }}</a></li>
        <li>
          <form action="{{ route('logout') }}" method="post">
            @csrf
            <button class="btn btn-danger" type="submit">ログアウト</button>
          </form>
        </li>
      </ul>
    </div>
    @endauth
    
  </div>
</header>