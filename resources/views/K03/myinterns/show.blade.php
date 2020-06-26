@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Internship' => route('frontend.myinterns.index'),
        'Detail' => '#'
    ]) !!}
@endsection

@section('toolbar')
    {!! cui()->toolbar_btn(route('frontend.myinterns.edit', [$myinterns]),'cil-folder',' Laporkan Selesai KP') !!} 
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">

                {{-- CARD HEADER--}}
                <div class="card-header">
                    <strong><i class="cil-list"></i> Detail KP</strong>
                </div>

                {{-- CARD BODY--}}
                <div class="card-body">
                    @include('K03.myinterns._detail')
                </div>

                {{--CARD FOOTER--}}
                <div class="card-footer">
                           
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->

@endsection

