@extends('layouts._base')

@section('structure')
    <div class="page-wrapper">
        {{-- Navigation --}}
        <section class="main-navigation-wrapper">
            <div class="logo-panel">
                <p>Laravel CMS</p>
            </div>
            Main Navigation
        </section>

        {{-- Main Content --}}
        <main class="main-content-wrapper">
            {{-- Header --}}
            <header class="main-header">
                Main Header
            </header>

            Main Content

            @yield('main_content')

            {{-- Main Footer --}}
            <footer class="main-footer">
                Main Footer
            </footer>
        </main>
    </div>
@endsection