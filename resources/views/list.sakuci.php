@extends('layouts.app')

@section('title', config('app.name') . ' -- Kerangka PHP Ringan')

@section('content')
    <main>
        @if ($page ==='reserve') {
            
        }
        @elseif ($page ==='whitelist') {

        }
        @elseif ($page ==='blacklist') {

        }
        @endif
    </main>
@endsection