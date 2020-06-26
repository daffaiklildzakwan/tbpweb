<<<<<<< HEAD
@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Internship' => route('frontend.myinterns.index'),
        'Detail' => route('frontend.myinterns.show',$myinterns),
        'Upload' => '#'
    ]) !!}
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="row">
            <div class="col-md-10">
                    <div class="card">

                    {{ html()->modelForm($internship,'PUT', route('frontend.myinterns.update', $myinterns))->acceptsFiles()->open() }}

                    {{-- CARD HEADER--}}
                    <div class="card-header">
                    <strong> <i class="cil-folder"></i> Upload Berkas</strong>
                    </div>

                    {{-- CARD BODY--}}
                    <div class="card-body">
                        @include('K03.myinterns._form')
                    </div>

                    {{--CARD FOOTER--}}
                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary" value="Ubah Data"/>
                    </div>

                    {{ html()->closeModelForm() }}

                    </div>
                </div>

            </div>

        </div>
    </div>
=======
@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Internship' => route('frontend.myinterns.index'),
        'Detail' => route('frontend.myinterns.show',$myinterns),
        'Upload' => '#'
    ]) !!}
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="row">
            <div class="col-md-10">
                    <div class="card">

                    {{ html()->modelForm($internship,'PUT', route('frontend.myinterns.update', $myinterns))->acceptsFiles()->open() }}

                    {{-- CARD HEADER--}}
                    <div class="card-header">
                    <strong> <i class="cil-folder"></i> Upload Berkas</strong>
                    </div>

                    {{-- CARD BODY--}}
                    <div class="card-body">
                        @include('K03.myinterns._form')
                    </div>

                    {{--CARD FOOTER--}}
                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary" value="Simpan Data"/>
                    </div>

                    {{ html()->closeModelForm() }}

                    </div>
                </div>

            </div>

        </div>
    </div>
>>>>>>> 7ec301c16a0e7856ab67773263dcad50156f5185
@endsection