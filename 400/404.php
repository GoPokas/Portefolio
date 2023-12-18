<?php
echo ""; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Erro 404</title>

    <!-- Google font -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
      rel="stylesheet"
    />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
      }

      body {
        padding: 0;
        margin: 0;
      }

      #notfound {
        position: relative;
        height: 100vh;
        background: #f6f6f6;
      }

      #notfound .notfound {
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
      }

      #notfound button {
        padding-left: 2rem;
        padding-right: 2rem;
        padding-top: 0.375rem;
        padding-bottom: 0.375rem;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        background-color: #3b82f6;
        color: #fff;
        border: none;
        border-radius: 0.25rem;
        cursor: pointer;
        font-size: 18px;
      }

      .center-button {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
      }
      .notfound {
        max-width: 767px;
        width: 100%;
        line-height: 1.4;
        padding: 110px 40px;
        text-align: center;
        background: #fff;
        -webkit-box-shadow: 0 15px 15px -10px rgba(0, 0, 0, 0.1);
        box-shadow: 0 15px 15px -10px rgba(0, 0, 0, 0.1);
      }

      .notfound .notfound-404 {
        position: relative;
        height: 180px;
      }

      .notfound .notfound-404 h1 {
        font-family: "Roboto", sans-serif;
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        font-size: 165px;
        font-weight: 700;
        margin: 0px;
        color: #262626;
        text-transform: uppercase;
      }

      .notfound .notfound-404 h1 > span {
        color: #00b7ff;
      }

      .notfound h2 {
        font-family: "Roboto", sans-serif;
        font-size: 22px;
        font-weight: 400;
        text-transform: uppercase;
        color: #151515;
        margin-top: 0px;
        margin-bottom: 25px;
      }

      @media only screen and (max-width: 767px) {
        .notfound h2 {
          font-size: 18px;
        }
      }

      @media only screen and (max-width: 480px) {
        .notfound .notfound-404 h1 {
          font-size: 141px;
        }
      }
    </style>
  </head>

  <body>
    <div id="notfound">
      <div class="notfound">
        <div class="notfound-404">
          <h1>404</h1>
        </div>
        <h2>A página que você estava à procura não existe</h2>
        <div class="center-button">
          <button onclick="history.back()">
            <span>Voltar atrás</span>
          </button>
        </div>
      </div>
    </div>
  </body>
</html>