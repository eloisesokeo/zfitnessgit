<head>
<style> 
body {
  background: #fafafa;
  font-family: Arial, sans-serif;
  line-height: 1.6;
}

h2 {
  margin-top: 0;
}

.card {
  padding: 40px;
  background: #fff;
  max-width: 360px;
  border-radius: 20px;
  margin: 60px auto;
  max-width: 50%;
}

.highlight {
  font-weight: bold;
  color: #294;
}

.shadow1 { 
  box-shadow: 0 5px 10px rgba(154,160,185,.05), 0 15px 40px rgba(166,173,201,.2);
}

.shadow2 { 
  box-shadow: 0 7px 30px -10px rgba(150,170,180,0.5);
}
.square_btn {
    position: relative;
    display: inline-block;
    padding: 0.25em 0.5em;
    text-decoration: none;
    color: #FFF;
    background: #33CCCC;
    border-bottom: solid 2px #38b5b5;
    border-radius: 4px;
    box-shadow: inset 0 2px 0 rgba(255,255,255,0.2), 0 2px 2px rgba(0, 0, 0, 0.19);
    font-weight: bold;
}

.square_btn:active {
    border-bottom: solid 2px #39adad;
    box-shadow: 0 0 2px rgba(0, 0, 0, 0.30);
}
body {
  margin: 0;
  padding: 0;
}
 
.nav ul {
  list-style: none;
  background-color: #444;
  text-align: center;
  padding: 0;
  margin: 0;
}
.nav li {
  font-family: 'Oswald', sans-serif;
  font-size: 1.2em;
  line-height: 40px;
  height: 40px;
  border-bottom: 1px solid #888;
}
 
.nav a {
  text-decoration: none;
  color: #fff;
  display: block;
  transition: .3s background-color;
}
 
.nav a:hover {
  background-color: #005f5f;
}
 
.nav a.active {
  background-color: #fff;
  color: #444;
  cursor: default;
}
 
@media screen and (min-width: 600px) {
  .nav li {
    width: 120px;
    border-bottom: none;
    height: 50px;
    line-height: 50px;
    font-size: 1.4em;
  }
 
  /* Option 1 - Display Inline */
  .nav li {
    display: inline-block;
    margin-right: -4px;
  }
/* Navbar */
@import url('https://fonts.googleapis.com/css?family=Inconsolata|Lato:300,400,700');
html, body, h1, h2, h3, h4, h5, h6, p, li, ol, ul, pre {
	margin: 0;
	padding: 0;
}
html, body { min-height: 100%; }

body {
	background-color: #345;
	background-image: linear-gradient(to bottom, #0009, transparent);
	color: #eee;
	font-family: 'Lato', sans-serif;
	font-size: 62.5%;
	padding: 0 20px;
	box-sizing: border-box;
}
code {
	background: #fff1;
	font-family: 'Inconsolata', monospace;
	padding: .2em .4em;
}

.content {
	background-color: #fff;
	border-radius: 8px;
	box-sizing: border-box;
	color: #666;
	font-size: 1.6em;
	line-height: 1.4em;
	margin: 20px auto;
	margin-top: 80px;
	padding: 20px;
	width: 100%;
	max-width: 800px;
}
.content ul {
	margin: .5em 2em;
	padding: 0;
}

#footer {
	background-color: #246c;
	background-image: linear-gradient(to bottom, transparent, #0009);
	border-top: 1px solid #fff3;
	box-shadow: inset 0 1px 0 #fff3, 0 0 32px #000;
	overflow: hidden;
	padding: 8px;
	position: fixed;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 9001;
}
#footer a {
	color: #85c6f6;
	padding: 1em 0;
	text-decoration: none;
}
#footer ul {
	display: flex;
	list-style: none;
	justify-content: center;
	font-size: 2em;
	font-weight: 300;
}
#footer ul li {
	padding: 0 .5em;
}

/* Appearance */
.links {
	background-color: #123;
	background-image: linear-gradient(to bottom, #0003, transparent);
	border-bottom: 1px solid #0003;
	box-shadow: 0 0 32px #0003;
	font-size: 2em;
	font-weight: 300;
}
.links > a {
	color: #9ab;
	padding: .75em;
	text-align: center;
	text-decoration: none;
	transition: all .5s;
}
.links > a:hover {
	background: #ffffff06;
	color: #adf;
}
.links > .line {
	background: #68a;
	height: 1px;
	pointer-events: none;
}

/* The Magic */
#header {
	position: fixed;
	top: 0;
	left: 0;
	right: 0;
}
.links {
	display: grid;
	grid-template-columns: repeat(var(--items), 1fr);
	position: relative;
}
.links > .line {
	opacity: 0;
	transition: all .5s;
	position: absolute;
	bottom: 0;
	left: var(--left, calc(100% / var(--items) * (var(--index) - 1)));
	width: var(--width, calc(100% / var(--items)));
	--index: 0;
}
.links > a:hover ~ .line {
	opacity: 1;
}

.links > a:nth-of-type(1):hover ~ .line { --index: 1; }
.links > a:nth-of-type(2):hover ~ .line { --index: 2; }
.links > a:nth-of-type(3):hover ~ .line { --index: 3; }
.links > a:nth-of-type(4):hover ~ .line { --index: 4; }
.links > a:nth-of-type(5):hover ~ .line { --index: 5; }
.links > a:nth-of-type(6):hover ~ .line { --index: 6; }
.links > a:nth-of-type(7):hover ~ .line { --index: 7; }
.links > a:nth-of-type(8):hover ~ .line { --index: 8; }
.links > a:nth-of-type(9):hover ~ .line { --index: 9; }
.links > a:nth-of-type(10):hover ~ .line { --index: 10; }
.links > a:last-of-type:hover ~ .line { --index: var(--items); }
}
</style>
</head>
<body>
	<nav class="links" style="--items: 5;">
		<a href="/users/home">Home</a> 	
		<a href="/categorie/categorielist">Catégorie</a>
		<a href="#">Sous-Catégorie</a>
		<a href="#">Vidéos</a>
		<a href="/users/logout">Déconnexion</a>
		<span class="line"></span>
	</nav>

<!-- As a heading -->
<div class="card shadow1 center">
  <pre style="text-align: center;color:green; font-size: xx-large;font-weight:bold">Connexion réussi</pre>
<pre style="text-align: center;font-size: xx-large;color: #0e1c2a;">Vous êtes connecté.</pre>
<img src="/img/testexampleuseradd.png" style="float: right;width: 18%;">
</div>


</body>