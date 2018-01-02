<?php get_header();
/*
Template Name:Contact Page
*/
 ?>
        <!-- Main Container -->

        <div class="container-fluid-kamn">
            <div class="row">
                <div>
                    <iframe width="100%" height="450px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $office_master['map_url']; ?>"></iframe>
                    <br />
                </div>
                <div class="col-lg-4 col-lg-offset-1">
                    <h4><?php echo $office_master['contact_title']; ?>:</h4>
                    <?php echo $office_master['contact_textarea']; ?>                   
                    
                    <p class="lead"><?php echo $office_master['contact_social_heading']; ?></p>
                    <hr>
                    <?php
                    if(is_array($office_master['contact_social_button'])){
                        foreach($office_master['contact_social_button'] as $value){
                            ?>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <a href="<?php echo $value['url']; ?>"><img src="<?php echo $value['image']; ?>" alt="Skype"></a>
                                <?php echo $value['title']; ?>
                            </div>
                            <?php
                        }
                    }
                    ?>
                    

                    
                    <br>
                </div>
                <div class="col-lg-5">
                    <div class="feedback-form">
          
                        <div id="contact-response"></div>                        
                        <?php echo do_shortcode('[contact-form-7 id="53" title="New Form"]'); ?>
                    </div> 
                </div>
            </div>
        </div>    
            
    <!--End Main Container -->


<?php get_footer(); ?>