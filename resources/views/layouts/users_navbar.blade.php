<p>Halo User {{session('users')}}</p>
<br>
<a href="{{route('users.getIndex')}}">Beranda</a>
<a href="{{route('users.getDaftar')}}">Daftar</a>
<a href="">Informasi</a>
<a href="">Profil</a>
<br>
<a href="{{ route('users.getLogout') }}">Logout</a>
