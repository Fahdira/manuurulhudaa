<style>

    body {
        font-family: 'Roboto', sans-serif;
    }

    .Nav-home {
    background-color: #191923;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 8vh;
    font-size: 1rem;
    border-bottom: 1px solid lightgray;
    font-family: 'Poppins', sans-serif;
    }

    .Nav-home a {
        text-decoration: none;
    }

    .kiri-home {
        width: 100vw;
        margin-left: 1rem;
        display: flex;
        justify-content: space-between;
    }

    .kanan-home {
        padding-right: 9rem;
    }

    .info{
        color: #fbfef9;
    }

    .Mail-Logo {
        margin-left: 12rem;
        margin-right: 1rem;
        width: 40px;
        height: 40px;
        color: #fbfef9;

    }

    .Logo-Instagram {
        margin-right: 2rem;
        width: 40px;
        height: 40px;
        color: #fbfef9;
        cursor: pointer;
    }

    .Logo-Instagram:hover {
        width: 50px;
        height: 45px;
        transition: ease-in-out 0.1s;
    }

    .Facebook-Logo {
        margin-right: 2rem;
        width: 40px;
        height: 40px;
        color: #fbfef9;
        cursor: pointer;
    }

    .Facebook-Logo:hover {
        width: 50px;
        height: 45px;
        transition: ease-in-out 0.1s;
    }

    .Button-login-nav-home {
        width: 9vw;
        height: 6vh;
        color: #191923;
        background-color: #fbfef9;
        border: none;
        border-radius: 1rem;
    }

    .Button-login-nav-home:hover {
        background-color: #191923;
        color: #fbfef9;
        transition: ease-in-out 0.3s;

    }

    /* Tittle */
    .container-tittle-home {
        width: 95%;
        display: flex;
        justify-content: space-between;
        padding: 0 6rem 0 0rem;
        border-bottom: 1px solid lightgray;
        font-family: 'Poppins', sans-serif;
    }

    .img-logo-tittle {
        display: flex;
        justify-content: left;
        height: 10vh;
        padding: 0.4rem 0 0.4rem 0;
        margin-left: 11rem;
    }

    .text-tittle-home {
        width: 50vw;
        display: flex;
        justify-content: right;
        align-items: center;
    }

    .text-tittle-home a {
        text-decoration: none;
    }

    .text-tittle-home a:hover {
        font-size: 20px;
        color: #25274D;
        transition: 0.1s;
    }

    .text-tittle-home .satu, .dua, .tiga, .empat {
        padding: 0 4rem 0 0;
        color: #0e79b2;
    }

    span {
        color: #308BEC;
    }
    /*Content First*/
    .Container-home-1 {
        display: flex;
        justify-content: none;
        align-items: center;
        height: 62vh;
        background: url('/global/img/asset/gedung3.jpg');
    }

    .img-1 {
        height: 40vh;
        padding-left: 2rem;
        padding-top: 12.8rem;
    }

    .Content-home-1 {
        width: 50vw;
        padding: 0 0 2rem 2rem;
        color: #fff;
    }

    .Content-home-1 p {
        font-size: 20px;
        font-family: 'Poppins', sans-serif;
    }

    .Content-1 p {
        width: 44vw;
    }

    .Heading-home-1 {
        width: 40vw;
        padding-bottom: 2rem;
        font-size: 60px;
        font-family: 'Poppins-Bold', sans-serif;
    }

    .daftar-online-button {
        display: flex;
        justify-content: right;
        align-items: bottom;
        padding-top: 4rem;
    }

    .Button-DaftarOnline {
        width: 12vw;
        height: 4rem;
        border: none;
        background-color:  #308BEC;;
        color: white;
        border-radius: 0.5rem;
        margin-right: 12rem;
    }
    .C-Footer-2 a {
        text-decoration: none;
        color: #191923
    }
    .Button-DaftarOnline-1 {
        width: 12vw;
        height: 4rem;
        border: none;
        background-color:  #308BEC;;
        color: white;
        border-radius: 0.5rem;
    }

    .Button-DaftarOnline:hover {
        background-color:  #308BEC;;
        transition: ease-in-out 0.3s;
    }

    /*Content Second*/
    .container-home-2 {
        padding: 0 0 0 4rem;
        height: 60vh;
        font-family: 'Poppins', sans-serif;
        border-bottom: 5px solid gray;
    }

    .container-home-2 h2 {
        justify-content: left;
    }

    .Heading-home-2 {
        display: flex;
        justify-content: left;
        align-items: center;
        height: 5rem;
        padding-top: 6rem;
        margin-left: 12rem;
        font-weight: 700;
        font-size: 40px;
    }

    .content2-1 {
        display: flex;
        margin-left: 12rem;
    }

    .content2-1-1 {
        width: 35vw;
    }

    .content2-1-2 {
        width: 35vw;
        padding-left: 4rem;
    }

    .Button-Selengkapnya {
        width: 10rem;
        margin-top: 2rem;
        background-color: white;
        border: 2px solid skyblue;
        color: blue;
    }

    .Heading-3 {
        font-weight: 800;
        padding-bottom: 2rem;
    }

    .Paragraph-1 {
        height: 5rem;
    }

    /*Content Third*/
    .Content-3 {
        display: flex;
        justify-content: none;
        align-items: center;
        height: 80vh;
        background-color: #252525;
        padding: 5rem 0 5rem 0;
        font-family: 'Poppins', sans-serif;
    }

    .Content-3 .img-3 {
        height: 55vh;
        padding-left: 20rem;
    }

    .Container-3 {
        width: 44vw;
        padding-left: 5rem;
        color: white;
    }

    .Container-3 h3 {
        font-size: 40px;
    }

    .Container-3 p {
        font-size: 18px;
    }

    .H-Content-3 {
        width: 100%;
        display: flex;
        justify-content: left;
        align-content: center;
        padding-bottom: 1.5rem;
    }

    /*Footer*/
    .C-Footer {
        display: flex;
        height: 30rem;
        font-family: 'Poppins', sans-serif;
    }

    .C-Footer-2 {
        width: 45%;
        padding: 4rem 2rem 2rem 6rem;
    }

    .H-Footer {
        padding-bottom: 1rem;
    }

    .H-Footer-2 {
        padding: 1.5rem 0 1rem 0;
    }

    .C-Footer-3 {
        width: 45%;
        padding: 2.5rem 2rem 2rem 6rem;
    }

    .H-Footer-3 {
        padding: 1.4rem 0 1rem 0;
    }

    .H-Footer-3-svg{
        color: #191923;
        width: 40px;
        height: 40px;
    }

    .H-Footer-3-svg-fb{
        color: #191923;
        width: 40px;
        height: 40px;
        padding-left: 2rem;
    }

    .Copyright {
        background-color: #252525;
        height: 4rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 6rem 0 6rem;
        color: grey;
    }

    /* Responsive */
    @media screen and (max-width: 480px) {
        .Nav-home {
            font-size: 70%;
            width: 100%;
            justify-content: left;
        }

        .kiri-home {
            width: 50%;
            margin: 0;
            padding-left: 2rem;
            /* padding-right: 5rem; */
        }

        .kanan-home {
            width: 50%;
            padding: 0;
        }

        .social-media-home {
        display: none;
        }

        .Button-login-nav-home {
            width: 22vw;
            height: 9.99vh;
            margin-left: 7.3rem;
        }

        .container-tittle-home {
            display: grid;
        }

        .text-tittle-home {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .Container-home-1 {
            display: grid;
            justify-content: center;
            padding: 0;
            width: 100%;
            height: 70%;
            /* align-items: center; */
        }

        .img-1 {
            height: 20vh;
            width: 80vw;
            margin-right: 0;
            margin-bottom: 2rem;
            margin-top: 2rem;
        }

        .Content-home-1 {
            padding: 0;
            display: grid;
        }

        .Heading-home-1 {
            width: 50vw;
        }

        .Content-home-1 p {
            width: 80vw;
            font-size: 90%;
        }

        .daftar-online-button {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        .Button-DaftarOnline {
            width: 40vw;
        }

        .container-home-2 {
            width: 100%;
            height: 100%;
            padding: 0;
            display: grid;
        }

        .Heading-home-2 {
            margin-left: 11rem;
            height: 30%;
            padding-top: 4rem;
            padding-bottom: 2rem;
        }

        .content2-1 {
            display: grid;
            height: 60vh;
            width: 100%;
        }

        .content2-1-1 {
            width: 90%;
        }

        .content2-1-1 .Heading-3 {
            margin-left: 10rem;
            padding-bottom: 1rem;
        }

        .content2-1-1 .Paragraph-1 {
            margin-left: 3rem;
            padding: 0;
            font-size: 90%;
        }

        .content2-1-2 {
            width: 90%;
            padding: 0;
        }

        .content2-1-2 .Heading-3 {
            margin-left: 10rem;
            padding-bottom: 1rem;
        }

        .content2-1-2 .Paragraph-1 {
            margin-left: 3rem;
            font-size: 90%;
        }

        .Content-3 {
            display: grid;
            padding: 0;
            height: 100%;
        }

        .Content-3 .img-3 {
            width: 80vw;
            height: 20vh;
            margin-left: 2.5rem;
            margin-bottom: 2rem;
            margin-top: 3rem;
        }

        .Container-3 {
            width: 100%;
            padding: 0;
            height: 40vh;
        }

        .H-Content-3 {
            width: 20%;
            margin-left: 11rem;
        }

        .Container-3 p {
            width: 75%;
            margin-left: 3rem;
        }

        .C-Footer {
            display: grid;
            width: 100%;
            height: 60vh;
        }

        .C-Footer-2 {
            width: 100%;
            height: 22vh;
            padding: 0;
            padding-top: 3rem;
        }

        .H-Footer {
            padding: 0;
            height: 5vh;
            padding-left: 3rem;
        }

        .C-Footer-2 p {
            padding-left: 3rem;
            width: 85%;
        }

        .H-Footer-2 {
            padding-left: 3rem;
        }

        .C-Footer-3 {
            display: grid;
            width: 100%;
            padding: 0;
            height: 15vh;
            padding-top: 5rem;
        }

        .H-Footer-3 {
            padding: 0;
            height: 5vh;
            padding-left: 3rem;
        }

        .C-Footer-3 p {
            padding: 0;
            height: 1vh;
            padding-left: 3rem;
        }

        .Copyright {
            display: grid;
            height: 10vh;
            padding: 0;
        }
    }
    /*Navigation Bar*/
.Nav-signup {
    background-color: lightgray;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 10vh;
    font-size: 1rem;
}

.Nav-signup a {
    text-decoration: none;
}

.kiri-signup {
    width: 100vw;
    margin-left: 10rem;
    display: flex;
    justify-content: space-between;
}

.social-media-signup {
    padding-right: 3rem ;
}

.kanan-signup {
    padding-right: 10rem;
}

.Button-login-nav {
    width: 9vw;
    height: 7vh;
    color: white;
    background-color: blue;
    border: none;
}

/* Tittle */
.container-tittle {
    width: 96vw;
    display: flex;
    justify-content: space-between;
    padding: 0 6rem 0 10rem;
}


.text-tittle-signup {
    width: 50vw;
    display: flex;
    justify-content: right;
    align-items: center;
}

.text-tittle-signup a {
    text-decoration: none;
}

.text-tittle-signup .satu, .dua, .tiga {
    padding: 0 4rem 0 0;
}

/*Input*/
.content-input {
    display: flex;
    font-family: 'Poppins', sans-serif;
}

.heading-1 {
    display: flex;
    justify-content: left;
    align-items: center;
    height: 14vh;
    padding-left: 10rem;
    font-family: 'Poppins', sans-serif;
    font-weight: 700;
}

.form-input {
    padding: 0 2rem 0 10rem;
}

.Input {
    width: 42vw;
    height: 55vh;
    border: 1px solid grey;
}

.Header-daftar {
    padding-left: 4rem;
    height: 16vh;
    display: flex;
    justify-content: left;
    align-items: center;
}

.akun {
    display: grid;
    width: 44.8rem;
    height: 13vh;
    padding: 0 1rem 0 3rem;
}

.akun-data {
    margin-bottom: 1.3rem;
}

.akun-2 {
    padding: 0 0 1.3rem 3rem;
}

.akun-password {
    padding-right: 2rem;
    margin-right: 1.4rem;
    height: 30px;
    width: 15vw;
}

.akun-repassword {
    padding-right: 4.4rem;
    height: 30px;
    width: 15vw;
}

.daftar-button {
    padding: 0rem 0 1.3rem 3rem;
}

.button-daftar {
    width: 37.4vw;
    height: 5vh;
    border: none;
    background-color: #0e79b2;
    color: white;
    border-radius: 0.5rem;

}

.ekstra {
    display: grid;
    padding-top: 1rem;
    text-align: center;
}

.ekstra a {
    text-decoration: none;
    color: grey;
    padding-bottom: 1rem;
}

.Punya-akun {
    cursor: pointer;
}

.form-info {
    border: 1px solid grey;
    width: 35vw;
    font-family: 'Poppins', sans-serif;
}

.caption-info {
    display: grid;
    padding: 3rem 4rem 3rem 3rem;
    height: 40vh;
}

.caption-info h3 {
    font-weight: 700;
}

.caption-info p {
    font-size: 16px;
}

@media screen and (max-width: 480px) {
    .Nav-signup {
        font-size: 70%;
        width: 100vw;
        justify-content: left;
    }

    .kiri-signup {
        margin: 0;
        padding-left: 2rem;
        /* padding-right: 9rem; */
    }

    .kanan-signup {
        width: 10vw;
        /* padding-right: 2rem; */
    }

    .social-media-signup {
       display: none;
    }

    .Button-login-nav {
        width: 25vw;
        height: 9.99vh;
        margin-left: 3.7rem;
    }

    .content-img {
        display: none;
    }

    .text-tittle-signup {
        display: none;
    }

    .container-tittle {
        padding: 0 0 0 7.5rem;
    }

    .img-logo-tittle {
        width: 20vw;
        height: 7.2vh;
        padding: 0;
        margin-left: 1rem;
        margin-top: 1.5rem;
    }

    .content-input {
        display: grid;
    }

    .heading-1 {
        padding-left: 6rem;
    }

    .form-input {
        padding: 0;
    }

    .Input {
        border: none;
        width: 25vw;
    }

    .Header-daftar {
        width: 100vw;
        height: 3vh;
        margin-bottom: 1.7rem;
    }

    .akun {
        padding-left: 3.1rem;
    }

    .akun-data {
        height: 3.8vh;
        width: 68vw;
        margin-bottom: 0.4rem;
        margin-top: 0.8rem;
    }

    .akun-2 {
        padding: 0;
        padding-left: 3.1rem;
    }

    .akun-password {
        width: 68vw;
        height: 4.1vh;
        margin-bottom: 1.2rem;
        margin-top: 0.8rem
    }

    .akun-repassword {
        width: 68vw;
        height: 4vh;
        margin-bottom: 3rem;
        margin-top: 0.1rem;
    }

    .button-daftar {
        width: 68.9vw;
    }

    .ekstra {
        width: 100vw;
        padding-left: 0;
    }

    .forgot {
        padding-left: 8rem;
    }

    .Punya-akun {
        padding-left: 5.5rem;
    }

    .form-info {
        width: 99vw;
        border: none;
        border-top: 2px solid black;
        margin-top: 5rem;
    }

    .caption-info p {
        font-size: 85%;
    }
}

@media screen and (max-width: 768px) {
    .text-tittle {
        display: none;
    }
}

/*Input*/
.Heading-1-1 {
    display: flex;
    justify-content: left;
    align-items: center;
    height: 14vh;
    padding-left: 10rem;
    font-weight: 700;
}

.form-input-login {
    display: flex;
    margin: 0 10rem;
    width: 79vw;
    height: 50vh;
    border: 1px solid grey;
}

.kotak-input {
    width: 40vw;
}

.Header-tittle-login {
    font-weight: 700;
    padding-left: 6rem;
    height: 16vh;
    width: 60vw;
    display: flex;
    justify-content: left;
    align-items: center;
}

.akun-masuk {
    display: grid;
    width: 35vw;
    height: 13vh;
    padding: 0 2rem 0 6rem;
    margin-right: 5.2rem;
}

.akun-masuk input {
    margin-bottom: 1.5rem;
}

.masuk-button {
    width: 30vw;
    padding: 1rem 2rem 0 6rem;
    margin-right: 5.2rem;
}

.button-masuk {
    width: 35vw;
    height: 5vh;
    border: none;
    background-color: #0e79b2;
    color: white;
    border-radius: 0.5rem;
}

.exstra {
    width: 40vw;
    display: flex;
    justify-content: center;
    text-align: center;
    padding-top: 2rem;
}

.exstra a {
    text-decoration: none;
    color: grey;
}

.exstra .daftar-akun {
    padding-left: 4rem;
    cursor: pointer;
}

.content-img {
    width: 39vw;
    display: flex;
    align-content: center;
}

.img-input {
    width: 25vw;
    filter: brightness(60%);
    padding-left: 17rem;
}

/* Responsive */

/* Device Mobile */
@media screen and (max-width: 480px) {
    .Nav {
        font-size: 70%;
        width: 100vw;
        justify-content: left;
    }

    .kiri {
        margin: 0;
        padding-left: 2rem;
        /* padding-right: 5rem; */
    }

    .kanan {
        width: 10vw;
    }

    .social-media {
       display: none;
    }

    .Button-Daftar-nav {
        width: 25vw;
        height: 9.99vh;
        margin-left: 3.5rem;
    }

    .Heading-1-1 {
        padding-left: 6rem;
    }

    .form-input-login {
        border: none;
        margin: 0;
        width: 10vw;
        height: 0;
    }

    .Header-tittle-login {
        width: 60vw;
        height: 3vh;
        padding-left: 3rem;
        margin-bottom: 1.7rem;
    }

    .akun-masuk {
        width: 84vw;
        padding: 0 0 0 3.1rem;
        height: 14vh;
    }

    .akun-masuk .Email-input {
        margin-bottom: 1.5rem;
    }

    .masuk-button {
        padding: 0 0 0 3rem;
        margin-top: 1.7rem;
        margin-bottom: 1.8rem;
    }

    .button-masuk {
        width: 70.8vw;
    }

    .exstra {
        width: 100vw;
        padding-left: 0.5rem;
    }

    .exstra .forgot {
        padding-left: 8rem;
    }

    .exstra .daftar-akun {
        padding-top: 0.3rem;
        padding-left: 7.7rem;
    }

    .content-img {
        display: none;
    }

}

@media screen and (max-width: 768px) {
    .Nav {
        font-size: 80%;
        width: 100vw;
        height: 10vh;
    }

    .social-media {
        display: none;
    }

    .kiri {
        margin: 0;
        padding-left: 2rem;
    }

    .Button-Daftar {
        width: 20vw;
        margin-right: 15.5rem;
        height: 8vh;
    }
}





</style>
