

<script language="javascript">
		function validateForm(form)
		{
			var requiredFields = [
				["Name", "Name"],
				["hush_sender", "Email Address"],
				["Message", "Message"],
			];
			
			var emptyFields = [];

			for (field in requiredFields)
			{
				var empty = form.elements[requiredFields[field][0]].value == "";
				var name = requiredFields[field][1];

				if (empty)
				{
					emptyFields[emptyFields.length] = name;
				}
			}

			if (emptyFields.length > 0)
			{
				var msg = "The following fields can not be blank:\r\n\r\n";
				for (field in emptyFields)
				{
					msg += "\t" + emptyFields[field] + "\r\n";
				}
				alert(msg);
				return false;
			}

			return true;
		}
</script>

		<div id="secure-email-form">
			<div class="text-center">
				<h2 class="mb-4">Secure Email Form</h2>
			</div>
			<form id="contact-page-form" class="hushmail-contact-form" action="https://forms.hush.com/frontdesk" enctype="multipart/form-data" method="post">
				<div class="row contact-form mb-4">
					<div class="col-sm-6 d-flex flex-column align-items-end col-lg-5 offset-lg-1">
						<input maxlength="30" name="Name" type="text" value="" placeholder="Name" />
						<input name="hush_sender" type="text" placeholder="Email" />
						<input class="mb-sm-0" name="phone" type="text" placeholder="Phone number" />
					</div>
					<div class="col-sm-6">
						<textarea name="Message" placeholder="Write your message here"></textarea>
					</div>
				</div>
				<div class="row contact-form-buttons justify-content-center">
					<div class="col-sm-6 text-center text-sm-right"><input type="submit" value="Send" class="cb-slide-button" /></div>
					<div class="col-sm-6 text-center text-sm-left"><input type="reset" class="cb-slide-button" /></div>
				</div>
			</form>
		</div>



</div>
<!-- Secure Email Form -->
<div id="secure-email-form">
<div class="text-center">
<h2></h2>
<h2 class="mb-4">Secure Email Form</h2>
</div>
<form id="contact-page-form" class="hushmail-contact-form" action="https://forms.hush.com/frontdesk" enctype="multipart/form-data" method="post">
<div class="row contact-form mb-4">
<div class="col-sm-6 d-flex flex-column align-items-end col-lg-5 offset-lg-1"><input maxlength="30" name="Name" type="text" value="" placeholder="Name" /><input name="hush_sender" type="text" placeholder="Email" /><input class="mb-sm-0" name="phone" type="text" placeholder="Phone number" /></div>
<div class="col-sm-6"><textarea name="Message" placeholder="Write your message here"></textarea></div>
</div>
<div class="row upload-title">
<div class="col-12 text-center"><b>Attach a File:</b></div>
</div>
<div class="row form-uploads">
<div class="col-sm-6 col-md-4 offset-md-2 col-lg-3 offset-lg-3"><input name="File1" type="file" /></div>
<div class="col-sm-6"><input name="File2" type="file" /></div>
</div>
</form></div>
<div class="text-center button-box"></div>
<div class="row contact-form-buttons justify-content-center">
<div class="col-sm-6 text-center text-sm-right"><input class="cb-slide-button" type="submit" value="Send" /></div>
<div class="col-sm-6 text-center text-sm-left"><input class="cb-slide-button" type="reset" /></div>
</div>