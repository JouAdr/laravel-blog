@extends('master')

@section('meta')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ setting('site.description') }}">
    <meta name="author" content="Gekkode">
@endsection

@section('title')
    <title>{{ $post['title'] }} - {{ setting('site.title') }}</title>
@endsection

@section('content')
    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4">{{ $post['title'] }}</h1>

            <!-- Author -->
            <p class="lead">
                par
                {{ $post->user['name'] }}
            </p>
            <hr>

            <!-- Date/Time -->
            <p>Posté le {{ $post->created_at->format('d/m/Y') }}</p>
            <hr>

            <!-- Preview Image -->
            <img class="img-fluid rounded" src="{{ Illuminate\Support\Facades\Storage::url($post->featured_image) }}"
                alt="">
            <hr>

            <!-- Post Content -->
            {!! $post->content !!}
            <hr>

        </div>
        @include('_partials.sidebar')

    </div>
@endsection
