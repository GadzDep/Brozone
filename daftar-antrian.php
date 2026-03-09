<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Brozone Barbershop</title>

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <?php

    ?>

    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }

      body {
        background: #eef1f7;
      }

      /* SIDEBAR */

      .sidebar {
        width: 270px;
        height: 100vh;
        background: #323a45;
        position: fixed;
        left: 0;
        top: 0;
        color: white;
      }

      .logo {
        text-align: center;
        padding-top: 35px;
      }

      .logo img {
        width: 120px;
      }

      .menu {
        margin-top: 40px;
      }

      .menu ul {
        list-style: none;
      }

      .menu li {
        display: flex;
        align-items: center;
        gap: 12px;
        background: #3f6184;
        margin: 18px 30px;
        padding: 12px;
        border-radius: 10px;
        font-weight: 500;
        cursor: pointer;
      }

      .menu li img {
        width: 20px;
      }

      /* HEADER */

      .header {
        position: fixed;
        left: 270px;
        top: 0;
        width: calc(100% - 270px);
        height: 150px;
        background: #3f6184;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 70px;
        color: white;
      }

      .header h1 {
        letter-spacing: 16px;
        font-weight: 700;
      }

      .header span {
        font-size: 24px;
        letter-spacing: 6px;
      }

      .header img {
        width: 50zpx;
      }

      /* MAIN */

      .main {
        margin-left: 270px;
        padding-top: 300px;
        display: flex;
        justify-content: center;
      }

      /* CARD */

      .card {
        display: flex;
        align-items: center;
        background: #4a6a8c;
        border-radius: 30px;
        box-shadow: 0px 3px 43px 6px rgba(0, 28, 89, 0.2);
        padding-right: 30px;
        gap: 40px;
        width: 950px;
      }

      /* ILUSTRASI */

      .card-img {
        background: #ffffff;
        padding: 30px;
        border-radius: 20px 100px 100px 20px;
        -webkit-border-radius: 20px 100px 100px 20px;
        -moz-border-radius: 20px 100px 100px 20px;
      }

      .card-img img {
        width: 320px;
      }

      /* FORM */

      .card-form {
        flex: 1;
        color: white;
      }

      .card-form h2 {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 25px;
        font-size: 26px;
        font-weight: 600;
      }

      .card-form h2 img {
        width: 24px;
      }

      .card-form input,
      .card-form select {
        width: 100%;
        padding: 16px;
        border: none;
        border-radius: 8px;
        margin-bottom: 20px;
        font-size: 15px;
        background: #e6e6e6;
      }

      /* BUTTON */

      .button-area {
        display: flex;
        justify-content: center;
        margin-top: 25px;
        gap: 30px;
      }

      .btn {
        background: #2e333a;
        color: white;
        border: none;
        padding: 16px 45px;
        font-size: 16px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
        cursor: pointer;
      }

      .btn img {
        width: 18px;
      }
    </style>
  </head>

  <body>
    <!-- SIDEBAR -->

    <div class="sidebar">
      <div class="logo">
        <img src="asset/logo.svg" />
      </div>

      <div class="menu">
        <ul>
          <li>
            <img src="asset/ktp.svg" />
            Ambil Antrian
          </li>

          <li>
            <img src="asset/people.svg" />
            Daftar Antrian
          </li>

          <li>
            <img src="asset/ktp.svg" />
            Kartu Antrian
          </li>
        </ul>
      </div>
    </div>

    <!-- HEADER -->

    <div class="header">
      <div>
        <h1>BROZONE</h1>
        <span>BARBERSHOP</span>
      </div>

      <img src="asset/scissor.svg" />
    </div>
  </body>
</html>
