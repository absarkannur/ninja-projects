
@if( session('user') )
    <ul class="top-nav">
        <li style="cursor: initial;">{{ session('user')->name }}</li>
        <li><a href={{ route('signout') }}>Sign Out</a></li>
    </ul>
@else
    <ul class="top-nav">
        <li><a href={{ route('register') }}>Register</a></li>
        <li><a href={{ route('signin') }}>Sign In</a></li>
    </ul>
@endif