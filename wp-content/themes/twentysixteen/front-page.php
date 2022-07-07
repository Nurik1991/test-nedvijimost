<?php get_header(); ?>

<main id="main" class="site-main"> 
    <!-- Частные дома -->
    <!-- Вариант с бутстрап -->
    <section class="indent new-posts">
        <?php query_posts('category_name=chastnyj-dom&posts_per_page=5'); ?>
        <? if (have_posts()) : ?>
            <header class="block-title">
                <h2>Новые частные дома</h2>
            </header>

            <div class="">
                <div class="row gx-2 gy-3">
                    <?php while (have_posts()) {
                        the_post(); ?>

                        <a class="col-sm-6 col-lg-4 " href="<?= get_permalink(); ?>">
                            <div class="new-posts__link">

                                <div class="new-posts__image">
                                    <? the_post_thumbnail('thumbnail-size-home'); ?>
                                </div>

                                <h3 class="new-posts__title"> <? the_title(); ?> </h3>

                                <div class="new-posts__description">
                                    <?php echo wp_trim_words(get_the_content(), 8, $moreLink); ?>
                                </div>

                                <div class="new-posts__hidden">
                                    <? if (get_field('stoimost')) { ?>
                                        <span> Стоимость : <?= the_field('stoimost'); ?> руб. </span>
                                    <? } ?>
                                    <? if (get_field('ploshhad')) { ?>
                                        <span> Площадь : <?= the_field('ploshhad'); ?> м<sup>2</sup> </span>
                                    <? } ?>
                                    <? /*if (get_field('etazh')) { ?>
                                <span> Этаж: <? the_field('etazh'); ?> </span>
                            <? } */ ?>
                                </div>
                            </div>
                        </a>

                    <? }  ?>
                </div>
            </div>
        <? endif; ?>
    </section>
    <!-- //Частные дома -->

    <!-- Квартиры -->
     <!-- Вариант без бутстрапа и с другим выводом записей-->
    <section class="indent new-posts"> 
        <?php
        // указываем категорию 9 и выключаем разбиение на страницы (пагинацию)
        $query = new WP_Query('category_name=kvartira&posts_per_page=5');
        if ($query->have_posts()) { ?>
            <header class="block-title">
                <h2>Новые квартиры</h2>
            </header>
            <div class="new-posts__grid">
                <? while ($query->have_posts()) {
                    $query->the_post();
                ?>
                    <a class="new-posts__link" href="<?= get_permalink(); ?>">

                        <div class="new-posts__image">
                            <? the_post_thumbnail('thumbnail-size-home'); ?>
                        </div>

                        <h3 class="new-posts__title"> <? the_title(); ?> </h3>

                        <div class="new-posts__description">
                            <?php echo wp_trim_words(get_the_content(), 10, $moreLink); ?>
                        </div>

                        <div class="new-posts__hidden">
                            <? if (get_field('stoimost')) { ?>
                                <span> Стоимость : <?= the_field('stoimost'); ?> руб. </span>
                            <? } ?>
                            <? if (get_field('ploshhad')) { ?>
                                <span> Площадь : <?= the_field('ploshhad'); ?> м<sup>2</sup> </span>
                            <? } ?>
                            <? if (get_field('etazh')) { ?>
                                <span> Этаж: <? the_field('etazh'); ?> </span>
                            <? } ?>
                        </div>

                    </a>
                <?php
                } ?>
            </div>
        <? wp_reset_postdata(); // сбрасываем переменную $post
        }
        ?>

    </section>
    <!-- //Квартиры -->

    <!-- Офисы -->
     <!-- Вариант без бутстрап -->
    <section class="indent new-posts">
        <?php query_posts('category_name=ofis&posts_per_page=5'); ?>
        <? if (have_posts()) : ?>
            <header class="block-title">
                <h2>Новые офисы</h2>
            </header>
            <div class="new-posts__grid">
                <?php while (have_posts()) {
                    the_post(); ?>

                    <a class="new-posts__link" href="<?= get_permalink(); ?>">

                        <div class="new-posts__image">
                            <? the_post_thumbnail('thumbnail-size-home'); ?>
                        </div>

                        <h3 class="new-posts__title"> <? the_title(); ?> </h3>

                        <div class="new-posts__description">
                            <?php echo wp_trim_words(get_the_content(), 10, $moreLink); ?>
                        </div>

                        <div class="new-posts__hidden">
                            <? if (get_field('stoimost')) { ?>
                                <span> Стоимость : <?= the_field('stoimost'); ?> руб. </span>
                            <? } ?>
                            <? if (get_field('ploshhad')) { ?>
                                <span> Площадь : <?= the_field('ploshhad'); ?> м<sup>2</sup> </span>
                            <? } ?>
                            <? if (get_field('etazh')) { ?>
                                <span> Этаж: <? the_field('etazh'); ?> </span>
                            <? } ?>
                        </div>

                    </a>

                <? } ?>
            </div>
        <? endif; ?>
    </section>
    <!-- //Квартиры -->

</main>

<?php get_footer(); ?>