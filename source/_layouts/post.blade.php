@extends('_layouts.master')

@section('title', $page->title)

@section('content')
    <section class="section content" v-pre>
        <h1>{{ $page->title }}</h1>
        <strong>{{ date('F j, Y', $page->date) }}</strong>
        @yield('postContent')
    </section>
@endsection
