@extends('_layouts.master')

@section('title', 'Resume')

@section('content')
    <section class="section">
        <div class="container">

            <h1 class="title has-text-centered">
                <fa icon="spinner" class="fa-pulse fa-fw"></fa>
                Redirecting to resume
            </h1>

        </div>
    </section>
@endsection

@push('scripts')
<script>
window.open('{{ $page->site->owner->resume }}', '_self');
</script>
@endpush
