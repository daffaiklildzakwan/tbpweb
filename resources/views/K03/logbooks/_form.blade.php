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
    {{ html()->textarea('activity')->class(["form-control", "is-invalid" => $errors->has('activity')])->id('activity')->placeholder('Activity')->style('height: 200px') }}
    @error('activity')
    <div class="invalid-feedback">{{ $errors->first('activity') }}</div>
    @enderror
</div>

