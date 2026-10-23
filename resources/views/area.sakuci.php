@extends('layouts.app')

@section('title', config('app.name') . ' -- Kerangka PHP Ringan')

@section('content')
    <main>
        @if ($page ==='a1') {
            <div clas="title-card">
                <h3>Data for Area A1</h3>
            </div>
            <table>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        }
        @elseif ($page ==='a2') {

        }
        @elseif ($page ==='a3e') {

        }
        @elseif ($page ==='b1') {

        }
        @elseif ($page ==='b2e') {

        }
        @elseif ($page ==='c1') {

        }
        @elseif ($page ==='c2') {

        }
        @elseif ($page ==='c3e') {

        }
        @elseif ($page ==='d') {

        }
        @endif
    </main>
@endsection