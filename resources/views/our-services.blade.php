@extends('layouts.app')
@section('content')

<!---- Section Start ----->
<section class="about-section">
	<div class="about-header">
		<img src='{{ asset("images/service-pic.jpg") }}' alt="service pic" title="service pic" />
		<div class="main-title">
			<div class="container">
				<h1><span>We work by</span><br class="clear"><span class="sub-title">Finely crafting your brand, bit by bit. *</span></h1>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="content">
			<div class="content-text">
				<h6> OUR SERVICES</h6>
				<p>We methodologically approach each job: one bold step at a time. We build the pillars of your unique identity. Chart your brand’s cosmos. Accentuate your brand’s reach, power, impact and reputation. Tell meaningful stories. Craft the right image.  Immerse ourselves to deliver experiences. Avoid formulas and advocate customization. And offer services that create results.</p>
				<p>From brief to implementation, we take a step back to see the bigger picture and then dive deep to concentrate on the details. By using our special blend of creativity and strategy, we sculpt solutions that evolve with you, target your precise audience and respond to market shifts. Brandem offers the requirements businesses and brands can no longer live without in this highly competitive era while going beyond the ordinary. Only the outstanding can make the cut.</p>
			</div>
				 <div class="we-help-service">
					<ul>
						@foreach($services as $s)
						<li>
							<a href=" {{ route('our-services-details', $s->id) }}">
								<div class="service-icon">
									<img src='{{ asset("images/$s->image") }}' alt="{{ $s->title }}" title="{{ $s->title }}" />
								</div>
								<div class="service-link">{{ $s->title }}</div>
							</a>
						</li>
						@endforeach
					</ul>
				
			</div>
		<div>
	</div>
</section>
<!---- Section End ----->

@endsection
