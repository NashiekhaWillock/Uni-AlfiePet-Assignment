<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alfie
 */

?>

<footer class="bg-gray-800">
    <div class="text-3xl font-medium pb-3 text-white">Alfie Pet Supplies &copy;</div>
    <div class="footer-row">
        <ul class="flex text-white">
            <li><a href="https://www.facebook.com/" aria-label="Facebook" target="_blank" rel="noopener"><i
                        class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="https://www.instagram.com/?hl=en" aria-label="instagram" target="_blank" rel="noopener"><i
                        class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="https://www.snapchat.com/" aria-label="Snapchat" target="_blank" rel="noopener"><i
                        class="fa fa-snapchat" aria-hidden="true"></i></a></li>
            <li><a href="https://twitter.com/?lang=en" aria-label="Twitter" target="_blank" rel="noopener"><i
                        class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="https://www.linkedin.com/" aria-label="LinkedIn" target="_blank" rel="noopener"><i
                        class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            <li><a href="https://www.youtube.co.uk" aria-label="YouTube" target="_blank" rel="noopener"><i
                        class="fa fa-youtube" aria-hidden="true"></i></a></li>
        </ul>
    </div>
    <div class="footer-row text-center">
        <ul class="footer-links md:flex text-xl md:text-lg text-white">
            <li class="md:pr-3"><a href="#">Press & Media</a></li>
            <li class="md:pr-3"><a href="#">Work with us</a></li>
            <li class="md:pr-3"><a href="#">Contact us</a></li>
        </ul>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>