<!-- Static Field for Judul KP -->
<div class="form-group">
    <div class="form-label">Judul KP</div>
    <div>{{ $internships->title }}</div>
</div>

<!-- Static Field for Dosen Pembimbing Lapangan -->
<div class="form-group">
    <div class="form-label">Dosen Pembimbing Lapangan</div>
    <div>{{ $internships->field_advisor_name }}</div>
</div>

<!-- Static Field for Nama Perusahaan -->
<div class="form-group">
    <div class="form-label">Nama Perusahaan</div>
    <div>{{ $internships->proposal->agency->name }}</div>
</div>

<!-- Static Field for Alamat Perusahaan -->
<div class="form-group">
    <div class="form-label">Alamat Perusahaan</div>
    <div>{{ $internships->proposal->agency->address }}</div>
</div>

<div class="row">

    <div class="col-md-6">
        <!-- Static Field for Waktu Mulai KP -->
        <div class="form-group">
            <div class='form-label'>Waktu Mulai KP</div>
            <div>{{ $internships->start_at }}</div>
        </div>
    </div>

    <div class="col-md-6">
        <!-- Static Field for Waktu Selesai KP -->
        <div class="form-group">
            <div class='form-label'>Waktu Selesai KP</div>
            <div>{{ $internships->end_at}}</div>
        </div>
    </div>

</div>

<!-- Static Field for Bukti Penyerahan Laporan -->
<div class="form-group">
    <div class="form-label">Bukti Penyerahan Laporan</div>
    {!! cui()->btn(route('frontend.myinterns.edit', [$myinterns]),'cil-data-transfer-down',' Download') !!} {{$internships->file_report_receipt}}
</div>

<!-- Static Field for Nilai Lapangan -->
<div class="form-group">
    <div class="form-label">Nilai Lapangan</div>
    {!! cui()->btn(route('frontend.myinterns.edit', [$myinterns]),'cil-data-transfer-down',' Download') !!} {{$internships->file_field_grade}}
</div>

<!-- Static Field for Logbook -->
<div class="form-group">
    <div class="form-label">Logbook</div>
    {!! cui()->btn(route('frontend.myinterns.edit', [$myinterns]),'cil-data-transfer-down',' Download') !!} {{$internships->file_logbook}}
</div>

<!-- Static Field for Sertifikat -->
<div class="form-group">
    <div class="form-label">Sertifikat</div>
    {!! cui()->btn(route('frontend.myinterns.edit', [$myinterns]),'cil-data-transfer-down',' Download') !!} {{$internships->file_certificate}}
</div>