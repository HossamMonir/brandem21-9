@extends('admin.layouts.app')

@section('content')

<section class="content-header">
    <h1>Settings
        <small>Admin Settings</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin') }}"> Home</a></li>
        <li class="active">Admin Settings</li>
    </ol>
</section>

<section class="content container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="box">
                <form method="post" action="{{route('admin-update')}}">
                    @csrf

                    <div class="box-header">
                        <h3 class="box-title">Social Media</h3>
                    </div>
                    <div class="box-body row">
                        <div class="form-group col-3">
                            <label for="facebook"><i class="d-inline fab fa fa-facebook-square"></i> Facebook </label>
                            <input type="text" class="form-control" name="facebook" id="facebook" value="{{ $settings->facebook }}">
                        </div>
                        <div class="form-group col-3">
                            <label for="instagram"><i class="d-inline fab fa fa-instagram"></i> Instagram </label>
                            <input type="text" class="form-control" name="instagram" id="instagram" value="{{ $settings->instagram }}">
                        </div>
                        <div class="form-group col-3">
                            <label for="whatsapp"><i class="d-inline fab fa fa-whatsapp"></i> Whatsapp </label>
                            <input type="text" class="form-control" name="whatsapp" id="whatsapp" value="{{ $settings->whatsapp }}">
                        </div>
                        <div class="form-group col-3">
                            <label for="linkedin"><i class="d-inline fab fa fa-linkedin"></i> LinkedIn </label>
                            <input type="text" class="form-control" name="linkedin" id="linkedin" value="{{ $settings->linkedin }}">
                        </div>
                        <div class="form-group col-3">
                            <label for="youtube"><i class="d-inline fab fa fa-youtube-square"></i> Youtube </label>
                            <input type="text" class="form-control" name="youtube" id="youtube" value="{{ $settings->youtube }}">
                        </div>
                        <div class="form-group col-3">
                            <label for="pinterest"><i class="d-inline fab fa fa-pinterest-square"></i> Pinterest </label>
                            <input type="text" class="form-control" name="pinterest" id="pinterest" value="{{ $settings->pinterest }}">
                        </div>
                        <div class="form-group col-3">
                            <label for="twitter"><i class="d-inline fab fa fa-twitter-square"></i> Twitter </label>
                            <input type="text" class="form-control" name="twitter" id="twitter" value="{{ $settings->twitter }}">
                        </div>
                        <div class="form-group col-3">
                            <label for="vimeo"><i class="d-inline fab fa fa-vimeo-square"></i> Vimeo </label>
                            <input type="text" class="form-control" name="vimeo" id="vimeo" value="{{ $settings->vimeo }}">
                        </div>
                        <div class="form-group col-3">
                            <label for="snapchat"><i class="d-inline fab fa fa-snapchat-square"></i> Snapchat </label>
                            <input type="text" class="form-control" name="snapchat" id="snapchat" value="{{ $settings->snapchat }}">
                        </div>
                        <div class="form-group col-3">
                            <label for="tiktok"><i class="d-inline fab fa fa-tiktok"></i> Tiktok </label>
                            <input type="text" class="form-control" name="tiktok" id="tiktok" value="{{ $settings->tiktok }}">
                        </div>
                        <div class="form-group col-3">
                            <label for="flickr"><i class="d-inline fab fa fa-flickr"></i> Flickr </label>
                            <input type="text" class="form-control" name="flickr" id="flickr" value="{{ $settings->flickr }}">
                        </div>
                        <div class="form-group col-3">
                            <label for="tumblr"><i class="d-inline fab fa fa-tumblr-square"></i> Tumblr </label>
                            <input type="text" class="form-control" name="tumblr" id="tumblr" value="{{ $settings->tumblr }}">
                        </div>
                        <div class="form-group col-3">
                            <label for="github"><i class="d-inline fab fa fa-github-square"></i> Github </label>
                            <input type="text" class="form-control" name="github" id="github" value="{{ $settings->github }}">
                        </div>
                        <div class="form-group col-3">
                            <label for="googleplus"><i class="d-inline fab fa fa-google-plus-square"></i> Google Plus </label>
                            <input type="text" class="form-control" name="googleplus" id="googleplus" value="{{ $settings->googleplus }}">
                        </div>
                    </div>

                    <div class="box-header">
                        <h3 class="box-title">Contact Details</h3>
                    </div>
                    <div class="box-body row">
                        <div class="form-group col-6">
                            <label for="contact_email">Contact Email</label>
                            <input type="email" id="contact_email" name="contact_email" class="form-control" value="{{ $settings->contact_email }}" placeholder="Contact Email">
                        </div>
                        <div class="form-group col-6">
                            <label for="contact_tel">Contact tel</label>
                            <input type="tel" id="contact_tel" name="contact_tel" class="form-control" value="{{ $settings->contact_tel }}" placeholder="Contact tel">
                        </div>
                        <div class="form-group col-6">
                            <label for="contact_phone">Contact phone</label>
                            <input type="phone" id="contact_phone" name="contact_phone" class="form-control" value="{{ $settings->contact_phone }}" placeholder="Contact phone">
                        </div>
                        <div class="form-group col-6">
                            <label for="contact_address">Contact address</label>
                            <input type="text" id="contact_address" name="contact_address" class="form-control" value="{{ $settings->contact_address }}" placeholder="Contact address">
                        </div>
                        <div class="form-group col-6">
                            <label for="contact_latitude">Contact latitude</label>
                            <input type="text" id="contact_latitude" name="contact_latitude" class="form-control" value="{{ $settings->contact_latitude }}" placeholder="Contact latitude">
                        </div>
                        <div class="form-group col-6">
                            <label for="contact_longitude">Contact longitude</label>
                            <input type="text" id="contact_longitude" name="contact_longitude" class="form-control" value="{{ $settings->contact_longitude }}" placeholder="Contact longitude">
                        </div>
                    </div>

                    <div class="box-header">
                        <h3 class="box-title">Digital Marketing</h3>
                    </div>
                    <div class="box-body row">
                        <div class="form-group col-6">
                            <label for="google_analytics_code">Google Analytics Code</label>
                            <input type="text" id="google_analytics_code" name="google_analytics_code" class="form-control" value="{{ $settings->google_analytics_code }}" placeholder="Google Analytics">
                        </div>
                        <div class="form-group col-6">
                            <label for="facebook_pixel_code">Facebook Pixel Code</label>
                            <input type="text" id="facebook_pixel_code" name="facebook_pixel_code" class="form-control" value="{{ $settings->facebook_pixel_code }}" placeholder="Facebook Pixel">
                        </div>
                    </div>

                     <div class="box-header">
                        <h3 class="box-title">Careers</h3>
                    </div>
                    <div class="box-body row">
                          <div class="form-group col-12">
                            <label for="offer">Description</label>
                            <textarea class="form-control" name="description" id="offer" value="">{!! $settings->description !!}</textarea>
</div></div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
