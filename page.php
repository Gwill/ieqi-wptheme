<?php
/**
 *
 */
?>
<?php get_header(); ?>
        <section>
            <div class="articles">
                <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    
                    <div class="article-content">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php endwhile; // end of the loop. ?>
                <?php else : ?>
                <article>
                    <h2><a href="/">Nothing!</a>
                    </h2>
                </article>
                <?php endif; ?>
            </div>
        </section>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.8.3.min.js"><\/script>')</script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.syntaxhighlighter.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
        <div id="cnzz">
            <script src="http://s21.cnzz.com/stat.php?id=2950424&web_id=2950424" language="JavaScript"></script>
        </div>
        <script>
            var _gaq=[['_setAccount','UA-22313242-1'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
