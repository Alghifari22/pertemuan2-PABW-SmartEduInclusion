@extends('layouts.app', ['title' => $title ?? 'Staff TU - SmartEdu'])
@section('body')
    @include('partials.sidebar.staff')
    <main class="px-5 py-8 lg:ml-72 lg:px-10">
        @yield('content')
    </main>
@endsection
