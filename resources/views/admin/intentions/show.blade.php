@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.intention.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.intentions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.intention.fields.id') }}
                        </th>
                        <td>
                            {{ $intention->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.intention.fields.title') }}
                        </th>
                        <td>
                            {{ App\Models\Intention::TITLE_SELECT[$intention->title] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.intention.fields.start_time') }}
                        </th>
                        <td>
                            {{ $intention->start_time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.intention.fields.end_time') }}
                        </th>
                        <td>
                            {{ $intention->end_time }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.intentions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection