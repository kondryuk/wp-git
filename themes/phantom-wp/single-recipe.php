<?php get_header(); ?>

<div id="main">
    <div class="inner">

        <?php while ( have_posts() ) : the_post(); ?>

            <article class="recipe">

                <header>
                    <h1><?php the_title(); ?></h1>
                </header>

                <?php
                $image = get_field('recipe_image');
                if ( $image ) :
                ?>
                    <img src="<?php echo esc_url($image); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>

                <div class="recipe-meta">
                    <p><strong>Час приготування:</strong>
                        <?php the_field('cooking_time'); ?> хв
                    </p>

                    <p><strong>Складність:</strong>
                        <?php the_field('difficulty'); ?>
                    </p>
                </div>

                <section class="recipe-content">
                    <?php the_content(); ?>
                </section>

                <section class="recipe-ingredients">
                    <h2>Інгредієнти</h2>
                    <pre><?php the_field('ingredients'); ?></pre>
                </section>

                <section class="recipe-steps">
                    <h2>Кроки приготування</h2>
                    <pre><?php the_field('steps'); ?></pre>
                </section>

            </article>

        <?php endwhile; ?>

    </div>
</div>

<?php get_footer(); ?>
