<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>easy cookie policy</title>
		<meta name="description" content="easy cookie policy">
		<meta name="author" content="Valerio Pierbattista">
		<style type="text/css">
			#info_cookie {
				background: #aaa;
				color: #111;
				padding: 10px;
				font-size: 12px;
				line-height: 16px;
				font-family: arial, helvetica;
				text-align: center;
			}
			.cookie-btn {
				display: inline-block;
				padding: 5px 20px;
				font-size: 14px;
				background: white;
				color: black;
				margin: 10px 0 0 0;
				text-transform: capitalize;
				cursor: pointer;
			}
			.cookie-hidden {
				display: none;
			}
			.cookie-visible {
				display: block;
			}
		</style>
	</head>
	<body>
		<div id="info_cookie" class="cookie-hidden">
			Short cookie policy description here.
			<br>
			<div class="cookie-btn ok-cookie">
				I agree
			</div>
			<div class="cookie-btn ok-cookie">
				<a href="#">Learn more</a>
			</div>
		</div>

		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script>
			function createCookie(name, value, days) {
				if (days) {
					var date = new Date();
					date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
					var expires = "; expires=" + date.toGMTString();
				} else
					var expires = "";
				document.cookie = name + "=" + value + expires + "; path=/";
			}

			function readCookie(name) {
				var nameEQ = name + "=";
				var ca = document.cookie.split(';');
				for (var i = 0; i < ca.length; i++) {
					var c = ca[i];
					while (c.charAt(0) == ' ')
					c = c.substring(1, c.length);
					if (c.indexOf(nameEQ) == 0)
						return c.substring(nameEQ.length, c.length);
				}
				return null;
			}

			function eraseCookie(name) {
				createCookie(name, "", -1);
			}

			(function() {
				var InfoCookieCont = jQuery('#info_cookie');
				var InfoCookieDiv = jQuery(".ok-cookie");
				InfoCookieDiv.click(function() {
					createCookie('infoCookie', 'true', 365)
					InfoCookieCont.removeClass("cookie-visible").addClass("cookie-hidden");
				});

				var InfoCookie = readCookie("infoCookie");
				if (!InfoCookie) {
					InfoCookieCont.removeClass("cookie-hidden").addClass("cookie-visible");
				}
			})();

		</script>
	</body>
</html>