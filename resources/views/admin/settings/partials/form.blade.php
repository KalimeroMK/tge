<div class="row">
    @include('admin.layouts.notify');
    <h4 class="title"></h4>
    <div class="fileinput text-center fileinput-new col-12" data-provides="fileinput">
        <div class="fileinput-new thumbnail img-circle">
            <img src="@if(empty($setting->featured_image)){{ asset('images/image_placeholder.jpg')}}@else {{ old('featured_image', $setting->imageUrl ?? null) }}@endif"
            alt="image">

        </div>
        <div class="fileinput-preview fileinput-exists thumbnail img-circle" style=""></div>
        <div>
          <span class="btn btn-round btn-rose btn-file">
            <span class="fileinput-new">Add Photo</span>
            <span class="fileinput-exists">Change</span>
            <input type="hidden" value="" name="..."><input type="file" name="featured_image">
            <div class="ripple-container"></div></span>
            <br>
            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput">
                <i class="fa fa-times"></i> Remove
                <div class="ripple-container">
                    <div class="ripple-decorator ripple-on ripple-out"
                    style="left: 62px; top: 25.6719px; background-color: rgb(255, 255, 255); transform: scale(15.5098);"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <input name="title" type="text" class="form-control" placeholder="{{trans('messages.title')}}"
            value="{{ old('title', $setting->title ?? null) }}"/>
        </div>
        @if ($errors->has('facebook')) <p
        class="alert alert-danger">{{ $errors->first('facebook') }}</p> @endif
        <div class="form-group">
            <input name="mainurl" type="text" class="form-control" placeholder="{{trans('messages.url')}}"
            value="{{ old('mainurl', $setting->mainurl ?? null) }}"/>
        </div>
        @if ($errors->has('mainurl')) <p
        class="alert alert-danger">{{ $errors->first('mainurl') }}</p> @endif
        <div class="form-group">
            <input name="email" type="email" class="form-control" placeholder="{{trans('messages.email')}}"
            value="{{ old('email', $setting->email ?? null) }}"/>
        </div>
        @if ($errors->has('email')) <p
        class="alert alert-danger">{{ $errors->first('email') }}</p> @endif
        <div class="form-group">
            <input name="address" type="text" class="form-control" placeholder="{{trans('messages.address')}}"
            value="{{ old('address', $setting->address ?? null) }}"/>
        </div>
        @if ($errors->has('address')) <p
        class="alert alert-danger">{{ $errors->first('address') }}</p> @endif
        <div class="form-group">
            <input name="phone" type="text" class="form-control" placeholder="{{trans('messages.phone')}}"
            value="{{ old('phone', $setting->phone ?? null) }}"/>
        </div>
        @if ($errors->has('phone')) <p
        class="alert alert-danger">{{ $errors->first('phone') }}</p> @endif
        <div class="form-group">
            <input name="twitter" type="text" class="form-control" placeholder="{{trans('messages.twitter')}}"
            value="{{ old('twitter', $setting->twitter ?? null) }}"/>
        </div>
        @if ($errors->has('twitter')) <p
        class="alert alert-danger">{{ $errors->first('twitter') }}</p> @endif
    </div>
    <div class="col-6">
        <div class="form-group">
            <input name="facebook" type="text" class="form-control" placeholder="{{trans('messages.facebook')}}"
            value="{{ old('facebook', $setting->facebook ?? null) }}"/>
        </div>
        @if ($errors->has('facebook')) <p
        class="alert alert-danger">{{ $errors->first('facebook') }}</p> @endif
        <div class="form-group">
            <input name="skype" type="text" class="form-control" placeholder="{{trans('messages.skype')}}"
            value="{{ old('skype', $setting->skype ?? null) }}"/>
        </div>
        @if ($errors->has('skype')) <p
        class="alert alert-danger">{{ $errors->first('skype') }}</p> @endif
        <div class="form-group">
            <input name="linkedin" type="text" class="form-control" placeholder="{{trans('messages.linkedin')}}"
            value="{{ old('linkedin', $setting->linkedin ?? null) }}"/>
        </div>
        @if ($errors->has('linkedin')) <p
        class="alert alert-danger">{{ $errors->first('linkedin') }}</p> @endif
        <div class="form-group">
            <input name="gplus" type="text" class="form-control" placeholder="{{trans('messages.google_plus_url')}}"
            value="{{ old('gplus', $setting->gplus ?? null) }}"/>
        </div>
        @if ($errors->has('gplus')) <p
        class="alert alert-danger">{{ $errors->first('gplus') }}</p> @endif
        <div class="form-group">
            <input name="youtube" type="text" class="form-control" placeholder="{{trans('messages.youtube')}}"
            value="{{ old('youtube', $setting->youtube ?? null) }}"/>
        </div>
        @if ($errors->has('youtube')) <p
        class="alert alert-danger">{{ $errors->first('youtube') }}</p> @endif
        <div class="form-group">
            <input name="flickr" type="text" class="form-control" placeholder="{{trans('messages.flickr')}}"
            value="{{ old('flickr', $setting->flickr ?? null) }}"/>
        </div>
        @if ($errors->has('flickr')) <p
        class="alert alert-danger">{{ $errors->first('flickr') }}</p> @endif
        <div class="form-group">
            <input name="pinterest" type="text" class="form-control" placeholder="{{trans('messages.pinterest')}}"
            value="{{ old('pinterest', $setting->pinterest ?? null) }}"/>
        </div>
        @if ($errors->has('pinterest')) <p
        class="alert alert-danger">{{ $errors->first('pinterest') }}</p> @endif
    </div>
</div>
<label for="description">Детален текст</label>
<textarea class="ckeditor" id="elm3"
name="description">{{ old('description', $setting->description ?? null) }}</textarea>
<div class="form-actions">
    <div class="row">
        <div class="col-md-offset-3 col-md-9">
            {{ Form::submit(trans('messages.save'), ['name' => 'submit', 'class'=>'btn purple' ]) }}
        </div>
    </div>
</div>