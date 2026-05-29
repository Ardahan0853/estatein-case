<?php get_header(); ?>

<main class="container" style="padding-top:60px;padding-bottom:60px;">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article style="margin-bottom:40px;">
                <h2 style="font-size:30px;margin-bottom:12px;"><?php the_title(); ?></h2>
                <div style="color:var(--text-gray);"><?php the_content(); ?></div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>No content found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
