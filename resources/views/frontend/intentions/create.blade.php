@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.intention.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.intentions.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label>{{ trans('cruds.intention.fields.title') }}</label>
                            <select class="form-control" name="title" id="title">
                                <option value disabled {{ old('title', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\Intention::TITLE_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('title', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('title'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('title') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.intention.fields.title_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="start_time">{{ trans('cruds.intention.fields.start_time') }}</label>
                            <input class="form-control datetime" type="text" name="start_time" id="start_time" value="{{ old('start_time') }}" required>
                            @if($errors->has('start_time'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('start_time') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.intention.fields.start_time_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="end_time">{{ trans('cruds.intention.fields.end_time') }}</label>
                            <input class="form-control datetime" type="text" name="end_time" id="end_time" value="{{ old('end_time') }}" required>
                            @if($errors->has('end_time'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('end_time') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.intention.fields.end_time_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection