<?php
date_default_timezone_set('America/Los_Angeles');
include 'dbh.inc.php';
include 'comments.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" type="text/css" href="styles.css ?timestamp=<?php echo time() ?>">
    

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <title>MovieDetails</title>
</head>

<body>
    <!-- nav bar -->
    <nav
      class="navbar navbar-expand-sm navbar-dark"
      style="background-color: #e3f2fd2f;"
    >
      <a class="navbar-brand" href="#">Navbar</a>
      <button
        class="navbar-toggler d-lg-none"
        type="button"
        data-toggle="collapse"
        data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId"
        aria-expanded="false"
        aria-label="Toggle navigation"
      ></button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input
            class="form-control mr-sm-2"
            type="text"
            placeholder="Search"
          />

          <button class="btn btn-outline-info my-2 my-sm-0" type="submit">
            Search
          </button>
        </form>
      </div>
    </nav>
    <!-- video -->
    <div class="trailer">
      <iframe
        src="https://www.youtube.com/embed/zAGVQLHvwOY"
        frameborder="0"
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
      ></iframe>
    </div>


    <div class="description">
    <h1 id="titleEN">Joker</h1>
    <h2 id="titleSK">Joker</h2>

  <!-- imdb -->
  <div class="imdb">
        <span
          class="imdbRatingPlugin"
          data-user="ur110064039"
          data-title="tt7286456"
          data-style="p3"
          ><a href="https://www.imdb.com/title/tt7286456/?ref_=plg_rt_1"
            ><img
              src="https://ia.media-imdb.com/images/G/01/imdb/plugins/rating/images/imdb_37x18.png"
              alt=" Joker
						(2019) on IMDb"
            /> </a></span
        ><script>
          (function(d, s, id) {
            var js,
              stags = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
              return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src =
              "https://ia.media-imdb.com/images/G/01/imdb/plugins/rating/js/rating.js";
            stags.parentNode.insertBefore(js, stags);
          })(document, "script", "imdb-rating-api");
        </script>
      </div>


    <div id="director">REŽISÉR: Todd Phillips</div>
    <div id="year">YEAR: 2019</div>
    <div id="genre">GENRE: Krimi / Drama / Thriller</div>
    <div id="actor">HERCI: Joaquin Phoenix, Zazie Beetz, Robert De Niro, Marc Maron, Brett Cullen, Frances Conroy, Shea Whigham, Glenn Fleshler, Bill Camp, Douglas Hodge, Dante Pereira-Olson, Alissa Bourne, Isabella Ferreira, Tamiz U. Rezvi, Hannah Gross, Brian Tyree Henry, Josh Pais, Sondra James, Murphy Guyer, Sharon Washington, April Grace, Carl Lundstedt, Michael Benz, Gary Gulman, Chris Redd, Mandela Bellamy</div>
    <div id="descriptiontxt">DESCRIPTION: Zkrachovalý komediant Arthur Fleck (Joaquin Phoenix) se dlouho pohybuje na tenké hranici mezi realitou a šílenstvím. Jednoho dne se ve svém obleku klauna potuluje po ulicích Gotham City a dostává se do konfliktu s brutálními zloději. Pomalu se roztáčí spirála událostí dosahující hrozivých rozměrů. Všemi opuštěný Fleck se začne čím dál více propadat do hlubin šílenství a postupně se mění v ikonu zločinu, kterou svět brzy bude znát pod jménem Joker.(Vertical Ent.)</div>
        

    
    </div>   

     


<!-- comentSection -->
<?php
echo "<form method='POST' action='".setComments($conn)."'>
<input type='hidden' name='uid' value='anonymous'>
<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
<textarea name='message'></textarea>
<div class=buttonContainer>
<button name='commentSubmit'>Comment</button>
</div>
</form>";

getComments($conn);

?>

    <!-- obsah -->
    <div class="content">
      <div class="A">
        <a href=""
          ><img src="images\joker-2019.jpg.jpg" alt="joker" width="120"
        /></a>
        <a href="">Joker</a>
        <a href="">Fero</a>
      </div>
      <div class="B"><img src="images\joker-2019.jpg.jpg" alt="joker" width="120"
        /></a>
        <a href="">Joker</a>
        <a href="">Fero</a></div>
      <div class="C"><img src="images\joker-2019.jpg.jpg" alt="joker" width="120"
        /></a>
        <a href="">Joker</a>
        <a href="">Fero</a></div>
    </div>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"
      integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P"
      crossorigin="anonymous"
    ></script>
  
    
</body>
</html>