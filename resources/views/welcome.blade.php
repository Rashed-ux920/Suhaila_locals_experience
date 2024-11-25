
@extends('userfront.layout.master')
@section('content')

            {{-- start swiper --}}
                @include('userfront.includes.sectiones.firstsection')
            {{-- end swiper --}}

            {{-- start misstion --}}

                @include('userfront.includes.sectiones.misstion')

            {{-- end misstion --}}

            {{-- start whyus --}}

                @include('userfront.includes.sectiones.whyus')

            {{-- end whyus --}}


@endsection
