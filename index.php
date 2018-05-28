
<!DOCTYPE html>
<html lang="hu">
<head>
  <title>Szotyi.Net | Webfejlesztés</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="jquery-3.3.1.min.js"></script>
    <!-- jumbotron color -->
    <style>
        .jumbotron {
            background-color: #6495ED; /* Blue */
            color: #ffffff;
            font-family: Montserrat, sans-serif;
            margin: 25px auto;
        }

    </style>
</head>


<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!-- NAV Menu -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Szotyi.Net | Webfejlesztés</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">RÓLUNK</a></li>
                <li><a href="#services">SZOLGÁLTATÁS</a></li>
                <li><a href="#portfolio">PORTFOLIO</a></li>
                <li><a href="#pricing">ÁRAJÁNLAT</a></li>
                <li><a href="#contact">KAPCSOLAT</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron text-center">
    <h1>Szotyi.Net</h1>
    <p>Webfejlesztés</p>
    <form class="form-inline">
        <div class="input-group">
            <input type="email" class="form-control" size="50" placeholder="Email Cím" required>
            <div class="input-group-btn">
                <button type="button" class="btn btn-danger">Feliratkozás</button>
            </div>
        </div>
    </form>
</div>

<!-- Menu 1 -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
   <strong> <h2>A Szotyi.Net oldalról</h2></strong>
    <h4>Szeretnél egy igazán menő weboldalt?</h4>
            <p>Az, hogy egy vállalkozó, egy cég, egy művész vagy egy sportoló fenn legyen a weben a
                21.században alapkövetelmény. <br>Mindig arra törekszünk, hogy ne csak fenn legyél a weben,
                hanem legyen eredménye is és elérd a céljaidat.</p>
    <h4>Sokkal,de sokkal nagyobb tábort szeretnél a közösségi médiában?</h4>
            <p>Facebook | Instagram | Youtube reklám kampányok! <br>

                Mindig is macera összeállítani, elindítani, monitorozni, naponta igazítani és végül az eredményeket mérni.
                <br>És ha kész vagy, kezdhetted újra és újra. <br> Leegyszerűsítjük Neked mindezt ezzel a szolgáltatással úgy,
                hogy az ügyfeleid is mosolyogni fognak.</p>
    <button  class="btn btn-default btn-lg">Segítünk</button>
</div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-signal logo"></span>
        </div>
    </div>
</div>
<!-- Menu 2 -->

<div class="container-fluid bg-grey">
    <div class="row">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-globe logo"></span>
        </div>
        <div class="col-sm-8">
    <h2>Jó tudni!</h2>
    <h4><strong>MISZIÓNK</strong> LEGJOBBNAK LENNI</h4>
            <p>Weboldal készítés megrendelése előtt érdemes egy kicsit tájékozódni arról, hogy mi az, amit sikeres cégek használnak,
                mik azok a funkciók amik ma már szinte kötelezőek és milyen szempontoknak kell megfelelnie egy jó weboldalnak.
                <br> Ha már ez lesz az 5. weboldalad, akkor valószínűleg erre nincs szükség, de ha még csak most kóstolsz bele az online
                világba, akkor mindenképpen javasoljuk, hogy kérj egy ingyenes konzultációt ahol kötöttségek nélkül átbeszéljük, mi pl.
                a reszponzivitás, a Google Analytics, a konverzióoptimalizálás, mik a legfőbb webergonómia szempontok,
                milyen struktúrát és stílust érdemes választanod, hogyan válassz ideális kulcsszavakat,
                hogyan írj profi tartalmat az oldaladra és még sok mást…</p>
    <p><strong>MODERN TECHNOLÓGIÁK</strong> <br>PHP, MySQL, HTML 5,Bootstrap, Javascript, SPA (single page application) CSS3,
        Full-responsive sitebuild (mobil and tablet). <br>Segítünk vállalkozásodnak, hogy megnyíljon az online piac!
</div>
    </div>
</div>
<!-- Menu 3 -->
<div id="services" class="container-fluid text-center">

    <h2 >SZERVÍZÜNK</h2>
    <h4>Az egyik legjobb ajánlat a mai piacon!</h4>
    <br>

    <div  class="row">
        <div class="col-sm-4">
            <div class="logo-small">
            <span class="glyphicon glyphicon-off" ></span>
            </div>
            <h4>POWER</h4>
            <p>CLOUD szerverek.</p>
        </div>
        <div class="col-sm-4">
            <div class="logo-small">
            <span class="glyphicon glyphicon-heart"></span>
            </div>
            <h4>LOVE</h4>
            <p>Szenvedélyünk weboldalak létrehozása.</p>
        </div>
        <div class="col-sm-4">
            <div class="logo-small">
            <span class="glyphicon glyphicon-lock"></span>
            </div>
            <h4>JOB DONE</h4>
            <p>Maximum 1-2 hét.</p>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-sm-4">
            <div class="logo-small">
            <span class="glyphicon glyphicon-wrench"></span>
            </div>
            <h4>MOBIL</h4>
            <p>Tökéletesen Mobil barát weboldal!</p>
        </div>
        <div class="col-sm-4">
            <div class="logo-small">
            <span class="glyphicon glyphicon-certificate"></span>
            </div>
            <h4>MODERN</h4>
            <p>A legmodernebb technológia használata.</p>
        </div>
        <div class="col-sm-4">
            <div class="logo-small">
            <span class="glyphicon glyphicon-leaf"></span>
            </div>
            <h4>FEELING</h4>
            <p>Élvezd az oldalad.</p>
        </div>
    </div>
</div>
<!-- Menu 4 -->
<div id="portfolio" class="container-fluid text-center bg-grey">
    <h2>Portfolio</h2>
    <h4>PLUS</h4>
    <div class="row text-center">
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="image/kep5.jpg" alt="Reszponziv">
                <p><strong>Reszponzivitás</strong></p>
                <p>Az oldalad minden készüléken tökéletes lesz.</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="image/kep3.jpg" alt="Okosoldal">
                <p><strong>Sitebuild</strong></p>
                <p>Ne csak szép legyen, hanem okos is!</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="image/kep4.jpg" alt="Közösségi média">
                <p><strong>Közösségi média</strong></p>
                <p>Ne bizd a szerencsére a közösségi médiádat...</p>
            </div>
        </div>
    </div>
    <h2>Rólunk mondták:</h2>
    <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <h4>"A Szotyi.Net az egyik legjobb webfejlesztő oldal. Nagyon boldog és elégedett voltam az elkészült oldalammal!"<br><span style="font-style:normal;">Kovács Éva</span></h4>
            </div>
            <div class="item">
                <h4>"Micsoda gyorsaság... WOW!!"<br><span style="font-style:normal;">Dán Norbert</span></h4>
            </div>
            <div class="item">
                <h4>"Már többször dolgoztunk együtt, megbizható csapat!"<br><span style="font-style:normal;">Lébec Ágnes</span></h4>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Előző</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Következő</span>
        </a>
    </div>
    <!-- Prices menu-->
    <div id="pricing" class="container-fluid">
        <div class="text-center">
            <h2>Árajánlat</h2>
            <h4>Az ötleted már meg?Tökéletesítsük az ajánlatunkkal.</h4>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Basic</h1>
                    </div>
                    <div class="panel-body">
                        <p><strong><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span></strong> Lorem</p>
                        <p><strong><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span></strong> Ipsum</p>
                        <p><strong><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span></strong> Dolor</p>
                        <p><strong><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span></strong> Sit</p>
                        <p><strong><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span></strong> Amet</p>
                    </div>
                    <div class="panel-footer">
                        <h3>Kérjen ajánlatot</h3>
                        <button class="btn btn-lg">Ajánlatkérés</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Pro</h1>
                    </div>
                    <div class="panel-body">
                        <p><strong><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span></strong> Lorem</p>
                        <p><strong><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span></strong> Ipsum</p>
                        <p><strong><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span></strong> Dolor</p>
                        <p><strong><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span></strong> Sit</p>
                        <p><strong><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span></strong> Amet</p>
                    </div>
                    <div class="panel-footer">
                        <h3>Kérjen ajánlatot</h3>
                        <button class="btn btn-lg">Ajánlatkérés</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h1>Közösségi média</h1>
                    </div>
                    <div class="panel-body">
                        <p><strong><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span></strong> Lorem</p>
                        <p><strong><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span></strong> Ipsum</p>
                        <p><strong><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span></strong> Dolor</p>
                        <p><strong><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span></strong> Sit</p>
                        <p><strong><span class="glyphicon glyphicon-ok"  aria-hidden="true"></span></strong> Amet</p>
                    </div>
                    <div class="panel-footer">
                        <h3>Kérjen ajánlatot</h3>
                        <button class="btn btn-lg">Ajánlatkérés</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Menu -->

    <div id="contact" class="container-fluid bg-grey">
        <h2 class="text-center">Kapcsolat</h2>
        <div class="row">
            <div class="col-sm-5">
                <p>Irjon nekünk.A nap 24h elérhetőek vagyunk.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span> Budapest,HUN</p>
                <p><span class="glyphicon glyphicon-phone"></span> 06123456</p>
                <p><span class="glyphicon glyphicon-envelope"></span> email@email.hu</p>
            </div>
            <div class="col-sm-7">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Név" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Üzenet" rows="5"></textarea><br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-default pull-right" type="submit">Küldés</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer class="container-fluid text-center">
        <a href="#myPage" title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
        <p> Szotyi.Net © 2018 <a href="#" title="Szotyi.Net | Webfejlesztés">www.szotyi.net</a></p>
    </footer>


    <script>
        $(document).ready(function(){
            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {

                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function(){

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        })
    </script>
    <script>
        $(window).scroll(function() {
            $(".slideanim").each(function(){
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });
    </script>
</body>
</html>