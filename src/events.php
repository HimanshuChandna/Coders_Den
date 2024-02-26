<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
  <title>Coder's Den</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Protest+Revolution&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
  <style>
    html,
    body {
      width: 100%;
      height: 100%;
      display: grid;
      padding: 1.1vh;
      grid-auto-rows: min-content;
      row-gap: 28px;
    }

    .carousel-dark .carousel-indicators [data-bs-target] {
      background-color: #c8c8c8d3;
      width: 10px;
      height: 10px;
      border-radius: 50%;
      border: 0px solid;
      position: relative;
      bottom: -10px;
    }

    .carousel-dark .carousel-indicators .active {
      background-color: #4AC8AE;
      width: 40px;
      border-radius: 20px;

    }

    .courses {
      display: grid;
      grid-auto-flow: column;
      list-style: none;
      justify-items: center;
      padding: 3%;

    }


    .items {
      width: 47vh;
      height: 62vh;
      background: rgb(255, 255, 255);
      box-sizing: border-box;
      box-shadow: #4AC8AE -1px 6px 14px -7px;
      border-radius: 0.3rem;
      transition: 1s;
      display: flex;
    }

    .items:hover {
      background-color: #4AC8AE;
      box-shadow: -1px 6px 14px -7px;

      .photobackground {
        background-color: white;
      }

      ;

      .coursename {
        -webkit-text-fill-color: peachpuff;
      }

      ;

      .description {
        -webkit-text-fill-color: white;
      }



      .notespage {
        -webkit-text-fill-color: white;
        -webkit-text-stroke: blue;
        -webkit-text-stroke-width: 0.2px;
      }
    }

    .mainheading {
      font-family: "Protest Revolution", sans-serif;
      font-weight: 400;
      font-style: normal;
      font-size: 6vh;
    }

    .smallheading {
      font-family: "Protest Revolution", sans-serif;
      font-weight: 400;
      font-style: normal;
      font-size: 2.5vh;
      color: #4AC8AE;
    }

    .smalldescripton {
      font-family: "Protest Revolution", sans-serif;
      font-weight: 100;
      font-style: normal;
      font-size: 2.85vh;
      color: #858383af;
    }

    .inneritems {
      display: flex;
      flex-wrap: wrap;
      padding: 2.2vh;
    }

    .notespage {
      margin-top: 1vh;
      transition: 1s;
      text-decoration: none;
      font-family: "Anton", sans-serif;
      font-weight: 300;
      font-style: normal;
      -webkit-text-fill-color: #787878;
    }


    .photo {
      width: 100%;
      height: 100%;
    }

    .description {
      height: 6vh;
      width: 40vh;
      transition: 1s;
    }

    .description h1 {
      font-size: 30px;
      font-weight: 700;
    }

    .photobackground {
      background-color: #4AC8AE;
      border-radius: 4px;
      width: 42vh;
      height: 39vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 1vh;
      padding-bottom: 3vh;
      transition: 1s;
    }

    .coursename {
      font-family: "ubuntu";
      margin-top: 8px;
      margin-left: 0px;
      font-size: 18px;
      transition: 1s;
      color: #4AC8AE;
    }

    .more {
      width: 14vh;
      height: 4vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.3vh;
      box-sizing: border-box;
      border: 3px double #4AC8AE;
      border-radius: 6.5px;
      font-weight: 800;
      box-shadow: #4AC8AE 1px 0px 13px 0px;
      transition: 1s;
      align-self: center;
      justify-self: center;
    }

    .more:hover {
      box-shadow: 1px 0px 13px 0px;
      -webkit-text-fill-color: white;
      background-color: #4AC8AE;
      border: 3px double white;
    }

    .maintext {
      height: 81px;
      padding-left: 83px;

    }

    .carousel-dark {
      align-self: center;
    }
  </style>
</head>

<body>
  <div class="maintext">
    <h6 class="smallheading">
      Explore upcoming event
    </h6>
    <h1 class="mainheading">
      Upcoming Events
    </h1>
    <p class="smalldescripton">enjoy,connect and explore in various events.</p>
  </div>
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-touch="true">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="4000">
        <ul class="courses">
          <li>
            <div class="items">
              <div class="inneritems">
                <div class="photobackground">
                  <img class="photo" src="media/workshop.jpg">
                </div>
                <h4 class="coursename">Workshop</h4>
                <br>
                <div class="description">
                  <h1>VIPS COLLEGE</h1>
                </div>
                <br>
                <a class="notespage" href="">Complete information ></a>
              </div>
            </div>
          </li>
          <li>
            <div class="items">
              <div class="inneritems">
                <div class="photobackground">
                  <img class="photo" src="media/concert.jpg">
                </div>
                <h4 class="coursename">Concert</h4>
                <br>
                <div class="description">
                  <H1>VIPS COLLEGE</H1>
                </div>
                <br>
                <a class="notespage" href="">Complete information ></a>
              </div>
            </div>
          </li>
          <li>
            <div class="items">
              <div class="inneritems">
                <div class="photobackground">
                  <img class="photo" src="media/fest.jpg">
                </div>
                <h4 class="coursename">Fests</h4>
                <br>
                <div class="description">
                  <H1>VIPS COLLEGE</H1>
                </div>
                <br>
                <a class="notespage" href="">Complete information ></a>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="carousel-item" data-bs-interval="4000">
        <ul class="courses">
          <li>
            <div class="items">
              <div class="inneritems">
                <div class="photobackground">
                  <img class="photo" src="media/workshop.jpg">

                </div>
                <h4 class="coursename">Workshop</h4>
                <br>
                <div class="description">
                  <h1>VIPS COLLEGE</h1>
                </div>
                <br>
                <a class="notespage" href="">Complete information ></a>
              </div>
            </div>
          </li>
          <li>
            <div class="items">
              <div class="inneritems">
                <div class="photobackground">
                  <img class="photo" src="media/concert.jpg">

                </div>
                <h4 class="coursename">Concert</h4>
                <br>
                <div class="description">
                  <h1>VIPS COLLEGE</h1>
                </div>
                <br>
                <a class="notespage" href="">Complete information ></a>
              </div>
            </div>
          </li>
          <li>
            <div class="items">
              <div class="inneritems">
                <div class="photobackground">
                  <img class="photo" src="media/fest.jpg">

                </div>
                <h4 class="coursename">Fests</h4>
                <br>
                <div class="description">
                  <H1>VIPS COLLEGE</H1>
                </div>
                <br>
                <a class="notespage" href="">Complete information ></a>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="carousel-item">
        <ul class="courses">
          <li>
            <div class="items">
              <div class="inneritems">
                <div class="photobackground">
                  <img class="photo" src="media/workshop.jpg">

                </div>
                <h4 class="coursename">Workshop</h4>
                <br>
                <div class="description">
                  <h1>VIPS COLLEGE</h1>
                </div>
                <br>
                <a class="notespage" href="">Complete information ></a>
              </div>
            </div>
          </li>
          <li>
            <div class="items">
              <div class="inneritems">
                <div class="photobackground">
                  <img class="photo" src="media/concert.jpg">

                </div>
                <h4 class="coursename">Concert</h4>
                <br>
                <div class="description">
                  <h1>VIPS COLLEGE</h1>
                </div>
                <br>
                <a class="notespage" href="">Complete information ></a>
              </div>
            </div>
          </li>
          <li>
            <div class="items">
              <div class="inneritems">
                <div class="photobackground">
                  <img class="photo" src="media/fest.jpg">

                </div>
                <h4 class="coursename">Fests</h4>
                <br>
                <div class="description">
                  <h1>VIPS COLLEGE</h1>
                </div>
                <br>
                <a class="notespage" href="">Complete information ></a>
                <svg></svg>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>
  </div>
  <button type="button" class="more" onclick="window.location.href='#'"> Explore All Events</button>
  </span>
</body>

</html>