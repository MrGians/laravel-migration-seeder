@extends('layouts.main')

@section('title', 'Homepage')

@section('main-content')
    <section id="train-list" class="mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Azienda</th>
                    <th scope="col">Stazione di partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">Orario di partenza</th>
                    <th scope="col">Orario di arrivo</th>
                    <th scope="col">Codice Treno</th>
                    <th scope="col">Num. Carrozze</th>
                    <th scope="col">In orario</th>
                    <th scope="col">Cancellato</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($trains as $train)
                <tr>
                    <th scope="row">{{ $train->id }}</th>
                    <td>{{ $train->azienda }}</td>
                    <td>{{ $train->stazione_partenza }}</td>
                    <td>{{ $train->stazione_arrivo }}</td>
                    <td>{{ $train->orario_partenza }}</td>
                    <td>{{ $train->orario_arrivo }}</td>
                    <td>{{ $train->codice_treno }}</td>
                    <td>{{ $train->num_carrozze }}</td>
                    <td>
                        @if ($train->in_orario)
                            Si
                        @else
                            No
                        @endif
                    </td>
                    <td>
                        @if ($train->cancellato)
                            Si
                        @else
                            No
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td class="text-center" colspan="10">Non ci sono Treni disponibili.</td>
                </tr>
                @endforelse

            </tbody>
        </table>
    </section>
@endsection