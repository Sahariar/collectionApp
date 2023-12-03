@extends('layouts.master')

@section('title', 'Create Group')

@section('contents')
    <section class="bg-sky-50 hidden" id="create-group">
        <div class="py-14">
            <div class="max-w-screen-xl mx-auto px-4 text-gray-600 md:px-8">
                <div class="gap-12 flex justify-between">
                    <div class="max-w-lg space-y-3">
                        <h3 class="text-cyan-600 font-semibold">Product</h3>
                        <p class="text-gray-800 text-3xl font-semibold sm:text-4xl">
                            Create new Product for {{ $collections->name }}
                        </p>
                        <p>
                            Product are the base of the collection system. You can create as many Product as you want and add them to a
                            group
                        </p>
                    </div>
                    <div>
                        <button onclick="hideCreateGroup()"
                            class="bg-cyan-500 hover:bg-cyan-700 text-white font-bold py-2 px-4 rounded">
                            Cancel
                        </button>
                    </div>
                </div>

                <div class="flex-1 mt-12 sm:max-w-lg lg:max-w-md">
                    <form method="POST" action="{{ route('collection.product.save', ['collectionId' => $collections->id]) }}"
                        class="space-y-5">
                        @sessionToken
                        <input type="hidden" id="collectionId" name="collectionId" value="{{ $collections->id }}">
                        <input type="hidden" id="productid" name="productid" value="0">
                        <div>
                            <label class="font-medium"> Name </label>
                            <input type="text" id="name" name="name" required
                                class="w-full mt-2 px-3 py-2 text-gray-500 bg-transparent outline-none border focus:border-cyan-600 shadow-sm rounded-lg" />
                        </div>
                        <div>
                            <label class="font-medium"> Description </label>
                            <textarea rows="3" id="description" name="description"
                                class="w-full mt-2 px-3 py-2 text-gray-500 bg-transparent outline-none border focus:border-cyan-600 shadow-sm rounded-lg"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full px-4 py-2 text-white font-medium bg-cyan-600 hover:bg-cyan-500 active:bg-cyan-600 rounded-lg duration-150">
                            Save Product
                        </button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="py-14">
            <div class="max-w-screen-xl mx-auto px-4 text-gray-600 md:px-8">
                <div class=" mx-auto gap-12">
                    <div class="flex justify-between">
                        <div class="max-w-lg space-y-3">
                            <h3 class="text-cyan-600 font-semibold">Product</h3>
                            <p class="text-gray-800 text-3xl font-semibold sm:text-4xl">
                                Available Product for {{ $collections->name }}
                            </p>
                            <p>
                                Here are your available Product for {{ $collections->name }}. You can edit or delete them.
                                <a href="{{ URL::tokenRoute('collection.index') }}"
                                    class="text-cyan-500 hover:text-cyan-700 font-bold rounded">
                                    Go Back
                                </a>
                            </p>
                        </div>
                        <div>
                            <button onclick="showCreateGroup()"
                                class="bg-cyan-500 hover:bg-cyan-700 text-white font-bold py-2 px-4 rounded">
                                Create Product
                            </button>

                        </div>
                    </div>
                </div>
                <div class="max-w-screen-xl mx-auto px-4 py-4 md:px-8">
                    <div class="mt-12 relative h-max overflow-auto">
                        <table class="w-full table-auto text-sm text-left">
                            <thead class="text-gray-600 font-medium border-b">
                                <tr>
                                    <th class="py-3 pr-6">name</th>
                                    <th class="py-3 pr-6">Description</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 divide-y">
                                @foreach ($products as $product)
                                    <tr>
                                        <td class="pr-6 py-4 whitespace-nowrap ">
                                            {{ $product->name }}
                                        </td>
                                        <td class="pr-6 py-4 whitespace-nowrap ">
                                            {{ $product->description }}
                                        </td>
                                        <td class="text-right whitespace-nowrap">
                                            <button onclick="editGroup(this)"
                                                class="py-1.5 px-3 text-gray-600 hover:text-gray-500 duration-150 hover:bg-gray-50 border rounded-lg"
                                                data-id="{{ $product->id }}" data-name="{{ $product->name }}"
                                                data-description="{{ $product->description }}">Edit</button>
                                            &nbsp;
                                            {{-- <a href="{{ URL::tokenRoute('collection.product', ['id' => $collections->id]) }}"
                                                class="py-1.5 px-3 text-red-600 hover:text-gray-500 duration-150 hover:bg-red-50 border rounded-lg">Products</a> --}}
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>



@endsection

@push('scripts')
    <script>
        function showCreateGroup() {
            document.getElementById('create-group').classList.remove('hidden');
        }

        function hideCreateGroup() {
            document.getElementById('create-group').classList.add('hidden');
            //clear the values
            document.getElementById('productid').value = '';
            document.getElementById('name').value = '';
            document.getElementById('description').value = '';

        }

        function editGroup(button) {
            console.log(button.dataset);
            document.getElementById('create-group').classList.remove('hidden');
            document.getElementById('productid').value = button.dataset.id;
            document.getElementById('name').value = button.dataset.name;
            document.getElementById('description').value = button.dataset.description;
        }
    </script>
@endpush
