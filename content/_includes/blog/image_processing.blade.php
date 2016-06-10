@extends('_includes.blog_post_base')

@section('sidebar')
    @include('_includes.sidebar', ['category' => 'پردازش تصویر'])
@endsection

@section('category_url') @url('image-processing/introduction') @endsection