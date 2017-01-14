# Pet store

Prikaz klasicne prodavnice kucnih ljubimaca, info o prodavnici, kontakt informacije, ljubimci u ponudi, hrana i druge stvari njima potrebne...

# Spirala 3

## I - Šta je urađeno?

1 - Urađena je serijalizacija svih podataka u XML fajl/fajlove. Za registraciju korisnika XML fajlovi se nalaze u folderu 'users', a za davanje feedbacka postoji istoimeni fajl 'feedback.xml'... xml fajl 'testbelma.xml' se nalazi u folderu 'admin'. Username za admina je testbelma, a password je 'belma123'. 
Admin može da dodaje produkte za pse pomoću dogsAdmin.php do koje se dodje klikom na 'Dogs'. Unosi se ID, Opis, Cijena i url slike proizvoda i spremaju se u xml fajl 'productsForDogs.xml'. Slika je trebala da se prikazuje nakon sto se doda proizvod, medjutim to nisam stigla napraviti pa se zasad prikazuju samo navedeni podaci: Opis, cijena i url slike. 
Adminu je omogućeno da dodaje i briše produkte. 

2 i 3 - Adminu je omogućen download podataka u obliku csv fajla. Ukoliko se logujete kao admin, na svakoj podstranici kao elementi menija se nalaze: 'Korisnici -CSV i Korisnici - PDF. Klikom na prvo se download-uje csv fajl 'Users.csv', a klikom na 'Korisnici - PDF' se otvori PDF sa listom korisnika.
Rađeno je pomoću fpdf biblioteke i podaci se čitaju iz XML-a, nisu hardkodirani.

4 - U meniju ima element 'Search' koji vodi na search.php gdje se radi pretraga. Pretražuje se iz XML-a feedback.xml na principu pretrage subject-a. Dok nisam uvela neke izmjene prikazivalo je više elemenata pretrage, sada samo jedan, nisam stigla da ispravim :( 

## II - Šta nije urađeno? 

deployment na OpenShift za dodatni bod

## III, IV - Bug-ovi

Pretraga ne radi kako sam zamislila, prikazuje samo jedan element. Ispravit ce se za iducu spiralu, nisam stigla sada :/ 

## V - Lista fajlova u formatu NAZIVFAJLA - Opis u vidu jedne rečenice šta se u fajlu nalazi

Svi html fajlovi koji su postojali su sada php fajlovi. Za većinu je već rečeno za šta služe prije, novi su aboutUsAdmin.php, contactUsAdmin.php, dogsAdmin.php, FPDFDownload.php, indexAdmin.php, logout.php, newsAdmin.php, pretraga.php, pretrazi1.php, searchUsers.php i već pomenuti fajlovi feedback.xml, Users.csv , productForDogs.xml i xml fajlovi za korisnike.
Php fajlovi sa dodatkom admin, kod sebe imaju mogućnost download-a CSV fajla i mogućnost logout-a admina što se radi u logout.php.
Mislim da je ostalo već opisano.


# Spirala 4



## I - Šta je urađeno?

link za openshift:

http://petstoregit-pet-store.44fs.preview.openshiftapps.com/

Urađeno:

MySQL baza petstore sa 3 povezane tabele, i 2 odvojene. Koristeći postojeće forme, login, registraciju i kontakt. Odvojeno su produkti i admin.

Admin se loguje sa username-om 'testbelma'  i password-om 'belma123'. Tada se na meniju pojavi     XML -> baza i klikom na to se postojeci podaci iz XML-ova prebace u bazu. Urađeno je u:
"izXMLuBazu.php" - prebacuje podatke iz xml-ova za logovane i registrovane korisnike i iz xml-a za feedback u njihove baze.

Prepravljene su skripte da se podaci čuvaju i kupe iz baze podataka. Provjerava se kod logina-a i registracije da li postoji već u bazi. Stavlja se u bazu prilikom registracije, logovanja, i kontakta. Također dodani produkti idu u istoimenu bazu. 

Contact us se može samo ako je ulogovan korisnik. 

Radi lakseg testiranja, jedan od korisnika je 'rdowneyjr' s password-om 'rdowneyjr1'. 


Napravljen je hosting stranice na OpenShift (ispravljeno u odnosu na proslu zadacu)

link vec naveden, ali evo: 

http://petstoregit-pet-store.44fs.preview.openshiftapps.com/


Urađeno je i pod f) za REST web servis u zaREST.php-u.


Testirani su neki upiti i korišten je POSTMAN, ima poseban folder za te screenshote.


link:

http://petstoregit-pet-store.44fs.preview.openshiftapps.com/

## II - Šta nije urađeno?

Sve je urađeno


## III, IV - Bug-ovi

Trudila sam se da sve ispravim, koliko sam uspjela primijetiti da nije valjalo

## V - Lista fajlova u formatu NAZIVFAJLA 

kao i u prethodnoj spirali, navedeni su neki dodatni u opisu sta je radjeno
