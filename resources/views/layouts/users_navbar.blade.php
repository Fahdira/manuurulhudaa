<div>
    <nav class="Container__Navbar">
        <p>{{session('users')}}</p>
        <button> Logout </button>
    </nav>
</div>

<div class="LandPage__User">
    <aside>
        <div class="img__sidebar">
            <img src="{{asset('global/img/asset/mannuurulhudaa_logo.png')}}" alt="" />
        </div>

        <div class="list__sidebar">
            <ul>
                <li><i></i><a href="{{route('users.getIndex')}}">Home</a></li>
                <li><i></i><a href="{{route('users.getDaftar')}}">Daftar</a></li>
                <li><i></i><a href="">Informasi</a></li>
                <li><i></i><a href="">Profil</a></li>
                <li><i></i><a href="{{ route('users.getLogout') }}">Logout</a></li>
            </ul>
        </div>
    </aside>
