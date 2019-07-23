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
</style>
</head>
<body>
<a href="/users/login" class="square_btn" style="text-decoration:none">Connexion</a>
<a href="/users/add" class="square_btn" style="text-decoration:none">Inscription</a>
<div class="card shadow1 center">
<pre style="text-align: center;">Vous pouvez vous connecter ou créer un compte</pre>
<img src="/img/testexampleuseradd.png" style="float: right;width: 18%;">
</div>

</body>