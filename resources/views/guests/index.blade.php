@extends('layouts.master')

@section('title','Home')

@section('content')

@include('layouts.navbar')

<div>
    <div class="Container-home-1">
        <img src="http://www.mandarussalam.sch.id/wp-content/uploads/2018/01/thumbslider-2019-2020.png" alt="" class="img-1"/>
        <div class="Content-home-1">
            <p>Welcome to</p>
            <h1 class="Heading-home-1"> MA <span>NUURUL HUDAA</span> </h1>
            <p>Pusat lembaga pendidikan Islam yang menyiapkan pemimpin-pemimpin masa depan</p>
            <div class="daftar-online-button">
                <button onClick="" class="Button-DaftarOnline"> Daftar Online </button>
            </div>
        </div>
    </div>
</div>
<div class="container-home-2">
    <h2 class="Heading-home-2"> Visi & Misi </h2>
    <div class="content2-1">
        <div class="content2-1-1">
            <h3 class="Heading-3"> Visi</h3>
            <p class="Paragraph-1">Lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus unde fuga omnis aliquam exercitationem consequatur aperiam explicabo ab perferendis laborum eos, corrupti mollitia natus deleniti aliquid reprehenderit recusandae accusantium reiciendis! lorem</p>
        </div>

        <div class="content2-1-2">
            <h3 class="Heading-3"> Misi</h3>
            <p class="Paragraph-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus unde fuga omnis aliquam exercitationem consequatur aperiam explicabo ab perferendis laborum eos, corrupti mollitia natus deleniti aliquid reprehenderit recusandae accusantium reiciendis!</p>
        </div>
    </div>
</div>
<div class="Content-3">
    <div class="Container-3">
        <h3 class="H-Content-3"> Daftar Online Sekarang</h3>
        <p>Aut, dolorem excepturi? eveniet molestias deserunt nihil porro, quos iusto laudantium! Et modi sint rem ducimus necessitatibus quia accusantium?! Lorem, ipsum dolor sit amet consectetur adipisicing elit. A necessitatibus nisi voluptatum hic nostrum, minima est exercitationem nam fuga optio aut voluptatem ipsam impedit vel. </p>
        <div class="daftar-online-button">
            <button onClick="" class="Button-DaftarOnline-1"> Daftar Online </button>
        </div>
    </div>

    <img src="{{asset('global/img/asset/blk.jpg')}}" alt="" class="img-3"/>

</div>
<div class="C-Footer">
    <div class="C-Footer-2">
        <h3 class="H-Footer"> Alamat </h3>
        <a href="https://www.google.com/maps/place/Pondok+Pesantren+Nuurul+Hudaa/@-6.952283,107.0610685,17z/data=!3m1!4b1!4m6!3m5!1s0x2e68456334fffff1:0xcda41df090455878!8m2!3d-6.9522883!4d107.0659394!16s%2Fg%2F11hbhvccby?entry=ttu">Jln. Cipadang KM 12 RT 04/12 Lampegan, Kecamatan Cibeber, Kabupaten Cianjur, Jawa Barat
            PO BOX 42363
        </a>
        <h3 class="H-Footer-2"> Kontak </h3>
        <p>Ecep Abdul Rohman +62</p>
        <p>Saepul Yakin +62</p>
    </div>

    <div class="C-Footer-3">
        <h3 class="H-Footer-3"> Temui Kami di </h3>
        <svg  xmlns="http://www.w3.org/2000/svg" class="H-Footer-3-svg" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
        </svg>
        <svg  xmlns="http://www.w3.org/2000/svg" class="H-Footer-3-svg-fb" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
        </svg>
    </div>
</div>
<div class="Copyright">
    <p> Copyright </p>
    <p> Website oleh Muhammad Fahdira, Iqbal Prayuda, Aditya Nugraha</p>
</div>

@endsection
