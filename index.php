<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>Bmazon</title>
    </head>
    <body>
<?php 
session_start();
if(!isset($_SESSION['username'])):

?>
  <nav>
    <ul class="nav_links">
      <li><a href="index.php"><img src="./logo.svg" alt="logo" width="30rem" height="30rem"></img>Bmazon</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="register.php">Créez un compte</a></li>
    </ul>
  </nav>

<?php
else:
?>
  <nav>
    <ul class="nav_links">
      <li><a href="index.php"><img src="./logo.svg" alt="logo" width="30rem" height="30rem"></img>Bmazon</a></li>
      <li><a href="account.php">Mon compte</a></li>
      <li><a href="deconnect.php">Déconnexion</a></li>
    </ul>
  </nav>

<?php
endif;
?>

<div class="articles-container">
      <div class="article" id="0">
        <button onclick='display(0)'> <img src="./images/robotapsi.jpg" alt="Robot aspirateur" width="250px" height="250px"></button>
        <h2 class="title" id="0"> Robot Aspirateur </h2>
        <p class="description" id="0"> Robot aspirateur connecté grâce à la toute nouvelle application iVacc 
        Absorbe tous les poils d'animaux 
        Routes et horraires programmables </p>
        <p class="price" id="0">299,99€</p>
        <div class="commentaire" id="comment0">
          <form method="POST" action='actionCom.php'>
          <input type="text" name="comment0" placeholder="Commentaire...."></input>
          <input type="submit" value='Envoyer'></input>
          </form>
        </div>
      </div>

      <div class="article" id="1">
        <button onclick='display(1)'><img src="./images/oculus.jpg" alt="Oculus Quest 2" width="250px" height="250px"></button>
        <h2 class="title" id="1"> Oculus Quest 2 </h2>
        <p class="description" id="1"> Casque Vr indépendant Stockage: 64 Go 
        Autonomie: 6h 
        Vivez des expériences défiant les limites du réel.</p>
        <p class="price" id="1">449,99€</p>
        <div class="commentaire" id="comment1">
          <form method="POST" action='actionCom.php'>
            <input type="text" name="comment1" placeholder="Commentaire...."></input>
            <input type="submit" value='Envoyer'></input>
          </form>
        </div>
      </div>
    </div>

    <script>
    function display(idArticle) {
      var x = document.querySelector('#comment'+idArticle)

      if(x.style.display === 'none') {
        x.style.display = 'block'
      } else {
        x.style.display = 'none'
      }
    }
  </script>
  </body>
</html>



<style>
:root {
  font-size: 24px;
  font-family: Arial, Helvetica, sans-serif;

  --nav-bckg-color: #24252a;
  --main-color: #0088a9;
}

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

li, a, button {
  color: white;
  text-decoration: none;
  border: none;
}

button {
  cursor: pointer;
}

nav {
  display: flex;
  height: 1.8rem;
  background-color: var(--nav-bckg-color);
  z-index: 9999;
}

.nav_links {
  width: 100%;
  list-style: none;
  display: flex;
  justify-content: space-between;
  padding-top: 5px;
  padding-bottom: 5px;
}

.nav_links li {
  display: inline-block;
  padding: 0px 20px;
}

.nav_links li a, .sidenav li a {
  transition: all 0.3s ease 0s;
}

.nav_links li a:hover, .sidenav li a:hover {
  color: var(--main-color);   
}

body::-webkit-scrollbar {
  width: 0.25rem;
}

body::-webkit-scrollbar-track{
  background: #1e1e24;
}

body::-webkit-scrollbar-thumb{
  background: #6649b8;
}

.articles-container {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
  margin-top: 1rem;
  margin-left:15rem;
  margin-right:15rem;

}

.description, .price, h2 {
  width: 250px;
  text-align: center;
}

.description {
  font-size: 0.6rem;
  color: grey;
}

.price {
  font-weight: bold;
}

.commentaire {
  max-width: 250px;
  z-index: 15;
  display: none;
}

.commentaire a {
  color: black;
}

input[type='text'] {
  background-color: white;
  display: inline-block;
  text-align: center;
  border: 2px solid grey;
  padding: 1px 0px;
  outline: none;
  color: black;
  border-radius: 24px;
  transition: 0.25s;
}

input[type='text']:hover {
  border-color: black;
}

input[type='submit'] {
  background-color: darkgrey;
  display: inline-block;
  text-align: center;
  border: 2px solid black;
  padding: 1px 15px;
  outline: none;
  color: black;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}

input[type ='submit']:hover{
  background-color: white;
}
.posted {
  text-align: center;
  white-space: wrap;
  font-size: 0.8rem;
}
</style>