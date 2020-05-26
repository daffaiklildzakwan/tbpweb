<!-- Date Text Field Input -->
<div class="form-group">
    <label class="form-label" for="date">Date</label>
    {{ html()->date('date')->class(["form-control", "is-invalid" => $errors->has('date')])->id('date')->placeholder('Date') }}
    @error('date')
    <div class="invalid-feedback">{{ $errors->first('date') }}</div>
    @enderror
</div>

<!-- Date Text Field Input -->
<div class="form-group">
    <label class="form-label" for="activity">Activity</label>
    {{ html()->text('activity')->class(["form-control", "is-invalid" => $errors->has('activity')])->id('activity')->placeholder('Activity') }}
    @error('activity')
    <div class="invalid-feedback">{{ $errors->first('activity') }}</div>
    @enderror
</div>

<!-- Activity Text Field Input -->
<div class="form-group">
    <label class="form-label" for="notes">Notes</label>
    {{ html()->textarea('notes')->class(["form-control", "is-invalid" => $errors->has('notes')])->id('notes') }}
    @error('notes')
    <div class="invalid-feedback">{{ $errors->first('notes') }}</div>
    @enderror
</div>

