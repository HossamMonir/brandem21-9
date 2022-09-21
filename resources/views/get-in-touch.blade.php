@extends('layouts.app')

@section('content')

    <!---- Section Start ----->
    <section>
    	<div class="container">
            <div class="get-touch-center">
                <div class="get-touch-main">
                    <h1>We love to communicate.<span>Reach out to us so we can</span><span>help your brand reach out.</span></h1>
                    <div class="get-form">
                        <form action="{{route('mail.send')}}" method="post" class="row">
                        @csrf

                            @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                            @endif

                            <div class="col-6"><input type="text" name="first_name" id="first_name" placeholder="First Name"></div>
                            <div class="col-6"><input type="text" name="last_name" id="last_name" placeholder="Last Name"></div>
                            <div class="col-6"><input type="text" name="email" id="email" required placeholder="Email"></div>
                            <div class="col-6"><input type="text" name="telephone" id="telephone" required placeholder="Telephone"></div>
                            <div class="col-6"><input type="text" name="company" id="company" placeholder="Company"></div>
                            <div class="col-6"><input type="text" name="title" id="title" placeholder="Title"></div>



                            <div class="col-12">
                                <div class="interested">Anything else?</div>
                                <textarea cols="0" rows="0" name="anything_else"></textarea>
                            </div>
                            
                            <input type="hidden" name="interest" id="interest" value="">
                            
                            <div class="col-12">
                                <input name="submit"  id="submit" type="submit" value="SUBMIT">
                            </div>
                        </form>
                    </ul>
                </div>

                <div class="map-part">
                    <div class="map-subtitle">Office:</div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.102294098159!2d35.556879415036555!3d33.887019233866596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151f16240b3a8431%3A0xd98f4ba42291b38c!2sBrandem!5e0!3m2!1sen!2slb!4v1655233708368!5m2!1sen!2slb" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div id="career" class="careers-part">
                    <h6>* CAREERS</h6>
                    <p>Calling all <strong>eager strategists, research devotees, creative minds and agents of change:</strong> the perfect work culture is right here. If you hate clichés like “think outside-the-box” and genuinely want something fresh, then Brandem is the place to nurture your career. We’re always ready to hire and collaborate with talent.</p>
                    <p>Send your CV, cover letter and portfolio to <a title="mail" href="mailto:info@wearebrandem.com">info@wearebrandem.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!---- Section End ----->

@endsection
