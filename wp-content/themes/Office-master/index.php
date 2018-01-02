<?php get_header(); ?>
    <?php
    $ebit_post = null;
    $ebit_post = new WP_Query(array(
        'post_type'=>'page',
        'posts_per_page'=>-1,
    ));
    if($ebit_post->have_posts()){
        while($ebit_post->have_posts()){
            $ebit_post->the_post();
            $page_thumb = wp_get_attachment_image_src(get_post_thumbnail_ID($post->ID),'full');
            if(get_the_ID() == 10){ ?>
                <div class="row container-kamn">
                    <img src="<?php echo $page_thumb[0];?>" class="blog-post" alt="Feature-img" align="right" width="100%"> 
                </div>
            <?php }            
        }
    }else{
        echo "No Post Found";
    }
    ?>  
    <!-- End Header -->


    <!-- Main Container -->
    <div id="banners"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <?php
                    if(have_posts()){
                        while(have_posts()){
                            the_post();
                            $post_icon = get_post_meta(get_the_ID(),'_office_master_post_icon_class');
                            ?>
                            <div class="blog-post">
                                <h1 class="blog-title">
                                    <i class="fa <?php echo $post_icon[0]; ?>"></i>
                                   <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h1>
                                <br>
                                <?php the_post_thumbnail('post-thumb'); ?>
                                <br>
                                <p><?php echo wp_trim_words( get_the_content(),40, '...' ); ?>
                                </p>
                                <div>
                                    <span class="badge">Posted <?php the_time('Y-m-d g:i:s:a'); ?></span>
                                    <div class="pull-right">
                                        <?php the_tags('<span class="label label-default">','</span> 
                                        <span class="label label-default">','</span>') ?>
                                    </div>         
                                </div>
                            </div>
                            <hr>
                            <?php
                        }
                        the_posts_pagination(array(
                            'prev_text' => '&laquo;',
                            'next_text' => '&raquo;',
                        ));
                    }else{
                        echo "No Post Found";
                    }
                    ?>   
                </div>

                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Sign in </strong></h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="<?php echo site_url(); ?>/wp-login.php" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username or Email</label>
                                    <input type="text" name="log" class="form-control" style="border-radius:0px" id="exampleInputEmail1" placeholder="Enter Your username">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password <a href="<?php echo site_url(); ?>/wp-login.php?action=lostpassword">(forgot password)</a></label>
                                    <input type="password" name="pwd" class="form-control" style="border-radius:0px" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <button type="submit" name="wp-submit" class="btn btn-sm btn-default">Sign in</button>
                            </form>
                        </div>
                    </div>

                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        
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
                                        <div class="item <?php if($i==1){ echo "active"; } ?>">
                                           <?php the_post_thumbnail('sidebar_slider_img'); ?>
                                        </div>
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
                            for($x; $x<$i; $x++){
                                ?>
                                <li data-target="#carousel-example-generic" data-slide-to="<?php echo $x; ?>" class="<?php if($x==0){echo "active"; } ?>"></li>
                                <?php
                            }
                            ?>                            
                        </ol>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
       
        <!--End Main Container -->


<?php get_footer(); ?>