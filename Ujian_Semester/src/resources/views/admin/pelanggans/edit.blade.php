@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.pelanggan.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.pelanggans.update", [$pelanggan->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="pelangganname">{{ trans('cruds.pelanggan.fields.pelangganname') }}</label>
                <input class="form-control {{ $errors->has('pelangganname') ? 'is-invalid' : '' }}" type="text" name="pelangganname" id="pelangganname" value="{{ old('pelangganname', $pelanggan->pelangganname) }}" required>
                @if($errors->has('pelangganname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pelangganname') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pelanggan.fields.pelangganname_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="id_pelanggan">{{ trans('cruds.pelanggan.fields.id_pelanggan') }}</label>
                <input class="form-control {{ $errors->has('id_pelanggan') ? 'is-invalid' : '' }}" type="text" name="id_pelanggan" id="id_pelanggan" value="{{ old('id_pelanggan', $pelanggan->id_pelanggan) }}" required>
                @if($errors->has('id_pelanggan'))
                    <div class="invalid-feedback">
                        {{ $errors->first('id_pelanggan') }}
                    </div>
                    @endif
            <div class="form-group">
                <label class="required" for="nama_pelanggan">{{ trans('cruds.pelanggan.fields.nama_pelanggan') }}</label>
                <input class="form-control {{ $errors->has('nama_pelanggan') ? 'is-invalnama' : '' }}" type="text" name="nama_pelanggan" nama="nama_pelanggan" value="{{ old('nama_pelanggan', $pelanggan->nama_pelanggan) }}" required>
                @if($errors->has('nama_pelanggan'))
                    <div class="invalnama-feedback">
                        {{ $errors->first('nama_pelanggan') }}
                    </div>
                    @endif
            <div class="form-group">
                <label class="required" for="email_pelanggan">{{ trans('cruds.pelanggan.fields.email_pelanggan') }}</label>
                <input class="form-control {{ $errors->has('email_pelanggan') ? 'is-invalemail' : '' }}" type="text" name="email_pelanggan" email="email_pelanggan" value="{{ old('email_pelanggan', $pelanggan->email_pelanggan) }}" required>
                @if($errors->has('email_pelanggan'))
                    <div class="invalemail-feedback">
                        {{ $errors->first('email_pelanggan') }}
                    </div>
                    @endif
            <div class="form-group">
                <label class="required" for="no_pelanggan">{{ trans('cruds.pelanggan.fields.no_pelanggan') }}</label>
                <input class="form-control {{ $errors->has('no_pelanggan') ? 'is-invalno' : '' }}" type="text" name="no_pelanggan" no="no_pelanggan" value="{{ old('no_pelanggan', $pelanggan->no_pelanggan) }}" required>
                @if($errors->has('no_pelanggan'))
                    <div class="invalno-feedback">
                        {{ $errors->first('no_pelanggan') }}
                    </div>
                    @endif
            <div class="form-group">
                <label class="required" for="jenis_kelamin">{{ trans('cruds.pelanggan.fields.jenis_kelamin') }}</label>
                <input class="form-control {{ $errors->has('jenis_kelamin') ? 'is-invalid' : '' }}" type="text" name="jenis_kelamin" id="jenis_kelamin" value="{{ old('jenis_kelamin', $pelanggan->jenis_kelamin) }}" required>
                @if($errors->has('jenis_kelamin'))
                    <div class="invalid-feedback">
                        {{ $errors->first('jenis_kelamin') }}
                    </div>
                    @endif
            <div class="form-group">
                <label class="required" for="alamat_pelanggan">{{ trans('cruds.pelanggan.fields.alamat_pelanggan') }}</label>
                <input class="form-control {{ $errors->has('alamat_pelanggan') ? 'is-invalalamat' : '' }}" type="text" name="alamat_pelanggan" alamat="alamat_pelanggan" value="{{ old('alamat_pelanggan', $pelanggan->alamat_pelanggan) }}" required>
                @if($errors->has('alamat_pelanggan'))
                    <div class="invalalamat-feedback">
                        {{ $errors->first('alamat_pelanggan') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pelanggan.fields.jenis_kelamin_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection