<?php get_header(); ?>
    <?php
    if(have_posts()){
    $page_thumb = wp_get_attachment_image_src(get_post_thumbnail_ID($post->ID),'full');
        ?>
        <div class="row container-kamn">  
            <img src="<?php echo $page_thumb[0]; ?>" width="100%" class="blog-post" alt="Feature-img" align="right" /> 
        </div>
        <?php        
    }
    ?>
    

    <!--End Header -->


    <!-- Main Container -->

    <div id="banners"></div>
    <div class="container">
        <div class="row">
            <?php
            $page_item = null;
            $page_item = new WP_Query(array(
                'post_type'=>'team',
                'posts_per_page'=>'6',
                'order'=>'ASC',
            ));
            if($page_item->have_posts()){
                while($page_item->have_posts()){
                    $page_item->the_post();
                    $team_m_designation = get_post_meta(get_the_ID(),'_office_master_team_member_designation',true);
                    $block_color = get_post_meta(get_the_ID(),'_office_master_block_color',true);
                    $animation_type = get_post_meta(get_the_ID(),'_office_master_animation_type',true);
                    ?>
                        <div class="col-md-6">                
                            <div class="blockquote-box <?php echo $block_color; ?> animated wow <?php echo $animation_type; ?> clearfix">
                                <div class="square pull-left">
                                    <?php the_post_thumbnail('team-img'); ?>
                                </div>
                                <h4><?php the_title(); ?></h4>
                                <p><?php echo $team_m_designation; ?></p>
                            </div>
                        </div>
                    <?php
                }
            }else{
                echo "No Post Found";
            }
            ?>
            

        </div>
    </div>
    <!--End Main Container -->


<?php get_footer(); ?>