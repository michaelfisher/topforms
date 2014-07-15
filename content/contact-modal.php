<!--Contact Modal-->
<div id="contact" class="modal fade" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<form id="contact-form" name="contact" role="form">
					<div class="form-group">
			      <label for="name">Your Name:</label>
			      <input type="text" name="name" class="form-control" placeholder="Full Name">
			    </div>
			    <div class="form-group">
			      <label for="email">Your E-mail:</label>
			      <input type="email" name="email" class="form-control" placeholder="user@domain.com">
			    </div>
			    <div class="form-group">
			      <label for="message">Message:</label>
			      <textarea name="message" class="form-control" rows="5" placeholder="I think you're awesome-sauce!"></textarea>
			    </div>
		    </form>
	      <div class="modal-footer">
	      	<div id="contact-buttons">
				    <input class="btn btn-success" type="submit" value="Send Message" id="submit">
		        <a href="#"><input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel"></a>
		      </div>
	      	<div id="submit-status" style="display: none;"></div>
	      </div>
			</div>
		</div>
	</div>
</div><!--End Contact Modal-->