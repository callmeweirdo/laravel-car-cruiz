@extends('layouts.app')

@section('content')

    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Cars
            </h1>
        </div>

        <div class="pt-10">
            <a href="/cars/create" class="border-bottom-2 pb-2 italic border-dotted text-gray-500">
                Add a new car &rarr;
            </a>
        </div>

        <div class="w-5/6 py-10">
            @foreach ($cars as $car)
                <div class="m-auto">
                    <div class="float-right">
                        <a class="border-bottom-2 pb-2 italic border-dotted text-green-500" href="cars/{{ $car->id }}/edit">Edit &rarr;</a>
                        <form action="/cars/{{ $car->id }}" 
                            method="POST"
                            class="pt-3">
                            @csrf
                            @method('delete')
                            <button
                            class="border-b-2 border-dotted italic text-red-500"
                            type="submit">
                                Delete &rarr;
                            </button>
                        </form>
                    </div>

                    <span class="uppercase text-blue-500 font-bold text-xs italic">
                        founded: {{ $car->founded }}
                    </span>

                    <h2 class="text-5xl text-gray-700 hover:text-gray-500">
                        <a href="/cars/{{ $car->id }}">
                            {{ $car->name }}
                        </a>
                    </h2>
                    <p class="text-gray-700 text-lg py-6">
                        {{ $car ->description }}
                    </p>

                    <hr class="mt-4 mb-8">
                </div>
            @endforeach
        </div>
    </div>


@endsection