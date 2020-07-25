@extends('admin.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="content" style="margin-top: 7%">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title "> {{trans('messages.manage_posts')}}</h4>
                <p class="card-category"><a href="{{ route('dashboard')}}">{{trans('messages.settings')}}</a> -> <a
                    href="{{route('settings.index')}}">{{trans('messages.settings')}}</a></p>
                </div>
                <div class="card-body">

                    {{ Form::model($setting, ['route' => ['settings.update', $setting], 'method' => 'PUT','files' => true]) }}
                    @include('admin.settings.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('scripts')
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>
    @endsection