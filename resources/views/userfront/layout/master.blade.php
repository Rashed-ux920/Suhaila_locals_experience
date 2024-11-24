<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        @include('userfront.includes.headlinks')
    </head>
    <body class="index-page">

        @if (Auth::check())

            {{-- start header --}}
                @include('userfront.includes.sectiones.headerfrontbl')
            {{-- end header  --}}


        @else

            {{-- start header --}}
                @include('userfront.includes.sectiones.headerfrontbl')
            {{-- end header  --}}


        @endif


        <main class="main">
            @yield('content')
        </main>
        {{-- start footer  --}}
            @include('userfront.includes.sectiones.footerfront')
        {{-- end footer  --}}

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>
        @include('userfront.includes.bodyscripts')
    </body>
</html>
