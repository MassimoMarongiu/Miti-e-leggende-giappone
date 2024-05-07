@extends('layouts.app')
@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"
        integrity="sha512-JRlcvSZAXT8+5SQQAvklXGJuxXTouyq8oIMaYERZQasB8SBDHZaUbeASsJWpk0UUrf89DP3/aefPPrlMR1h1yQ=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.min.js"
        integrity="sha512-S5PZ9GxJZO16tT9r3WJp/Safn31eu8uWrzglMahDT4dsmgqWonRY9grk3j+3tfuPr9WJNsfooOR7Gi7HL5W2jw=="
        crossorigin="anonymous"></script>

    {{-- <link rel="stylesheet" href="{{asset('css/site.css')}}"> --}}

    <script>
        $(document).ready(function() {

            $.ajax({
                url: '/api/layout', //cerca in routes api
                method: 'get',
                success: function(data) {

                    var testo = $('.grid').html("");

                    for (var i = 3 - 1; i >= 0; i--) {
                    // for (var i = data.length - 1; i >= 0; i--) {
                        console.log(data[i].title);
                        console.log(data[i].url);
                    $('.grid').append('<div class="grid-item"><img src='+data[i].url+'></div>');

                    }

                    // $('.grid').append('<div class="grid-item"><img src='+data[data.length - 1].url+'></div>');



                    // init Masonry
                    var $grid = $('.grid').masonry({
                        itemSelector: '.grid-item'
                    });

                    // layout Masonry after each image loads
                    $grid.imagesLoaded().progress(function() {
                        $grid.masonry('layout');
                    });

                }
            });

        });
    </script>
    <header>
        <div>Welcome Home</div>
        </div>

    </header>

    <main>

        <div class="grid" style="position: relative; height: 2506.98px;">
        </div>

    </main>
@endsection
