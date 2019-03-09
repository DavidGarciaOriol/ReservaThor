<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control {{ $errors->has('title')?"is-invalid":"" }}" id="title" name="title" placeholder="Introduce the room title" value="{{ isset($room)?$room->title:old('title') }}" required>
            @if( $errors->has('title'))
            <div class="invalid-feedback">
                {{ $errors->first('title') }}
            </div>
            @endif
        </div>
    </div>

    <div class="col">
        <div class="form-group">
            <label for="portrait">Portrait</label>
            <input type="file" class="form-control-file mt-1 {{ $errors->has('portrait')?"is-invalid":"" }}" id="portrait" name="portrait">
            @if( $errors->has('portrait'))
            <div class="invalid-feedback">
                {{ $errors->first('portrait') }}
            </div>
            @endif
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row d-flex align-items-end">
        <div class="col-10">
            <label for="type">Type</label>
            <select class="form-control {{ $errors->has('type')?"is-invalid":"" }}" id="type" name="type">
              @foreach($types as $type)
                  <option value="{{ $type->id }}"
                  @if( ! $errors->isEmpty() )

                    {{ old('type')==$type->id?" selected":"" }}
                  @elseif( isset($room) )

                    {{ $type->id==$room->type_id?"selected":"" }}
                  @endif
                  >{{ $type->name }}</option>
              @endforeach
            </select>
            @if( $errors->has('type') )
            <div class="invalid-feedback">
                {{ $errors->first('type') }}
            </div>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="title">Address</label>
            <input type="text" class="form-control {{ $errors->has('address')?"is-invalid":"" }}" id="address" name="address" placeholder="Introduce the room address" value="{{ isset($room)?$room->address:old('address') }}" required>
            @if( $errors->has('address'))
            <div class="invalid-feedback">
                {{ $errors->first('address') }}
            </div>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="title">Price</label>
            <input type="number" class="form-control {{ $errors->has('prize')?"is-invalid":"" }}" id="prize" name="prize" placeholder="Price $" value="{{ isset($room)?$room->prize:old('prize') }}" required>
            @if( $errors->has('prize'))
            <div class="invalid-feedback">
                {{ $errors->first('prize') }}
            </div>
            @endif
        </div>
    </div>
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control {{ $errors->has('description')?"is-invalid":"" }}" id="description" name="description" rows="10" placeholder="Room Description" required>{{ isset($room)?$room->description:old('description') }}</textarea>
    @if( $errors->has('description'))
    <div class="invalid-feedback">
        {{ $errors->first('description') }}
    </div>
    @endif
</div>
