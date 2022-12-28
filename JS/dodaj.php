<?php
    include('Database.php');
    require 'korisnik.php';

    $database = new Database("korisnici");

    $korisnik = new Korisnik();
    $korisnik->ime = $_POST['keyIme'];
    $korisnik->prezime = $_POST['keyPrezime'];
    $korisnik->godRodjenja = $_POST['keyGodRodjenja'];
    $korisnik->adresa = $_POST['keyAdresa'];
    $korisnik->grad_id = $_POST['keyGrad'];
    $korisnik->pol_id = $_POST['keyPol'];

    $sql = "insert into korisnik (ime, prezime, godinaRodjenja, adresa, grad_id, pol_id) 
    values ('$korisnik->ime', '$korisnik->prezime', '$korisnik->godRodjenja', '$korisnik->adresa', '$korisnik->grad_id', '$korisnik->pol_id')";

    $success = $database->conn->query($sql);

    if ($success) {
        echo "Korisnik ubačen u bazu\n\n";
        echo "ime: $korisnik->ime\nprezime: $korisnik->prezime\ngodina rodjenja: $korisnik->godRodjenja\nadresa: $korisnik->adresa\ngrad: $korisnik->grad_id\npol: $korisnik->pol_id";
    } else {
        echo "Greška, korisnik nije ubačen u bazu";
    }

    ?>