    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <section>
                <h2>Get in touch</h2>
                <form method="post" action="#">
                    <div class="fields">
                        <div class="field half">
                            <input type="text" placeholder="Name">
                        </div>
                        <div class="field half">
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="field">
                            <textarea placeholder="Message"></textarea>
                        </div>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="Send" class="primary"></li>
                    </ul>
                </form>
            </section>

            <section>
                <h2>Follow</h2>
                <ul class="icons">
                    <li><a href="#" class="icon brands style2 fa-facebook-f"></a></li>
                    <li><a href="#" class="icon brands style2 fa-instagram"></a></li>
                </ul>
            </section>

            <ul class="copyright">
                <li>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></li>
            </ul>
        </div>
    </footer>

</div><!-- #wrapper -->

<?php wp_footer(); ?>
</body>
</html>
