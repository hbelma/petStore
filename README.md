# Pet store

Prikaz klasicne prodavnice kucnih ljubimaca, info o prodavnici, kontakt informacije, ljubimci u ponudi, hrana i druge stvari njima potrebne...

# Spirala 1

## I - Šta je urađeno?

Urađene su sve skice kako za Desktop tako, i za mobilne uređaje (ukupno 12), stranice su responzivne i postoji grid-view. 

Korišten je media query da se prilagodi izgled za mobitel. 

Napravljeno je 6 podstranica: Home, News, About Us, Contact Us (koje se nalaze na meniju stranice) i Log In i Register podstranice koje se nalaze u padajucem meniju kad se klikne na "myAccount" ikonicu u desnom gornjem uglu.

Na 3 od 6 podstranica se nalaze forme: na podstranicama Contact Us, Log In i Register.

Napravljen je i meni koji se na mobilnim uređajima pretvara u padajuci meni. 

## II - Šta nije urađeno?

Urađeno sve što se tražilo.

## III, IV - Bug-ovi

Bug-ove koje sam primijetila sam i ispravila. 

## V - Lista fajlova u formatu NAZIVFAJLA - Opis u vidu jedne rečenice šta se u fajlu nalazi

aboutUs - html stranice koja opisuje Pet Store

contactUs -html stranice u kojoj se nalazi forma za kontakt tj. davanje feedbacka

#logIn - html stranice gdje se nalazi forma za login

mainPage (.html) - html pocetne stranice 

mainPage (.css) - css za izgled svih podstranica

news - html gdje se nalaze novosti vezane za pet store

register - html gdje se nalazi forma za registraciju


# Spirala 2

## I - Šta je urađeno?

Uradjena je validacija i to na tri forme: Contact Us, Register i LogIn (posljednje dvije se nalaze u
padajucem (dropdown meniju) koji se pojavi klikom na ikonicu u gornjem desnom cosku). 
Uradjen vec pomenuti dropdown meni, zatim galerija slika s opcijom da se na klik rasiri preko cijelog
ekrana a na escape vrati pogled nazad na galeriju. U ovom slucaju galerija se nalazi u News podstranici.
Takodjer, uradjen je i Ajax tako da se podstranice ucitavaju bez reloada-a cijele stranice.

## II - Šta nije urađeno?


-

## III, IV - Bug-ovi

Bug-ove koje sam primijetila sam i ispravila. 

## V - Lista fajlova u formatu NAZIVFAJLA - Opis u vidu jedne rečenice šta se u fajlu nalazi

aboutUs - html podstranice koja opisuje Pet Store

contactUs -html podstranice u kojoj se nalazi forma za kontakt tj. davanje feedbacka

funkcija (.js) - javascript file u kojem se nalazi funkcija za ajax

index - html koji sadrzi ono zajednicko za sve podstranice i od njega se krece

logIn - html podstranice gdje se nalazi forma za login

mainPage (.html) - html pocetne stranice 

mainPage (.css) - css za izgled svih podstranica

news - html gdje se nalaze novosti vezane za pet store

petStore (.js) - javascript file u kojem se nalaze funkcije za prikaz slika i funkcije za validaciju

register - html gdje se nalazi forma za registraciju


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

link:

http://petstoregit-pet-store.44fs.preview.openshiftapps.com/
