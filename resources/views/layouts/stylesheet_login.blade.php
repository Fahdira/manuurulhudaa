<style>
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
    border-radius: 1rem;
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
    width: 27vw;
    height: 4vh;
    border: none;
    background-color: green;
    color: white;
    border-radius: 0.5rem;
}

.exstra {
    width: 40vw;
    display: grid;
    justify-content: left;
    padding-left: 13rem;
    padding-top: 2rem;
}

.exstra a {
    text-decoration: none;
    color: grey;
}

.exstra .daftar-akun {
    padding-left: 2.5rem;
    cursor: pointer;
}

.content-img {
    width: 39vw;
    display: flex;
    align-content: center;
}

.img-input {
    width: 39vw;
    filter: brightness(50%);
    border-radius: 1rem;
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
