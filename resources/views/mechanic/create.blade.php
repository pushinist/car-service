@extends('layouts.main')
@section('content')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Create</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" method="POST" action="{{ route('mechanics.store') }}">
                @csrf
                <div>
                    <label for="name" class="block text-sm/6 font-medium text-gray-900">ФИО</label>
                    <div class="mt-2">
                        <input value="{{ old('name') }}" type="text" name="name" id="name" required
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                    @error('name')
                    <div class="red alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="spec" class="block text-sm/6 font-medium text-gray-900">Specialization</label>
                    <div class="mt-2">
                        <input value="{{ old('spec') }}" type="tel" name="spec" id="spec" required
                               class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        @error('spec')
                        <div class="red alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="start_time" class="block text-sm/6 font-medium text-gray-900">Start time</label>
                    <div class="mt-2">
                        <input value="{{ old('start_time') }}" type="time" name="start_time" id="start_time"
                               required
                               class="@error('start_time') @enderror block w-full rounded-md bg-white px-3 py-1.5
                        text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300
                        placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2
                        focus:outline-indigo-600 sm:text-sm/6">
                        @error('start_time')
                        <div class="red alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="end_time" class="block text-sm/6 font-medium text-gray-900">End time</label>
                    <div class="mt-2">
                        <input value="{{ old('end_time') }}" type="time" name="end_time" id="end_time"
                               required
                               class="@error('end_time') @enderror block w-full rounded-md bg-white px-3 py-1.5
                        text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300
                        placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2
                        focus:outline-indigo-600 sm:text-sm/6">
                        @error('end_time')
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

