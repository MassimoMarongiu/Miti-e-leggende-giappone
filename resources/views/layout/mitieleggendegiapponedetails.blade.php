@extends('layout.mlg')
@extends('layouts.app')
@section('mitieleggendegiappone')
<style>
    .body-details {
        display: flex;
        flex-direction: column;
        margin-bottom: 100px;
        color: aliceblue    ;
    }
    .buttons {
        display: flex;
        justify-content: right;
        gap: 20px;
        flex-direction: row;
    }
</style>
{{-- mitieleggendegiapponedetails --}}
<div class="body-details">
    <div>
        <h1>{{ $mitieleggendegiappone->title }}</h1>
        <img src="{{ $mitieleggendegiappone->url }}" alt=""></div>
    <div class="text-title">
    </div>
    <div class="text-body">
        <p>{{ $mitieleggendegiappone->body }}</p>
    </div>
    <div class="buttons">
        <a class="btn btn-success"  href="{{ route('mitieleggendegiappone.edit', ['mitieleggendegiappone' => $mitieleggendegiappone->id]) }}">
        Modifica</a>

        <form method="POST" action="{{ route('mitieleggendegiappone.destroy', ['mitieleggendegiappone' => $mitieleggendegiappone->id]) }}">
            @csrf
                @method('DELETE')
                <input type="submit" value="Elimina" class="btn btn-danger">
        </form>
    </div>
</div>

    @endsection
