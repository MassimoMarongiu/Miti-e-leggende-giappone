@extends('layout.mitieleggendegiappone')

@section('slidermitieleggendegiappone')
<style>
    .body-details {
        display: flex;
        flex-direction: column;
    }
</style>
details
<a href="/mitieleggendegiappone">main</a>
<a href="/mlg">giappone list</a>
<a href="/sardegnalayout">sardegna</a>
{{-- mitieleggendegiapponedetails --}}
<div class="body-details">
    <div> <img src="{{ $mitiELeggende->url }}" alt=""></div>
    <div class="text-title">
        <h1>{{ $mitiELeggende->title }}</h1>
    </div>
    <div class="text-body">
        <p>{{ $mitiELeggende->body }}</p>
    </div>
</div>

    @endsection
