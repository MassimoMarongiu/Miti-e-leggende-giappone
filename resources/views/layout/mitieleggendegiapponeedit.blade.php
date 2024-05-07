@extends('layout.mlg')
@extends('layouts.app')
@section('mitieleggendegiappone')
    <style>
        .giapponeedit {
            margin-top: -30px;
            margin-bottom: 100px;
        }
    </style>
    {{-- <form method="POST" action=""> --}}
    <div class="container">
        <div class="giapponeedit">

            <form method="POST"
                action="{{ route('mitieleggendegiappone.update', ['mitieleggendegiappone' => $mitieleggendegiappone->id]) }}">
                @csrf
                @method('PUT')

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title"
                        value="{{ old('title', $mitieleggendegiappone->title) }}">{{-- old recupera il valore e risetta --}}
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" name="body">{{ old('body', $mitieleggendegiappone->body) }}</textarea>

                    {{-- <input type="textarea" class="form-control" name="body"
                        value="{{ old('body', $mitieleggendegiappone->body) }}"> --}}
                        {{-- old recupera il valore e risetta --}}
                </div>

                <div class="form-group">
                    <label for="url">Url</label>
                    <div style="display: flex">
                        <input id="url" type="text" class="form-control" name="url"
                            value="{{ old('url', $mitieleggendegiappone->url) }}" readonly>
                        &nbsp;&nbsp;
                        <button type="button" id="btn-change-url" class="btn btn-info">CHANGE&nbsp;URL</button>
                    </div>
                </div>

                <div class="form-group">
                    <label for="title">Preview</label>
                    <br>
                    <img id="photo-preview" class="photo-preview" src="{{ $mitieleggendegiappone->url }}" alt=""
                        srcset="" style="width:100px;height:100px;object-fit:cover;">
                </div>

                <button type="submit" class="btn btn-success">SUBMIT</button>

            </form>

            <script>
                document.getElementById('btn-change-url').addEventListener('click', function() {

                    const photoUrl = prompt('Photo url');

                    if (photoUrl != null && photoUrl.trim() != '') {

                        document.getElementById('url').value = photoUrl;
                        document.getElementById('photo-preview').src = photoUrl;
                    }

                });
            </script>

        </div>

    </div>

@endsection
