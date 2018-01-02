<!-- Begin #carousel-section -->
    <section id="carousel-section" class="section-global-wrapper"> 
        <div class="container-fluid-kamn">
            <div class="row">
                <div id="carousel-1" class="carousel slide">

                           
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <?php
                        $slider_post = null;
                        $slider_post = new WP_Query(array(
                            'post_type'=>'slider',
                            'posts_per_page'=>3,
                        ));
                        if($slider_post->have_posts()){
                            $i=0;
                            while($slider_post->have_posts()){
                                $i++;
                                $slider_post->the_post();
                                $slider_caption = get_post_meta(get_the_ID(),'_office_master_slider_caption',true);
                                ?>
                                    <!-- Begin Slider -->
                                    <div class="item <?php if($i==1){ echo "active"; } ?>">
                                        <?php the_post_thumbnail('slider-img'); ?>
                                        <div class="carousel-caption">
                                            <h3 class="carousel-title hidden-xs"><?php the_title(); ?></h3>
                                            <p class="carousel-body"><?php echo $slider_caption; ?></p>
                                        </div>
                                    </div>
                                    <!-- End Slider-->
                                <?php
                            }
                        }else{
                            echo "No Post Found";
                        }
                        wp_reset_postdata();
                        ?>                        
                    </div>
                    <!-- Indicators -->
                    <ol class="carousel-indicators visible-lg">
                        <?php
                        $x = 0;
                        for($x;$x<$i;$x++){
                            ?>
                            <li data-target="#carousel-1" data-slide-to="<?php echo $x; ?>" class="<?php if($x==0){echo "active"; } ?>"></li>
                            <?php
                        }
                        ?>
                        
                    </ol>
        
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-1" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-1" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End #carousel-section -->