{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')



@stop

@section('content')

    <div class="row fond" xmlns="http://www.w3.org/1999/html">

        <div class="col-md-11 fond">
            <div class="box box-primary fond" id="firstBox">
                <div class="box-header with-border" id="fbheader">
                    <h1 class="box-title text">Bienvenu sur <b>XCSM module(Extended Content Structured Module)</b></h1>
                    <span class="label label-primary pull-right"><i class="fa fa-fw fa-institution "></i></span>
                </div><!-- /.box-header -->
                <div id="textB" class="box-body row ">
                    <div class="col-md-4 ">
                        <div class="row">
                            <img src="{{ asset('css/images/xcsm.PNG') }}" width="300" height="240">
                        </div>

                        <div class="row">
                            @if(isset(Auth::user()->is_admin) && Auth::user()->is_admin==1)
                                <div class="box-footer fond row">
                                    <!-- Trigger the modal with a button -->
                                    <button type="button" data-toggle="modal" data-target="#myModal" id="importbut"
                                            class="btn btn-sm bg-blue-active">
                                        <span class="family mybutton">Importer un cours</span></button>


                                    <!-- Modal -->
                                    <div id="myModal" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content" id="modalcont">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title" id="titleform">Importation d'un nouveau cours</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/save" role="form" enctype="multipart/form-data"
                                                          method="post">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                                                        <div class="form-group">
                                                            <label for="name" class="nameform">Nom du cours:</label>
                                                            <input type="name" class="form-control" id="name" name="name" required>
                                                        </div>
                                                        <br>
                                                        <br>
                                                        <div>

                                                            <div class="form-group">
                                                                <label for="cours" class="nameform">Fichier du cours</label>
                                                                <input type="file" class="form-control-file" id="cours" name="cours"
                                                                       aria-describedby="fileHelp" required>
                                                                {{--<small id="fileHelp" class="form-text text-muted">Cours....</small>--}}
                                                            </div>
                                                        </div>

                                                        <div class="col col-md-offset-5">
                                                            <button type="submit" class="btn btn-success">
                                                                Enregistrer
                                                            </button>
                                                        </div>


                                                    </form>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-success" data-dismiss="modal">Close
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>

                    </div>
                    <div class="col-md-8 mysize1">

                        <p>Le module de structuration des contenus (eXtended Content Structured Module)
                            permet de mettre en ligne des contenus structurés sur une plateforme de formation
                            xMoodle2.0.
                            </br>
                            Ce module:
                            </br>
                            <i class="fa fa-fw fa-asterisk myicon "></i>
                            Organise les contenus en leur offrant une structure pédagogique de 5 niveaux,
                            </br>
                            <i class="fa fa-fw fa-asterisk myicon"></i>
                            Réduit les risques de surcharge cognitive en proposant aux apprenants des contenus sur
                            mesure,
                            </br>
                            <i class="fa fa-fw fa-asterisk myicon"></i>
                            Facilite la publication des contenus en ligne,
                            </br>
                            <i class="fa fa-fw fa-asterisk myicon"></i>
                            Garanti la réutilisation des notions lors de la composition de nouveaux cours,
                            </br>
                            <i class="fa fa-fw fa-asterisk myicon"></i>
                            Réduit considérablement les flux sur les bandes passantes lors des formations à distance.
                            </br>

                        </p>
                    </div>


                </div><!-- /.box-body -->

                <div class="" id="lastBox">

                    <h4 class="mysize family"><i class="fa fa-fw fa-warning mysize"></i>
                        Les documents doivent être sous le format docx pour être pris en compte!</h4>

                </div>
            </div><!-- /.box -->


        </div>


    </div>
    {{--<div class="row white">--}}

    {{--</div>--}}

    <footer id="footer" class=" navbar navbar-default navbar-fixed-bottom family">
        <div class="row">
            <div class=" col-md-9 ">
                <div class="row">
                    <h5 class="text" style="margin-left: 4%"> COPYRIGHT© 2017 - Developed By PROMOTION 2018
                    </h5>
                </div>
                {{--<div class="row">--}}
                {{--<div class="col-md-3">--}}
                {{--<ul class="text ">--}}
                {{--<li>--}}
                {{--<i class="fa fa-fw fa-user "></i>--}}
                {{--<span>Joêl DJIZANNE</span>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<i class="fa fa-fw fa-user "></i>--}}
                {{--<span>Nadia DJONGOUE</span>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<i class="fa fa-fw fa-user "></i>--}}
                {{--<span>Stella N'DONGA</span>--}}
                {{--</li>--}}
                {{--<li class="">--}}
                {{--<i class="fa fa-fw fa-user "></i>--}}
                {{--<span>Michael NGUEMEN</span>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</div>--}}
                {{--<div class="col-md-3">--}}
                {{--<ul class="text ">--}}
                {{--<li>--}}
                {{--<i class="fa fa-fw fa-user "></i>--}}
                {{--<span>Buffet TEGUIA</span>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<i class="fa fa-fw fa-user "></i>--}}
                {{--<span>Thierry TCHOFFO</span>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<i class="fa fa-fw fa-user "></i>--}}
                {{--<span>Michel TCHOUATCHA</span>--}}
                {{--</li>--}}
                {{--<li class="">--}}
                {{--<i class="fa fa-fw fa-user "></i>--}}
                {{--<span>Doreen TCHOUPE</span>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</div>--}}
                {{--</div>--}}

            </div>

            <div class=" col-md-3 ">

                <div class="row">
                    <h5 class="text" style="margin-left: 5%"> CONTACT US
                    </h5>
                </div>
                {{--<div class="row">--}}
                {{--<ul class="text ">--}}
                {{--<li>--}}
                {{--<i class="fa fa-fw fa-phone "></i>--}}
                {{--<span>698-92-00-64</span>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<i class="fa fa-fw fa-phone "></i>--}}
                {{--<span>698-92-00-64</span>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<i class="fa fa-fw fa-phone "></i>--}}
                {{--<span>698-92-00-64</span>--}}
                {{--</li>--}}
                {{--<li class="">--}}
                {{--<i class="fa fa-fw fa-phone "></i>--}}
                {{--<span>698-92-00-64</span>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</div>--}}


            </div>
        </div>
    </footer>
@stop

@section('css')
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet"
          href="/css/accueilcss.css ">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
@push('css')

@push('js')
