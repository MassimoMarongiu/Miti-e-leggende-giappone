{{-- @extends('layout.mlg') --}}
@extends('layouts.app')
    @section('content')

<style>
    table{
        color: aliceblue
    }
</style>
    <div class="container">


        <table class="table table-striped">
            <tbody>
                @foreach ($mitiELeggendes->sortByDesc('created_at') as $mitiELeggende)
                    <tr>

                        <td
                            style="width: 100px; height: 100px; background-image:url({{ $mitiELeggende->url }});background-size:cover">
                        </td>
                        {{-- <td>{{ $mitiELeggende->id }}</td> --}}
                        <td>{{ $mitiELeggende->title }}</td>
                        <td>
                            @php
                            $testo = $mitiELeggende->body;
                            if(strlen($testo) > 25) {
                                $testoVisibile = substr($testo, 0, 100) . ("...");
                                $testoNascosto = substr($testo, 100);
                                echo $testoVisibile . '<span style="display:none;">' . $testoNascosto . '</span>';
                            } else {
                                echo $testo;
                            }
                        @endphp
                        </td>
                        {{-- <td>{{ $mitiELeggende->body }}</td> --}}
                        <td>
                            <a class="btn btn-info"
                                href="{{ route('mitieleggendegiappone.show', ['mitieleggendegiappone' => $mitiELeggende->id]) }}">
                                Dettagli</a>

                        </td>
                        @guest
                        @else

                        <td>
                            <a class="btn btn-success"
                                href="{{ route('mitieleggendegiappone.edit', ['mitieleggendegiappone' => $mitiELeggende->id]) }}">
                                Modifica</a>

                        </td>
                        <td>
                            <form method="POST"
                                action="{{ route('mitieleggendegiappone.destroy', ['mitieleggendegiappone' => $mitiELeggende->id]) }}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Elimina" class="btn btn-danger">
                            </form>


                        </td>
                        @endguest
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
