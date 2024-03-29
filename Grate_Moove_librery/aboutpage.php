<?php
include 'navANDhead.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p></p>
  <p>Bibliothèque numérique
Plateforme en ligne
L'objectif principal du projet serait de créer une plateforme de bibliothèque numérique pour les étudiants qui répondrait à leurs besoins en matière d'accès facile à des ressources de qualité pour leurs études et leurs recherches
.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="/resorses/IMG_0651.JPG" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Oueslati Ahmed</h2>
        <p class="title">IT student at iset sousse</p>
        <p>ahmed.oueslati6110@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/resorses/team2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Miraoui Jamel</h2>
        <p class="title"></p>
        <p>jamel.miraoui.sl@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="/resorses/team3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Mohamed amin grami</h2>
        <p class="title"></p>
        <p>mohamedgrami32@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

<div class="column">
    <div class="card">
      <img src="/resorses/team4.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Amen allah blhaj smlema</h2>
        <p class="title"></p>
        <p>amenbhs09@gmail.com </p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

</body>
</html>
