   <!-- Footer -->
   <?php
   global $office_master;
   ?>
    <footer style="background-color:<?php echo $office_master['footer_top_bg']; ?>"> 
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3><i class="<?php echo $office_master['col_one_icon']; ?>"></i> <?php echo $office_master['col_one_title']; ?>:</h3>
                    <p class="footer-contact">
                       <?php echo $office_master['col_one_desc']; ?>
                    </p>
                </div>
                <div class="col-md-4">
                    <h3><i class="<?php echo $office_master['col_two_icon']; ?>"></i> <?php echo $office_master['col_two_title']; ?></h3>
                    <p> <a href="#"> About ( Who we are )</a></p>
                    <p> <a href="#"> Services ( What we do )</a></p>
                    <p> <a href="#"> Contact ( Feel free to contact )</a></p>
                    <p> <a href="#"> Blog ( Write to us )</a></p>
                    <p> <a href="#"> Team ( Meet the Team )</a></p> 
                </div>
              <div class="col-md-4">
                <h3><i class="<?php echo $office_master['col_three_icon']; ?>"></i> <?php echo $office_master['col_three_title']; ?></h3>
                <div id="social-icons">
                  <div class="btn-group google-plus fa fa-google-plus fa-3x"></div>
                  <div class="btn-group linkedin fa fa-linkedin-square fa-3x"></div>
                  <div class="btn-group twitter fa fa-twitter fa-3x"></div>
                  <div class="btn-group facebook fa fa-facebook fa-3x"></div>
                </div>
              </div>    
        </div>
      </div>
	  
    </footer>
	<div class="footer_bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php global $office_master; echo $office_master['copy_text'];  ?>
				</div>
			</div>
		</div>
	</div>
       
    <?php wp_footer(); ?>
  </body>
</html>
