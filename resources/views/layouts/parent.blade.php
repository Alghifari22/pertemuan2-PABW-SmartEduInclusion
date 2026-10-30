@extends('layouts.app', ['title' => $title ?? 'Orang Tua - SmartEdu'])
@section('body')
    @include('partials.sidebar.parent')
    <main class="px-5 py-8 lg:ml-72 lg:px-10">
        @yield('content')
    </main>
@endsection
