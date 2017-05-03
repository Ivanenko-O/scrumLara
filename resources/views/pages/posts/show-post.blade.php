@extends('index)

@section('content')
<h1> {!! $post->title !!} </h1>
{{--<h1> {{ $post->title }}</h1>--}}

<?php echo $post->body; ?>
@endsection
