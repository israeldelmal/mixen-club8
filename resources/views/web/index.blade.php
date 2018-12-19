@extends('web.master')

@section('title', 'Club 8: Billiard & Sport-Bar en Chihuahua')

@section('content')
<!-- Navegación -->
<nav>
	<div>
		<img src="{{ asset('assets/images/isologo.png') }}" alt="Isologo de Club 8">
		<ul>
			<li><a class="item-menu" href="#nosotros">Nosotros</a></li>
			<li><a class="item-menu" href="#galeria">Galería</a></li>
			<!-- <li><a class="item-menu" href="#eventos">Eventos</a></li> -->
			<li><a class="item-menu" href="#contacto">Contacto</a></li>
			<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
			<li><a href="#"><i class="fab fa-twitter"></i></a></li>
		</ul>
	</div>
</nav>
<!-- Cabecera -->
<header>
	<img src="{{ asset('assets/images/header/logotipo.png') }}" alt="¡Vivo los mejores momentos!">
</header>
<!-- Nosotros -->
<section id="nosotros">
	<section>
		<h1>Conoce más de nosotros</h1>
		<section>
			<section>
				<p>A partir de esta tendencia en billares se lleva a cabo el proyecto de Club 8. Nuestros principales objetivos están el crear un concepto de entretenimiento en el que sea posible mezclar la diversidad del billar con un ambiente familiar y juvenil en una instalación de primer nivel, es decir, un lugar donde puedan asistir hombres y mujeres de todas las edades a divertirse, jugando billar así como disfrutando de su deporte favorito en pantallas gigantes. Los dardos, la excelente comida y las bebidas de nuestra barra son otros atractivos que disfrutan chicos y grandes.</p>
				<figure style="display: none;">
					<div>
						<i class="fas fa-flag"></i>
					</div>
					<div>
						<figcaption>Misión</figcaption>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.officia deserunt mollit anim id est laborum.</p>
					</div>
				</figure>
				<figure style="display: none;">
					<div>
						<i class="far fa-eye"></i>
					</div>
					<div>
						<figcaption>Visión</figcaption>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.officia deserunt mollit anim id est laborum.</p>
					</div>
				</figure>
			</section>
			<section>
				<img src="{{ asset('assets/images/nosotros/botanas.png') }}" alt="Botanas del Club 8">
			</section>
		</section>
	</section>
</section>
<!-- Descanso #1 -->
<section id="descanso-1">
	<h1><img src="{{ asset('assets/images/ok.png') }}">te espera
	el mejor lugar
	de la
	<strong>ciudad</strong><img src="{{ asset('assets/images/ok.png') }}"></h1>
</section>
<!-- Galería -->
<section id="galeria">
	<h1>Encuéntrate en nuestra galería</h1>
	<section>
		<figure style="background-image: url('{{ asset('assets/images/gallerys/1.jpg') }}');">
			<a href="#" data-image="{{ asset('assets/images/gallerys/1.jpg') }}">
				<i class="fas fa-plus"></i>
			</a>
		</figure>
		<figure style="background-image: url('{{ asset('assets/images/gallerys/2.jpg') }}');">
			<a href="#" data-image="{{ asset('assets/images/gallerys/2.jpg') }}">
				<i class="fas fa-plus"></i>
			</a>
		</figure>
		<figure style="background-image: url('{{ asset('assets/images/gallerys/3.jpg') }}');">
			<a href="#" data-image="{{ asset('assets/images/gallerys/3.jpg') }}">
				<i class="fas fa-plus"></i>
			</a>
		</figure>
		<figure style="background-image: url('{{ asset('assets/images/gallerys/4.jpg') }}');">
			<a href="#" data-image="{{ asset('assets/images/gallerys/4.jpg') }}">
				<i class="fas fa-plus"></i>
			</a>
		</figure>
		<figure style="background-image: url('{{ asset('assets/images/gallerys/5.jpg') }}');">
			<a href="#" data-image="{{ asset('assets/images/gallerys/5.jpg') }}">
				<i class="fas fa-plus"></i>
			</a>
		</figure>
		<figure style="background-image: url('{{ asset('assets/images/gallerys/6.jpg') }}');">
			<a href="#" data-image="{{ asset('assets/images/gallerys/6.jpg') }}">
				<i class="fas fa-plus"></i>
			</a>
		</figure>
	</section>
	<a class="item-menu" href="#contacto">Contáctanos</a>
</section>
<!-- Descanso #2 -->
<div id="descanso-2"></div>
<!-- Eventos -->
<section id="eventos">
	<section>
		<section>
			<h1><span>Enterate de
			nuestros próximos
			<strong>eventos</strong></span></h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</section>
		<section>
			<article>
				<header style="background-image: url('{{ asset('assets/images/eventos/1.jpg') }}');">
					<time>00 | 00 | 0000</time>
				</header>
				<h1>Viernes Música en Vivo</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, inventore? Tempora, fugiat dignissimos sit ipsa dicta ipsam libero. Perferendis natus vitae commodi obcaecati illo sint impedit. Velit cum sapiente iste!</p>
				<a href="#">Ver más</a>
			</article>
			<article>
				<header style="background-image: url('{{ asset('assets/images/eventos/2.jpg') }}');">
					<time>00 | 00 | 0000</time>
				</header>
				<h1>Sábado ¡Margaritas 2x1!</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, inventore? Tempora, fugiat dignissimos sit ipsa dicta ipsam libero. Perferendis natus vitae commodi obcaecati illo sint impedit. Velit cum sapiente iste!</p>
				<a href="#">Ver más</a>
			</article>
		</section>
	</section>
</section>
<!-- Contacto -->
<footer id="contacto">
	<header>
		<h1>¡Síguenos en <a href="https://www.facebook.com/Club8Oficial/" target="comas-blancas"><i class="fab fa-facebook-f"></i>/club8oficial</a> y conoce más promociones!</h1>
	</header>
	<section>
		<section>
			<img src="{{ asset('assets/images/isologo.png') }}" alt="Isologo de Club 8">
		</section>
		<section>
			<ul>
				<li>Chihuahua, Chih.</li>
				<li>Periférico de la Juventud 6506
				Chihuahua (Chihuahua)</li>
				<li><a href="tel:6142920099">Tel. (614) 292 0099</a></li>
				<li><a href="mailto:robertoleyva78@gmail.com">Enviar correo electrónico</a></li>
			</ul>
			<ul>
				<li>Parral, Chih.</li>
				<li>Pedro de Lille 5 Col Centro 
				Hidalgo Del Parral
				Chihuahua - México</li>
				<li><a href="tel:6275236932">Tel. (627) 523 6932</a></li>
				<li><a href="mailto:robertoleyva78@gmail.com">Enviar correo electrónico</a></li>
			</ul>
		</section>
		<section>
			<h1><strong>Contáctanos!</strong></h1>
			<form action="#" method="POST" id="FormContact">
				<input type="text" name="name" id="name" placeholder="Nombre" autocomplete="off">
				<input type="tel" name="tel" id="tel" placeholder="Teléfono" autocomplete="off">
				<input type="email" name="email" id="email" placeholder="Correo Electrónico" autocomplete="off">
				<textarea name="message" id="message" placeholder="Mensaje"></textarea>
				<button type="submit">Enviar</button>
			</form>
		</section>
	</section>
	<footer>
		Derechos reservados &reg; | <strong>Made by</strong>: <a href="#"><span class="icon-isotipo"></span></a>
	</footer>
</footer>
<!-- Navegación -->
<button>
	<span></span>
	<span></span>
	<span></span>
</button>
<!-- Modales -->
<div class="modal" style="display: none;">
	<a href="#"><i class="fas fa-times"></i></a>
	<div id="ImageModal"></div>
</div>
@endsection