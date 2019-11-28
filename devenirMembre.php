<?php
/**
 * Template Name: Devenir Membre
 */

get_header();

//HERO IMAGE VAR
$devenirMembreImage = get_field('devenir_membre_image'); ?>
    <main class="devenir_main">
        <?php
        //MAIN TEXT & PRICE BOX
        ?><section class="devenir_main_info container">

            <div class="div devenir_main_info__text">
                <?php the_field('main_text');?>
            </div>

            <div class="devenir_main_info__priceBox">
                <div class="devenir_main_info__priceBox__container">
                    <div class="devenir_main_info__priceBox__container--text">
                        <h2><?php the_field('price_box_text')?></h2>
                    </div>

                    <div class="line-separator"></div>
                    <!--                PRICE AMOUNT-->
                    <div class="devenir_main_info__priceBox__container--amount">
                        <span>CHF</span>
                        <h2><?php the_field('price_box_amount') ?></h2>
                    </div>
                    <div class="devenir_main_info__priceBox__container--info">
                        <p><?php the_field('price_box_info') ?></p>
                    </div>
                    <a href="<?php the_field('price_box_button_url') ?>" class="devenir_main_info__priceBox__container--btn button button_primary">
                             <?php the_field('price_box_button_text') ?>
                    </a>
                    <div class="devenir_main_info__priceBox__container--footer">
                        <?php the_field('price_box_footer') ?>
                    </div>
                </div>

                <?php  ?>
            </div>
        </section>

        <div class="gray_area"></div>

<!--        //HERO IMAGE-->
        <section class="devenir_membre_image" style="background-image: url(<?php echo $devenirMembreImage['url'] ?>);"></section>
    </main>

<?php
get_footer();
?>