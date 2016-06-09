@extends('_includes.blog_post_base')

@section('sidebar')
    @include('_includes.sidebar', ['category' => 'هوش مصنوعی'])
@endsection

@section('category_url') @url('ai/introduction') @endsection