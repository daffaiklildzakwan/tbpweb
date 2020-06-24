<div class="form-group">
    <label class="form-label" for="file_report_receipt">Report Receipt :</label>
    {{ html()->file('file_report_receipt')->class(["form-control-file", "is-invalid" => $errors->has('file_report_receipt')])->id('file_report_receipt') }}
    @error('file_report_receipt')
    <div class="invalid-feedback">{{ $errors->first('file_report_receipt') }}</div>
    @enderror
</div>

<div class="form-group">
    <label class="form-label" for="file_field_grade">Field Grade :</label>
    {{ html()->file('file_field_grade')->class(["form-control-file", "is-invalid" => $errors->has('file_field_grade')])->id('file_field_grade') }}
    @error('file_field_grade')
    <div class="invalid-feedback">{{ $errors->first('file_field_grade') }}</div>
    @enderror
</div>

<div class="form-group">
    <label class="form-label" for="file_logbook">Logbook :</label>
    {{ html()->file('file_logbook')->class(["form-control-file", "is-invalid" => $errors->has('file_logbook')])->id('file_logbook') }}
    @error('file_logbook')
    <div class="invalid-feedback">{{ $errors->first('file_logbook') }}</div>
    @enderror
</div>

<div class="form-group">
    <label class="form-label" for="file_seminar_attendance">Seminar Attendance :</label>
    {{ html()->file('file_seminar_attendance')->class(["form-control-file", "is-invalid" => $errors->has('file_seminar_attendance')])->id('file_seminar_attendance') }}
    @error('file_seminar_attendance')
    <div class="invalid-feedback">{{ $errors->first('file_seminar_attendance') }}</div>
    @enderror
</div>

<div class="form-group">
    <label class="form-label" for="file_seminar_off_report">Seminar Off Report :</label>
    {{ html()->file('file_seminar_off_report')->class(["form-control-file", "is-invalid" => $errors->has('file_seminar_off_report')])->id('file_seminar_off_report') }}
    @error('file_seminar_off_report')
    <div class="invalid-feedback">{{ $errors->first('file_seminar_off_report') }}</div>
    @enderror
</div>

<div class="form-group">
    <label class="form-label" for="file_report">Report :</label>
    {{ html()->file('file_report')->class(["form-control-file", "is-invalid" => $errors->has('file_report')])->id('file_report') }}
    @error('file_report')
    <div class="invalid-feedback">{{ $errors->first('file_report') }}</div>
    @enderror
</div>

<div class="form-group">
    <label class="form-label" for="file_certificate">Certificate :</label>
    {{ html()->file('file_certificate')->class(["form-control-file", "is-invalid" => $errors->has('file_certificate')])->id('file_certificate') }}
    @error('file_certificate')
    <div class="invalid-feedback">{{ $errors->first('file_certificate') }}</div>
    @enderror
</div>