@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Internship' => route('frontend.myinterns.index',$myinterns),
        'Logbooks' => route('frontend.myinterns.logbooks.index',$myinterns),
        'Edit' => '#'
    ]) !!}
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="row">
            <div class="col-md-10">
                    <div class="card">

                        {{ html()->modelForm($logbooks,'PUT', route('frontend.myinterns.logbooks.update', [$myinterns,$logbooks->id]))->acceptsFiles()->open() }}

                        {{-- CARD HEADER--}}
                        <div class="card-header">
                          <strong> <i class="cil-zoom"></i> Edit Logbook</strong>
                        </div>

                        {{-- CARD BODY--}}
                        <div class="card-body">
                            @include('K03.logbooks._form')
                        </div>

                        {{--CARD FOOTER--}}
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" value="Ubah"/>
                        </div>

                        {{ html()->closeModelForm() }}
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
