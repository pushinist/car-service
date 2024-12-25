@extends('layouts.main')
@section('content')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Create</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" method="POST" action="{{ route('orders.store') }}">
                @csrf
                <select
                    id="car_id"
                    name="car_id"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                >

                    @foreach($cars as $car)
                        <option value="{{ $car->id }}">{{ $car->make }}  {{ $car->model }}
                        </option>
                    @endforeach

                </select>
                @error('car_id')
                <div class="red alert-danger">{{ $message }}</div>
                @enderror

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
                @error('client_id')
                <div class="red alert-danger">{{ $message }}</div>
                @enderror

                <select
                    id="mechanic_id"
                    name="mechanic_id"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                >

                    @foreach($mechanics as $mechanic)
                        <option value="{{ $mechanic->id }}">{{ $mechanic->name }}
                        </option>
                    @endforeach

                </select>
                @error('mechanic_id')
                <div class="red alert-danger">{{ $message }}</div>
                @enderror

                <div>
                    <label for="planned_completion_time" class="block text-sm/6 font-medium text-gray-900">Planned to be
                        complete</label>
                    <div class="mt-2">
                        <input value="{{ old('planned_completion_time') }}" type="date" name="planned_completion_time"
                               id="planned_completion_time"
                               required
                               class="@error('planned_completion_time') @enderror block w-full rounded-md bg-white px-3 py-1.5
                        text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300
                        placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2
                        focus:outline-indigo-600 sm:text-sm/6">
                        @error('planned_completion_time')
                        <div class="red alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="description" class="block text-sm/6 font-medium text-gray-900">Description
                    </label>
                    <div class="mt-2">
                        <input value="{{ old('description') }}" type="text" name="description"
                               id="description"
                               required
                               class="@error('description') @enderror block w-full rounded-md bg-white px-3 py-1.5
                        text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300
                        placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2
                        focus:outline-indigo-600 sm:text-sm/6">
                        @error('description')
                        <div class="red alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="work_to_do" class="block text-sm/6 font-medium text-gray-900">Work to do
                    </label>
                    <div class="mt-2">
                        <input value="{{ old('work_to_do') }}" type="text" name="work_to_do"
                               id="work_to_do"
                               required
                               class="@error('work_to_do') @enderror block w-full rounded-md bg-white px-3 py-1.5
                        text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300
                        placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2
                        focus:outline-indigo-600 sm:text-sm/6">
                        @error('work_to_do')
                        <div class="red alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="parts" class="block text-sm/6 font-medium text-gray-900">Select Parts</label>
                    <div class="mt-2 space-y-2">
                        @foreach($parts as $part)
                            <div class="flex items-center">
                                <input
                                    type="checkbox"
                                    name="parts[]"
                                    value="{{ $part->id }}"
                                    id="part_{{ $part->id }}"
                                    class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500"
                                />
                                <label for="part_{{ $part->id }}" class="ml-2 block text-sm text-gray-900">
                                    {{ $part->name }} (price: {{ $part->price }})
                                </label>
                            </div>
                        @endforeach
                        @error('parts')
                        <div class="red alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

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
