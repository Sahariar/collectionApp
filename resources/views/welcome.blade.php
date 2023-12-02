@extends('layouts.master')

@section('title', 'Collection')

@section('content')
    <h2>Store FAQ</h2>
@endsection

@section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, { title: 'collection' });
    </script>
@endsection