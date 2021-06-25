@extends('layouts._base')

@section('structure')
    <div class="page-wrapper">
        {{-- Header --}}
        <header class="main-header">
            Main Header
        </header>

        {{-- Navigation --}}
        <section class="main-navigation">
            Main Navigation
        </section>

        {{-- Main Content --}}
        <main class="content">
            Main Content
            @yield('main_content')
        </main>

        {{-- Footer --}}
        <footer class="main-footer">
            Main Footer
        </footer>
    </div>
@endsection