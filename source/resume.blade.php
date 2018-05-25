@extends('_layouts.master')

@section('title', 'Resume')

@section('content')
    <h1 class="title has-text-centered">
        <fa icon="spinner" class="fa-pulse fa-fw"></fa>
        Redirecting to resume
    </h1>
@endsection

@push('scripts')
<script>
window.open('{{ $page->site->owner->resume }}', '_self');
</script>
@endpush
