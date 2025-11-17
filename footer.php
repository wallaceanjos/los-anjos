<?php
    $agency_footer_bg = get_template_directory_uri() . '/assets/images/home-travel-agency-footer-bg.jpg';
    $logo_footer = get_template_directory_uri() . '/assets/images/logo-gradient-sky-blue-pink-white.png';
?>
</div>
<!-- end main-content -->

<?php
get_template_part('template-parts/content', 'whatsapp');
?>
        <!-- start footer -->
        <footer class="footer-dark cover-background footer-sticky" style="background-image:url('<?php echo esc_url($agency_footer_bg); ?>');">
            <div class="footer-top padding-six-tb lg-padding-seven-tb md-padding-50px-tb">
                <div class="container">
                    <div class="row">
                        <!-- start footer column -->
                        <div class="col-12 col-md-3 col-sm-6 sm-margin-40px-bottom xs-margin-30px-bottom">
                            <span class="alt-font font-weight-500 d-block text-white text-uppercase text-medium margin-15px-bottom xs-margin-10px-bottom letter-spacing-1px">A empresa</span>
                            <ul>
                                <!-- <li><a href="about-us.html">About company</a></li>
                                <li><a href="our-services.html">Our services</a></li>
                                <li><a href="our-team.html">Job opportunities</a></li> -->
                                <li><a href="https://wa.me/5521998886888?text=Olá,%20vim%20do%20site%20da%20Los%20Anjos%20e%20gostaria%20de%20mais%20informações.">Fale com a gente</a></li>
                            </ul>
                        </div>
                        <!-- end footer column -->
                        <!-- start footer column -->
                        <div class="col-12 col-md-3 col-sm-6 sm-margin-40px-bottom xs-margin-30px-bottom">
                            <span class="alt-font font-weight-500 d-block text-white text-uppercase text-medium margin-15px-bottom xs-margin-10px-bottom letter-spacing-1px">Cliente</span>
                            <ul>                           
                                <!-- <li><a href="faq.html">Client support</a></li>
                                <li><a href="pricing-packages.html">Pricing packages</a></li>
                                <li><a href="our-story.html">Company story</a></li> -->
                                <li><a href="https://losanjos.agency/blog/">Últimas do blog</a></li>
                            </ul>
                        </div>
                        <!-- end footer column -->
                        <!-- start footer column -->
                        <div class="col-12 col-md-3 col-sm-6 xs-margin-30px-bottom">
                            <span class="alt-font font-weight-500 d-block text-white text-uppercase text-medium margin-15px-bottom xs-margin-10px-bottom letter-spacing-1px">Recursos</span>
                            <ul>                           
                                <!-- <li><a href="faq.html">Theme guide</a></li>
                                <li><a href="faq.html">Support desk</a></li> -->
                                <li><a href="https://losanjos.agency/#pricing">O Que oferecemos</a></li>
                                <!-- <li><a href="our-story.html">Company history</a></li> -->
                            </ul>
                        </div>
                        <!-- end footer column -->
                        <!-- start footer column -->
                        <div class="col-12 col-md-3 col-sm-6">
                            <span class="alt-font font-weight-500 d-block text-white text-uppercase text-medium margin-15px-bottom xs-margin-10px-bottom letter-spacing-1px">Serviços</span>
                            <ul>
                                <li><a href="https://losanjos.agency/#about">Portfólio</a></li>
                                <!-- <li><a href="our-services.html">e-Commerce website</a></li>
                                <li><a href="our-services.html">Content writing</a></li>
                                <li><a href="our-services.html">Marketing strategy</a></li> -->
                            </ul>
                        </div>
                        <!-- end footer column -->
                    </div>
                </div>
            </div>
            <div class="footer-bottom padding-one-top padding-six-bottom d-inline-block w-100">
                <div class="container"> 
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-4 text-center text-sm-start xs-margin-20px-bottom">
                            <a href="https://losanjos.agency/" class="footer-logo flex-center">
                                <div class="w-120 h-56" style="background: url(<?php echo esc_url($logo_footer); ?>) no-repeat center center / contain"></div>
                            </a>
                        </div>
                        <div class="col-12 col-sm-8 text-center text-sm-end last-paragraph-no-margin">
                            <p>&copy; 2025 LosAnjos is Proudly Powered by <a href="https://losanjos.agency/" target="_blank" class="text-decoration-line-bottom text-white">losanjos.agency</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
        <!-- end scroll to top -->
        <?php
            wp_footer();
        ?>
    </body>

<!-- Mirrored from lithohtml.themezaa.com/home-design-agency.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 01:27:36 GMT -->
</html>