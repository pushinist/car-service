@extends('layouts.main')
@section('content')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Create</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" method="POST" action="{{ route('cars.store') }}">
                @csrf
                <div>
                    <label for="make" class="block text-sm/6 font-medium text-gray-900">Make</label>
                    <div class="mt-2">
                        <input value="{{ old('make') }}" type="text" name="make" id="make" required
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                    @error('name')
                    <div class="red alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="model" class="block text-sm/6 font-medium text-gray-900">Model</label>
                    <div class="mt-2">
                        <input value="{{ old('model') }}" type="text" name="model" id="model" autocomplete="tel"
                               required
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        @error('model')
                        <div class="red alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="year" class="block text-sm/6 font-medium text-gray-900">Year</label>
                    <div class="mt-2">
                        <input value="{{ old('year') }}" type="number" name="year" id="year" required
                               class="@error('year') @enderror block w-full rounded-md bg-white px-3 py-1.5
                        text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300
                        placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2
                        focus:outline-indigo-600 sm:text-sm/6">
                        @error('year')
                        <div class="red alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="vin" class="block text-sm/6 font-medium text-gray-900">VIN</label>
                    <div class="mt-2">
                        <input value="{{ old('vin') }}" type="text" name="vin" id="vin" required
                               class="@error('vin') @enderror block w-full rounded-md bg-white px-3 py-1.5
                        text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300
                        placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2
                        focus:outline-indigo-600 sm:text-sm/6">
                        @error('vin')
                        <div class="red alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="govern_number" class="block text-sm/6 font-medium text-gray-900">Govern number</label>
                    <div class="mt-2">
                        <input value="{{ old('govern_number') }}" type="text" name="govern_number" id="govern_number"
                               required
                               class="@error('govern_number') @enderror block w-full rounded-md bg-white px-3 py-1.5
                        text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300
                        placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2
                        focus:outline-indigo-600 sm:text-sm/6">
                        @error('govern_number')
                        <div class="red alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="mileage" class="block text-sm/6 font-medium text-gray-900">Mileage</label>
                    <div class="mt-2">
                        <input value="{{ old('mileage') }}" type="number" name="mileage" id="mileage" required
                               class="@error('mileage') @enderror block w-full rounded-md bg-white px-3 py-1.5
                        text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300
                        placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2
                        focus:outline-indigo-600 sm:text-sm/6">
                        @error('mileage')
                        <div class="red alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <label for="client_id"
                       class="block text-sm/6 font-medium text-gray-900">Client</label>
                <select
                    id="client_id"
                    name="client_id"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                >

                    @foreach($clients as $client)
                        <option value="{{ $client->id }}">{{ $client->name }}
                        </option>
                    @endforeach

                </select>

                <div>
                    <button type="submit"
                            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
