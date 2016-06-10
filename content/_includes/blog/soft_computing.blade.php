@extends('_includes.blog_post_base')

@section('sidebar')
    @include('_includes.sidebar', ['category' => 'هوش محاسباتی'])
@endsection

@section('category_url') @url('soft-computing/introduction') @endsection