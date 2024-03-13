<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            </h2>
 </x-slot>
 <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                  <div class="flex">
                    <div>
                      <p class="text-sm">{{ session('message') }}</p>
                    </div>
                  </div>
                </div>
            @endif
            <button wire:click="creates()" class="bg-blue-500 hover:bg-blue-700 text-white py-1 mb-6 px-3 rounded my-3 mt-1">Add Tool</button>
            @if($isOpen)
                @include('livewire.creates')
            @endif
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">No.</th>
                        <th class="px-4 py-2">Size</th>
                        <th class="px-4 py-2">Color</th>
                        <th class="px-4 py-2">Function</th>
                        <th class="px-4 py-2 w-60">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tools as $tool)
                    <tr>
                        <td class="border px-4 py-2">{{ $tool->id }}</td>
                        <td class="border px-4 py-2">{{ $tool->name }}</td>
                        <td class="border px-4 py-2">{{ $tool->color }}</td>
                        <td class="border px-4 py-2">{{ $tool->function }}</td>
                        <td class="border px-4 py-2 text-center">
                        <button wire:click="edit({{ $tool->id }})" class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-3 rounded">Edit</button>
                            <button wire:click="delete({{ $tool->id }})" class="bg-red-500 hover:bg-red-700 text-white py-1 px-3 rounded">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
 </div>
