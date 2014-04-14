<?php include 'parts/doctype.php';?>
<body class="articles">
	<div class="header">
		<?php include 'parts/header.php';?>
		<?php include 'parts/nav.php';?>
		<a class="tablet toggle-subnav" href="#"><span class="nav-bar clearfix"><span aria-hidden="true" data-icon="&#57349;" ></span>Subnav</span></a>
		<ul class="breadcrumbs">
			<li><a href="/"><span aria-hidden="true" data-icon="&#8962;" ></span></a></li>
			<li><a href="articles.php">Articles</a></li>
			<li>Interview with Dan Mall</li>
		</ul>
	</div>
	<div class="content">


				
<!--endnoindex-->

		<article class="article" role="main">
<h1>Contact Us</h1>

<p class="lead">Don't be shy, we won't bite.</p>

<p>Get in touch with us today whether it's a suggestion for the newsletter, or you want to point out something wrong on the site, if you want some advice about a responsive problem you're having, even if you just want to say hello</p>

<!--endnoindex-->
<form id="form_email_4005" enctype="multipart/form-data" action="http://responsivedesign.is/contact/_nocache" method="post">

	<input type="hidden" name="SQ_FORM_4005_PAGE" value="1" class="sq-form-field" id="SQ_FORM_4005_PAGE">
	<input type="hidden" name="form_email_4005_referral_url" value="">
	
		<fieldset>
			<div class="form-question">
				<label class="sq-form-question-title" for="q4005_q1">Name <abbr class="sq-form-required-field" title="required">*</abbr></label> 
					<input type="text" name="q4005:q1" value="" size="30" maxlength="300" placeholder="Justin Avery" id="q4005_q1" class="sq-form-field">
			</div>

			<div class="form-question">
				<label class="sq-form-question-title" for="q4005_q2">Email <abbr class="sq-form-required-field" title="required">*</abbr></label> 
					<input type="text" name="q4005:q2" value="" size="30" maxlength="300" placeholder="me@myemail.com" id="q4005_q2" class="sq-form-field">
			</div>
			<div class="form-question">
	<label class="sq-form-question-title" for="q4005_q3">Details</label> 
	<textarea name="q4005:q3" cols="50" rows="5" onkeyup="if (this.value.length &gt; 5000) { this.value = this.value.substr(0,5000); alert('This field can contain no more than 5000 characters.'); this.focus()}" onblur="if (this.value.length &gt; 5000) { this.value = this.value.substr(0,5000); alert('This field can contain no more than 5000 characters.'); this.focus()}" id="q4005_q3" class="sq-form-field"></textarea>
	</div>

<input type="hidden" name="q4005:comment" value="" size="10" maxlength="10" class="" id="q4005_comment">

<p><button type="submit" name="form_email_4005_submit" value="Submit" class="sq-form-submit button dark" id="form_email_4005_submit">Submit</button></p>
	
</fieldset>
</form>

<!--noindex-->

</article>
<!--noindex-->



</div>
		<?php include 'parts/footer.php'; ?>

	<?php include 'parts/javascript.php'; ?>
</body>
</html>
