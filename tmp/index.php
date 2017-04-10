<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
	<title>ANNSTAL - Hurtownia art. spożywczych w Zabrzu</title>
	<meta name = "description" content = "Hurtownia Artykułów Spożywczych w Zabrzu - zamawiaj on-line!" />
	<meta name = "keywords" content = "Hurtownia spożywcza, zabrze, hurtownia w zabrzu, annstal, spożywka, sklep online, zamówienia online" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="fontello\css\fontello.css">
	<script src="jquery-3.1.0.min.js"></script>
	<script src="jquery.scrollTo.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">

	<script>

	$(document).ready(function() {
	var NavY = $('.nav').offset().top;
	 
	var stickyNav = function(){
	var ScrollY = $(window).scrollTop();
		  
	if (ScrollY > NavY) { 
		$('.nav').addClass('sticky');
	} else {
		$('.nav').removeClass('sticky'); 
	}
	};
	 
	stickyNav();
	 
	$(window).scroll(function() {
		stickyNav();
	});
	});
	
	</script>

	<script>
		jQuery(function($)
		{
			//reset scroll
			$.scrollTo(0);

			$('#link1').click(function(){$.scrollTo($('#conteiner'), 1000);});
			$('#link2').click(function(){$.scrollTo($('#promocje'), 1000);});
			$('#link3').click(function(){$.scrollTo($('#dostawa'), 1000);});
			$('#link4').click(function(){$.scrollTo($('#kontakt'), 1000);});

			$('#l1').click(function(){$.scrollTo($('#kawy'), 1000);});
			$('#l2').click(function(){$.scrollTo($('#herbaty'), 1000);});
			$('#l3').click(function(){$.scrollTo($('#przyprawy'), 1000);});
			$('#l4').click(function(){$.scrollTo($('#makarony'), 1000);});
			$('#l5').click(function(){$.scrollTo($('#napoje'), 1000);});
			$('#l6').click(function(){$.scrollTo($('#wody'), 1000);});
			$('#l7').click(function(){$.scrollTo($('#slodycze'), 1000);});
		}
		);
	</script>
</head>

<div id='preloader'></div>

<body>


	<div id="conteiner">
		<div id="title">
			<h1>"ANNSTAL"</h1>
			<h2>Hurtownia Artykułów Spożywczych w Zabrzu</h2>
			<h3>Dystrybucja na terenie woj. Śląskiego</h3>
		</div>
		
		<div class="nav" class="sticky">
			<ul>
				<li><a id="link1" href=#>OFERTA</a></li>
				<li><a id="link2" href=#>PROMOCJE</a></li>
				<li><a id="link3" href=#>DOSTAWA</a></li>
				<li><a id="link4" href=#>KONTAKT</a></li>
			</ul>
		</div>

		<div id="asortyment">
			<p>Zapraszamy Państwa do korzystania z naszej oferty, która jest  regularnie rozwijana oraz dopasowywana do potrzeb naszych klientów. Dokładamy wszelkich starań, aby oferowane przez nas produkty były dostępne w jak najniższych cenach, jak również dostarczane do Państwa w wyznaczonym terminie.</p> 

			<p>Oferujemy towar najwyższej jakości - w znacznym stopniu bezpośrednio od producentów!</p>

			<div id="offer">
				
				<a id="l1" href=#>
					<div class="oferta_foto">
						<b><span>KAWY</span></b><br>
						<img src="img/oferta/kawa.jpg">
					</div>
				</a>

				<a id="l2" href=#>
					<div class="oferta_foto">
						<b><span>HERBATY</span></b><br>
						<img src="img/oferta/herbata.jpg">
					</div>
				</a>

				<a id="l3" href=#>
					<div class="oferta_foto">
						<b><span>PRZYPRAWY</span></b><br>
						<img src="img/oferta/przyprawa.jpg">
					</div>
				</a>

				<a id="l4" href=#>
					<div class="oferta_foto">
						<b><span>MAKARONY</span></b><br>
						<img src="img/oferta/makaron.jpg">
					</div>
				</a>

				<a id="l5" href=#>
					<div class="oferta_foto">
						<b><span>NAPOJE</span></b><br>
						<img src="img/oferta/napoje.jpg">
					</div>
				</a>

				<a id="l6" href=#>
					<div class="oferta_foto">
						<b><span>WODY</span></b><br>
						<img src="img/oferta/woda.jpg">
					</div>
				</a>

				<a id="l7" href=#>
					<div class="oferta_foto">
						<b><span>SŁODYCZE</span></b><br>
						<img src="img/oferta/slodycze.jpg">
					</div>
				</a>
			</div>
		</div>
		
		<div id="promocje" class="text">
			
			<p>Poniżej przedstawiamy produkty w promocyjnych cenach, które mogą Państwo zamównić telefonicznie:</p>

			<div class="tel">
				<i class="demo-icon icon-phone-circled"></i>
				510-185-914
			</div>

			<div class="tel">
				<i class="demo-icon icon-phone-circled"></i>
				510-185-814
			</div>

			<p>bądź poprzez złożenie zamównia pod adresem:</p>

			<div class="mail">
				<i class="demo-icon icon-mail"></i> bok@annstal.pl<br>
			</div>

			<i class="demo-icon icon-info-circled"></i><span>Przy zamówieniu, proszę o podanie pełnej nazwy Firmy oraz NIP</span> 
		</div>

		<div class="info">
			<p>Podane ceny są cenami brutto!</p>
		</div>

		<div class="products">

			<h2 id="kawy" style="text-align: left; margin-left: 50px;">Kawy</h2> 
			<hr width="95%">	

			<div class="product">
				<img src="img/products/woseba_250g.jpg">
				<div class="description">
					Woseba 250g
				</div>
				<div class="price">
					<span>6,19</span> zł
					<div class="min">
						Opakowanie zbiorcze 12szt
					</div>
				</div>
			</div>

			<div class="product">
				<img src="img/products/woseba_500g.jpg">
				<div class="description">
					Woseba 500g
				</div>
				<div class="price">
					<span>11,99</span> zł
					<div class="min">
						Opakowanie zbiorcze 6szt
					</div>
				</div>
			</div>

			<div class="product">
				<img src="img/products/rodzinna_250g.jpg">
				<div class="description">
					Rodzinna 250g
				</div>
				<div class="price">
					<span>5,59</span> zł
					<div class="min">
						Opakowanie zbiorcze 12szt
					</div>
				</div>
			</div>

			<div class="product">
				<img src="img/products/prima_250g.jpg">
				<div class="description">
					Prima 250g
				</div>
				<div class="price">
					<span>6,99</span> zł
					<div class="min">
						Opakowanie zbiorcze 12szt
					</div>
				</div>
			</div>

			<div class="product">
				<img src="img/products/nesca_3w1.jpg">
				<div class="description">
					Nescafe 3in1 10szt
				</div>
				<div class="price">
					<span>5,79</span> zł
					<div class="min">
						Opakowanie zbiorcze 15szt
					</div>
				</div>
			</div>

			<div class="product">
				<img src="img/products/jacobs_cronad.jpg">
				<div class="description">
					Jacobs Cronad Gold 200g
				</div>
				<div class="price">
					<span>19,99</span> zł
					<div class="min">
						Opakowanie zbiorcze 6szt
					</div>
				</div>
			</div>

			<h2 id="herbaty" style="text-align: left; margin-left: 50px;">Herbaty</h2> 
			<hr width="95%">	

			<div class="product">
				<img src="img/products/lipton_100.jpg">
				<div class="description">
					Lipton 100 torebek
				</div>
				<div class="price">
					<span>13,99</span> zł
					<div class="min">
						Opakowanie zbiorcze 6szt
					</div>
				</div>
			</div>

			<div class="product">
				<img src="img/products/lipton_50.jpg">
				<div class="description">
					Lipton 50 torebek
				</div>
				<div class="price">
					<span>7,49</span> zł
					<div class="min">
						Opakowanie zbiorcze 10szt
					</div>
				</div>
			</div>

			<div class="product">
				<img src="img/products/lipton_25.jpg">
				<div class="description">
					Lipton 25 torebek
				</div>
				<div class="price">
					<span>3,99</span> zł
					<div class="min">
						Opakowanie zbiorcze 24szt
					</div>
				</div>
			</div>
			
			<h2 id="przyprawy" style="text-align: left; margin-left: 50px;">Przyprawy</h2> 
			<hr width="95%">	

			<div class="product">
				<div>
					<img src="img/products/wegierska_puszka_1kg.jpg">
				</div>
				<div class="description">
					Węgierska klasyczna Puszka 1kg
				</div>
				<div class="price">
					<span>7,99</span> zł
					<div class="min">
						Opakowanie zbiorcze 6szt
					</div>
				</div>
			</div>

			<div class="product">
				<div>
					<img src="img/products/wegierska_torba_1kg.jpg">	
				</div>
				
				<div class="description">
					Węgierska klasyczna 1kg
				</div>
				<div class="price">
					<span>6,99</span> zł
					<div class="min">
						Opakowanie zbiorcze 10szt
					</div>
				</div>
			</div>

			<div class="product">
				<img src="img/products/sol.jpg">
				<div class="description">
					Sól Kujawska jodowana 1kg
				</div>
				<div class="price">
					<span>0,79</span> zł
					<div class="min">
						Opakowanie zbiorcze 10szt
					</div>
				</div>
			</div>

			<div class="product">
				<div>
					<img src="img/products/cukier.jpg">
				</div>
				<div class="description">
					Cukier Polski 1kg
				</div>
				<div class="price">
					<span>3,19</span> zł
					<div class="min">
						Opakowanie zbiorcze 10szt
					</div>
				</div>
			</div>

			<div class="product">
				<div>
					<img src="img/products/kucharek_1kg.jpg">
				</div>
				<div class="description">
					Kucharek 1kg
				</div>
				<div class="price">
					<span>7,89</span> zł
					<div class="min">
						Opakowanie zbiorcze 15szt
					</div>
				</div>
			</div>

			<h2 id="makarony" style="text-align: left; margin-left: 50px;">Makarony</h2> 
			<hr width="95%">	

			<div class="product">
			<div>
				<img src="img/products/makaron_przepiorczy.jpg">
				</div>
				<div class="description">
					Makaron z jaj przepióczych 250g - różne rodzaje
				</div>
				<div class="price">
					<span>2,29</span> zł
					<div class="min">
						Opakowanie zbiorcze 10-20szt
					</div>
				</div>
			</div>

			<div class="product">
					<div>
					<img src="img/products/leon.png">
					</div>
					<div class="description">
						Makaron LEON 250g - nitka
					</div>
					<div class="price">
						<span>1,39</span> zł
						<div class="min">
							Opakowanie zbiorcze 20szt
						</div>
					</div>	
			</div>

			

			<h2 id="napoje" style="text-align: left; margin-left: 50px;">Napoje</h2> 
			<hr width="95%">	

			<div class="product">
				<img src="img/products/black_puszka.jpg">
				<div class="description">
					Black Energy Drink 250ml
				</div>
				<div class="price">
					<span>1,59</span> zł
					<div class="min">
						Opakowanie zbiorcze 24szt
					</div>
				</div>
			</div>

			<div class="product">
				<img src="img/products/tiger.jpg">
				<div class="description">
					Tiger Energy Drink 250ml
				</div>
				<div class="price">
					<span>1,79</span> zł
					<div class="min">
						Opakowanie zbiorcze 24szt
					</div>
				</div>
			</div>

			<div class="product">
				<img src="img/products/tymbark_2l.png">
				<div class="description">
					Tymbark Aseptic 2L - różne rodzaje
				</div>
				<div class="price">
					<span>3,89</span> zł
					<div class="min">
						Opakowanie zbiorcze 6szt
					</div>
				</div>
			</div>

			<div class="product">
				<img src="img/products/cola_1l.jpg">
				<div class="description">
					Coca-Cola 1L
				</div>
				<div class="price">
					<span>2,99</span> zł
					<div class="min">
						Opakowanie zbiorcze 6szt
					</div>
				</div>
			</div>

			<div class="product">
				<img src="img/products/fanta_1l.jpg">
				<div class="description">
					Fanta 1L
				</div>
				<div class="price">
					<span>2,99</span> zł
					<div class="min">
						Opakowanie zbiorcze 6szt
					</div>
				</div>
			</div>

			<div class="product">
				<img src="img/products/cola_puszka.jpg">
				<div class="description">
					Coca-Cola Puszka 330ml
				</div>
				<div class="price">
					<span>1,49</span> zł
					<div class="min">
						Opakowanie zbiorcze 24szt
					</div>
				</div>
			</div>

			<div class="product">
				<img src="img/products/zbyszko.png">
				<div class="description">
					Zbyszko 1,75l - różne rodzaje
				</div>
				<div class="price">
					<span>2,49</span> zł
					<div class="min">
						Opakowanie zbiorcze 6szt
					</div>
				</div>
			</div>
			

			<h2 id="wody" style="text-align: left; margin-left: 50px;">Wody</h2> 
			<hr width="95%">	

			<div class="product">
				<img src="img/products/naleczowianka_mala.jpg">
				<div class="description">
					Nałęczowianka 0,5L - różne rodzaje
				</div>
				<div class="price">
					<span>1,29</span> zł
					<div class="min">
						Opakowanie zbiorcze 12szt
					</div>
				</div>
			</div>

			<div class="product">
			<div>
				<img src="img/products/muszynianka.png">
				</div>
				<div class="description">
					Muszynianka 6 x 1,5L
				</div>
				<div class="price">
					<span>1,66</span> zł
					<div class="min">
						Opakowanie zbiorcze 6szt
					</div>
				</div>
			</div>

			<div class="product">
			<div>
				<img src="img/products/cisowianka.jpg">
				</div>
				<div class="description">
					Cisowianka 6 x 1,5L - różne rodzaje
				</div>
				<div class="price">
					<span>1,33</span> zł
					<div class="min">
						Opakowanie zbiorcze 6szt
					</div>
				</div>
			</div>

			
			<div class="product">
				<img src="img/products/naleczowianka.jpg">
				<div class="description">
					Nałęczowianka 1,5L - różne rodzaje
				</div>
				<div class="price">
					<span>1,59</span> zł
					<div class="min">
						Opakowanie zbiorcze 6szt
					</div>
				</div>
			</div>

			<div class="product">
				<img src="img/products/kuracjusz_5l.jpg">
				<div class="description">
					Kuracjusz Beskidzki 5L
				</div>
				<div class="price">
					<span>2,59</span> zł
					<div class="min">
						Opakowanie zbiorcze 1szt
					</div>
				</div>
			</div>
	
			<h2 id="slodycze" style="text-align: left; margin-left: 50px;">Słodycze</h2> 
			<hr width="95%">	

			<div class="product">
				<img src="img/products/michalki.png">
				<div class="description">
					Michałki z Hanki 2KG
				</div>
				<div class="price">
					<span>24,50</span> zł
					<div class="min">
						Opakowanie zbiorcze 2kg
					</div>
				</div>
			</div>

			<div class="product">
				<img src="img/products/PrincePoloXXLClassic.jpg">
				<div class="description">
					Prince Polo XXL Classic 
				</div>
				<div class="price">
					<span>1,19</span> zł
					<div class="min">
						Opakowanie zbiorcze 28szt
					</div>
				</div>
			</div>

			<div class="product">
				<img src="img/products/PrincePoloXXLOrzechowe.jpg">
				<div class="description">
					Prince Polo XXL Orzechowe 
				</div>
				<div class="price">
					<span>1,19</span> zł
					<div class="min">
						Opakowanie zbiorcze 28szt
					</div>
				</div>
			</div>


		</div>

		<div class="info">
			<p>Szukasz innych artykułów? Zadzwoń lub napisz. Odpowiemy tak szybko jak to możliwe!</p>
			<p class="inf">Opis i ceny produktów stanowią wartości poglądowe i mogą się różnić od stanu rzeczywistego. O wszystkich zmianach zostaną Państwo powiadomieni jeszcze przed realizacją zamównia.</p>
			<p class="inf">Złożenie zamówienia nie oznacza zawarcia umowy pomiędzy stronami i może zostać dowolnie korygowane jak i zaniechane po uprzednim kontakcie.</p>
			<p class="inf">Zapraszamy do współpracy</p>
		</div>

		<div id="dostawa">

			<div class="dost">
				<p>Na terenie miast województwa Śląskiego:</p>
				<ul>
					<li><b>K</b>ATOWICE</li>
					<li><b>Z</b>ABRZE</li>
					<li><b>R</b>UDA ŚLĄSKA</li>
					<li><b>Ś</b>WIĘTOCHŁOWICE</li>
					<li><b>C</b>HORZÓW</li>
					<li><b>G</b>LIWICE</li>
				</ul>
				<p>Oferujemy Państwu dostawę naszego towaru <b>BEZPŁATNIE</b> przy zamówniu powyżej 100zł</p>	
			</div>

			<div class="dost">
			<p>Koszt dostawy do pozostałych miast woj. Śląskiego</p>
				<i class="demo-icon icon-truck"></i>
				<p>Ustalany jest indywidualnie - Zapraszamy do współpracy!</p>
			</div>

		</div>

		<div style="clear: both;">
				<p>Zamównia złożone do godziny 14.00 dostarczamy tego samego dnia!</p>
		</div>

		<div class="image">
			<img src="img/kontakt.png">
		</div>

		<div id="kontakt">
			<div class="title">Zapraszamy do odbioru osobistego!</div>
				<div class="contact">
					<address>
						<b>Magazyn</b> <br>
						Ul. J. Pukowca 23 <br>
						40-847 Katowice
					</address>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2550.5048500797525!2d18.98147021524447!3d50.263831508675864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716ce74a0aabcb1%3A0x55601e0408c65c57!2sPukowca+16%2C+Katowice!5e0!3m2!1spl!2spl!4v1472452745405" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="contact">
					<address>
						<b>Biuro</b> <br>
						Ul. Jałowcowa 14/1 <br>
						41-806 Zabrze
					</address>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2548.484371166248!2d18.821093315245996!3d50.3015523059643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4711328f997766a9%3A0xb07dd376b3b8b819!2sJa%C5%82owcowa+14%2C+Zabrze!5e0!3m2!1spl!2spl!4v1472452864936" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="contact">
					<address>
						<b>Magazyn</b> <br>
						Ul. Pionierów 31 <br>
						41-711 Ruda Śląska
					</address>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2550.577323130556!2d18.807676415244387!3d50.262478108773095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47113319bfed8eed%3A0xd16f7bf30687089a!2zUGlvbmllcsOzdyAzMSwgUnVkYSDFmmzEhXNrYQ!5e0!3m2!1spl!2spl!4v1472453290102" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		<div class="tel">
			<i class="demo-icon icon-phone-circled"></i>
			510-185-914
		</div>
		<div class="tel">
			<i class="demo-icon icon-phone-circled"></i>
			510-185-814
		</div>

		<div id="formularz">
			<form id="formMail" action="mail.php" method="post">
			<label>Formularz Kontaktowy</label>
				<input name="email" type="email" placeholder="Email *">
				<input name="name" placeholder="Pełna nazwa firmy">
				<input name="nip" placeholder="NIP">
				<input name="address" placeholder="Adres dostawy">
				<input name="contact" type="tel" placeholder="Telefon kontaktowy">
				<label>Treść wiadomości</label>
				<textarea name="message" rows="15" placeholder="Tutaj wprowadź swoje pytanie lub zamównie"></textarea>
				
				            
				<input id="submit" name="submit" type="submit" value="Wyślij">

			</form>
		</div>
		<div class="email">
			<i class="demo-icon icon-mail"></i> bok@annstal.pl<br>
		</div>
	</div>


<script>
//<![CDATA[
jQuery(window).on('load', function() {
jQuery('#preloader').fadeOut(1000);
});
//]]>
</script>
</body>
</html>