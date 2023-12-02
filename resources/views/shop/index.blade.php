@extends('layouts.master')

@section('title', 'Welcome Shop')

@section('contents')
<section class="py-28 min-h-screen" style="background: linear-gradient(152.92deg, rgba(192, 132, 252, 0.2) 4.54%, rgba(232, 121, 249, 0.17) 34.2%, rgba(192, 132, 252, 0.1) 77.55%);">
    <div class="max-w-screen-xl mx-auto px-4 md:text-center md:px-8">
        <div class="space-y-3 md:mx-auto">
            <h3 class="text-gray-800 text-2xl font-bold">
                Welcome TO Collection App
            </h3>
            <p class="text-gray-800 text-3xl font-semibold sm:text-4xl">
                Your Shop Id {{ $shopId }}
            </p>
            <p>The Shopify shop domain is: {{ $shop }}</p>

            <h3 class="text-gray-800 text-xl font-bold pt-10">
                Introducing "Collectionapp": Your Ultimate Product Categorization App
            </h3>
            <p class="text-gray-800  sm:text-base">In the dynamic world of e-commerce, organizing and presenting products efficiently is a game-changer. That's where "Collectionify" comes into play — a robust collection app designed to streamline and elevate your online store's product categorization.</p>
        </div>
    </div>
    </div>
</section>
@endsection

@push('scripts')
<script>

</script>
@endpush