        </section>
        <!-- FOOTER STARTS -->    
        <footer >
            <div class="container" id="footer">
                <!-- Upper footer -->
                <div class="row">
                    <div class="col-md-4">
                        <?php if ( !function_exists('dynamic_sidebar')
                                || !dynamic_sidebar("Footer Left") ) : ?>  
                        <?php endif; ?>                   
                    </div>
                    <div class="col-md-4">
                        <?php if ( !function_exists('dynamic_sidebar')
                                || !dynamic_sidebar("Footer Center") ) : ?>  
                        <?php endif; ?>                   
                    </div>
                    <div class="col-md-4">
                        <?php if ( !function_exists('dynamic_sidebar')
                                || !dynamic_sidebar("Footer Right") ) : ?>  
                        <?php endif; ?>                   
                    </div>
                </div>
                <!-- Lower footer -->
                <div class="row">
                    <div class="copyright">
                        <div class="col-lg-12">
                            <p class="copyright-text">Copyright © 2015 <?php bloginfo('name');?>. All rights Reserved. <br><a href="/privacy-policy/">Privacy Policy</a> <span>|</span> <a href="/terms-of-service/">Terms of Service</a> <span>|</span> <a 

href="/sitemap_index.xml">Site Map</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER ENDS -->
        <?php wp_footer(); ?>
    </body>
</html>