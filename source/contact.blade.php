@extends('_layouts.master')

@section('title', 'Contact')

@section('content')
    <section class="section">
        <div class="container">

            <div class="columns">
                <div class="column is-6 is-offset-3">
                    <h1 class="title has-text-centered">Contact page</h1>

                    <contact-form/>
                </div>
            </div>

        </div>
    </section>
@endsection
