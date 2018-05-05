
		//Form
    	<div class="col-sm-6">
    		<form action="contact" class="contact-form" method="POST">
				
				{{ csrf_field() }}

				@if(session('status'))
				<div class="alert alert-success">
				{{session('status')}}
				</div>
				@endif

		        <div class="form-group">
		           <label for="Name">NAME :</label>
		          <input type="text" class="form-control" id="name" name="name" placeholder="Name" required autofocus="">
		        </div>
		    
		    
		        <div class="form-group form_left">
		        	<label for="Email">EMAIL :</label>
		          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
		        </div>

		      <div class="form-group">
		      	<label for="Message">MESSAGE :</label>
		      <textarea class="form-control textarea-contact" rows="5" id="message" name="message" placeholder="Type Your Message/Feedback here..." required></textarea>
		      <br>
	      	  <button class="btn btn-default btn-send" type="submit"> Send </button>
		      </div>
     		</form>
