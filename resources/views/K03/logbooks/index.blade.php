@extends('layouts.admin')

@section('breadcrumb')
    {!! cui()->breadcrumb([
        'Home' => route('home'),
        'Internship' => route('frontend.myinterns.index'),
        'Logbook' => '#'
    ]) !!}
@endsection

@section('toolbar')
    {!! cui()->toolbar_btn(route('frontend.myinterns.logbooks.create',$myinterns), 'cil-address-book', 'Tambah') !!}
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">

                {{-- CARD HEADER--}}
                <div class="card-header">
                    <strong><i class="cil-list"></i> List Logbook</strong>
                </div>

                {{-- CARD BODY--}}
                <div class="card-body">

                    <table class="{{ config('style.table') }}">
                        <thead class="{{ config('style.thead') }}">
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Date</th>
                            <th class="text-center">Activity</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($logbooks as $logbook)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $logbook->date }}</td>
                                <td class="text-center">{{ $logbook->activity }}</td>
                                <td class="text-center">
                                    {!! cui()->btn_view(route('frontend.myinterns.logbooks.show', [$logbook->internship->id,$logbook->id])) !!}
                                    {!! cui()->btn_edit(route('frontend.myinterns.logbooks.edit', [$logbook->internship->id,$logbook->id])) !!}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">
                                    <h6 class="text-center">Tidak ada Logbook</h6>
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>

                </div><!--card-body-->


            </div><!--card-->
        </div><!--col-->
    </div><!--row-->

@endsection
