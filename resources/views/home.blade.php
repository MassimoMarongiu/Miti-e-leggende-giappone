@extends('layouts.app')
@section('content')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/ethnocentric" rel="stylesheet">

    <style>
        h1 {
            font-family: 'Ethnocentric Rg';
            font-size: 30px;
        }

        .container-fluid {
            flex-flow: row wrap;
            margin-top: 40px;
            margin-bottom: 50px;

        }

        .boxnested {
            height: 600px;
        }

        .img {
            border-radius: 10px;
            box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.8);

        }


        /* .text-center {
                            color: #212121;
                            text-align: center;
                            text-decoration: none;
                            width: 85%;
                            overflow-wrap: break-word;
                            border-radius: 10px;
                            box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.8);
                            background-color: rgba(255, 255, 255, 0.3);
                            position: absolute;
                            top: 50%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                            text-align: center;
                            text-shadow: 2px 2px 3px #ccc;
                        } */



        @media (min-width: 768px) {

            .carousel-control-prev-icon,
            .carousel-control-next-icon {
                height: 95%;
                width: 80%;
                outline: black;
                background-color: rgba(0, 0, 0, 0.2);
                background-size: 100%, 100%;
                text-size-adjust: 100%;
            }

            .carousel-control-next-icon {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23009be1' viewBox='-7 0 20 10 '%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
                right: -2%;
            }

            .carousel-control-prev-icon {
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23009be1' viewBox='-7 0 20 10'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
            }
        }

        .carousel-control-prev {
            margin-left: -1%;
        }

        .carousel-control-next {
            margin-right: 1%;

        }

        :root {
            --gold: #ffb338;
            --light-shadow: #77571d;
            --dark-shadow: #3e2904;
        }

        .wrapper {
            background-color: transparent;
            display: grid;
            grid-template-areas: 'overlap';
            place-content: center;
            text-transform: uppercase;
            height: 30vh;

        }

        .wrapper>div {
            background-clip: text;
            -webkit-background-clip: text;
            color: #363833;
            font-family: 'Poppins', sans-serif;
            font-weight: 50;
            font-size: clamp(3em, 18vw, 15rem);
            grid-area: overlap;
            letter-spacing: 1px;
            justify-content: center;
            -webkit-text-stroke: 4px transparent;
        }

        div.bg {
            background-image: repeating-linear-gradient(105deg,
                    var(--gold) 0%,
                    var(--dark-shadow) 5%,
                    var(--gold) 12%);

            color: transparent;
            filter: drop-shadow(5px 15px 15px black);
            transform: scaleY(1.05);
            transform-origin: top;
        }

        div.fg {
            background-image: repeating-linear-gradient(5deg,
                    var(--gold) 0%,
                    var(--light-shadow) 23%,
                    var(--gold) 31%);
            color: #1e2127;
            transform: scale(1);
        }
        h3{
            justify-content: center;
            color: rgb(213, 216, 218);
        }
        p{
            color: rgb(223, 211, 196);
        }

    </style>
    <div class="wrapper">
        <div class="bg"> M&L </div>
        <div class="fg"> M&L </div>
    </div>
    <div class="body_slider_giappo">
        <div class="container-fluid">
            <div id="carouselExample" class="carouselPrograms carousel slide" data-ride="carousel" data-interval="5000">
                <div class="carousel-inner row w-100 " role="listbox">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="carousel-item col-md-12 {{ $i === 0 ? 'active' : '' }}">
                            <div class="boxnested">
                            </div>
                        </div>
                    @endfor
                </div>
                <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
                <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
            </div>
        </div>
    </div>
    <div class="px-4 py-5 my-5 text-center">
        <h3>Miti e Leggende </h3>
        <p>Benvenuti nel cuore dell'incanto, dove la storia si mescola con la leggenda e la realtà si confonde con il
            soprannaturale.
            Il nostro sito è un portale magico che ti porterà in un viaggio attraverso due mondi affascinanti: il Giappone e
            la Sardegna.
            Da antiche tradizioni a misteri senza tempo, esploreremo le ricche narrazioni che hanno plasmato queste due
            culture uniche nel mondo.</p>
        <p> Immergiti nell'affascinante mondo dei kami, degli spiriti e delle creature mitiche
            del Giappone. Dalle epiche gesta dei samurai alle storie delle yokai che si nascondono nell'ombra, scopriremo il
            fascino e la profondità delle leggende giapponesi che hanno ispirato generazioni.</p>
        <h3> Misteri della Sardegna</h3>
        <p>Scopri i segreti dell'isola mediterranea della Sardegna, dove antiche tradizioni si
            intrecciano con le leggende dei nuraghi e dei folletti. Dai misteri delle tombe dei giganti alle leggende dei
            custodi delle acque, esploreremo la magia e il mistero che permea la terra sarda.</p>
        <h3>Incontri Culturali</h3>
        <p> In questa sezione, esploreremo gli incontri e le influenze culturali tra il Giappone e la
            Sardegna. Dalla condivisione di tradizioni ancestrali alla scoperta di similitudini sorprendenti nelle leggende
            e nei miti, questo è il luogo dove le due culture si incontrano e si mescolano.</p>
        <h3>Esperienze Interattive</h3>
        <p>
            Invitiamo gli appassionati di miti e leggende a partecipare attivamente alla nostra
            comunità. Qui puoi condividere le tue esperienze, leggere le storie degli altri e partecipare a discussioni
            appassionanti sulla cultura e sul folklore del Giappone e della Sardegna.</p>
        <p> Sia che tu sia affascinato dalla maestosità del Giappone o incuriosito dai misteri della Sardegna, il nostro
            sito
            offre un viaggio senza tempo attraverso due mondi incantevoli. Unisciti a noi mentre esploriamo le profondità
            della cultura e del folklore di queste terre magiche e scopriamo le storie che le rendono così uniche e
            affascinanti.</p>


        </p>
    </div>

    <script>
        $(document).ready(function() {
            $.ajax({
                url: '/api/layout',
                method: 'get',
                success: function(data) {

                    for (let i = 0; i < data.length; i++) {
                        $('.carousel-item:eq(' + i + ') .boxnested').html(
                            '<img class="d-block w-100" style="height:600px;" src="' + data[i].url +
                            '" alt="' + data[i].title + '">');
                    }
                }
            });

        });
    </script>
@endsection
