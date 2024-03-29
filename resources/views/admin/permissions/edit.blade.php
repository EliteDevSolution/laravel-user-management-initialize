@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.permissions.index') }}">
                            {{ trans('cruds.permission.title_singular') }}
                        </a>
                    </li>
                    <li class="breadcrumb-item active">{{ trans('global.edit') }}</li>
                </ol>
            </div>
            <h4 class="page-title">{{ trans('global.edit') }} {{ trans('cruds.permission.title_singular') }}</h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="card">
    <div class="card-body">
        <form action="{{ route("admin.permissions.update", [$permission->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('cruds.permission.fields.title') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($permission) ? $permission->name : '') }}" required>
                @if($errors->has('name'))
                    <div class="mt-1" style="color: #e6334d; font-weight: 500;">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>
@endsection