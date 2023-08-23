# UPUTE ZA KORISNIKE

Sadržaj web stranice se nalazi u direktoriju pod nazivom "LIDA".
Unutar direktorija nalaze se sve datoteke i poddirektorij unutar koji se nalazi sadržaj koji se prikazuje na web mjestu.

Datoteke "index.html", "index.js" i "style.css" se ne nalaze niti u jednom od poddirektorija i izuzetno je važno da tako i ostane. Ostali direktorij su organizirani prema komponentama na kojima se koriste npr. unutar direktorija "fotke_slider" nalaze se fotografije koje se koriste na slideru odnosno komponenti koja automatski prebacuje fotografije.

Ukoliko korisnik/ca želi mijenjati sadržaj stranice potrebno je poznavati sadržaj i već navedene poddirektorije web mjesta.
Glavna stranica "index.html" i sve ostale podstranice podijeljene su u 2 glavna dijela: ```<head>``` (Zaglavlje dokumenta koje se NE PRIKAZUJE na web mjestu) i ```<body>``` (tijelo dokumenta koje se PRIKAZUJE kada se pokrene web mjesto). Ukoliko korisnik/ca izmijenjuje sadržaj web mjesta važno je ne dirati ```<head>``` dio dokumenta ako nije siguran/na što radi. Sadržaj web mjeta mijenja se u ```<body>``` dijelu dokumenta.

Na početnoj se stranici nalaze najvažniji elementi web mjesta:

---

## 1. Navigacijska traka odnosno NavBar.

Ovaj se element nalazi na početnoj, kao i na svim ostalim podstranicama web mjesta. Navigacijska traka dopušta korisnicima prelazak s jedne stranice na drugu unutar nekog web mjesta. Ukoliko korisnik/ca želi mijenjati sadržaj navigacijske trake potrebno je pronaći element ```<nav>``` koji se nalazi na početnoj kao i na svim drugim podstranicama u ```<body>``` dijelu dokumenta. Ukoliko je potrebno izmijeniti sadržaj navigacijske trake potrebno je pronaći element koji se želi zamijeniti i promijeniti putanju i naslov nove stranice unutar ```<a href="..."></a>``` elementa.

Nakon izmjene, cijeli kod navigacijske trake (od ```<nav>``` do ```</nav>```) kopirati i zalijepiti na sve podstranice web mjesta kako bi se novoj stranici moglo pristupiti sa bilo koje druge stranice web mjesta. Također, dokument **index.html** označen je komentarima koje korisnik/ca može koristiti kako bi pronašao/la element koji želi izmijeniti.

---

## 2. Naslov i slider sa fotografijama.

Naslov koji se nalazi pokraj slidera sa fotografijama korisnik mijenja tako da unutar **"index.html"** datoteke pronađe tekst naslova i promijeni ga pritom pazeći da ne obriše elemente unutar koji se postojeći naslov nalazi. Element naslova označen je komentarima za lakše pronalaženje.
Slider sa fotografijama je komponenta frameworka pod nazivom Bootstrap koji se koristio za izradu ovog web mjesta. Naziv komponente je **Carousel**. Element je podešen kako bi mu pozicija bila pokraj naslova a ukoliko ga korisnik/ca želi promijeniti potrebno je pažljivo slijediti navedene korake: 
* fotografije koje se vrte unutar slidera nalaze se u poddirektoriju "fotke_slider". Ukoliko se iste žele izmijeniti potrebno je nove fotografije staviti u taj poddirektoriji pritom pazeći na velika i mala slova te format fotografija koji bi idealno trebao biti .jpg ili .png. 
* Nakon što se fotografije stave u navedeni poddirektoriji potrebno je pronaći element Carousel koji je označen komentarom za lakše snalaženje. Unutar elementa ```<img src="...">``` postavlja se putanja na kojoj se nalaze fotografije.

Npr. korisnik želi u slider ubaciti novu fotografiju koja se zove "gradOsijek.jpg". Korisnik će to učiniti tako da svoju fotografiju stavi u poddirektoriji "fotke_slider", nakon toga pronađe element ```<img src="...">``` iznad kojega je komentar ```<!-- SLIDER SA FOTOGRAFIJAMA-->```. Nakon toga korisnik mijenja samo naziv fotografije nakon kose (/) crte. Ako je postojeći element ```<img src="fotke_slider/Osijek.jpg">``` korisnik mijenja samo naziv "osijek.jpg" u "gradOsijek.jpg" nakon čega će element izgledati ovako ```<img src="fotke_slider/gradOsijek.jpg">```. Posebno paziti na velika i mala slova!
---

## 3. Info kartica

Sljedeći element početne stranice je info bar koji se nalazi odmah ispod naslova i slidera sa fotografijama.
Ukoliko korisnik želi promijeniti sadržaj potrebno je pronaći element ```<div>``` sa ID-em **"info-card"** ```<div class="card" id="info-card">```. Ovaj element također sadrži komentar   ```<!-- INFO KARICA-->``` za lakše snalaženje. Ukoliko korisnik/ca želi promijeniti sadržaj info kartice jednostavno može promijeniti sadržaj vodeći računa o tome da ne obriše elemente koji obuhvaćaju tekst. Unutar elementa ```<h5>``` korisnik/ca može promijeniti naslov, a unutar elementa ```<p>``` može promijeniti sadržaj. 
---

## 4. Vijesti

Ispod elementa info kartice nalaze se vijesti odnosno skup kartica sa različitih temama. Ukoliko se ovaj element želi promijeniti potrebno je pronaći komentar  ```<!-- VIJESTI -->``` i promijeniti naslov u ```<h5>``` elementu i sadržaj u ```<p>``` elementu. Ovaj element također ima dodatak "read more" koji se klikom proširuje s dodatnim tekstom. Kako bi se taj dio kartice promijenio potrebno je dodatni tekst napisati unutar elementa ```<div class="collapse" id="moreText1">```. 
---

## 5. Logo organizatora

Sljedeći dio početne strnaice sadrži logo organizatora. Ovaj dio stranice ne sadrži tekst već isključivo fotografije koje se mogu promijeniti tako da korisnik/ca stavi fotografije koje želi koristiti u poddirektorij pod nazivom "organizatori_logo", nakon toga treba pronaći komentar ```<!--LOGO ORGANIZATORA-->``` i u ```<img src="...">``` elementu ponovi isti proces kao u točki 2 ovih uputa (2. Naslov i slider s fotografijama).
---

## 6. Footer

Zadnji dio početne stranice je footer koji sadrži informacije o mjestu i vremenu održavanja konferecije. Ukoliko korisnik/ca želi promijeniti ovaj dio potrebno je pronaći komentar ```<!-- FOOTER-->```
te u elementu  ```<div class="footer-left">``` navesti željene podatke.
---


# PODSTRANICE

Početna stranica sadrži najviše elemenata dok ostale podstranice sadrže isključivo naslov i sadržaj. Ukoliko se želi mijenjati sadržaj bilo koje druge stranice potrebno je otići u direktorij "navPages" i tamo ući u stranicu koju se želi promijeniti. 

Svaka podstranica organizirana je na isti način. Sadrži navigacijsku traku ispod koje se nalazi komentar ```<!-- SADRŽAJ -->```. Ispod navedenog komentara nalaze se dva ```<div>``` elementa. Prvi je  ```<div class="naslov">``` unutar kojega je moguće promijeniti naslov stranice a drugi je ```<div class="tekst">``` unutar kojega se može promijeniti sadržaj koji se prikazuje ispod naslova.
 
 
