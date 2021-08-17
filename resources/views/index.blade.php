@extends('layouts.layout')

@section('sidebar')
    @include('layouts.sidebar', ['sidebar'=> Menu::get('sidebar_admin')])
@endsection
@section('css')
    <link rel="stylesheet" href="{{mix('/css/package.css', 'vendor/processmaker/packages/pm3-container')}}">
@endsection
@section('content')
    <div class="pm3-main container page-content" id="app-pm3-container">
        <!-- Iframe to display PM3 -->
        <iframe name="pm3Frame" id="pm3Frame" src ="https://es.wikipedia.org/wiki/Sitio_web" width="99%" height="768" frameborder="1">
        <p>Your browser does not support iframes.</p>
        </iframe>
    </div>
@section('js')
<script src="{{mix('/js/package.js', 'vendor/processmaker/packages/pm3-container')}}"></script>
@endsection
@endsection
