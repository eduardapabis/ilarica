<?php require 'pages/header.php';?>

	<div class="container">
		<section class="menu_cardapio">
			<h2>Cardápio</h2>
			<nav>
				<ul>
					<li><a href="#">X-ILarica</a></li>
					<li><a href="#">Hot Dog-ILarica</a></li>
					<li><a href="#">Pizza-ILarica</a></li>
					<li><a href="#">Porções-ILarica</a></li>
					<li><a href="#">Árabe-ILarica</a></li>
					<li><a href="#">Calzones-ILarica</a></li>
				</ul>
			</nav>
		</section>
        
        <!--INICIO DO DESTAQUE-->
		<section class="destaque">
			<figure class="promo">
				<img src="img/pizza1.jpg" alt="Pizza mais gostosa do mundo" class="mySlides">
				<img src="img/hamburguer1.jpg" alt="X-Larica Mais gostoso do momento" class="mySlides">
				<img src="img/batatafrita.jpg" alt="Batata Frita mais gostosa do momento" class="mySlides">
				<img src="img/pizza2.jpg" alt="Pizza mais gostosa do momento" class="mySlides">
			</figure>
		</section>
		<!--FIM DO DESTAQUE-->
	</div>
	<div class="container paineis">
		<!-- Inicio painel dos mais vendidos -->
		<section class="painel vendidos">
			<h2>Mais Vendidos</h2>
			<ol>
				<!-- Lanches mais vendidos -->
				<li>
					<a href="servicos.php">
						<figure>
							<img src="img/hamburguer1.jpg" alt="X-Larica Mais gostoso do momento">
							<figcaption>Duplo quarteirao a R$ 25.00
							</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="#">
						<figure>
							<img src="img/pizza1.jpg" alt="X-Larica Mais gostoso do momento">
							<figcaption>Pizza R$ 35.00
							</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="#">
						<figure>
							<img src="img/pastel.jpg" alt="X-Larica Mais gostoso do momento">
							<figcaption>Pastel R$ 50.00
							</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="#">
						<figure>
							<img src="img/pipoca.jpg" alt="X-Larica Mais gostoso do momento">
							<figcaption>Pipoca R$ 15.00
							</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="#">
						<figure>
							<img src="img/hamburguer2.jpg" alt="X-Larica Mais gostoso do momento">
							<figcaption>Duplo quarteirao a R$ 30.00
							</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="#">
						<figure>
							<img src="img/lasanha.jpg">
							<figcaption>Lasanha R$ 20.00
							</figcaption>
						</figure>
					</a>
				</li>
			</ol>
		</section>

		<section class="painel combo">
			<h2>Combos</h2>
			<ol>
				<li>
					<a href="servico.php">
						<figure>
							<img src="img/pizza3.jpg" alt="combo x y z">
							<figcaption>Combo de R$ 100.00
							</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="">
						<figure>
							<img src="img/batatafrita.jpg" alt="combo x y z">
							<figcaption>Combo de R$ 90.00
							</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="">
						<figure>
							<img src="img/churros.jpg" alt="combo x y z">
							<figcaption>Combo de R$ 80.00
							</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="">
						<figure>
							<img src="img/frangofrito.jpg" alt="combo x y z">
							<figcaption>Combo de R$ 70.00
							</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="">
						<figure>
							<img src="img/food.jpg" alt="combo x y z">
							<figcaption>Combo de R$ 60.00
							</figcaption>
						</figure>
					</a>
				</li>
				<li>
					<a href="">
						<figure>
							<img src="img/ovo.jpg" alt="combo x y z">
							<figcaption>Combo de R$ 50.00
							</figcaption>
						</figure>
					</a>
				</li>
			</ol>
		</section>
	</div>
	<script type="text/javascript" src="js/script.js"></script>
<?php require 'pages/footer.php' ?>
