@extends('layout.mitieleggendegiappone')
{{-- @extends('layouts.app') --}}
{{-- https://www.youtube.com/watch?v=6QE8dXq9SOE --}}
{{-- // https://www.youtube.com/watch?v=iLmBy-HKIAw --}}
@section('slidermitieleggendegiappone')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/ethnocentric" rel="stylesheet">

    <style>
        /* ***********************titleSlideShow****************************** */



        h1 {
            font-family: 'Ethnocentric Rg';
            font-size: 30px;
        }

        .container-fluid {
            flex-flow: row wrap;
            margin-top: 40px;
            margin-bottom: 50px;

        }

        .panel-default {
            /* border: solid; */

            border-color: black;
            border-radius: 10px;
            box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.8);
            transition: all 0.1s ease-in-out;
            justify-content: center;
            max-height: 400px;


        }

        .img {
            border-radius: 10px;
            box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.8);
        }

        .panel-thumbnail {
            justify-content: center;
            align-items: stretch;
            border-color: black;
            border-radius: 10px;
            box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.8);
        }

        .panel-default:hover {
            transform: scale(1.1);
            transition: 0.1s ease-in-out;

        }

        .panel-default:hover .text-center {
            height: 85%;
        }

        .panel-default:active {
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.5);
            transform: translateY(3px);
        }

        .text-body {
            visibility: hidden;
        }

        .panel-default:hover .text-body {
            visibility: visible;
            height: 85%;
        }

        .text-center {
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
        }



        @media (min-width: 768px) {

            /* show 3 items */
            .carouselPrograms .carousel-inner .active,
            .carouselPrograms .carousel-inner .active+.carousel-item,
            .carouselPrograms .carousel-inner .active+.carousel-item+.carousel-item {
                display: block;
            }

            /* Transition */
            .carouselPrograms .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
            .carouselPrograms .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item,
            .carouselPrograms .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item+.carousel-item {
                transition: transform 0s ease-in-out;
                /* Aggiunto il tipo di transizione */
            }

            /* Left direction */
            .carouselPrograms .active.carousel-item-left+.carousel-item-next.carousel-item-left,
            .carouselPrograms .carousel-item-next.carousel-item-left+.carousel-item,
            .carouselPrograms .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item,
            .carouselPrograms .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item+.carousel-item {
                position: relative;
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }

            /* farthest right hidden item must be abso position for animations */
            .carouselPrograms .carousel-inner .carousel-item-prev.carousel-item-right {
                position: absolute;
                top: 0;
                left: 0%;
                z-index: -1;
                display: block;
                visibility: visible;
            }

            .carouselPrograms .carousel-inner .carousel-item-next {
                position: relative;
                transform: translate3d(0, 0, 0);
            }

            .carouselPrograms .carousel-inner .active.carousel-item+.carousel-item+.carousel-item+.carousel-item {
                position: absolute;
                top: 0;
                right: -33.333%;
                z-index: -1;
                display: block;
                visibility: visible;
            }

            /* Right direction */
            .carouselPrograms .active.carousel-item-right+.carousel-item-prev.carousel-item-right,
            .carouselPrograms .carousel-item-prev.carousel-item-right+.carousel-item,
            .carouselPrograms .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item,
            .carouselPrograms .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item+.carousel-item {
                position: relative;
                transform: translate3d(100%, 0, 0);
                visibility: visible;
            }

        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            height: 95%;
            width: 80%;
            outline: black;
            background-color: rgba(0, 0, 0, 0.2);
            background-size: 100%, 100%;
            /* border: 1px solid black; */
        }

        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23009be1' viewBox='-7 0 20 10 '%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");

        }

        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23009be1' viewBox='-7 0 20 10'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");

        }
    </style>

    @php
        $id = [];
        $title = [];
        $body = [];
        $url = [];
        for ($i = 0; $i < 10; $i++) {
            $mitieleggendegiappone = $mitieleggendegiappones[$i];
            $id[$i] = $mitieleggendegiappone->id;
            $title[$i] = $mitieleggendegiappone->title;
            $body[$i] = $mitieleggendegiappone->body;
            $url[$i] = $mitieleggendegiappone->url;
        }
    @endphp
    {{-- <a href="{{route('/mitieleggendegiappone.showDetailsMitieleggendegiappone') }}" title="{{ $title[$i] }}" class="thumb"> --}}
    <div class="body_slider_giappo">
        <div class="container-fluid">
            <div id="carouselExample" class="carouselPrograms carousel slide" data-ride="carousel" data-interval="1000">
                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                    @for ($j = -50; $j < 50; $j++)
                        @for ($i = 0; $i < count($url); $i++)
                            <div class="carousel-item col-md-4 {{ $i === 0 && $j === 0 ? 'active' : '' }}">
                                <div class="panel panel-default">
                                    <div class="panel-thumbnail">
                                                {{-- <a href="{{ route('mitieleggendegiapponelist.show', ['mitieleggendegiapponelist' => $id[$i]]) }}" class="thumb"> --}}
                                                <a href="{{ route('mitieleggendegiappone.show', ['mitieleggendegiappone' => $id[$i]]) }}" class="thumb">
                                                {{-- <a href="" class="thumb"> --}}
                                                    <div class="boxnested">
                                                <img class="img-fluid mx-auto d-block" src="{{ $url[$i] }}"
                                                    alt="{{ $title[$i] }}">
                                                <div class="text-center">
                                                    <h1>{{ $title[$i] }}</h1>
                                                    <div class="text-body">
                                                        {{-- <p>{{ $body[$i] }}</p> --}}
                                                        @php
                                                        $testo = $body[$i];
                                                        if(strlen($testo) > 25) {
                                                            $testoVisibile = substr($testo, 0, 100) . ("...");
                                                            $testoNascosto = substr($testo, 100);
                                                            echo $testoVisibile . '<span style="display:none;">' . $testoNascosto . '</span>';
                                                        } else {
                                                            echo $testo;
                                                        }
                                                    @endphp
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endfor
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

@endsection
