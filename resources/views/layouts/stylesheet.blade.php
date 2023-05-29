<style>
    .Nav-home {
    background-color: #fff;
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
        color: #25274D;
    }

    .Mail-Logo {
        margin-left: 12rem;
        margin-right: 1rem;
        width: 40px;
        height: 40px;
        color: #25274D;

    }

    .Logo-Instagram {
        margin-right: 2rem;
        width: 40px;
        height: 40px;
        color: #25274D;
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
        color: #25274D;
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
        color: white;
        background-color: #25274D;
        border: none;
        border-radius: 1rem;
    }

    .Button-login-nav-home:hover {
        background-color: #AAABB8;
        color: #25274D;
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
        color: #308BEC;
    }


    /*Content First*/
    .Container-home-1 {
        display: flex;
        justify-content: none;
        align-items: center;
        height: 82vh;
        border-bottom: 5px solid gray;
        background: url('/global/img/asset/gedung3.jpg');
        font-family: 'Poppins', sans-serif;
    }

    .img-1 {
        height: 80.5vh;
        width: 45vw;
        filter: brightness(30%);
    }

    .Content-home-1 {
        width: 50vw;
        padding: 2rem 0 4rem 5rem;
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
        width: 30vw;
        padding-bottom: 2rem;
        font-weight: 700;
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

    .Button-DaftarOnline:hover {
        background-color:  #308BEC;;
        transition: ease-in-out 0.3s;
    }

    /*Content Second*/
    .container-home-2 {
        padding: 0 0 0 6rem;
        height: 80vh;
        font-family: 'Poppins', sans-serif;
        border-bottom: 5px solid gray;
    }

    .Heading-home-2 {
        display: flex;
        justify-content: left;
        align-items: center;
        height: 20rem;
        padding-top: 3rem;
        margin-left: 40rem;
        font-weight: 700;
        font-size: 40px;
    }

    .content2-1 {
        display: flex;
    }

    .content2-1-1 {
        width: 40vw;
    }

    .content2-1-2 {
        width: 45vw;
        padding-left: 8rem;
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
        border-bottom: 5px solid gray;
    }

    .Content-3 .img-3 {
        height: 55vh;
        width: 45vw;
        padding-left: 10rem;
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
        height: 35rem;
        border-bottom: 5px solid grey;
        font-family: 'Poppins', sans-serif;
    }

    .C-Footer-2 {
        width: 45%;
        padding: 4rem 2rem 2rem 6rem;
    }

    .H-Footer {
        border-bottom: 2px solid gray;
        padding-bottom: 1rem;
    }

    .H-Footer-2 {
        padding: 1.5rem 0 1rem 0;
        border-bottom: 2px solid gray;
    }

    .C-Footer-3 {
        width: 45%;
        padding: 2.5rem 2rem 2rem 6rem;
    }

    .H-Footer-3 {
        padding: 1.4rem 0 1rem 0;
        border-bottom: 2px solid gray;
    }

    .Copyright {
        background-color: #252525;
        height: 4rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 6rem 0 6rem;
        color: white;
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
            padding: 0;
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

</style>
