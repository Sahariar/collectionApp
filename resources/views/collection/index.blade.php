@extends('layouts.master')

@section('title', 'Create Collection')

@section('contents')
<section class="bg-lime-50 hidden" id="create-group">
        <div class="py-14">
            <div class="max-w-screen-xl mx-auto px-4 text-gray-600 md:px-8">
                <div class="gap-12 flex justify-between">
                    <div class="max-w-lg space-y-3">
                        <h3 class="text-amber-600 font-semibold">Collection</h3>
                        <p class="text-gray-800 text-3xl font-semibold sm:text-4xl">
                            Create new Collection
                        </p>
                        <p>
                            Collection Groups are the base of the Collection system. You can create as many groups as you want and add
                            collection
                            to them.
                        </p>
                    </div>
                    <div>
                        <button onclick="hideCreateGroup()"
                            class="bg-amber-500 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded">
                            Cancel
                        </button>
                    </div>
                </div>

                <div class="flex-1 mt-12 sm:max-w-lg lg:max-w-md">
                    <form method="POST" action="{{ route('collection.save') }}" class="space-y-5">
                    @sessionToken
                        <!-- <input type="hidden" name="host" value=""> -->
                        <input type="hidden" name="collectionId" id="collectionsid" value="0">
                        <div>
                            <label class="font-medium"> Collection Name</label>
                            <input type="text" id="name" name="name" required
                                class="w-full mt-2 px-3 py-2 text-gray-500 bg-transparent outline-none border focus:border-amber-600 shadow-sm rounded-lg" />
                        </div>
                        <div>
                            <label class="font-medium">Collection Description </label>
                            <textarea rows="3" id="description" name="description"
                                class="w-full mt-2 px-3 py-2 text-gray-500 bg-transparent outline-none border focus:border-amber-600 shadow-sm rounded-lg"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full px-4 py-2 text-white font-medium bg-amber-600 hover:bg-amber-500 active:bg-amber-600 rounded-lg duration-150">
                            Save Collection
                        </button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
<div class="p-10 md:px-8 bg-white">
    <div class="max-w-screen-xl mx-auto">
    <div class="items-start justify-between md:flex">
        <div class="max-w-lg">
            <h3 class="text-gray-800 text-xl font-bold sm:text-2xl">All Collection</h3>
            <p class="text-gray-600 mt-2">Explore a world of possibilities with our diverse range of items, meticulously selected to cater to every taste and preference. From sleek modern designs that redefine contemporary aesthetics to timeless pieces that exude traditional charm, the All Collection has something for everyone.</p>
        </div>
        <div class="mt-3 md:mt-0">
            <button class="inline-block px-4 py-2 text-white duration-150 font-medium bg-amber-600 rounded-lg hover:bg-amber-500 active:bg-amber-700 md:text-sm"class="" onclick="showCreateGroup()">Create collection</button>

        </div>
    </div>

    <div class="mt-12 relative h-max overflow-auto">
        <table class="w-full table-auto text-sm text-left">
            <thead class="text-gray-600 font-medium border-b">
                <tr>
                    <th class="py-3 pr-6">Name</th>
                    <th class="py-3 pr-6">Description</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 divide-y">
            @foreach ($collections as $collections)
                    <tr>
                        <td class="pr-6 py-4 whitespace-nowrap">
                        {{ $collections->name }}
                        </td>
                        <td class="pr-6 py-4 whitespace-nowrap">
                            {{ $collections->description }}
                        </td>
                        <td class="text-right whitespace-nowrap">
                        <button onclick="editGroup(this)" class="py-2 px-3 font-medium text-white hover:text-gray-100 duration-150 bg-amber-500 hover:bg-amber-300 rounded-lg"
                        data-id="{{ $collections->id }}" data-name="{{ $collections->name }}"
                        data-description="{{ $collections->description }}"
                        >
                            Edit
                        </button>
                        &nbsp;
                        <a href="{{ URL::tokenRoute('collection.product', ['collectionId' => $collections->id]) }}"
                                                class="py-2 px-3 font-medium text-white  duration-150 bg-green-500 hover:bg-green-100 hover:text-green-600 rounded-lg">Product</a>
                        </td>
                    </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>


@endsection

@push('scripts')
    <script>
        function showCreateGroup() {
            document.getElementById('create-group').classList.remove('hidden');
        }

        function hideCreateGroup() {
            document.getElementById('create-group').classList.add('hidden');
            //clear the values
            document.getElementById('name').value = '';
            document.getElementById('description').value = '';
            document.getElementById('collectionsid').value = '';
        }
        function editGroup(button) {
            console.log(button.dataset);
            document.getElementById('create-group').classList.remove('hidden');
            //get the data-name, data-description and data-id
            document.getElementById('name').value = button.dataset.name;
            document.getElementById('description').value = button.dataset.description;
            document.getElementById('collectionsid').value = button.dataset.id;
        }
    </script>
@endpush
