@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Internship' => route('frontend.myinterns.index')
    ]) !!}
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">

                {{-- CARD HEADER--}}
                <div class="card-header">
                    <strong><i class="cil-list"></i> My Internships</strong>
                </div>

                {{-- CARD BODY--}}
                <div class="card-body">

                    <div class="row justify-content-end">
                        <div class="col-md-6 justify-content-end">
                            <div class="row justify-content-end">
                                
                            </div>
                        </div>
                    </div>

                    <table class="{{ config('style.table') }}">
                        <thead class="{{ config('style.thead') }}">
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Judul KP</th>
                            <th class="text-center">Instansi</th>
                            <th class="text-center">Alamat</th>
                            <th class="text-center">Detail</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($internships as $internship)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>    
                            <td class="text-center">{{$internship->title}}</td>    
                            <td class="text-center">{{$internship->proposal->agency->name}}</td>
                            <td class="text-center">{{$internship->proposal->agency->address}}</td>
                            <td class="text-center">
                                {!! cui()->btn_view(route('frontend.myinterns.show', [$internship->id])) !!}
                                {!! cui()->btn(route('frontend.myinterns.logbooks.index', [$internship->id]),'cil-address-book') !!}
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="5">
                                    <h6 class="text-center">Tidak Ada KP</h6>
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>

                    <div class="row justify-content-end">
                        <div class="col-md-6 text-right">

                        </div>
                        <div class="col-md-6 justify-content-end">
                            <div class="row justify-content-end">
                                
                            </div>
                        </div>
                    </div>

                </div><!--card-body-->


            </div><!--card-->
        </div><!--col-->
    </div><!--row-->

@endsection

