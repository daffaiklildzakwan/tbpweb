<<<<<<< HEAD
@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Internship' => route('frontend.myinterns.index'),
        'Detail' => '#'
    ]) !!}
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
                    <table cellpadding='10'>
                    @foreach($internships as $internship)
                        <tr>
                            <td>Judul KP</td><td>: {{$internship->title}}</td>
                        </tr>   
                        <tr>
                            <td>Dosen Pembimbing KP Lapangan</td><td>: {{$internship->field_advisor_name}}</td>
                        </tr>   
                        <tr>
                            <td>Tempat Pelaksanaan KP</td>
                        </tr> 
                        <tr>
                            <td>- Nama Instansi / Perusahaan</td><td>: {{$internship->proposal->agency->name}}</td>
                        </tr>   
                        <tr>
                            <td>- Alamat Instansi / Perusahaan</td><td>: {{$internship->proposal->agency->address}}</td>
                        </tr>   
                        <tr>
                            <td>Waktu Pelaksanaan KP</td><td>: {{$internship->start_at}} s/d {{$internship->end_at}}</td>
                        </tr> 
                    @endforeach
                    </table>
                </div><!--card-body-->

                {{--CARD FOOTER--}}
                <div class="card-footer">
                        {!! cui()->btn(route('frontend.myinterns.edit', [$myinterns]),'cil-folder',' Upload Berkas') !!}    
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->

@endsection
=======
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
>>>>>>> 7ec301c16a0e7856ab67773263dcad50156f5185
