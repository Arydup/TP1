<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */

get_header();
?>

<!------------------------------------------------------------------------------
Carroussel
------------------------------------------------------------------------------->
<?php $tous_les_cours = ["Web", "Spécifique", "Jeu", "Image 2d/3d", "Conception"]?>

		<!--Début du caroussel-->
		<section class="caroussel">
			<?php
				foreach($tous_les_cours as $cours): ?>
					<div><a href="#<?= $cours; ?>"><?= $cours; ?></a></div>
			<?php endforeach; ?>
		</section>
		<!--Faire une boucle pour voir chaque div présente-->
		<section class="lesBoutons">
			<?php
				foreach($tous_les_cours as $cours): ?>
					<input type="radio" id="<?= array_search($cours, $tous_les_cours); ?>" name="chiffreBouton" value="<?= array_search($cours, $tous_les_cours); ?>">
				<?php endforeach; ?>
		</section>

<!------------------------------------------------------------------------------
Carroussel
------------------------------------------------------------------------------->
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				/*the_archive_title( '<h1 class="page-title">', '</h1>' );*/
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<section class="liste-cours">
			<?php
			/* Start the Loop */
			//global $tous_les_cours;
            $precedant = "XXXXXX";
			while ( have_posts() ) :
				the_post();
				$titre_grand = get_the_title();
				$session = substr($titre_grand, 4, 1 );
				$nbHeures = substr($titre_grand, -4, 3);
				$titre = substr($titre_grand, 8, -6);
				$sigle = substr($titre_grand, 0, 7);
				$typeCours = get_field('type_de_cours');
				if($precedant != $typeCours) : ?> 
				<?php if($precedant != 'XXXXXX') :?>

				</section>
				<?php endif ?>
				
				<h2 id="<?= $typeCours?>"><?php echo $typeCours?></h2>
				<section>
				<?php endif ?>

				<article class="<?= $typeCours=='Image 2d/3d'? 'Image_2d_3d': $typeCours; ?>">
					<div>
						<p><?php echo $sigle . " - " . $nbHeures . " - " . $typeCours; ?></p>
						<a href="<?php echo get_permalink();?>"><?php echo $titre; ?></a>
						<p>Session : <?php echo $session; ?></p>
					</div>
				</article>
				
			<?php 
			$precedant = $typeCours;
			endwhile;?>
            </section>
		<?php endif; ?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
