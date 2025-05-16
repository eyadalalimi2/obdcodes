@extends('site.layouts.site')

@section('content')
    <div class="text-center py-5">
        @if($site_logo)
            <img src="{{ asset('storage/' . $site_logo) }}" alt="{{ $site_name }}" class="mb-3" style="max-height: 150px;">
        @endif
        <h1>{{ $site_name }}</h1>
        <p>{{ $site_description }}</p>
        <a href="{{ route('site.codes') }}" class="btn btn-primary">{{ __('site.start_search') }}</a>
    </div>
@endsection
