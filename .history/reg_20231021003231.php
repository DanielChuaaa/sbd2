<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;600;700&display=swap" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <div class="contentWrapper">
        <div class="loginSection">
          <div>
            <h1 class="margin-bottom-200">Login</h1>

            <form action="" onsubmit="return errorHandlers() ">
              <!-- outpur error -->
              <div id="eEmail" class="emsg"></div>

              <h4 class="margin-bottom-100">Nama</h4>
              <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" />
              <i class="fa-solid fa-user" data-margin-left="margin-left"> </i>

              <h4 class="margin-bottom-100">Email</h4>
              <input type="email" name="email" id="email" placeholder="Masukkan Email" />
              <i class="fa-solid fa-user" data-margin-left="margin-left"> </i>

              <h4 class="margin-bottom-100">No. HP</h4>
              <input type="number" name="hp" id="hp" placeholder="Masukkan Nomor Hp" />
              <!-- <i class="fa-solid fa-user" data-margin-left="margin-left"> </i> -->

              <h4 class="margin-bottom-100">Password</h4>
              <input type="password" name="password" id="passwordInput" placeholder="Masukkan Password" />

              <i class="fa-solid fa-eye" data-margin-left="margin-left" onclick="togglePassword()"></i>
              <i class="fa-solid fas fa-eye-slash" onclick="togglePassword()"></i>

              <button class="button margin-bottom-200">Login</button>
            </form>
          </div>

          <p>Belum punya akun? <a href="daftar.html" class="clr-brown"> Daftar sekarang</a></p>
        </div>

        <div class="rightSection">
          <img src="/logassets/kopi.png" class="img" alt="" />
        </div>
      </div>
    </div>

    <script src="main.js"></script>
  <!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>
