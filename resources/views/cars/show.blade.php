@extends('layouts.app')

@section('content')

    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                {{ $car->name }}
            </h1>

            @if ($car->headquarter)

            @else
                <p class="textlg text-fray-700 py-6">
                    No Model Yet
                </p>
            @endif

        </div>

        <div class="py-10 text-center">
            <div class="m-auto">
                <span class="uppercase text-blue-500 font-bold text-xs italic">
                    founded: {{ $car->founded }}
                </span>
                <p class="text-gray-700 text-lg py-6">
                    {{ $car ->description }}
                </p>

                <table class="table-auto">
                    <tr class="bg-blue-100">
                        <th class="w-1/4 border-4 border-gray-500">
                            Model
                        </th>
                        <th class="w-1/4 border-4 border-gray-500">
                            Engines
                        </th>
                        <th class="w-1/4 border-4 border-gray-500">
                            Dates
                        </th>
                    </tr>

                    @forelse ($car->carModel as $model)
                        <tr>
                            <td class="border-4 border-gray-500">
                                {{ $model->model_name }}
                            </td>
                            <td class="boder-text border-gray-500">
                                @foreach ($car->engines as $engine)
                                    @if ($model->id == $engine->model_id)
                                        {{ $engine->engine_name }}
                                    @endif
                                @endforeach
                            </td>
                            <td class="border-4 border-gray-500">
                                {{ date('d-m-y', strtotime($car->productionDate->created_at)) }}
                            </td>
                        </tr>
                    @empty
                        <p>No Car Models Found</p>
                    @endforelse

                </table>

                <hr class="mt-4 mb-8">
            </div>
        </div>
    </div>

@endsection