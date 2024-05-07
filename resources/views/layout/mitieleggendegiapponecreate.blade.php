@extends('layouts.app')
{{-- @extends('layout.mlg') --}}
@section('content')
<div class="container">
    <form method="POST" action="{{ route('mitieleggendegiappone.store') }}">
        {{-- istruzione sicurezza, cross site reforgering --}}
        @csrf

        @method('POST')
        {{-- in caso di succeeso --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        {{-- caso di errori --}}
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
            <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title') }}">
            {{-- con old vogliamo che se sbagliamo viene riportato il valore precedente --}}

        </div>

        <div class="form-group">
            {{-- <label for="body">BODY</label>
            <input type="textArea" class="form-control" name="body"  value="{{ old('body') }}"> --}}
            <textarea class="form-control" name="body">{{ old('body') }}</textarea>

        </div>

        {{-- <button type="button" id="btn-change-url" class="btn btn-info"></button> --}}
        <div class="form-group">
            <label for="url">Url</label>
            <div style="display: flex">
                <input type="file" id="url" class="form-control" name="url" value="{{ old('url') }}" readonly>
                {{-- &nbsp;&nbsp;
                <button type="button" id="btn-change-url" class="btn btn-info">CHANGE&nbsp;URL</button> --}}

            </div>
        </div>

        <div class="form-group">
            <label for="title">Preview</label>
            <br>
            <img id="photo-preview" class="photo-preview" style="display:none" src="{{ old('url') }}" alt=""
                srcset="" style="width:100px;height:100px;object-fit:cover;">
        </div>

        <button type="submit" class="btn btn-success">SUBMIT</button>

    </form>
</div>


    <script>
         // Gestisce l'evento change sull'input file
    document.getElementById('url').addEventListener('change', function(event) {
        const file = event.target.files[0]; // Ottiene il file selezionato
        const reader = new FileReader();

        // Legge il contenuto del file come URL
        reader.onload = function() {
            const photoUrl = reader.result;
            // $mitieleggendegiappone->url = '/img/Mitieleggendegiappone_img/' . $fileName . '.jpg';

            // document.getElementById('url').value = photoUrl;
            // document.getElementById('photo-preview').src = photoUrl;
            // document.getElementById('photo-preview').src = '/img/Mitieleggendegiappone_img/' + photoUrl;

            document.getElementById('photo-preview').src =  photoUrl;
            document.getElementById('photo-preview').style.display = 'block';

        };

        // Legge il file come URL
        reader.readAsDataURL( file);
    });
    </script>
@endsection
{{-- document.getElementById('btn-change-url').addEventListener('click', function() {

    const photoUrl = prompt('Photo url');

    if (photoUrl != null && photoUrl.trim() != '') {

        document.getElementById('url').value = photoUrl;
        document.getElementById('photo-preview').src = photoUrl;
        document.getElementById('photo-preview').style.display = 'block';
    }

}); --}}
