<?php session_start() ?>

<div class="col-12" id="navbar">
  <nav class="navbar navbar-expand-lg">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="./index.php?content=home"><img height="50px" src="./img/cloud_icon.png"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./index.php?content=informatie">Informatie</a>
        </li>
        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbar-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        tips
                                </a>
                                <div class="dropdown-menu" id="navbar-dropdown" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" id="navbar-dropdown" href="./index.php?content=tips-hebt">als je adhd hebt</a>
                                        <a class="dropdown-item" id="navbar-dropdown" href="./index.php?content=tips-kent">als je ieamnd kent met adhd</a>
                                </div>
                        </li>
        <li class="nav-item">
          <a class="nav-link" href="./index.php?content=game">Game</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./index.php?content=contact">Contact</a>
        </li>
        
      </ul>
      <div class="topnav-right">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="./index.php?content=login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index.php?content=registreer">Registreer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./index.php?content=logout">uitloggen</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>