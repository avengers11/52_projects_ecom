<div class="tab-pane " id="tab-data">

  <div class="row">
    <div class="col-md-6 form-group{{ $errors->has('model') ? ' has-danger' : '' }}">
        <label class="form-control-label" for="model">{{ __('Model') }}*</label>
        <input type="text" name="model" id="model" class="form-control form-control-alternative{{ $errors->has('model') ? ' is-invalid' : '' }}" placeholder="{{ __('Model') }}" value="{{ old('model', $product->model) }}" >

        @if ($errors->has('model'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('model') }}</strong>
            </span>
        @endif
    </div>

    <div class="col-md-6 form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
        <label class="form-control-label" for="price">{{ __('Price') }}*</label>
        <input type="number" name="price" id="price" class="form-control form-control-alternative{{ $errors->has('price') ? ' is-invalid' : '' }}" placeholder="{{ __('Price') }}" value="{{ old('price', $product->price) }}" >

        @if ($errors->has('price'))
            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
        @endif
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 form-group{{ $errors->has('quantity') ? ' has-danger' : '' }}">
        <label class="form-control-label" for="input-name">{{ __('Quantity') }}*</label>
        <input type="text" name="quantity" id="quantity" value="{{ old('quantity', $product->quantity) }}" class="form-control form-control-alternative{{ $errors->has('quantity') ? ' is-invalid' : '' }}" >
        @if ($errors->has('quantity'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('quantity') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-md-6 form-group{{ $errors->has('sku') ? ' has-danger' : '' }}">
        <label class="form-control-label" for="input-name">{{ __('SKU') }}</label>
        <input type="text" name="sku" id="sku" value="{{ old('sku', $product->sku) }}" class="form-control form-control-alternative{{ $errors->has('sku') ? ' is-invalid' : '' }}" >
        @if ($errors->has('sku'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('sku') }}</strong>
            </span>
        @endif
    </div>

    <div class="col-md-6 form-group {{ $errors->has('tax_rate_id') ? ' has-danger' : '' }}">
        <label class="form-control-label" for="tax_rate_id">{{ __('Tax Class') }}</label>
        <select class="form-control {{ $errors->has('tax_rate_id') ? ' has-danger' : '' }}" name="tax_rate_id">
            <option value="">Select </option>
            @foreach($data['tax_rate'] as $key => $value)
                <option value="{{ $key }}"  {{ $product->tax_rate_id == $key ? 'selected' : '' }}>{{ $value }}</option>
            @endforeach
        </select>
        @if ($errors->has('tax_rate_id'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('tax_rate_id') }}</strong>
            </span>
        @endif
    </div>
  </div>

        <h3>Product Dimension</h3><br>
        <div class="row">
            <div class="col-md-6 form-group{{ $errors->has('length') ? ' has-danger' : '' }}">
                <label class="form-control-label" for="length">{{ __('Length') }}</label>
                <input type="text" name="length" id="length" class="form-control form-control-alternative{{ $errors->has('length') ? ' is-invalid' : '' }}" placeholder="{{ __('Length') }}" value="{{ old('length', $product->length) }}" >

                @if ($errors->has('length'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('length') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col-md-6 form-group{{ $errors->has('width') ? ' has-danger' : '' }}">
                <label class="form-control-label" for="width">{{ __('Width') }}</label>
                <input type="text" name="width" id="width" class="form-control form-control-alternative{{ $errors->has('width') ? ' is-invalid' : '' }}" placeholder="{{ __('Width') }}" value="{{ old('width', $product->width) }}" >

                @if ($errors->has('width'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('width') }}</strong>
                    </span>
                @endif
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 form-group{{ $errors->has('height') ? ' has-danger' : '' }}">
                <label class="form-control-label" for="height">{{ __('Height') }}</label>
                <input type="text" name="height" id="height" class="form-control form-control-alternative{{ $errors->has('height') ? ' is-invalid' : '' }}" placeholder="{{ __('Height') }}" value="{{ old('height', $product->height) }}" >

                @if ($errors->has('height'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('height') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-md-6 form-group{{ $errors->has('weight_class_id') ? ' has-danger' : '' }}">
                <label class="form-control-label" for="weight_class_id">{{ __('Weight Class') }}</label>
                <select class="form-control" name="weight_class_id">
                    <option value="">Select</option>
                    @foreach($data['weight_class'] as $key => $value)
                        <option value="{{ $key }}" {{ $product->weight_class_id == $key ? 'selected' : '' }}>{{ $value }}</option>
                    @endforeach
                </select>
                @if ($errors->has('weight_class_id'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('weight_class_id') }}</strong>
                    </span>
                @endif
            </div>
        </div>


      <div class="row">


        <div class="col-md-6 form-group{{ $errors->has('weight') ? ' has-danger' : '' }}">
            <label class="form-control-label" for="weight">{{ __('Weight') }}</label>
            <input type="text" name="weight" id="weight" class="form-control form-control-alternative{{ $errors->has('weight') ? ' is-invalid' : '' }}" placeholder="{{ __('Weight') }}" value="{{ old('weight', $product->weight) }}" >

            @if ($errors->has('weight'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('weight') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-md-6  form-group{{ $errors->has('date_available') ? ' has-danger' : '' }}">
            <label class="form-control-label" for="date_available">{{ __('AvaiLabel Date') }}</label>
            <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                </div>
                <input name="date_available" class="form-control datepicker {{ $errors->has('date_available') ? ' is-invalid' : '' }}" placeholder="Select date" type="text" value="{{ old('date_available', $product->date_available) }}" autofocus  >
                @if ($errors->has('date_available'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('date_available') }}</strong>
                    </span>
                @endif
            </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 form-group{{ $errors->has('stock_status_id') ? ' has-danger' : '' }}">
            <label class="form-control-label" for="stock_status_id">{{ __('Stock Status') }}</label>
            <select class="form-control" name="stock_status_id">
                <option value="">Select</option>
                @foreach($data['stock_status'] as $key => $value)
                    <option value="{{ $key }}" {{ $product->stock_status_id == $key ? 'selected' : '' }}>{{ $value }}</option>
                @endforeach
            </select>
            @if ($errors->has('stock_status_id'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('stock_status_id') }}</strong>
                </span>
            @endif
        </div>



        <div class="col-md-6 form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
            <label class="form-control-label" for="status">{{ __('Status') }}</label>
            <select class="form-control" name="status">
                @foreach(config('constant.status') as $key => $value )
                    <option value={{ $key }} {{ $product->status == $key ? 'selected' : '' }}>{{ $value }}</option>
                @endforeach
            </select>
            @if ($errors->has('status'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('status') }}</strong>
                </span>
            @endif
        </div>

      </div>
      <div class="row">
        <div class="col-md-6 form-group{{ $errors->has('sort_order') ? ' has-danger' : '' }}">
            <label class="form-control-label" for="input-name">{{ __('Sort Order') }}</label>
            <input type="number" min="0" name="sort_order" id="sort_order" value="{{ old('sort_order', $product->sort_order) }}" class="form-control form-control-alternative{{ $errors->has('sort_order') ? ' is-invalid' : '' }}" >
            @if ($errors->has('sort_order'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('sort_order') }}</strong>
                </span>
            @endif
        </div>
      </div>




</div>
