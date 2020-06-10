@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Internship' => route('frontend.myinterns.index',$myinterns),
        'Logbooks' => route('frontend.myinterns.logbooks.index',$myinterns),
        'Detail' => '#'
    ]) !!}
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="row">
            <div class="col-md-10">
                    <div class="card">

                        {{-- CARD HEADER--}}
                        <div class="card-header">
                          <strong> <i class="cil-zoom"></i> Detail Logbook</strong>
                        </div>

                        {{-- CARD BODY--}}
                        <div class="card-body">
                            @include('K03.logbooks._detail')
                        </div>

                        {{--CARD FOOTER--}}
                        <div class="card-footer">
                            {!! cui()->btn(route('frontend.myinterns.logbooks.index', [$myinterns]),' ','Back') !!} 
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
