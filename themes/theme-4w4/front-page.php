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
////////////////////////////////////////////// FRONT-PAGE.PHP
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<section class="liste-cours">
			<?php
			/* Start the Loop */
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
				<h2><?php echo $typeCours?></h2>
				<section>
				<?php endif ?>

				<article class="<?= $typeCours=='Image 2d/3d'? 'Image_2d_3d': $typeCours; ?>">
					<p><?php echo $sigle . " - " . $nbHeures . " - " . $typeCours; ?></p>
					<a href="<?php echo get_permalink();?>"><?php echo $titre; ?></a>
					<p>Session : <?php echo $session; ?></p>
					<!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,128L20,149.3C40,171,80,213,120,213.3C160,213,200,171,240,160C280,149,320,171,360,197.3C400,224,440,256,480,277.3C520,299,560,309,600,293.3C640,277,680,235,720,218.7C760,203,800,213,840,234.7C880,256,920,288,960,293.3C1000,299,1040,277,1080,245.3C1120,213,1160,171,1200,154.7C1240,139,1280,149,1320,149.3C1360,149,1400,139,1420,133.3L1440,128L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>-->
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
