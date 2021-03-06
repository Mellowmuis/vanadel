<?php
/*
Template Name: Over ons 2
*/
?>

<?php get_header(); ?>

	
	<div class="u-gridContainer overons-container">
		<div class="u-gridContainer">
			<div clas="u-gridRow">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="u-gridCol8">
					<h2>Over ons</h2>
					<hr class="underline">
					<?php the_content(); $image1 = get_field('image1'); ?>
				</div>
				<aside class="u-gridCol4">
					<section class="aside-img">
						<?php if( !empty($image1) ): ?>
							<img  class="" src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>"/>
						<?php endif; ?>
					</section>
				</aside>
				<?php endwhile; endif; ?> 
			</div>
			<section class="u-gridRow">

				<article class="">
					 
					
					<div class="accordion">
					    <a href="#1">
					    	
					    	<h2>Werkwijze en kwaliteit</h2>
								<img class="arrow-down" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-down-b-2.png"/>
						</a>
					</div>
					<div class="accContent active" >
						<p class="blue-a">Bij Van Adel Administratie Belastingen Advies staat kwaliteit voorop.
							Als aspirant lid van de <a href="http://www.noab.nl/">NOAB</a> (Nederlandse Orde van Administratie- en Belastingdeskundigen) en het <a href="http://www.rb.nl/">RB</a> (Register Belastingadviseurs) 
							staat ons kantoor garant voor kwaliteit, vakkundigheid en efficiëntie.
							Wij werken continue aan het verbeteren van de bedrijfsvoering en het waarborgen van onze kwaliteit.

							Het huidige ondernemingsklimaat kenmerkt zich door snelle economische ontwikkelingen, nieuwe wetgevingen en uitdagende risico’s. 
							Deze zaken vragen om snel, realistisch en doeltreffend financieel beheer. 
							Van Adel voorziet in die behoefte door op verschillende terreinen deskundig en onafhankelijk advies te geven, 
							zowel op ad-hoc basis als op de lange termijn middels interim financieel management.
						</p>
					</div>

					<div class="accordion">
					    <a href="#2"><!--<img class="arrow-down" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-down-b-2.png"/>--><h2>Kernwaarden</h2>
					</a>
					</div>
					<div class="accContent">
					
						<div class="u-gridCol3 orange-border">
							<div class="orange-box">
								<h4>PROFESSIONEEL</h4>
							</div>
							<p>Een optimale dienstverlening aan cliënten stelt de hoogste eisen aan professionaliteit.
							 	We streven naar vernieuwing in aanpak, creativiteit in het bieden van oplossingen en slagvaardigheid bij de ondersteuning van uw onderneming.
							 </p>	
						</div>
						<div class="u-gridCol3 blue-border">
							<div class="blue-box">
								<h4>PERSOONLIJK</h4>
							</div>
							<p>Wij voelen ons persoonlijk betrokken bij uw onderneming. Door ons goed in te leven in de specifieke behoefte van uw onderneming, zijn wij in staat om een efficiënt en optimaal toegespitste bijdrage te leveren aan de onderneming van onze cliënten.
							 </p>	
						</div>
						<div class="u-gridCol3 orange-border">
							<div class="orange-box">
								<h4>DESKUNDIG</h4>
							</div>				
							<p>Wij denken in oplossingen; wij leveren concrete en heldere up-to-date oplossingen waar u daadwerkelijk wat aan heeft. Wij bieden rust, ruimte en financiële inzichtelijkheid, zodat u zich optimaal kunt richten op uw kernactiviteiten.
							 </p>	
						</div>
						<div class="u-gridCol3 blue-border">
							<div class="blue-box">
								<h4>BETROUWBAAR</h4>
							</div>
							<p>Bij ons staat betrouwbaarheid boven alles. Wij staan voor open en eerlijk zaken doen en dragen dat uit in onze adviserende, begeleidende en ondersteunende rol ten aanzien van onze cliënten.
							 <br><br></p>	
						</div>
					</div>

					<div class="accordion">
					    <a href="#3"><!--<img class="arrow-down" src="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-down-b-2.png"/>--><h2>Werkgebied</h2></a>
					</div>
					<div class="accContent" style="padding-top:40px;">
						<div class="u-gridCol2"><p></p></div>
						<div class="u-gridCol4"><p class="margin-top">Wij richten onze dienstverlening momenteel op het midden- en kleinbedrijf in de provincies Noord-Holland, Zuid-Holland en Utrecht.</p></div>
						<div class="u-gridCol4"><img class="margin-top" src="<?php echo get_stylesheet_directory_uri(); ?>/img/werkgebied.png"></div>
						<div class="u-gridCol2"></div>
					</div>						
				</article>


				<!--<article class="Content Content--home u-gridCol8" id="post-<?php the_ID(); ?>">
					<hgroup class="h2-title">
						<h2><?php the_title(); ?></h2>
						<hr class="underline">
					</hgroup>
					<main>
						<?php the_content(); $image1 = get_field('image1'); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</main>
				</article>-->

			</section>
			
		<section>
			<a href="/contact" style="color:white;">
				<button class="aside-button">
					<img  class="button-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/man.png" >
					<p>Maak een kennismakingsafspraak</p>
				</button>	
			</a>

			<a href="/contact">
				<button>
					<img  class="button-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/mail.png" >
					<p>Vraag een offerte aan</p>
				</button>	
			</a>
		</section>
	</div>
	</div>




<?php get_footer(); ?> 
