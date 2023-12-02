@extends('layouts.master')

@section('title', 'Create Collection')

@section('contents')
<section class="bg-gray-100 hidden" id="create-group">
        <div class="py-14">
            <div class="max-w-screen-xl mx-auto px-4 text-gray-600 md:px-8">
                <div class="gap-12 flex justify-between">
                    <div class="max-w-lg space-y-3">
                        <h3 class="text-amber-600 font-semibold">Collection</h3>
                        <p class="text-gray-800 text-3xl font-semibold sm:text-4xl">
                            Create new Collection
                        </p>
                        <p>
                            FAQ Groups are the base of the FAQ system. You can create as many groups as you want and add
                            faq
                            to them.
                        </p>
                    </div>
                    <div>
                        <button onclick="hideCreateGroup()"
                            class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">
                            Cancel
                        </button>
                    </div>
                </div>

                <div class="flex-1 mt-12 sm:max-w-lg lg:max-w-md">
                    <form method="POST" action="{{ route('group.save') }}" class="space-y-5">
                    @sessionToken
                        <!-- <input type="hidden" name="host" value=""> -->
                        <div>
                            <label class="font-medium"> Collection Name</label>
                            <input type="text" id="name" name="name" required
                                class="w-full mt-2 px-3 py-2 text-gray-500 bg-transparent outline-none border focus:border-indigo-600 shadow-sm rounded-lg" />
                        </div>
                        <div>
                            <label class="font-medium">Collection Description </label>
                            <textarea rows="3" id="description" name="description"
                                class="w-full mt-2 px-3 py-2 text-gray-500 bg-transparent outline-none border focus:border-indigo-600 shadow-sm rounded-lg"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full px-4 py-2 text-white font-medium bg-indigo-600 hover:bg-indigo-500 active:bg-indigo-600 rounded-lg duration-150">
                            Save Collection
                        </button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
<div class="max-w-screen-xl mx-auto px-4 md:px-8 mt-10">
    <div class="items-start justify-between md:flex">
        <div class="max-w-lg">
            <h3 class="text-gray-800 text-xl font-bold sm:text-2xl">All Collection</h3>
            <p class="text-gray-600 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <div class="mt-3 md:mt-0">
            <button class="inline-block px-4 py-2 text-white duration-150 font-medium bg-indigo-600 rounded-lg hover:bg-indigo-500 active:bg-indigo-700 md:text-sm"class="" onclick="showCreateGroup()">Add collection</button>

        </div>
    </div>

    <div class="mt-12 relative h-max overflow-auto">
        <table class="w-full table-auto text-sm text-left">
            <thead class="text-gray-600 font-medium border-b">
                <tr>
                    <th class="py-3 pr-6">Name</th>
                    <th class="py-3 pr-6">Description</th>
                    <th class="py-3 pr-6">status</th>
                    <th class="py-3 pr-6">Shop ID</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 divide-y">
            @foreach ($groups as $group)
                    <tr>
                        <td class="pr-6 py-4 whitespace-nowrap">
                        {{ $group->name }}
                        </td>
                        <td class="pr-6 py-4 whitespace-nowrap">
                            {{ $group->description }}
                        </td>

                        <td class="pr-6 py-4 whitespace-nowrap">
                            <span :class="getStatusClasses($group->status)">
                                {{ $group->status }}
                            </span>
                        </td>

                        <td class="pr-6 py-4 whitespace-nowrap">
                            {{ $group->shop_id }}
                        </td>
                        <td class="text-right whitespace-nowrap">
                            <a href="javascript:void(0)" class="py-1.5 px-3 text-gray-600 hover:text-gray-500 duration-150 hover:bg-gray-50 border rounded-lg">Manage</a>
                        </td>
                    </tr>
            @endforeach
            </tbody>
        </table>
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
            document.getElementById('faqid').value = '';
            document.getElementById('question').value = '';
            document.getElementById('answer').value = '';

        }
        function getStatusClasses(status) {
            return status === '1' ? 'text-green-600 bg-green-50' : 'text-blue-600 bg-blue-50';
        }
        function editGroup(button) {
            console.log(button.dataset);
            document.getElementById('create-group').classList.remove('hidden');
            document.getElementById('faqid').value = button.dataset.id;
            document.getElementById('question').value = button.dataset.question;
            document.getElementById('answer').value = button.dataset.answer;
        }
    </script>
@endpush
