<p>Halo Admin {{session('admin')}}</p>
<a href="{{ route('admin.getLogout') }}">Logout</a>
<br>
<a href="{{route('admin.getIndex')}}">Home</a>
<a href="{{route('admin.getUserIndex')}}">Akun user</a>
<a href="{{route('admin.getSiswaIndex')}}">Siswa</a>
<a href="{{route('admin.getPendaftaranIndex')}}">Pendaftan</a>
<a href="{{route('posts.getIndex')}}">Update Informasi</a>
<a href="{{route('admin.getProfile')}}">Profile</a>
<br>
