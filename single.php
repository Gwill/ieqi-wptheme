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
                    <div class="article-meta"><p><?php the_time('Y-m-d'); ?></p></div>
                    <div class="article-content">
                        <?php the_content(); ?>
                    </div>
                    <div id="disqus_thread"></div>
                    <script type="text/javascript">
                        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                        var disqus_shortname = 'ieqinet';
                        /* * * DON'T EDIT BELOW THIS LINE * * */
                        (function() {
                            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                            dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
                            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
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
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.8.3.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.syntaxhighlighter.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
        <script>
            var _gaq=[['_setAccount','UA-22313242-1'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
