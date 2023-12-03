@extends('layouts.master')

@section('title', 'Collection')

@section('content')
    <section class="py-28" style="background: linear-gradient(152.92deg, rgba(192, 132, 252, 0.2) 4.54%, rgba(232, 121, 249, 0.17) 34.2%, rgba(192, 132, 252, 0.1) 77.55%);">
    <div class="max-w-screen-xl mx-auto px-4 md:text-center md:px-8">
        <div class="max-w-xl space-y-3 md:mx-auto">
            <h3 class="text-amber-600 font-semibold">
                Professional services of Collection
            </h3>
            <p class="text-gray-800 text-3xl font-semibold sm:text-4xl">
                Build the future with us
            </p>
            <p class="text-gray-600">
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident.
            </p>
        </div>
    </div>
</section>
@endsection

@section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, { title: 'collection' });
    </script>
@endsection