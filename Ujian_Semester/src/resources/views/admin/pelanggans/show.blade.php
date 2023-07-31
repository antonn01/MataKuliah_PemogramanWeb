{{-- @extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.pelanggan.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.pelanggans.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.pelanggan.fields.id') }}
                        </th>
                        <td>
                            {{ $pelanggan->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pelanggan.fields.pelangganname') }}
                        </th>
                        <td>
                            {{ $pelanggan->pelangganname }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pelanggan.fields.id_pelanggan') }}
                        </th>
                        <td>
                            {{ $pelanggan->id_pelanggan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pelanggan.fields.nama_pelanggan') }}
                        </th>
                        <td>
                            {{ $pelanggan->id_pelanggan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pelanggan.fields.email_pelanggan') }}
                        </th>
                        <td>
                            {{ $pelanggan->id_pelanggan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pelanggan.fields.no_pelanggan') }}
                        </th>
                        <td>
                            {{ $pelanggan->id_pelanggan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pelanggan.fields.jenis_kelamin') }}
                        </th>
                        <td>
                            {{ $pelanggan->id_pelanggan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pelanggan.fields.alamat_pelanggan') }}
                        </th>
                        <td>
                            {{ $pelanggan->id_pelanggan }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.pelanggans.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection --}}

@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.pelanggan.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.pelanggans.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.pelanggan.fields.id') }}
                        </th>
                        <td>
                            {{ $pelanggan->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pelanggan.fields.pelangganname') }}
                        </th>
                        <td>
                            {{ $pelanggan->pelangganname }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pelanggan.fields.id_pelanggan') }}
                        </th>
                        <td>
                            {{ $pelanggan->id_pelanggan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pelanggan.fields.nama_pelanggan') }}
                        </th>
                        <td>
                            {{ $pelanggan->nama_pelanggan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pelanggan.fields.email_pelanggan') }}
                        </th>
                        <td>
                            {{ $pelanggan->email_pelanggan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pelanggan.fields.no_pelanggan') }}
                        </th>
                        <td>
                            {{ $pelanggan->no_pelanggan }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pelanggan.fields.jenis_kelamin') }}
                        </th>
                        <td>
                            {{ $pelanggan->jenis_kelamin }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.pelanggan.fields.alamat_pelanggan') }}
                        </th>
                        <td>
                            {{ $pelanggan->alamat_pelanggan }}
                        </td>
                    </tr>
                    
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.pelanggans.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection