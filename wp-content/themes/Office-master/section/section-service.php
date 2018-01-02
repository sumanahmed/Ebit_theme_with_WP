<!-- Begin #services-section -->
    <section id="services" class="services-section section-global-wrapper">
        <div class="container">
            <div class="row">
                <div class="services-header">
                    <h3 class="services-header-title">Our Mission</h3>
                    <p class="services-header-body"><em> Things we provide in Office </em>  </p><hr>
                </div>
            </div>
      
            <!-- Begin Services Row 1 -->
            <div class="row services-row services-row-head services-row-1">
                <?php
                $service_post = null;
                $service_post = new WP_Query(array(
                    'post_type'=>'service',
                    'posts_per_page'=>3,
                    'order'=>'ASC',
                ));
                if($service_post->have_posts()){
                    while($service_post->have_posts()){
                        $service_post->the_post();
                        $service_icon = get_post_meta(get_the_ID(),'_office_master_service_icon',true);
                        $service_description = get_post_meta(get_the_ID(),'_office_master_service_description',true);
                        $service_animation = get_post_meta(get_the_ID(),'_office_master_service_animation',true);
                        $service_link = get_post_meta(get_the_ID(),'_office_master_service_link',true);
                        ?>
                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="services-group wow animated <?php echo $service_animation; ?>" data-wow-offset="40">
                                    <p class="services-icon"><span class="fa <?php echo $service_icon; ?> fa-5x"></span></p>
                                    <h4 class="services-title"><?php the_title(); ?></h4>
                                    <p class="services-body"><?php echo $service_description; ?></p>
                                    <p class="services-more"><a href="<?php echo $service_link; ?>">Find Out More</a></p>
                                </div>
                            </div>
                        <?php
                    }
                }else{
                    echo "No Post Found";
                }
                wp_reset_postdata();
                ?>
               
        
                
            </div>
            <!-- End Serivces Row 2 -->
    
        </div>      
    </section>
    <!-- End #services-section -->