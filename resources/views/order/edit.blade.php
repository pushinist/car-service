@extends('layouts.main')
@section('content')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Edit</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" method="POST" action="{{ route('orders.update', $order->id) }}">
                @csrf
                @method('patch')

                <div>
                    <label for="work_to_do" class="block text-sm/6 font-medium text-gray-900">Work to do
                    </label>
                    <div class="mt-2">
                        <input value="{{ old('work_to_do', $order->work_to_do) }}" type="text" name="work_to_do"
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
                                    @if($order->parts->contains('id', $part->id)) checked @endif
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
                    <label for="status" class="block text-sm/6 font-medium text-gray-900">Select status</label>
                    <div class="mt-2 space-y-2">
                        <select name="status" id="status">
                            @foreach(\App\Enums\OrderStatus::cases() as $status)
                                <option value="{{ $status->value }}"
                                        @if(old('status', $order->status) == $status->value) selected @endif>
                                    {{ ucfirst(str_replace('_', ' ', $status->name)) }}
                                </option>
                            @endforeach
                        </select>
                        @error('status')
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
