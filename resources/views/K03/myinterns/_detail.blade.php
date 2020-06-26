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
    @if(isset($internships->file_report_receipt))
        <div><a href='{{asset('../storage/app/file_report_receipt/'.$internships->file_report_receipt)}}' class='btn btn-sm btn-info'><i class='fa cil-data-transfer-down'> Download</i></a></div>
    @else
    <div><i>Tidak Ada File</i></div>
    @endif
</div>

<!-- Static Field for Nilai Lapangan -->
<div class="form-group">
    <div class="form-label">Nilai Lapangan</div>
    @if(isset($internships->file_field_grade))
        <div><a href='{{asset('../storage/app/file_field_grade/'.$internships->file_field_grade)}}' class='btn btn-sm btn-info'><i class='fa cil-data-transfer-down'> Download</i></a></div>
    @else
    <div><i>Tidak Ada File</i></div>
    @endif
</div>

<!-- Static Field for Logbook -->
<div class="form-group">
    <div class="form-label">Logbook</div>
    @if(isset($internships->file_logbook))
        <div><a href='{{asset('../storage/app/file_logbook/'.$internships->file_logbook)}}' class='btn btn-sm btn-info'><i class='fa cil-data-transfer-down'> Download</i></a></div>
    @else
    <div><i>Tidak Ada File</i></div>
    @endif
</div>

<!-- Static Field for Sertifikat -->
<div class="form-group">
    <div class="form-label">Sertifikat</div>
    @if(isset($internships->file_certificate))
        <div><a href='{{asset('../storage/app/file_certificate/'.$internships->file_certificate)}}' class='btn btn-sm btn-info'><i class='fa cil-data-transfer-down'> Download</i></a></div>
    @else
    <div><i>Tidak Ada File</i></div>
    @endif
</div>

<!-- Static Field for File Seminar Attendance -->
<div class="form-group">
    <div class="form-label">File Seminar Attendance</div>
    @if(isset($internships->file_seminar_attendance))
        <div><a href='{{asset('../storage/app/file_seminar_attendance/'.$internships->file_seminar_attendance)}}' class='btn btn-sm btn-info'><i class='fa cil-data-transfer-down'> Download</i></a></div>
    @else
    <div><i>Tidak Ada File</i></div>
    @endif
</div>

<!-- Static Field for File Seminar Off Report -->
<div class="form-group">
    <div class="form-label">File Seminar Off Report</div>
    @if(isset($internships->file_seminar_off_report))
        <div><a href='{{asset('../storage/app/file_seminar_off_report/'.$internships->file_seminar_off_report)}}' class='btn btn-sm btn-info'><i class='fa cil-data-transfer-down'> Download</i></a></div>
    @else
    <div><i>Tidak Ada File</i></div>
    @endif
</div>

<!-- Static Field for File Report -->
<div class="form-group">
    <div class="form-label">File Report</div>
    @if(isset($internships->file_report))
        <div><a href='{{asset('../storage/app/file_report/'.$internships->file_report)}}' class='btn btn-sm btn-info'><i class='fa cil-data-transfer-down'> Download</i></a></div>
    @else
    <div><i>Tidak Ada File</i></div>
    @endif
</div>