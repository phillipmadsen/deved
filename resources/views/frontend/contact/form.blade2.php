@extends('frontend/layout/layout')
@section('scripts')
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Store",
  "name": "The Grace Company",
  "description": "Manufacturer of quilting frames, quilting machines, hand quilting frames, quilting classes, quilting accessories and more.",
  "openingHours": "Mo-Fr 08:00-17:00",
  "telephone": "+18002640644",
  "sitemap": "http://www.quiltingindustry.com/sitemap",
  "address":
  {
  "@type": "PostalAddress",
  "streetAddress": "2225 South 3200 West",
  "addressLocality": "West Valley City",
  "addressRegion": "UT",
  "addressCountry": "USA"
  },
  "department":
  [
    {
      "@type": "Support",
      "name": "Grace Company Support",
      "description": "Support department for The Grace Company. They can help you with your frames, quiling machines, product trouble shooting and more.",
      "openingHours": "Mo-Fr 09:00-17:00",
      "telephone": "+18002640644"
    },
    {
      "@type": "Sales Department",
      "name": "Grace Company Sales",
      "description": "Get info on prices, being a dealer / distributor in this department!",
      "openingHours": "Mo-Fr 09:00-17:00",
      "telephone": "+18002640644",
      "branchOf":
      {
        "@type": "Corporation",
        "url": "http://www.quiltingindustry.com/",
        "name": "The Grace Company"
      }
    }
  ]
}
</script>
<script type="text/javascript">

    $(document).ready(function () {
        $('#notification').show().delay(4000).fadeOut(700);
    });
</script>
@stop

@section('pagetitle')
<!-- Page Title ============================================= -->
<section id="page-title">

	<div class="container clearfix">
		<h1>Contact</h1>
		<span>Get in Touch with Us</span>
		@yield('partial/breadcrumbs', Breadcrumbs::render('contact'))
	</div>

</section><!-- #page-title end -->
@stop
@section('content')

<section id="google-map" class="gmap slider"></section>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
  {!! HTML::script('frontend/js/jquery.gmap.js') !!}
<script type="text/javascript">
 	$('#google-map').gMap({
        address: 'West Valley City, Utah',
        maptype: 'ROADMAP',
        zoom: 14,
        markers: [
            {
                address: "West Valley City, Utah",
                html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">The <span>Grace Company</span></h4><p class="nobottommargin">Our mission is to help people to <strong>Quilt</strong> and to <strong>Provicde</strong> the right tools. We <strong>manufacture</strong> the tools that hundreds of thousands of people buy every day, and a network of educational blogs and resources where millions learn <strong>creative quilting skills</strong>.</p></div>',
                icon: {
                    image: "{!! url('frontend/images/icons/map-icon-red.png') !!}",
                    iconsize: [32, 39],
                    iconanchor: [32,39]
                }
            }
        ],
        doubleclickzoom: false,
        controls: {
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: false,
            streetViewControl: false,
            overviewMapControl: false
        }

    });

</script>

<section id="contact-page">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="row">
				<div class="postcontent nobottommargin ">
					<div class="row col_three_fourth">
							<h4>{!! trans('grace.contact_form') !!}</h4>
							@if(Session::has('notification'))
							<div class="alert alert-success" id="notification">
								{!! Session::get('notification') !!}
							</div>
							@endif
							<div class="status alert alert-success" style="display: none"></div>
							{!! Form::open(array('action' => 'FormPostController@postContact', 'class' => 'form')) !!}

								<!-- Sender Name Surname -->
								<div class="col_one_third control-group {!! $errors->has('sender_name_surname') ? 'has-error' : '' !!}">
									<div class="form-group">
										{!! Form::label('name', 'Full Name:', ['class' => 'template-contactform ']) !!}
										{!! Form::text('sender_name_surname', null, array('class'=>'form-control', 'id' => 'sender_name_surname', 'placeholder'=>trans('grace.name_and_surname'), 'value'=>Input::old('sender_name_surname'))) !!}
										@if ($errors->first('sender_name_surname'))
										<span class="help-block">
											{!! $errors->first('sender_name_surname') !!}
										</span>
										@endif
									</div>
								</div>
								<!-- Sender Email -->
								<div class="col_one_third control-group {!! $errors->has('sender_email') ? 'has-error' : '' !!}">
									<div class="form-group">
										{!! Form::label('email', 'Email:', ['class' => 'template-contactform ']) !!}
										{!! Form::text('sender_email', null, array('class'=>'form-control', 'id' => 'sender_email', 'placeholder'=>trans('grace.email'), 'value'=>Input::old('sender_email'))) !!}
										@if ($errors->first('sender_email'))
										<span class="help-block">
											{!! $errors->first('sender_email') !!}
										</span>
										@endif
									</div>
								</div>
								<!-- Sender Phone -->
								<div class="col_one_third col_last control-group {!! $errors->has('sender_phone_number') ? 'has-error' : '' !!}">
									<div class="form-group">
										{!! Form::label('phone', 'Phone:', ['class' => 'template-contactform ']) !!}
										{!! Form::text('sender_phone_number', null, array('class'=>'form-control', 'id' => 'sender_phone_number', 'placeholder'=>'(555) 555 5555', 'value'=>Input::old('sender_phone_number'))) !!}
										@if ($errors->first('sender_phone_number'))
										<span class="help-block">
											{!! $errors->first('sender_phone_number') !!}
										</span>
										@endif
									</div>
								</div>

								<!-- / SERVICE / Form Select Input -->
								<div class="col_half control-group {!! $errors->has('service') ? 'has-error' : '' !!}">
									<div class="form-group">
										{!! Form::label('service', 'Service:') !!}
										{!! Form::select('service', ['' => '-- Select One --', 'info' => 'Request Info', 'sales' => 'Sales Question', 'support' => 'Support', 'manager' => 'Request Management'], 'null', ['class' => 'form-control servicesselect']) !!}
										<small class="text-danger">
											{{ $errors->first('service') }}
										</small>
									</div>
								</div>

								<!-- Subject -->
								<div class="col_full control-group {!! $errors->has('subject') ? 'has-error' : '' !!}">
									<div class="form-group">
										{!! Form::text('subject', null, array('class'=>'form-control', 'id' => 'subject', 'placeholder'=>trans('grace.subject'), 'value'=>Input::old('subject'))) !!}
										@if ($errors->first('subject'))
										<span class="help-block">
											{!! $errors->first('subject') !!}
										</span>
										@endif
									</div>
								</div>
								<!-- Message -->
								<div class="col_full control-group {!! $errors->has('post') ? 'has-error' : '' !!}">
									<div class="form-group">
										{!! Form::textarea('message', null, array('class'=>'form-control', 'id' => 'message-content', 'placeholder'=>trans('grace.message'), 'value'=>Input::old('message'), 'rows'=>8)) !!}
										@if ($errors->first('post'))
										<span class="help-block">
											{!! $errors->first('post') !!}
										</span>
										@endif
									</div>
								</div>

						 		{!! Form::submit(trans('grace.button_send'), array('class' => 'btn btn-info')) !!}

							{!! Form::close() !!}
					</div>	<!--/.row -->
				</div>	<!--/.postcontent -->




<div class="col-md-3 col_last">
			<!-- Contact Info ============================================= -->

				<div itemscope itemtype="http://schema.org/Store">

				  <div><span itemprop="name"><strong>The Grace Company:</strong></span> <br>
				    <span itemprop="description">Manufacturer of quilting frames, quilting machines, hand quilting frames, quilting classes, quilting accessories and more.</span><br>
				     <i class="icon-time"></i><strong class="indent">Open:</strong> <time itemprop="openingHours" datetime="Mo-Fr 08:00-17:00">Monday-Friday 8am-5pm </time><br>
				     <i class="fa fa-refresh fa-spin"></i><abbr class="indent" title="Phone Number"><strong>Phone:</strong> </abbr> <span itemprop="telephone" content="+18002640644">+1-800-264-0644</span> <br>
				   	<i class="icon-stack"></i><abbr class="indent" title="Fax"><strong> Fax: </strong></abbr> +1 (800) 264 0644 <br>
					<i class="icon-envelope2"> </i><abbr class="indent" title="Email Address"> <strong> Email: </strong> </abbr> info@graceframe.com
				  </div>
						<hr>
				  <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><strong>Headquarters:</strong><br>
				    <span itemprop="streetAddress">2225 South 3200 West</span>, <br>
				    <span itemprop="addressLocality">West Valley City</span>,
				    <span itemprop="addressRegion">UT</span> <span itemprop="postalCode">84119</span> <span itemprop="addressCountry">USA</span>
				  </address>
						<hr>
				 <div itemprop="department" itemscope itemtype="http://schema.org/Support">
				   	<span itemprop="name"><strong>Grace Company Support</strong></span><br>
				   	<span itemprop="description">Support department for The Grace Company. They can help you with your frames, quiling machines, product trouble shooting and more.</span>
				   	<br>

				   	<i class="icon-time"></i><strong class="indent">Open:</strong> <time itemprop="openingHours" datetime="Mo-Th 09:00-12:00"> Monday-Friday 9am-5pm</time><br>
				   	<i class="icon-phone"></i><abbr class="indent" title="Phone Number"><strong>Phone:</strong> </abbr> <span itemprop="telephone" content="+18002640644">+1-800-264-0644</span><br>
				   <i class="icon-stack"></i>	<abbr class="indent" title="Fax"><strong> Fax: </strong></abbr> +1 (800) 264 0644 <br>
					 <i class="icon-envelope2"> </i><abbr class="indent" title="Email Address"> <strong> Email: </strong> </abbr>support@graceframe.com
				 </div>
				</div>
				<hr>

			</div><!--/.col-md-3 Contact Info End -->





















			</div>	<!--/.row -->
		</div>	<!--/.container -->














			</div>












		</div>
		<!--/#row-->
	</div>
	<!--/#container-->
</div>
<!--/#container-->
</div>
<!--/#content-wrap-->
</section>
<!--/#contact-page-->
@stop
@section('footerscripts')
@stop
