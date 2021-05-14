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
						<li><a href="#">Films</a>
							<ul id="category-smart" class="sous-menu">
								<?php
								foreach ($categories as $category) {
									echo "<li><a href='categories.php?numero=".$category['id']."'>".$category['genre']."</a></li>";
								}
								?>
							</ul>
						</li>
						<li><a href="#">Favoris</a></li>
					</ul>
				</div>
			</nav>
			<!--connexion-->
			<div class="icons">
				<a href="#"><i class="fas fa-user"></i></a>
				<form class="search" method="get" action="./php/search.php">
					<div class="search-wrapper">
						<input type="text" name="search-film" placeholder="Rechercher un film..." class="search-field" onkeyup="showHint(this.value)">
						<i class="fa fa-search search-icon"></i>
					</div>
					<div id="txtHint"></div>
				</form>
			</div>
		</header>
		