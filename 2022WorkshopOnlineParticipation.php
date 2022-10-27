<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>2022 International Workshop on Emerging ICT</title>
    <link rel="stylesheet" href="./css/header.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/container.css" />

    <style>
      .cover {
        padding-top: 20px;
        width: 70%;
        height: 600px;
        margin: 0 auto;
      }
      .left-container {
        float: left;
        display: block;
        width: 18%;
        color: black;
      }
      .right-container {
        position: relative;
        float: right;
        display: block;
        width: 78%;
        padding-right: 15px;
        padding-left: 15px;
      }
      .panel {
        border: 1px solid gray;
        border-radius: 4px;
        background-color: #fff;
        margin-bottom: 15px;
        text-align: center;
      }
      .panel-primary {
        border-color: gray;
      }
      .panel-primary:hover {
        background-color: #0055b6;
        color: #fff;
      }
      .panel-primary a:hover {
        color: #fff;
      }
      .panel-heading {
        cursor: pointer;
        padding: 10px 15px;
      }
      a {
        font-weight: 700;
        font-size: 1.25rem;
        text-decoration: none;
        color: #000;
      }
      .on {
        background-color: #0055b6;
        color: #fff;
      }
      .tabcontent {
        background-color: #fff;
        box-shadow: 0px 3px 10px 0px rgb(0 0 0 / 60%);
        padding: 40px 60px 30px 60px;
        margin-top: 20px;
      }
      .tabcontent .title h4 {
        padding-top: 10px;
        text-align: center;
        font-size: 2rem;
      }
      .tabcontent .content .text {
        padding-top: 10px;
        padding-bottom: 10px;
        font-size: 1rem;
      }
      .tabcontent .content button {
        display: inline-block;
        border: none;
        width: 250px;
        border-radius: 10px;
        padding: 10px 30px 10px 30px;
        background-color: #0f71ed;
        color: #fff;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        text-align: center;
        transition: all 0.5s;
      }
      .tabcontent .content .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }
      .tabcontent .content .button span::after {
        content: "\00bb";
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }
      .tabcontent .content .button:hover span {
        padding-right: 25px;
      }
      .tabcontent .content .button:hover span:after {
        opacity: 1;
        right: 0;
      }
    </style>
  </head>
  <body>
    <div class="header-box">
      <h1 class="logo">
        <a href="2022InternatinalWorkshop.php">
          <img
            src="./images/logo.png"
            alt="Yeungnam University Graduate School"
          />
        </a>
      </h1>
    </div>

    <div class="container"></div>

    <div class="cover">
      <div class="left-container">
        <nav>
          <ul class="panel-group">
            <li>
              <a href="2022InternatinalWorkshop.php">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h4>Welcome</h4>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="2022WorkshopCommitees.php">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h4>Committees</h4>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="2022WorkshopPrograms.php">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h4>Programs</h4>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="2022WorkshopPaper.php">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h4>Paper submission</h4>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="2022WorkshopRegistration.php">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h4>Registration</h4>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="2022WorkshopOnlineParticipation.php">
                <div class="panel panel-primary on">
                  <div class="panel-heading">
                    <h4>Online participation</h4>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="right-container">
        <div class="tabcontent">
          <div class="title">
            <h4>Online participant</h4>
          </div>
          <div class="content">
            <div class="text">
              <h2>Zoom Link</h2>
            </div>
            <div>
              <button
                onclick="location.href='https://us02web.zoom.us/j/81871524332?pwd=UlhxVEtITlpOaEhiS2x6aHFobFNnZz09';"
                class="button"
              >
                <span>Start Zoom Meeting</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer">
      <div class="footer-logo-box">
        <p class="logo"></p>
      </div>
      <div class="footer-info-box">
        <p>
          경북 경산시 대학로 280, 영남대학교 정보통신연구소관 1층, Republic of
          Korea
        </p>
        <p>TEL +82-53-810-3942</p>
        <p>Mail infocom@yu.ac.kr</p>
        <p>
          Copyright © 2022 Institute of Information and Comunication All rights
          reserved
        </p>
      </div>
    </div>
  </body>
</html>
