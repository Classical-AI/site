@extends('_includes.base')

@section('body')

    <ol class="breadcrumb">
        <li><a href="@url('/')">خانه</a></li>
        @hasSection('post::category')
            <li><a href="@yield('category_url')">@yield('post::category')</a></li>
        @endif

        @hasSection('post::sub_category')
        <li>@yield('post::sub_category')</li>
        @endif

        <li class="active">@yield('post::title')</li>
    </ol>

    <div id="content" class="row">
        <div class="col-md-9">
            <h2>@yield('post::title')</h2>
                @yield('post_body')
        </div>

        <div class="col-md-3">
            @yield('sidebar')
        </div>
    </div>

@stop