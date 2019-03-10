<div class="row">

    <div class="col">
        <div class="form-group">
            <label for="name">Reservation Name</label>
            <input type="text" class="form-control {{ $errors->has('name')?"is-invalid":"" }}" id="name" name="name" placeholder="Introduce a name to identify this reservation" value="{{ isset($room)?$room->name:old('name') }}" required>
            @if( $errors->has('name'))
            <div class="invalid-feedback">
                {{ $errors->first('name') }}
            </div>
            @endif
        </div>
    </div>

</div>

<div class="row">

    <div class="col">
        <div class="form-group">
            <label for="startDate"> Start Date </label>
            <input type="date" class="form-control {{ $errors->has('startDate')?"is-invalid":"" }}" id="startDate" name="startDate" placeholder="DD/MM/YYYY" required>
            @if ($errors->has('startDate'))
            <div class="invalid-feedback">
                {{ $errors->first('startDate') }}
            </div>
            @endif
        </div>
    </div>

    <div class="col">
        <div class="form-group">
            <label for="endDate"> End Date </label>
            <input type="date" class="form-control {{ $errors->has('endDate')?"is-invalid":"" }}" id="endDate" name="endDate" placeholder="DD/MM/YYYY" required>
            @if ($errors->has('endDate'))
            <div class="invalid-feedback">
                {{ $errors->first('endDate') }}
            </div>
            @endif
        </div>
    </div>

</div>

