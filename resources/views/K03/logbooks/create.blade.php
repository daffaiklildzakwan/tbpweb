@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Internship' => route('frontend.myinterns.index',$myinterns),
        'Logbooks' => route('frontend.myinterns.logbooks.index',$myinterns),
        'Tambah' => '#'
    ]) !!}
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="row">
            <div class="col-md-10">
                    <div class="card">

                        {{ html()->form('POST', route('frontend.myinterns.logbooks.store',$myinterns))->acceptsFiles()->open() }}

                        {{-- CARD HEADER--}}
                        <div class="card-header">
                          <strong> <i class="cil-address-book"></i> Tambah Logbook</strong>
                        </div>

                        {{-- CARD BODY--}}
                        <div class="card-body">
                            @include('K03.logbooks._form')
                        </div>

                        {{--CARD FOOTER--}}
                        <div class="card-footer">
                            <input type="submit" value="Simpan" class="btn btn-primary"/>
                        </div>

                        {{ html()->form()->close() }}
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
