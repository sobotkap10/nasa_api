@extends('master')
@section('content')

    <section class="container min-h-full text-white flex flex-col justify-center items-center">

        <h1 class="text-xl xl:text-3xl font-bold my-10">{{ $data['title'] }}</h1>
        <p class="xl:text-xs">{{ $data['description'] }}</p>

        <div class="my-10">
            <audio controls>
              <source src="{{ $data['audio_link'] }}" type="audio/mpeg">
            Your browser does not support the audio element.
            </audio>
        </div>

    </section>

@endsection
