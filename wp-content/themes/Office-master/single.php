<?php get_header(); ?>

        <div class="row container-kamn">  
            <img src="http://placehold.it/1200x400" width="100%" class="blog-post" alt="Feature-img" align="right" /> 
        </div>
   
    <div id="banners"></div>
    <div class="container">   
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <?php
                if(have_posts()){
                    the_post();
                    $post_icon = get_post_meta(get_the_ID(),'_office_master_post_icon_class');
                    ?>
                    <div class="blog-post">
                        <h1 class="blog-title">
                            <i class="fa <?php echo $post_icon[0]; ?>"></i>
                           <?php the_title(); ?>
                        </h1>
                        <br>
                        <?php the_post_thumbnail('post-thumb'); ?>
                        <br>
                        <?php the_content(); ?>
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
                ?>      
            </div>  
        </div>    
    </div>  

    <!--End Main Container -->

 <?php get_footer(); ?>