@extends('layouts.app')
    @section('content')

    <style>
        @import url('https://fonts.cdnfonts.com/css/chinyen');
        @import url('https://fonts.cdnfonts.com/css/ethnocentric');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: #fff;
        }

        /* ***************************************************** */
        .slideShow {
            display: flex;
            /* justify-content: space-between; */
            /* Adjusted */
            /* align-items: center; */
            min-height: 70vh;
            background: url(/img/sfondo.jpg);
            background-size: cover;
            transform-style: preserve-3d;
            position: relative;
        }

        .slidercontainer {
            /* padding: 100px; */
            display: flex;
            align-items: center;
            width: calc(100% - 40px);
            /* margin: 0 60px; */

        }

        .box {
            /* width: 200px;
            height: 200px; */
            transform-style: preserve-3d;
            transition: 1s;
            /* inclinazione obliqua iniziale */
            transform: perspective(3000px) rotate(00deg);
            margin-left: 50%;
            align-items: center;
            text-align: center;
            justify-content: center;
        }


        .box span {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transform-origin: center;
            transform-style: preserve-3d;
            /* //distanza prima e ultima slide,grandezza slide */
            transform: rotateY(calc(var(--i)*45deg)) translateZ(300px);
            -webkit-box-reflect: below 0px linear-gradient(transparent, transparent 85%, #0004);
        }

        .box span img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            user-select: none;
        }

        .btn {
            display: flex;
            /* gap: 20px; */
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 1);
            transition: transform 0.3s ease;
        }

        .btn:hover {
            transform: scale(1.1)
        }

        .btn.prev {
            margin-right: auto;
            z-index: 1;
            z-index: 1;
            position: absolute;
            top: 50;
            left: 3%;
            display: block;
            visibility: visible;
        }

        .btn.next {
            margin-left: auto;
            z-index: 1;
            position: absolute;
            top: 50;
            right: 3%;
            display: block;
            visibility: visible;
        }

        .btns .btn {
            width: 60px;
            height: 60px;
            border: 2px solid #fff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }

        .card {
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.7);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);

        }
    </style>
    <div class="container">
        <div class="slideShow">
        <div class="slidercontainer">
            <div class="btns">
                <div class="btn prev"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                    </svg></div>
            </div>
            <div class="box">
                @foreach ($sardegnas as $sardegna)
                    <span
                        class="card "style="--i: {{ $sardegna->id-2 }}; width: 100px; height: 100px; background-image:url({{ $sardegna->url }});background-size:cover; align-items: center">
                        <a class="btn btn-primary" style="width: 100px; height: 100px;background-color: transparent"
                            href="{{ route('sardegnalayout.show', ['sardegnalayout' => $sardegna->id]) }}">
                            {{ $sardegna->title }}
                        </a>
                    </span>
                @endforeach
            </div>


            <div class="btns">
                <div class="btn next"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                    </svg></div>
            </div>
        </div>

        <script>
            let prev = document.querySelector('.prev');
            let next = document.querySelector('.next');
            let box = document.querySelector('.box');

            let degrees = 0;

            prev.addEventListener('click', function() {
                degrees += 45;
                box.style = `transform: perspective(1000px) rotateY(${degrees}deg)`;
            });

            next.addEventListener('click', function() {
                degrees -= 45;
                box.style = `transform: perspective(1000px) rotateY(${degrees}deg)`;
            });
        </script>
    </div>
    <div>
        <table class="table table-striped">
            <tbody>
                @foreach ($sardegnas as $sardegna)
                    <tr>

                        <td
                            style="width: 100px; height: 100px; background-image:url({{ $sardegna->url }});background-size:cover">
                        </td>
                        <td>{{ $sardegna->id }}</td>
                        <td>{{ $sardegna->title }}</td>
                        <td>{{ $sardegna->body }}</td>
                        <td>
                            <a class="btn btn-primary" style="width: 80px; height: 40px;"
                                href="{{ route('sardegnalayout.show', ['sardegnalayout' => $sardegna->id]) }}"> Dettagli</a>
                        </td>
                        <td>
                            <a class="btn btn-success" style="width: 100px; height: 40px;" href="">
                            Modifica</a>
                            {{-- <a class="btn btn-success"  href="{{ route('sardegnadetail.edit', ['sardegnadetail' => $sardegnadetail->id]) }}">
                            Modifica</a> --}}


                    </td>
                        <td>

                            <form method="POST" action="">
                                {{-- @csrf
                                    @method('DELETE') --}}
                                    <input type="submit" value="Elimina" class="btn btn-danger">
                            </form>
                        </div>
                        {{-- <div>
                            <form method="POST" action="{{ route('sardegnadetail.destroy', ['sardegnadetail' => $sardegnadetail->id]) }}">
                                @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Elimina" class="btn btn-danger">
                            </form>
                        </div> --}}
                        </td>


                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    </div>

@endsection
