 <div class="bg-dark text-white">
	<div class="container">
		<div class="row">
		
			  <div class="col-md-6 col-md-offset-3">
				<div class="well well-sm">
				  <form class="form-horizontal" action="" method="post">
				  <fieldset>
					<div class="col-sm-2">
						<h3 style="margin-top:20px;">Contact</h3>
					</div>
			
					<!-- Name input-->
					<div class="form-group">
					  <label class="col-md-3 control-label" for="name">Naam</label>
					  <div class="col-md-9">
						<input id="name" name="name" type="text" placeholder="Your name" class="form-control">
					  </div>
					</div>
			
					<!-- Email input-->
					<div class="form-group">
					  <label class="col-md-3 control-label" for="email">Email</label>
					  <div class="col-md-9">
						<input id="email" name="email" type="text" placeholder="Your email" class="form-control">
					  </div>
					</div>
			
					<!-- Message body -->
					<div class="form-group">
					  <label class="col-md-3 control-label" for="message">Bericht</label>
					  <div class="col-md-9">
						<textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
					  </div>
					</div>
			
					<!-- Form actions -->
					<div class="form-group">
					  <div class="col-md-2 text-right">
						<button type="submit" class="btn btn-primary btn-lg">Verstuur</button>
					  </div>
					</div>
				  </fieldset>
				  </form>
				</div>
			  </div>
			  <div class="col-md-6">
					<iframe style="margin-top:20px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435.8524710049014!2d4.890912565522132!3d52.373095029786654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c73b4b14ef%3A0x7e86dfc7e2ced272!2sDam%2C+Amsterdam!5e0!3m2!1snl!2snl!4v1505769726742" width="100%" height="400px;" frameborder="0" style="border:0" allowfullscreen></iframe>
			  </div>
		</div>
	</div>
  </div>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">&copy; <?php
													  $fromYear = 2017; 
													  $thisYear = (int)date('Y'); 
													  echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?> Drive4Less</p>
      </div>
      <!-- /.container -->
    </footer>

<?php wp_footer(); ?>
</body>
</html>
