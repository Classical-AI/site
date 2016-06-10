@extends('_includes.blog_post_base')

@section('sidebar')
    @include('_includes.sidebar', ['category' => 'پردازش سیگنال'])
@endsection

@section('category_url') @url('signal/introduction') @endsection