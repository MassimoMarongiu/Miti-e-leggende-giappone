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


    <header>
        <div>Welcome Home</div>
        </div>

    </header>

    <main>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleControls" data-slide="0" class="active"></li>
                <li data-target="#carouselExampleControls" data-slide="1"></li>
                <li data-target="#carouselExampleControls" data-slide="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" id="first"></div>
                <div class="carousel-item " id="second"></div>
                <div class="carousel-item " id="third"></div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </main>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: '/api/layout',
                method: 'get',
                success: function(data) {

                    for (let i = 0; i < 3; i++) {

                        $('#first').html('<img class="d-block w-100" src="' + data[2].url +
                            '" alt="First slide">');
                        $('#second').html('<img class="d-block w-100" src="' + data[3].url +
                            '" alt="Second slide">');
                        $('#third').html('<img class="d-block w-100" src="' + data[4].url +
                            '" alt="Third slide">');
                    }
                }
            });

        });
    </script>
    </main>
@endsection
