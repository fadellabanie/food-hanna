@extends('application.layout.app')
@section('content')

<div class="p-5"></div>

<section class="about">
    <div class="container">
        <iframe src="{{$data['setting']->map}}" width="100%" height="450" style="border:0;" allowfullscreen=""
            loading="lazy"></iframe>
    </div>
</section>
<div class="p-5"></div>

@endsection