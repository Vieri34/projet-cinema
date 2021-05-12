        <?php
	    	$categories = getCategories($connect); 
		?>
		
		<header class="navbar-fixed-top">
				
			<a class="img-base" href="./index.php">
				<!-- image de base -->
				<img class="img-black" src="images/new-logo-resize.png" alt="logo DowntownFilm">
				<!-- image change couleur au scroll -->
				<img class="img-white" src="images/new-logo-resize-white.png" alt="logo DowntownFilm">
			</a>

			<nav id="desktop-menu">
				<ul id="menu-desktop">
					<li><a href="./index.php">Accueil</a></li>
					<li><a href="./films.php">Films <i class="fas fa-chevron-down"></i></a>
						<ul class="sous-menu">
							<?php
							foreach ($categories as $category) {
								echo "<li><a href='categories.php?numero=".$category['id']."'>".$category['genre']."</a></li>";
							}
							?>
							<!-- <li><a href="">Action</a></li>
							<li><a href="#">Aventure</a></li>
							<li><a href="#">Comédie</a></li>
							<li><a href="#">Documentaire</a></li>
							<li><a href="#">Drame</a></li>
							<li><a href="#">Fantastique</a></li>
							<li><a href="#">Romance</a></li>
							<li><a href="#">Science Fiction</a></li> -->
						</ul>
					</li>
					<li><a href="#">Favoris</a></li>
				</ul>
			</nav>
			
			<nav id="smartphone-menu">
				<div id="menu-toggle">
					<input type="checkbox">
					<span></span>
					<span></span>
					<span></span>
					<ul id="menu-smart">
						<li><a href='./index.php?page=1'>Accueil</a></li>
						<li><a href="./films.php">Films <i class="fas fa-chevron-down"></i></a>
							<ul class="sous-menu">
								<?php
								foreach ($categories as $category) {
									echo "<li><a href='categories.php?numero=".$category['id']."'>".$category['genre']."</a></li>";
								}
								?>
								<!-- <li><a href="#">Action</a></li>
								<li><a href="#">Aventure</a></li>
								<li><a href="#">Comédie</a></li>
								<li><a href="#">Documentaire</a></li>
								<li><a href="#">Drame</a></li>
								<li><a href="#">Fantastique</a></li>
								<li><a href="#">Romance</a></li>
								<li><a href="#">Science Fiction</a></li> -->
							</ul>
						</li>
						<li><a href="#">Favoris</a></li>
					</ul>
				</div>
			</nav>
			<!--connexion-->
			<div class="icons">
				<a href="#"><i class="fas fa-user"></i></a>
				<form class="search">
					<div class="search-wrapper">
						<input type="text" name="search" placeholder="Rechercher un film..." class="search-field">
						<i class="fa fa-search search-icon"></i>
					</div>
				</form>
			</div>
		</header>