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
  <link
    href="https://fonts.googleapis.com/css2?family=Anton&family=Protest+Revolution&family=Ubuntu:wght@700&display=swap"
    rel="stylesheet">
  <style>
    html,
    body {
      width: 100%;
      height: 100%;
      display: flex;
      padding: 2vh;
      justify-content: center;
      align-content: center;
      flex-direction: column;
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
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: space-evenly;
      list-style: none;
      padding: 3%;

    }

    .smallheading {
      text-align: center;
      color: #4AC8AE;
      font-weight: bold;
    }

    .mainheading {
      text-align: center;
      font-weight: 580;
    }

    .items {
      width: 43vh;
      height: 24vh;
      background: rgb(255, 255, 255);
      box-sizing: border-box;
      box-shadow: 1px 0px 4px 0px;
      border-radius: 0.5rem;
      transition: 1s;
      display: flex;
    }

    .items:hover {
      background-color: #4AC8AE;
      .photobackground{background-color: aliceblue;};
      .coursename{-webkit-text-fill-color: white;};
      .description{-webkit-text-fill-color: white;};
      .notespage{-webkit-text-fill-color: white;}
    }




    .protest-revolution-regular {
      font-family: "Protest Revolution", sans-serif;
      font-weight: 400;
      font-style: normal;
      font-size: 8vh;
    }

    .protest-revolution-regular1 {
      font-family: "Protest Revolution", sans-serif;
      font-weight: 400;
      font-style: normal;
      font-size: 3vh;
    }

    .inneritems {
      display: flex;
      flex-wrap: wrap;
      padding: 2.2vh;
    }

    .notespage {
      margin-top: 1vh;
      transition: 1s;
      text-decoration:none ;
      font-family: "Anton", sans-serif;
      font-weight: 300;
      font-style: normal;
      -webkit-text-fill-color:#4AC8AE;
    }
    

    .photo {
      width: 4vh;
      height: 4vh;
      border-radius: 8px;
    }

    .description {
      overflow: scroll;
      height: 10vh;
      width: 40vh;
      transition: 1s;
    }
    .photobackground{
      background-color: rgba(171, 200, 252, 0.792);
      border-radius: 15px;
      width:6vh;
      height:6vh;
      display: flex;
      flex-direction: column;
      align-content: center;
      justify-content: center;
      padding:0.8vh;
      transition: 1s;
    }
    .coursename{
      font-family: "ubuntu";
      margin-top:6.4px;
      margin-left: 15px;
      font-size: 30px;  
      transition: 1s;
    }
    
  </style>
</head>

<body>
  <h6 class="smallheading">
    <div class="protest-revolution-regular1">Popular Courses</div>
  </h6>
  <h1 class="mainheading">
    <div class="protest-revolution-regular">Our Notes</div>
  </h1>
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-touch="true">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="4000">
        <ul class="courses">
          <li>
            <div class="items">
              <div class="inneritems">
                <div class="photobackground">
                  <img class="photo" src="media/Mobile_phone_and_computer_screen.png">
                </div>
                <h4 class="coursename">BCA</h4>
                <br>
                <div class="description">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus, totam
                    sapiente eos in labore cum nam molestiae. Quis nam velit quisquam perferendis soluta. Tenetur
                    adipisci
                    ea ipsa facere praesentium pariatur?</p>
                </div>
                <br>
                <div><br></div>
                <a class="notespage" href="">Read Notes ></a>
              </div>
            </div>
          </li>
          <li>
            <div class="items">
              <div class="inneritems">
                <div class="photobackground">
                  <img class="photo" src="media/Mobile_phone_and_computer_screen.png">
                </div>
                <h4 class="coursename">BCA</h4>
                <br>
                <div class="description">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus, totam
                    sapiente eos in labore cum nam molestiae. Quis nam velit quisquam perferendis soluta. Tenetur
                    adipisci
                    ea ipsa facere praesentium pariatur?</p>
                </div>
                <br>
                <a class="notespage" href="">Read Notes ></a>
              </div>
            </div>
          </li>
          <li>
            <div class="items">
              <div class="inneritems">
                <div class="photobackground">
                  <img class="photo" src="media/Mobile_phone_and_computer_screen.png">
                </div>
                <h4 class="coursename">BCA</h4>
                <br>
                <div class="description">
                  <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus, totam
                    sapiente eos in labore cum nam molestiae. Quis nam velit quisquam perferendis soluta. Tenetur
                    adipisci
                    ea ipsa facere praesentium pariatur?</p>
                </div>
                <br>
                <a class="notespage" href="">Read Notes ></a>
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
                  <img class="photo" src="media/Mobile_phone_and_computer_screen.png">

                </div>
                <h4 class="coursename">BCA</h4>
                <br>
                <div class="description">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus, totam
                    sapiente eos in labore cum nam molestiae. Quis nam velit quisquam perferendis soluta. Tenetur
                    adipisci
                    ea ipsa facere praesentium pariatur?</p>
                </div>
                <br>
                <a class="notespage" href="">Read Notes ></a>
              </div>
            </div>
          </li>
          <li>
            <div class="items">
              <div class="inneritems">
                <div class="photobackground">
                  <img class="photo" src="media/Mobile_phone_and_computer_screen.png">

                </div>
                <h4 class="coursename">BCA</h4>
                <br>
                <div class="description">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus, totam
                    sapiente eos in labore cum nam molestiae. Quis nam velit quisquam perferendis soluta. Tenetur
                    adipisci
                    ea ipsa facere praesentium pariatur?</p>
                </div>
                <br>
                <a class="notespage" href="">Read Notes ></a>
              </div>
            </div>
          </li>
          <li>
            <div class="items">
              <div class="inneritems">
                <div class="photobackground">
                  <img class="photo" src="media/Mobile_phone_and_computer_screen.png">

                </div>
                <h4 class="coursename">BCA</h4>
                <br>
                <div class="description">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus, totam
                    sapiente eos in labore cum nam molestiae. Quis nam velit quisquam perferendis soluta. Tenetur
                    adipisci
                    ea ipsa facere praesentium pariatur?</p>
                </div>
                <br>
                <a class="notespage" href="">Read Notes ></a>
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
                  <img class="photo" src="media/Mobile_phone_and_computer_screen.png">

                </div>
                <h4 class="coursename">BCA</h4>
                <br>
                <div class="description">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus, totam
                    sapiente eos in labore cum nam molestiae. Quis nam velit quisquam perferendis soluta. Tenetur
                    adipisci
                    ea ipsa facere praesentium pariatur?</p>
                </div>
                <br>
                <a class="notespage" href="">Read Notes ></a>
              </div>
            </div>
          </li>
          <li>
            <div class="items">
              <div class="inneritems">
                <div class="photobackground">
                  <img class="photo" src="media/Mobile_phone_and_computer_screen.png">

                </div>
                <h4 class="coursename">BCA</h4>
                <br>
                <div class="description">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus, totam
                    sapiente eos in labore cum nam molestiae. Quis nam velit quisquam perferendis soluta. Tenetur
                    adipisci
                    ea ipsa facere praesentium pariatur?</p>
                </div>
                <br>
                <a class="notespage" href="">Read Notes ></a>
              </div>
            </div>
          </li>
          <li>
            <div class="items">
              <div class="inneritems">
                <div class="photobackground">
                  <img class="photo" src="media/Mobile_phone_and_computer_screen.png">

                </div>
                <h4 class="coursename">BCA</h4>
                <br>
                <div class="description">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus, totam
                    sapiente eos in labore cum nam molestiae. Quis nam velit quisquam perferendis soluta. Tenetur
                    adipisci
                    ea ipsa facere praesentium pariatur?</p>
                </div>
                <br>
                <a class="notespage" href="">Read Notes</a>
                <svg></svg>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
        aria-label="Slide 1" aria-current="true"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"
        class=""></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"
        class=""></button>
    </div>
  </div>
  </span>
  <!-- End Example Code -->
</body>

</html>