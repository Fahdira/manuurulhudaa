
<div>
    <nav class="Container__Navbar">
        <p>{{session('admin')}}</p>
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
                <li><i></i><a href="{{route('admin.getIndex')}}">home</a></li>
                <li><i></i><a href="{{route('admin.getUserIndex')}}"">Akun User</a></li>
                <li><i></i><a href="{{route('admin.getSiswaIndex')}}">Siswa</a></li>
                <li><i></i><a href="{{route('pendaftaran.getIndex')}}">Pendaftaran</a></li>
                <li><i></i><a href="{{route('posts.getIndex')}}">Update Informasi</a></li>
                <li><i></i><a href="{{route('admin.getProfile')}}">Profil</a></li>
                <li><i></i><a href="{{ route('admin.getLogout') }}">Logout</a></li>
            </ul>
        </div>
    </aside>
