<?php
	@ob_start();
	session_start();
	if(isset($_POST['proses'])){
		require 'config.php';
			
		$user = strip_tags($_POST['user']);
		$pass = strip_tags($_POST['pass']);

		$sql = 'select member.*, login.user, login.pass
				from member inner join login on member.id_member = login.id_member
				where user =? and pass = md5(?)';
		$row = $config->prepare($sql);
		$row -> execute(array($user,$pass));
		$jum = $row -> rowCount();
		if($jum > 0){
			$hasil = $row -> fetch();
			$_SESSION['admin'] = $hasil;
			echo '<script>alert("Login Sukses");window.location="index.php"</script>';
		}else{
			echo '<script>alert("Login Gagal");history.go(-1);</script>';
		}
	}
?>
<!DOCTYPE html>
<html lang="english">
  <head>
    <title>exported project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {
        line-height: 1.15;
      }
      body {
        margin: 0;
      }
      * {
        box-sizing: border-box;
        border-width: 0;
        border-style: solid;
      }
      p,
      li,
      ul,
      pre,
      div,
      h1,
      h2,
      h3,
      h4,
      h5,
      h6,
      figure,
      blockquote,
      figcaption {
        margin: 0;
        padding: 0;
      }
      button {
        background-color: transparent;
      }
      button,
      input,
      optgroup,
      select,
      textarea {
        font-family: inherit;
        font-size: 100%;
        line-height: 1.15;
        margin: 0;
      }
      button,
      select {
        text-transform: none;
      }
      button,
      [type="button"],
      [type="reset"],
      [type="submit"] {
        -webkit-appearance: button;
      }
      button::-moz-focus-inner,
      [type="button"]::-moz-focus-inner,
      [type="reset"]::-moz-focus-inner,
      [type="submit"]::-moz-focus-inner {
        border-style: none;
        padding: 0;
      }
      button:-moz-focus,
      [type="button"]:-moz-focus,
      [type="reset"]:-moz-focus,
      [type="submit"]:-moz-focus {
        outline: 1px dotted ButtonText;
      }
      a {
        color: inherit;
        text-decoration: inherit;
      }
      input {
        padding: 2px 4px;
      }
      img {
        display: block;
      }
      html {
        scroll-behavior: smooth;
      }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style: normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);
      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div>
      <link href="./desktop2.css" rel="stylesheet" />

      <div class="desktop2-container">
        <div class="desktop2-desktop2">
          <div src="" alt="Rectangle141622" class="desktop2-rectangle14"></div>
          <div src="" alt="Rectangle151622" class="desktop2-rectangle15"></div>
          <span class="desktop2-text"><span>LOGIN</span></span>
          <div class="desktop2-frame92">
            <span class="desktop2-text02">7</span>
          </div>
          <div class="desktop2-frame93">
            <span class="desktop2-text03">8</span>
          </div>
          <div class="desktop2-frame94">
            <span class="desktop2-text04">9</span>
          </div>
          <div class="desktop2-frame95">
            <span class="desktop2-text05">
              <span>
                <span>Back</span>
                <br />
                <span>Space</span>
              </span>
            </span>
          </div>
          <div class="desktop2-frame96">
            <span class="desktop2-text10">4</span>
          </div>
          <div class="desktop2-frame97">
            <span class="desktop2-text11">5</span>
          </div>
          <div class="desktop2-frame98">
            <span class="desktop2-text12">6</span>
          </div>
          <div class="desktop2-frame99">
            <span class="desktop2-text13"><span>Clear</span></span>
          </div>
          <div class="desktop2-frame100">
            <span class="desktop2-text15">1</span>
          </div>
          <div class="desktop2-frame101">
            <span class="desktop2-text16">2</span>
          </div>
          <div class="desktop2-frame102">
            <span class="desktop2-text17">3</span>
          </div>
          <div class="desktop2-frame103">
            <span class="desktop2-text18">+</span>
          </div>
          <div class="desktop2-frame104">
            <span class="desktop2-text19">0</span>
          </div>
          <div class="desktop2-frame105">
            <span class="desktop2-text20"><span>00</span></span>
          </div>
          <div class="desktop2-frame106">
            <span class="desktop2-text22"><span>Enter</span></span>
          </div>

          <form
            src=""
            alt="Rectangle161626"
            class="desktop2-rectangle16"
          ></form>
          <span class="desktop2-text24"><span>Nama</span></span>
          <span class="desktop2-text26"><span>Password</span></span>
          <span class="desktop2-text28"><span>NIK</span></span>
          <div src="" alt="Rectangle171626" class="desktop2-rectangle17"></div>
          <span class="desktop2-text30"><span>0218106990</span></span>

        <form class="form-login" method="POST">

          <input type="text" name="user"
          placeholder="User ID"  class="desktop2-rectangle18" autofocus></input>
          
          <input type="password" name="pass"
          placeholder="password"  class="desktop2-rectangle19 "></input>
          
          <span class="desktop2-text32"><span></span></span>
          <!-- <span class="desktop2-text34"><span>admin</span></span> -->
          <div src="" alt="Rectangle201627" class="desktop2-rectangle20"></div>
          <div src="" alt="Rectangle221627" class="desktop2-rectangle22"></div>
          <div method="POST" type="sumbit" class="desktop2-rectangle21"></div>
          <div src="" alt="Rectangle231627" class="desktop2-rectangle23"></div>
          <span class="desktop2-text36"><span>&lt;&lt; Kembali</span></span>
          <button class="desktop2-text38" name="proses" type="submit">Masuk</button>
          <!-- <sumbit class="desktop2-text38" method="POST" type="sumbit"><a href="">Masuk</a></sumbit> -->
          <span class="desktop2-text40"><span>Keluar</span></span>
        </form>
          
        </div>
      </div>
    </div>
  </body>
</html>
