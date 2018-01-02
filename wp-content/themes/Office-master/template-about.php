<?php
/*
Template Name:About Page
*/
 get_header(); ?>
    <?php
    if(have_posts()){
        the_post();
        $page_thumb = wp_get_attachment_image_src(get_post_thumbnail_ID($post->ID),'full');
        $group_meta_data = get_post_meta(get_the_ID(),'_office_master_about_group_meta_field');
        $content = get_the_content();
    ?>
        <div class="row container-kamn">  
            <img src="<?php echo $page_thumb[0]; ?>" width="100%" class="blog-post" alt="Feature-img" align="right" /> 
        </div>
    <?php        
    }else{
        echo "No Post Found";
    }
    ?>

    <div id="banners"></div>
    <div class="container">   
        <div class="row">
            <div class="side-left col-sm-4 col-md-4">
                <?php
                foreach ($group_meta_data as $key => $value) {
                   ?>
                    <h3 class="lead"> <?php echo $value['_office_master_about_heading']; ?>: </h3><hr>

                    <p><?php echo $value['_office_master_group_description']; ?></p>
                    <?php
                    $hash_link = $value['_office_master_hash_link'];
                    foreach($hash_link as $single){
                        ?>
                        <a href="<?php echo $single; ?>"> Our Firm's History</a><br>
                        <?php
                    }
                    ?>
                    <br>
                    <h4>2002 - LOREM IPSUM DOLOR :</h4><hr>
                    Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus. Nunc eu ullamcor per orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus.
                   <?php
                }
                ?>
                

            </div>
            <div class="col-sm-8 col-md-8">
                <?php
                   echo $content;
                ?>
            </div>  
        </div>    
    </div>  

    <!--End Main Container -->

 <?php get_footer(); ?>