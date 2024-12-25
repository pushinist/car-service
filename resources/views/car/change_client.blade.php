@extends('layouts.main')
@section('content')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Create</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" method="POST" action="{{ route('cars.change_client', $id) }}">
                @csrf
                @method('patch')
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
