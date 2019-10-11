@extends('master')
@section('title', 'Liên hệ')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('source/image/slide/banner2.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span class="mr-2"><a href="index.html">Product</a></span> <span>Product Single</span></p>
                <h1 class="mb-0 bread">Chi tiết sản phẩm</h1>
            </div>
        </div>
    </div>
</div>
<div class="beta-map">
	
	<div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59590.40794172762!2d105.74687761674058!3d21.016655317134298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab0d69594b35%3A0x56c7da1281efdc2f!2zSGFuZGljbyBUb3dlciAtIERITO2KueyGoSDsiJjroLnsp4A!5e0!3m2!1svi!2s!4v1566644022582!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
</div>
<div class="container">
	<div id="content" class="space-top-none">
		
		<div class="space50">&nbsp;</div>
		<div class="row">
			<div class="col-sm-8">
				<h2>Contact Form</h2>
				<div class="space20">&nbsp;</div>
				<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit ani m id est laborum.</p>
				<div class="space20">&nbsp;</div>
				<form action="#" method="post" class="contact-form">
					<div class="form-block">
						<input name="your-name" type="text" placeholder="Your Name (required)">
					</div>
					<div class="form-block">
						<input name="your-email" type="email" placeholder="Your Email (required)">
					</div>
					<div class="form-block">
						<input name="your-subject" type="text" placeholder="Subject">
					</div>
					<div class="form-block">
						<textarea name="your-message" placeholder="Your Message"></textarea>
					</div>
					<div class="form-block">
						<button type="submit" class="beta-btn primary">Send Message <i class="fa fa-chevron-right"></i></button>
					</div>
				</form>
			</div>
			<div class="col-sm-4">
				<h2>Contact Information</h2>
				<div class="space20">&nbsp;</div>
				<h6 class="contact-title">Address</h6>
				<p>
					Suite 127 / 267 – 277 Brussel St,<br>
					62 Croydon, NYC <br>
					Newyork
				</p>
				<div class="space20">&nbsp;</div>
				<h6 class="contact-title">Business Enquiries</h6>
				<p>
					Doloremque laudantium, totam rem aperiam, <br>
					inventore veritatio beatae. <br>
					<a href="mailto:biz@betadesign.com">biz@betadesign.com</a>
				</p>
				<div class="space20">&nbsp;</div>
				<h6 class="contact-title">Employment</h6>
				<p>
					We’re always looking for talented persons to <br>
					join our team. <br>
					<a href="hr@betadesign.com">hr@betadesign.com</a>
				</p>
			</div>
		</div>
		</div> <!-- #content -->
		</div> <!-- .container -->
@endsection
