@extends('layouts.app')
@section('content')
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
        <div>
            <img src="{{ $sardegna->url }}" alt="">
        </div>
        <div class="text-title">
            <h1>{{ $sardegna->title }}</h1>
        </div>
        <div class="text-body">
            <p>{{ $sardegna->body }}</p>
        </div>
        <div>
            <a class="btn btn-success" href="">
                Modifica</a>
            {{-- <a class="btn btn-success"  href="{{ route('sardegna.edit', ['sardegna' => $sardegna->id]) }}">
        Modifica</a> --}}

        </div>
        <div>
            <form method="POST" action="">
                {{-- @csrf
                @method('DELETE') --}}
                <input type="submit" value="Elimina" class="btn btn-danger">
            </form>
        </div>
        {{-- <div>
        <form method="POST" action="{{ route('sardegna.destroy', ['sardegna' => $sardegna->id]) }}">
            @csrf
                @method('DELETE')
                <input type="submit" value="Elimina" class="btn btn-danger">
        </form>
    </div> --}}
    </div>
@endsection
