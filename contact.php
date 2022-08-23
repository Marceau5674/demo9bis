<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>APY Training</title>
  <link rel="stylesheet" href="zcontact.css" />
</head>

<body>
  <header class="header">
    <div id="sideNavigation" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="index.html">Accueil</a>
      <a href="#formules">Nos Formules</a>
      <a href="coach.html">Votre Coach</a>
      <a href="temoignages.html">Témoignages</a>

      <a href="contact.html">Contact</a>
      <a href="apropos.html"> A Propos</a>
    </div>

    <nav class="topnav">
      <a href="#" onclick="openNav()">
        <svg width="30" height="30" id="icoOpen">
          <path d="M0,5 30,5" stroke="#000" stroke-width="5" />
          <path d="M0,14 30,14" stroke="#000" stroke-width="5" />
          <path d="M0,23 30,23" stroke="#000" stroke-width="5" />
        </svg>
      </a>
      <div class="containeur nav">
        <nav class="headermenu">
          <ul>
            <li class="li" class="deroulant" style="width: 140px">
              <a href="index.html">Accueil &ensp;</a>
            </li>
            <li class="li" style="width: 170px">
              <a href="#formules">Nos formules &ensp;</a>
            </li>
            <li class="li" class="deroulant" style="width: 170px">
              <a href="coach.html">Votre coach&ensp;</a>
            </li>
            <li class="li" style="width: 170px">
              <a href="temoignages.html">Témoignages</a>
            </li>

            <li class="li" style="width: 120px">
              <a href="contact.html">Contact</a>
            </li>
            <li class="li" style="width: 120px">
              <a href="apropos.html">À propos</a>
            </li>
          </ul>
        </nav>
      </div>

    </nav>

    <div id="main">
      <!-- Add all your websites page content here  -->
    </div>
    <script>
      function openNav() {
        document.getElementById("sideNavigation").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
      }

      function closeNav() {
        document.getElementById("sideNavigation").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
      }
    </script>
  </header>
  <header class="headerr">
    <div class="diva">
      <div class="divb">
        <div class="sousdivp">
          <h1>APY Training</h1>
        </div>
        <img src="https://scontent-cdt1-1.cdninstagram.com/v/t51.2885-15/298836914_5210842532347278_2363981357317527820_n.jpg?stp=dst-jpg_e35_s240x240&_nc_ht=scontent-cdt1-1.cdninstagram.com&_nc_cat=106&_nc_ohc=Z1xkTGJDN7YAX8KC35w&edm=ABJHkxYAAAAA&ccb=7-5&ig_cache_key=MjkwMzc4NDY0OTI0NjE2MTc3Nw%3D%3D.2-ccb7-5&oh=00_AT_3YJfGqUcCZ68aeO7SdyYvZBmSryrTX41PbYZFs8kOCg&oe=6302E757&_nc_sid=fa978c" alt="ro" target="_blank" class="logoo" />
        <div class="sousdiv">
          <a href="https://www.facebook.com/profile.php?id=100009566708039" class="aul" target="_blank">facebook</a>

          <ul class="aul">
            <li class="lia">
              <a href="https://www.instagram.com/yann_pelounche/" target="_blank" class="aul">instagram</a>
            </li>
          </ul>

          <p class="aul">
            <a href="tel:0675988496" class="aul">
              <td to_copy="📞">📞</td>
              06 75 98 84 96
            </a>
          </p>
          <a href="mailto: marceau.houpert@gmail.com" class="aul">Mail</a>
        </div>
        <div>
          <h5> Coach sportif : Entrainement cyclisme, cyclo-cross et contre la montre.</h5>
        </div>
        <p class="merde">.</p>
      </div>

      <h6>Contact</h6>
    </div>
    <h1>Contactez-nous</h1>
    <form method="post">
      <label>Votre email</label>
      <input type="email" name="email" required>
      <label>Message</label>
      <textarea name="message" required></textarea>
      <input type="submit">
    </form>
    <?php
    if (isset($_POST['message'])) {
      $entete  = 'MIME-Version: 1.0' . "\r\n";
      $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      $entete .= 'From: webmaster@monsite.fr' . "\r\n";
      $entete .= 'Reply-to: ' . $_POST['email'];

      $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
        <p><b>Email : </b>' . $_POST['email'] . '<br>
        <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';

      $retour = mail('marceau.houpert@gmail.com', 'Envoi depuis page Contact', $message, $entete);
      if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
    <div id="container">
      <div id="left"><span> &#128101;</span> Un coach à votre écoute <span> &#128101;</span></div>
      <div id="right"><span>&#128214;</span> Entrainement sur-mesure <span>&#128214;</span> </div>
      <div id="center">📈 Accompagnement jusqu'au haut niveau 📈</div>
    </div>
    <div class="merde">
      <p id="formules">P</p>
      <p>p</p>
      <p>p</p>
      <p>p</p>
    </div>
    <div class="containeura">
      <hr>
      <hr>
      <hr>
      <p class="pzpz"> Nos Formules :</p>
      <div class="flexbox">
        <ul class="lili">
          <li class="lulu">
            <a href="amateur.html" class="treza">Amateur
              <div class="trezaa">
                <br>La santé, le
                <br>bien être.
              </div>
            </a>
          </li>

          <li class="lulu">
            <a href="confirme.html" class="treza">Confirmé
              <div class="trezaa">
                <br>A la recherche
                <br>de Performance.
              </div>
            </a>
          </li>
          <li class="lulu">
            <a href="pro.html" class="treza">Pro
              <div class="trezaa">
                <br>En quete de
                <br>Victoire.
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>

  </header>
  <footer class="footer">
    <a href="contact.html" class="PP">Une question ? </a>
    <br>
    <h4 class="PPP">Contact: </h4>
    <div class="containeurx">
      <div class="sousdiva">
        <a href="https://www.facebook.com/profile.php?id=100009566708039" target="_blank" class="PP">facebook</a>

        <ul class="aula">
          <li class="lia">
            <a href="https://www.instagram.com/yann_pelounche/" target="_blank" class="PP">instagram</a>
          </li>
        </ul>

        <p class="aula">
          <a href="tel:0675988496" class="PP">
            <td to_copy="📞">📞</td>
            06 75 98 84 96
          </a>
        </p>
        <p class="aula">
          <a href="mailto:marceau.houpert@gmail.com" class="PP">Mail</a>
        </p>
      </div>
    </div>
    </div>
  </footer>
</body>

</html>