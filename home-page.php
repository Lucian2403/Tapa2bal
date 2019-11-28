<?php
/**
 * Template Name: Home Page
 */

get_header();

                    //HOME MAIN IMAGE
$homeMainImage = get_field('home_main_image'); ?>

<section class="home_main_image" style="background-image: url(<?php echo $homeMainImage['url'] ?>);">
    <div class="hero_content">
        <!--    TITLE-->
        <div class="hero_content__title">
            <h1><?php the_field('main_title') ?></h1>
            <h2><?php the_field('secondary_title') ?></h2>
        </div>


        <!--    BUTTONS-->
        <a href="<?php the_field('primary_button_url') ?>" class="green_button button button_primary">
                 <?php the_field('primary_button_text') ?>
        </a>
        <a href="<?php the_field('secondary_button_url') ?>" class="blue_button button button_secondary">
                 <?php the_field('secondary_button_text') ?>
        </a>
    </div>
</section>


<!--            CONCEPT SECTION-->
<section class="concept container">
    <div class="concept__left">
        <div class="concept__left__img-a">
	        <?php $conceptPictureA = get_field('concept_picture_a'); ?>
            <img src="<?php echo $conceptPictureA['url'] ?>" alt='Tapa2bal tree'>
        </div>

        <div class="concept__left__small">
            <div class="concept__left__small--img-b">
		        <?php $conceptPictureB = get_field('concept_picture_b'); ?>
                <img src="<?php echo $conceptPictureB['url'] ?>" alt='Tapa2bal bag'>
            </div>

            <div class="concept__left__small--img-c">
		        <?php $conceptPictureC = get_field('concept_picture_c'); ?>
                <img src="<?php echo $conceptPictureC['url'] ?>" alt='Tapa2bal people'>
            </div>
        </div>
    </div>

<!--            CONCEPT INFORMATION-->
    <div class="concept__right">
        <h1 class="concept__right__title"><?php the_field('concept_title') ?></h1>
        <p class="concept__right__info">  <?php the_field('concept_info') ?></p>

        <div class="concept__right__box">
            <h2 class="concept__right__box--text">
                <?php the_field('concept_box_text') ?>
            </h2>

            <h2 class="concept__right__box--hover-text">
                <?php the_field('concept_box_hover_text') ?>
            </h2>

            <a href="<?php the_field('concept_box_hover_btn_url') ?>" class="concept__right__box--hover-btn button">
		             <?php the_field('concept_box_hover_btn_text') ?>
            </a>
        </div>
    </div>
</section>


<!--            STATISTIC SECTION-->
<?php
$statisticMainImage = get_field('statistic_main_image')
?>
<section class="statistic_main" style="background-image: url(<?php echo $statisticMainImage['url'] ?>);">
    <div class="statistic_main__content container">
        <div class="statistic_main__content__title">
		    <h1><?php the_field('statistic_title') ?></h1>
        </div>

        <div class="statistic_main__content__info-a">
		    <?php the_field('statistic_info_a') ?>
        </div>

        <a href="<?php the_field('statistic_button_url') ?>" class="statistic_main__content__button button button_primary">
		         <?php the_field('statistic_button_text') ?>
        </a>

        <div class="statistic_main__content__info-b">
		    <?php the_field('statistic_info_b') ?>
        </div>
    </div>

<!--    Statistic images (counter)-->
    <div class="statistic_main__counter container">
	    <?php $imageVoyages      = get_field('image_voyages'); ?>
	    <?php $imageMembres      = get_field('image_membres'); ?>
	    <?php $imageAuthenticite = get_field('image_authenticite'); ?>

        <div class="statistic_main__counter__voyages">
            <img src="<?php echo $imageVoyages['url']?>" alt="Tapa2bal voyages">
            <h3 class="counter" data-count="<?php the_field('number_voyages') ?>">0</h3>
            <span><?php the_field('text_voyages') ?></span>
        </div>

        <div class="statistic_main__counter__membres">
            <img src="<?php echo $imageMembres['url']?>" alt="Tapa2bal membres">
            <h3 class="counter" data-count="<?php the_field('number_membres') ?>">0</h3>
            <span><?php the_field('text_membres') ?></span>
        </div>

        <div class="statistic_main__counter__authenticite">
            <img src="<?php echo $imageAuthenticite['url']?>" alt="Tapa2bal authenticite">
            <h3 class="counter" data-count="<?php the_field('number_authenticite') ?>">0</h3>
            <span><?php the_field('text_authenticite') ?></span>
        </div>
    </div>
</section>

<!--            DONATION SECTION-->
<section class="donation container">
    <div class='donation__left'>
        <h1 class="donation__left__title"><?php the_field('don_title') ?></h1>
        <a href="<?php the_field('don_box_hover_btn_url')  ?>" class="donation__left__btn button button_secondary">
		         <?php the_field('don_box_hover_btn_text') ?>
        </a>
        <p class="donation__left__info">  <?php the_field('don_info') ?></p>

        <div class="donation__left__box">
            <h2 class="donation__left__box--text">
				<?php the_field('don_box_text') ?>
            </h2>

            <h2 class="donation__left__box--hover-text">
				<?php the_field('don_box_hover_text') ?>
            </h2>

            <a href="<?php the_field('don_box_hover_btn_url') ?>" class="donation__left__box--hover-btn button">
				     <?php the_field('don_box_hover_btn_text') ?>
            </a>
        </div>
    </div>

    <div class="donation__right">
        <div class="donation__right__img-a">
			<?php $conceptPictureA = get_field('don_picture_a'); ?>
            <img src="<?php echo $conceptPictureA['url'] ?>" alt='Tapa2bal plant'>
        </div>

        <div class="donation__right__small">
            <div class="donation__right__small--img-b">
				<?php $conceptPictureB = get_field('don_picture_b'); ?>
                <img src="<?php echo $conceptPictureB['url'] ?>" alt='Tapa2bal flower'>
            </div>

            <div class="donation__right__small--img-c">
				<?php $conceptPictureC = get_field('don_picture_c'); ?>
                <img src="<?php echo $conceptPictureC['url'] ?>" alt='Tapa2bal handshake'>
            </div>
        </div>
    </div>
</section>


<!--            FAQ SECTION-->
<section class="FAQ">
    <div class="FAQ__title">
        <h1><?php the_field('faq_title') ?></h1>
    </div>
	<?php
	$faq1 = get_field('shortcode_1');
	echo do_shortcode($faq1);
	$faq1 = get_field('shortcode_2');
	echo do_shortcode($faq1);
	$faq1 = get_field('shortcode_3');
	echo do_shortcode($faq1);
	$faq1 = get_field('shortcode_4');
	echo do_shortcode($faq1);
	$faq1 = get_field('shortcode_5');
	echo do_shortcode($faq1);
	$faq1 = get_field('shortcode_6');
	echo do_shortcode($faq1);
	$faq1 = get_field('shortcode_7');
	echo do_shortcode($faq1);
	$faq1 = get_field('shortcode_8');
	echo do_shortcode($faq1);
	?>
</section>

    <!--            PARTNERS SECTION-->
<?php $partnersBackground = get_field('partners_background') ?>
<section class="partners" style="background-image: url(<?php echo $partnersBackground['url'] ?>);">
    <h1 class="partners__title"><?php the_field('partners_title') ?></h1>

	<?php $partnerImage1 = get_field('partner_1'); ?>
	<?php $partnerImage2 = get_field('partner_2'); ?>
	<?php $partnerImage3 = get_field('partner_3'); ?>

    <div class="partners__images">
        <a href="<?php the_field('partner_1_url') ?>" target="_blank">
            <img class="sta" src="<?php echo $partnerImage1['url']?>" alt="Tapa2bal Travel">
        </a>
        <a href="<?php the_field('partner_2_url') ?> " target="_blank">
            <img class="fribourg" src="<?php echo $partnerImage2['url']?>" alt="Tapa2bal Fribourg">
        </a>
<!--        <img src="--><?php //echo $partnerImage3['url']?><!--">-->
    </div>

</section>


<!--                CONTACT SECTION-->
<section class="contact">
    <div class="contact__form">
        <?php  $contact_form = get_field('contact_shortcode');
        echo do_shortcode($contact_form); ?>
    </div>
    <div class="contact__social">
        <a href="<?php the_field('instagram_link'); ?>" class="contact__social__icon">
	        <?php the_field('contact_instagram'); ?>
        </a>
        <a href="<?php the_field('facebook_link'); ?>" class="contact__social__icon">
	        <?php the_field('contact_facebook'); ?>
        </a>
    </div>
</section>






<?php
get_footer();
?>