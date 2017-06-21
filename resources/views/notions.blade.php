{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')



@stop

{{--@section('listeCours')--}}

    {{--<aside class="main-sidebar text family" id="myaside" >--}}

        {{--<!-- sidebar: style can be found in sidebar.less -->--}}
        {{--<section class="sidebar">--}}

            {{--<!-- Sidebar Menu -->--}}
            {{--<ul class="sidebar-menu">--}}
                {{--<section class="sidebar">--}}

                    {{--<!-- Sidebar Menu -->--}}
                    {{--<ul class="sidebar-menu">--}}
                        {{--<li class="header " style="color: white;">LISTE DES COURS DISPONIBLES</li>--}}
                        {{--<li class="mysize1">--}}
                            {{--<a href="http://localhost:8000/admin/pages">--}}
                                {{--<i class="fa fa-fw fa-file "></i>--}}
                                {{--<span>Cryptographie</span>--}}
                                {{--<span class="pull-right-container">--}}
                                    {{--</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}

                        {{--<li class="mysize1">--}}
                            {{--<a href="http://localhost:8000/admin/settings">--}}
                                {{--<i class="fa fa-fw fa-file "></i>--}}
                                {{--<span>Recherche Opérationnelle</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="mysize1">--}}
                            {{--<a href="http://localhost:8000/admin/settings">--}}
                                {{--<i class="fa fa-fw fa-file "></i>--}}
                                {{--<span>Réseau Mobile et Intelligents</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="mysize1">--}}
                            {{--<a href="http://localhost:8000/admin/settings">--}}
                                {{--<i class="fa fa-fw fa-file "></i>--}}
                                {{--<span>Informatique quantique</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="mysize1">--}}
                            {{--<a href="http://localhost:8000/admin/settings">--}}
                                {{--<i class="fa fa-fw fa-file "></i>--}}
                                {{--<span> Management</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}

                    {{--</ul>--}}
                    {{--<!-- /.sidebar-menu -->--}}
                {{--</section>--}}
            {{--</ul>--}}
            {{--<!-- /.sidebar-menu -->--}}
        {{--</section>--}}

    {{--</aside>--}}

{{--@stop--}}

@section('content')

<div class="col col-md-12">

    <a class="btn  btn-danger margin" href="/cours/navigation?folder={{$folder}}">
        Mode Navigation
    </a>

    {{--<h4 class="mysize family"><i class="fa fa-fw fa-warning mysize" ></i>--}}
        {{--Les documents doivent être sous le format docx pour être pris en compte!</h4>--}}
    <div class="col col-md-12 pre-scrollable" id="contenuNotion" style="height: 600px!important;">

    </div>
    <div class="col col-md-12 col-md-offset-5 ">

        <div>
            <button class="btn  bg-navy margin" onclick="previous()">
                previous
            </button>
            <button class="btn  bg-navy margin" onclick="next()">
                next
            </button>
        </div>

    </div>
</div>



@stop

@section('css')
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet"
      href="/css/accueilcss.css ">
@stop

@section('js')
    <script src="{{ asset('vendor/adminlte/dist/js/app.min.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/lectureNotions.js') }}"></script>
<script> console.log('Hi!');


</script>
@stop
@push('css')

@push('js')
