<style>
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins' sans-serif;
}

body {
    font-family: 'Roboto',sans-serif;
}

.Container__Navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 6rem;
    border-bottom: 2px solid grey;
    text-transform: capitalize;
    font-family: 'Poppins' sans-serif;
}

.Container__Navbar p {
    font-weight: 500;
    font-size: 18px;
}

.Container__Navbar button {
    width: 9vw;
    height: 10vh;
    color: white;
    background-color: red;
    border: none;
}

.Container__Navbar button:hover {
    background-color: orangered;
    transition: ease-in-out .2s;
}

/* Sidebar  */
.LandPage__User {
    display: flex;
}

aside {
    width: 20vw;
    height: 89.8vh;
    background-color: #f9f9f9;
    border-right: 1px solid grey;
}

.img__sidebar {
    display: flex;
    justify-content: center;
    padding: 1rem 0;
    border-bottom: 1px solid black;
    margin: 0 3rem;
}

aside .img__sidebar img {
    width: 80px;
    height: 80px;
    display: flex;
    justify-content: center;
}

.list__sidebar {
    padding: 2rem 2rem;
}

.list__sidebar ul li {
    padding: 1rem 0;
    text-transform: capitalize;
    list-style: none;
}

.list__sidebar ul li a {
    text-decoration: none;
    color: #000;
    cursor: pointer;

    font-size: 18px;
    font-weight: 500;
}

.list__sidebar ul li a:hover {
    border-bottom: 1px solid black;
    padding-bottom: 5px;
    transition: ease-in-out .2s;
}

/* Informasi */
.Container__user {
    display: table-column;
    justify-content: flex-end;
    width: 80vw;
    height: 60px;
    padding: 1rem 6rem;
    border-bottom: 1px solid black;
}

.Container__user p {
    font-weight: 500;
    display: flex;
    justify-content: flex-end ;
}

.Informasi__Siswa {
    display: flex;
    padding: 1rem 2rem 1rem 0;
}
.Form__Informasi-siswa h1 {

    padding-left: 4rem;
}

.Form__Informasi-siswa {
    border: 1px solid black;
    border-radius: 8px;
    width: 10vw;
    height: 10rem;
    position: relative;
    padding-left: 1rem;
    margin-left: 2rem;
    padding-top: 2rem;
}

.Form__Informasi-siswa h2 {
    text-transform: capitalize;
    padding: 1rem 2rem;
    height: 10vh;
}

.Form__Informasi-siswa p {
    padding: 1rem 2rem 2rem 1rem;
    font-weight: 400;
    text-align: center;
}

.Form__Informasi-siswa .Status__siswa {
    display: flex;
    justify-content: space-between;
}

.Form__Informasi-siswa .Status__siswa p {
    display: flex;
    justify-content: flex-start;
    font-weight: 500;
    text-transform: capitalize;
}

.Form__Informasi-siswa .Status__siswa button {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 2rem;
    width: 70px;
    height: 30px;
    background-color: lightgreen;
    border: 1px solid grey;
    border-radius: 4px;
}

/* Daftar */
.Container__Daftar {
   display: flex;
   flex-direction: column;
   width: 67vw;

   text-transform: capitalize;
}

.Container__Daftar h2 {
    border-bottom: 2px solid black;
    padding: 2rem 0;
}

.Form__Input {
    display: flex;
    flex-direction: column;
    width: 70vw;
}

.Form__Input .Input__Jenis {
    display: flex;
    justify-content: space-between;
    width: 67vw;
    padding: 20px 0 4px 0;
}

.Form__Input .Input__Jenis p {
    justify-content: flex-start;
}

.Form__Input .Input__Jenis select {
    width: 45vw;
    height: 30px;
    border: 2px solid grey;
}

.Form__Input .Input__Jalur {
    display: flex;
    justify-content: space-between;
    width: 67vw;
    padding: 4px 0;
}

.Form__Input .Input__Jalur p {
    justify-content: flex-start;
}

.Form__Input .Input__Jalur select {
    width: 45vw;
    height: 30px;
    border: 2px solid grey;
}

.Form__Input .Input__Sekolah-asal {
    display: flex;
    justify-content: space-between;
    width: 67vw;
    padding: 4px 0;
}

.Form__Input .Input__Sekolah-asal p {
    justify-content: flex-start;
}

.Form__Input .Input__Sekolah-asal input {
    width: 45vw;
    height: 30px;
    border: 2px solid grey;
}

.Form__Input .Input__Alamat-Sekolah-asal {
    display: flex;
    justify-content: space-between;
    width: 67vw;
    padding: 4px 0;
}

.Form__Input .Input__Alamat-Sekolah-asal p {
    justify-content: flex-start;
}

.Form__Input .Input__Alamat-Sekolah-asal input {
    width: 45vw;
    height: 30px;
    border: 2px solid grey;
}

.Form__Input .Input__Paud {
    display: flex;
    justify-content: space-between;
    width: 67vw;
    padding: 4px 0;
}

.Form__Input .Input__Paud p {
    justify-content: flex-start;
}

.Form__Input .Input__Paud select {
    width: 45vw;
    height: 30px;
    border: 2px solid grey;
}

.Form__Input .Input__TK {
    display: flex;
    justify-content: space-between;
    width: 67vw;
    padding: 4px 0;
}

.Form__Input .Input__TK p {
    justify-content: flex-start;
}

.Form__Input .Input__TK select {
    width: 45vw;
    height: 30px;
    border: 2px solid grey;
}

.Form__Input .Input__skhun {
    display: flex;
    justify-content: space-between;
    width: 67vw;
    padding: 4px 0;
}

.Form__Input .Input__skhun p {
    justify-content: flex-start;
}

.Form__Input .Input__skhun input {
    width: 45vw;
    height: 30px;
    border: 2px solid grey;
}

.Form__Input .Input__Ijazah {
    display: flex;
    justify-content: space-between;
    width: 67vw;
    padding: 4px 0;
}

.Form__Input .Input__Ijazah p {
    justify-content: flex-start;
}

.Form__Input .Input__Ijazah input {
    width: 45vw;
    height: 30px;
    border: 2px solid grey;
}

.container {
  max-width: 1000px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 10px;
  padding-right: 10px;
}

h2 {
  font-size: 26px;
  margin: 20px 0;
  text-align: center;
  small {
    font-size: 0.5em;
  }
}

.container {
    width: 160rem;
    padding-top: 2rem;
}

  .responsive-table li {
    border-radius: 3px;
    padding: 25px 40px;
    display: flex;
    justify-content: space-between;
    margin-bottom: 25px;
  }
  .table-header {
    background-color: #95A5A6;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.03em;
  }
  .table-row {
    background-color: #ffffff;
    box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.1);
  }
  .col-1 {
    flex-basis: 10%;
  }
  .col-2 {
    flex-basis: 40%;
  }
  .col-3 {
    flex-basis: 25%;
    padding-left: 2rem;
  }
  .col-4 {
    flex-basis: 25%;
  }

  @media all and (max-width: 767px) {
    .table-header {
      display: none;
    }
    .table-row{

    }
    li {
      display: block;
    }
    .col {

      flex-basis: 100%;

    }
    .col {
      display: flex;
      padding: 10px 0;
      &:before {
        color: #6C7A89;
        padding-right: 10px;
        content: attr(data-label);
        flex-basis: 50%;
        text-align: right;
      }
    }
  }

.card-acil {
    padding-top: 2rem;
    padding-left: 2rem;
}
</style>

