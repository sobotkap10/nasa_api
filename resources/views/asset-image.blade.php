@extends('master')
@section('content')

    <section class="container min-h-full text-white flex flex-col justify-center items-center">

        <h1 class="text-xl xl:text-3xl font-bold my-10">{{ $data['data'][0]['title'] }}</h1>
        <p class="xl:text-xs">{{ $data['data'][0]['description'] }}</p>

        <div class="my-10">
            <img class="min-w-full" src="{{ $data['links'][0]['href'] }}">
        </div>

    </section>

@endsection
