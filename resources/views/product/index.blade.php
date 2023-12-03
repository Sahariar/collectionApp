@extends('layouts.master')

@section('title', 'Create Collection')

@section('contents')

<div class="max-w-screen-xl mx-auto px-4 md:px-8 mt-10">
    <div class="items-start justify-between md:flex">
        <div class="max-w-lg">
            <h3 class="text-gray-800 text-xl font-bold sm:text-2xl">View All Products with collection</h3>
        </div>
    </div>

    <div class="mt-12 relative h-max overflow-auto">
        <table class="w-full table-auto text-sm text-left">
            <thead class="text-gray-600 font-medium border-b">
                <tr>
                    <th class="py-3 pr-6">Name</th>
                    <th class="py-3 pr-6">Collection</th>
                    <th class="py-3 pr-6">Description</th>
                    
                </tr>
            </thead>
            <tbody class="text-gray-600 divide-y">
            @foreach ($products as $product)
                    <tr>
                        <td class="pr-6 py-4 whitespace-nowrap">
                        {{ $product->name }}
                        </td>
                        <td class="pr-6 py-4 whitespace-nowrap">
                            {{ $product->collection->name }}
                        </td>
                        <td class="pr-6 py-4 whitespace-nowrap">
                            {{ $product->description }}
                        </td>
                        
                    </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection