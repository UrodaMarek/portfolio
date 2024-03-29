<!DOCTYPE html>
<html lang="pl-PL">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Marek.</title>
    <link href="./css/style.css" rel="stylesheet" />
  </head>

  <body>
    <?php 
      require('./assets/con.php');
      require('./assets/add_people.php');
      mysqli_close($mdb);
    ?>
    <nav class="navbar sticky-top navbar-dark navbar-expand-lg">
      <div class="container-fluid">
        <div id="brand"><a class="navbar-brand" href="portfolio">Marek.</a></div>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNav"
        >
          <ul class="navbar-nav">
            <div class="nav-border" id="first-nav">
              <li class="nav-item">
                <a class="nav-link" href="#"> Strona Główna </a>
              </li>
            </div>
            <div class="nav-border">
              <li class="nav-item">
                <a class="nav-link" href="#About">O mnie</a>
              </li>
            </div>
            <div class="nav-border">
              <li class="nav-item">
                <a class="nav-link" href="#MySkills">Umiejętności</a>
              </li>
            </div>
            <div class="nav-border">
              <li class="nav-item">
                <a class="nav-link" href="#MyTimeline">Linia czasu</a>
              </li>
            </div>
            <div class="nav-border">
              <li class="nav-item">
                <a class="nav-link" href="#Projects">Projekty</a>
              </li>
            </div>
            <div class="nav-border">
              <li class="nav-item">
                <a class="nav-link" href="#ContactMe">Kontakt</a>
              </li>
            </div>
          </ul>
        </div>
      </div>
    </nav>

    <div id="triangle"></div>
    <main>
      <section class="row vertical" id="over-layout">
        <div class="col" id="profession">
          <header>
            <h1>
              Witaj<br />jestem Marek <br />
              i jestem:<br /><span id="me" class="special-colors"></span>
            </h1>
          </header>
          <a
            target="_blank"
            href="https://www.youtube.com/@KruczeIT"
            title="See my YouTube channel"
            ><i type="button" class="icon-youtube-play"></i
          ></a>
          <a target="_blank" href="" title="See my profile on Facebook"
            ><i type="button" class="icon-facebook-squared"></i
          ></a>
          <a
            target="_blank"
            href="https://github.com/UrodaMarek"
            title="See my repositories"
            ><i type="button" class="icon-github-squared"></i></a
          ><br />
          <a href="./documents/CV.odt" title="Pobierz CV" download>
            <button class="btn" type="button">
              Pobierz<br />
              CV
            </button>
          </a>
          <a
            href="./documents/certifications.zip"
            title="Pobierz Certyfikaty"
            download
          >
            <button class="btn" type="button">
              Pobierz<br />
              Certyfikaty
            </button>
          </a>
        </div>
        <figure class="col-6">
          <img src="./img/hacker.png" id="face-image" />
        </figure>
      </section>
      <section id="About" class="row vertical simple-shadow-bottom">
        <article class="col">
          <header>
            <h1>O <span class="special-colors">mnie</span></h1>
          </header>
          <br /><br />
          Jestem uczniem klasy czwartej technik informatyk.<br> Interesuję się
          informatyką stosowaną,<br> cyberbezpieczeństwem i programowaniem od
          podstawówki.<br> W czasie wolnym nagrywam na YouTube,<br> jestem
          administratorem serwerów Discord oraz uczę nowych programistów.
        </article>
        <figure class="col-2">
          <img src="./img/person.png" />
        </figure>
      </section>
      <section class="row" id="MySkills">
        <header>
          <h1>Moje <span class="special-colors">umiejętności</span></h1>
        </header>
        <div class="col">
          <section class="skills">
            <header>
              <h2>Kodowanie</h2>
            </header>
            <table>
              <tr>
                <td class="skill-title">HTML</td>
                <td class="skill-td">
                  <div class="skill-bar">
                    <div class="w-95 progress">95%</div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="skill-title">JS</td>
                <td class="skill-td">
                  <div class="skill-bar">
                    <div class="w-65 progress">65%</div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="skill-title">CSS</td>
                <td class="skill-td">
                  <div class="skill-bar">
                    <div class="w-85 progress">85%</div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="skill-title">SASS</td>
                <td class="skill-td">
                  <div class="skill-bar">
                    <div class="w-60 progress">60%</div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="skill-title">PHP</td>
                <td class="skill-td">
                  <div class="skill-bar">
                    <div class="w-50 progress">50%</div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="skill-title">Boot Strap</td>
                <td class="skill-td">
                  <div class="skill-bar">
                    <div class="w-70 progress">70%</div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="skill-title">Python</td>
                <td class="skill-td">
                  <div class="skill-bar">
                    <div class="w-75 progress">75%</div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="skill-title">C++</td>
                <td class="skill-td">
                  <div class="skill-bar">
                    <div class="w-40 progress">40%</div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="skill-title">C#</td>
                <td class="skill-td">
                  <div class="skill-bar">
                    <div class="w-50 progress">50%</div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="skill-title">Java</td>
                <td class="skill-td">
                  <div class="skill-bar">
                    <div class="w-60 progress">60%</div>
                  </div>
                </td>
              </tr>
            </table>
          </section>
        </div>
        <div class="col">
          <section class="skills">
            <header>
              <h2>Administrowanie</h2>
            </header>
            <table>
              <tr>
                <td class="skill-title">Linux</td>
                <td class="skill-td">
                  <div class="skill-bar">
                    <div class="w-90 progress">90%</div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="skill-title">Windows Server</td>
                <td class="skill-td">
                  <div class="skill-bar">
                    <div class="w-75 progress">75%</div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="skill-title">Wine</td>
                <td class="skill-td">
                  <div class="skill-bar">
                    <div class="w-55 progress">55%</div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="skill-title">YouTube</td>
                <td class="skill-td">
                  <div class="skill-bar">
                    <div class="w-30 progress">30%</div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="skill-title">Discord</td>
                <td class="skill-td">
                  <div class="skill-bar">
                    <div class="w-85 progress">85%</div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="skill-title">Urządzenia sieciowe</td>
                <td class="skill-td">
                  <div class="skill-bar">
                    <div class="w-75 progress">75%</div>
                  </div>
                </td>
              </tr>
            </table>
          </section>
          <section class="skills space">
            <header>
              <h2>Języki obce</h2>
            </header>
            <table>
              <tr>
                <td class="skill-title">Angielski</td>
                <td class="skill-td">
                  <div class="skill-bar">
                    <div class="w-80 progress">80%</div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="skill-title">Niemiecki</td>
                <td class="skill-td">
                  <div class="skill-bar">
                    <div class="w-40 progress">40%</div>
                  </div>
                </td>
              </tr>
            </table>
          </section>
        </div>
      </section>
      <section id="MyTimeline">
        <header>
          <h1>Moja <span class="special-colors">linia czasu</span></h1>
        </header>
        <div id="timeline">
          <div class="left b-t-n"></div>
          <div class="right b-t-n b-b-n"></div>
          <div class="clear"></div>
          <div class="left"></div>
          <div class="right b-t-n b-b-n"></div>
          <div class="clear"></div>
          <div class="left"></div>
          <div class="right b-t-n b-b-n"></div>
          <div class="clear"></div>
          <div class="left"></div>
          <div class="right b-t-n b-b-n"></div>
          <div class="clear"></div>
          <div class="left b-b-n"></div>
          <div class="right b-t-n"></div>
          <div class="clear"></div>
          <div class="left b-b-n b-t-n"></div>
          <div class="right"></div>
          <div class="clear"></div>
          <div class="left b-t-n"></div>
          <div class="right b-b-n"></div>
          <div class="clear"></div>
          <div class="left b-b-n"></div>
          <div class="right b-t-n b-b-n"></div>
          <div class="clear"></div>
        </div>
        <div id="checkpoint-container">
          <div class="checkpoint" id="birth">
            Hello World<br />
            13.04.2005
          </div>
          <div class="checkpoint left-checkpoint" id="first-on-side">
            Szkoła podstawowa<br />
            13.04.2005
          </div>
          <div class="checkpoint left-checkpoint">
            Rozpoczęcie nauki w Technikum<br />
            (Technik Informatyk)<br />
            1.09.2012/26.06.2020
          </div>
          <div class="checkpoint left-checkpoint">
            Kurs Cisco<br />
            IT Essentials<br />
            21.06.2022
          </div>
          <div class="checkpoint left-checkpoint">
            Kurs “Java dla zielonych”<br />
            31.08.2023
          </div>
          <div class="checkpoint right-checkpoint">
            Praktyki zawodowe<br />
            w PWiK<br />
            2.11.2022/2.12.2022
          </div>
          <div class="checkpoint right-checkpoint">
            Rozpoczęcie pracy w<br />
            Serwis Galena<br />
            jako Blockchain Developer<br />
            30.12.2022
          </div>
          <div class="checkpoint left-checkpoint">
            Zdanie kwalifikacji INF.02<br />
            31.08.2023
          </div>
          <div id="mountains">
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="clear"></div>
          </div>
        </div>
      </section>
      <section class="row" id="Projects">
        <header>
          <h1>Proje<span class="special-colors">kty</span></h1>
          <br /><br />
        </header>
        <div class="col-xxxl-6 col-12">
          <section class="left-project">
            <article>
              <header>
                <h2>Skal</h2>
              </header>
              Porywająca gra tekstowa RPG o wikingach z Gotlandii. Gra porusza
              problem straty rodziców i zemsty. Ukazuje życie ówczesnego
              społeczeństwa, jego problemy oraz wierzenia.
            </article>
            <a
              href="https://github.com/UrodaMarek/skal"
              target="_blank"
              title="Zobacz kod na Githubie"
            >
              <button class="btn" type="button">Zobacz na Githubie</button>
            </a>
          </section>
          <section class="left-project">
            <article>
              <header>
                <h2>Serwisgalena.pl</h2>
              </header>
              Strona internetow stworzona na zlecenie serwisu komputerowego z
              Chrzanowa, Serwis Galena. Strona została napisana z użyciem
              Framework'a BootStrap.
            </article>
            <a
              href="https://github.com/UrodaMarek/serwisgalena.pl"
              target="_blank"
              title="Zobacz kod na Githubie"
            >
              <button class="btn" type="button">Zobacz na Githubie</button>
            </a>
          </section>
          <section class="left-project">
            <article>
              <header>
                <h2>Cryptomines</h2>
              </header>
              Koparka waluty kryptograficznej KOP, oparta o technologie Chia.
              Stworzona stworzona i utrzymywana na zlecenie serwisu
              komputerowego, SerwisGalena.
            </article>
            <a
              href="https://github.com/Cryptomines-Network/cryptomines-blockchain"
              target="_blank"
              title="Zobacz kod na Githubie"
            >
              <button class="btn" type="button">Zobacz na Githubie</button>
            </a>
          </section>
        </div>
        <div class="col-xxxl-6 col-12">
          <section class="right-project">
            <article>
              <header>
                <h2>Kalkulator</h2>
              </header>
              Symulator kalkulatora prostego CITIZEN SLD-200NR, w formie strony
              internetowej, napisana głównie w Java Script
            </article>
            <a
              href="https://github.com/UrodaMarek/kalkulator"
              target="_blank"
              title="Zobacz kod na Githubie"
            >
              <button class="btn" type="button">Zobacz na Githubie</button>
            </a>
          </section>
          <section class="right-project">
            <article>
              <header>
                <h2>Dobry kumpel</h2>
              </header>
              Szyfrowany czat opierający się o operacje na bazie danych, z
              możliwością używania go, jako komunikator z interfejsem WebAPI.
            </article>
            <a
              href="https://github.com/UrodaMarek/dobry-kumpel"
              target="_blank"
              title="Zobacz kod na Githubie"
            >
              <button class="btn" type="button">Zobacz na Githubie</button>
            </a>
          </section>
          <section class="right-project">
            <article>
              <header>
                <h2>Portfolio</h2>
              </header>
              Jest to witryna, którą właśnie oglądasz. Napisana jest w Java
              Script, PHP, HTML i CSS. Do stworzenia jej wykorzystano SASS,
              framework BootStrap oraz Typed.js, ponad to wykorzystano Fontello
              oraz przyjazne linki.
            </article>
            <a
              href="https://github.com/UrodaMarek/portfolio"
              target="_blank"
              title="Zobacz kod na Githubie"
            >
              <button class="btn" type="button">Zobacz na Githubie</button>
            </a>
          </section>
        </div>
      </section>
      <section class="row vertical" id="ContactMe">
        <header>
          <h1>Skontaktuj się <span class="special-colors">ze mną</span></h1>
        </header>
        <form method="post">
          <div class="row">
            <div class="col-sm-6 col-12">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Imię"
                  name="name"
                  required
                />
                <label for="name">Imię</label>
              </div>
            </div>
            <div class="col-sm-6 col-12">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Nazwisko"
                  name="surname"
                  required
                />
                <label for="surname">Nazwisko</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-12">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Firma"
                  name="company"
                />
                <label for="company">Firma</label>
              </div>
            </div>
            <div class="col-sm-6 col-12">
              <div class="form-floating">
                <input
                  type="tel"
                  class="form-control"
                  placeholder="Numer telefonu"
                  name="tel"
                />
                <label for="tel">Numer telefonu</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-12">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Temat"
                  name="email_sub"
                  required
                />
                <label for="email_sub">Temat</label>
              </div>
            </div>
            <div class="col-sm-6 col-12">
              <div class="form-floating">
                <input
                  type="email"
                  class="form-control"
                  placeholder="Adres email"
                  name="email_ad"
                  required
                />
                <label for="email_ad">Adres email</label>
              </div>
            </div>
          </div>
          <div class="form-floating">
            <textarea
              class="form-control"
              name="message"
              placeholder="Wiadomość"
              id="message"
              rows="3"
              required
            ></textarea>
            <label for="message">Wiadomość</label>
          </div>
          <button type="submit" class="btn">Wyślij</button>
        </form>
      </section>
    </main>
    <footer>
      Marek. &copy; Wszelkie prawa zastrzeżone<br />
      tel. +48 571 213 040
    </footer>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./node_modules/typed.js/dist/typed.umd.js"></script>
    <script src="./node_modules/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="./js/script.js"></script>
    <script>
      const typed = new Typed("#me", {
        strings: [
          "Frontend Developerem",
          "Backend Developerem",
          "Python Developerem",
          "Java Developerem",
          "C++ Developerem",
          "C# Developerem",
          "Blockchain Developerem",
          "Administratorem",
          "YouTuberem",
          "Nauczycielem",
        ],
        typeSpeed: 100,
        backSpeed: 100,
        backDelay: 1000,
        loop: true,
      });
    </script>
  </body>
</html>