<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPelangganRequest;
use App\Http\Requests\StorePelangganRequest;
use App\Http\Requests\UpdatePelangganRequest;
use App\Models\Pelanggan;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class PelangganController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('pelanggan_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Pelanggan::query()->select(sprintf('%s.*', (new Pelanggan)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'pelanggan_show';
                $editGate      = 'pelanggan_edit';
                $deleteGate    = 'pelanggan_delete';
                $crudRoutePart = 'pelanggans';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('pelangganname', function ($row) {
                return $row->pelangganname ? $row->pelangganname : '';
            });
            $table->editColumn('id_pelanggan', function ($row) {
                return $row->id_pelanggan ? $row->id_pelanggan : '';
            });
            $table->editColumn('nama_pelanggan', function ($row) {
                return $row->nama_pelanggan ? $row->nama_pelanggan : '';
            });
            $table->editColumn('email_pelanggan', function ($row) {
                return $row->email_pelanggan ? $row->email_pelanggan : '';
            });
            $table->editColumn('no_pelanggan', function ($row) {
                return $row->no_pelanggan ? $row->no_pelanggan : '';
            });
            $table->editColumn('jenis_kelamin', function ($row) {
                return $row->jenis_kelamin ? $row->jenis_kelamin : '';
            });
            $table->editColumn('alamat_pelanggan', function ($row) {
                return $row->alamat_pelanggan ? $row->alamat_pelanggan : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.pelanggans.index');
    }

    public function create()
    {
        abort_if(Gate::denies('pelanggan_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pelanggans.create');
    }

    public function store(StorePelangganRequest $request)
    {
        $pelanggan = Pelanggan::create($request->all());

        return redirect()->route('admin.pelanggans.index');
    }

    public function edit(Pelanggan $pelanggan)
    {
        abort_if(Gate::denies('pelanggan_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pelanggans.edit', compact('pelanggan'));
    }

    public function update(UpdatePelangganRequest $request, Pelanggan $pelanggan)
    {
        $pelanggan->update($request->all());

        return redirect()->route('admin.pelanggans.index');
    }

    public function show(Pelanggan $pelanggan)
    {
        abort_if(Gate::denies('pelanggan_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pelanggans.show', compact('pelanggan'));
    }

    public function destroy(Pelanggan $pelanggan)
    {
        abort_if(Gate::denies('pelanggan_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pelanggan->delete();

        return back();
    }

    public function massDestroy(MassDestroyPelangganRequest $request)
    {
        $pelanggans = Pelanggan::find(request('ids'));

        foreach ($pelanggans as $pelanggan) {
            $pelanggan->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function indexapi()
    {
        $pelanggans = Pelanggan::all();
        return response()->json($pelanggans);
    }

    public function storeapi(Request $request)
    {
        $pelanggans = new Pelanggan;
        $pelanggans->pelangganname = $request->pelangganname;
        $pelanggans->id_pelanggan = $request->id_pelanggan;
        $pelanggans->nama_pelanggan = $request->nama_pelanggan;
        $pelanggans->email_pelanggan = $request->email_pelanggan;
        $pelanggans->no_pelanggan = $request->no_pelanggan;
        $pelanggans->jenis_kelamin = $request->jenis_kelamin;
        $pelanggans->alamat_pelanggan = $request->alamat_pelanggan;
        $pelanggans->save();

        return response()->json([
            'message' => 'Successfully created pelanggan list!'
        ], 201);
    }

    public function showapi($id)
    {
        $pelanggans = Pelanggan::find($id);
        if (!empty($pelanggans)) 
        {
            return response()->json($pelanggans);
        }
        else 
        {
            return response()->json([
                'message' => 'No pelanggan found'
            ], 404);
        }
    }

    public function updateapi(Request $request, $id)
    {
        $pelanggans = Pelanggan::find($id);
        if (!empty($pelanggans)) {
            $pelanggans->pelangganname = $request->pelangganname;
            $pelanggans->id_pelanggan = $request->id_pelanggan;
            $pelanggans->nama_pelanggan = $request->nama_pelanggan;
            $pelanggans->email_pelanggan = $request->email_pelanggan;
            $pelanggans->no_pelanggan = $request->no_pelanggan;
            $pelanggans->jenis_kelamin = $request->jenis_kelamin;
            $pelanggans->alamat_pelanggan = $request->alamat_pelanggan;
            $pelanggans->save();

            return response()->json([
                'message' => 'Successfully updated pelanggan list!'
            ], 200);
        }
        else 
        {
            return response()->json([
                'message' => 'No pelanggan found'
            ], 404);
        }
    }

    public function destroyapi($id)
    {
        $pelanggans = Pelanggan::find($id);
        if (!empty($pelanggans)) 
        {
            $pelanggans->delete();

            return response()->json([
                'message' => 'Successfully deleted pelanggan list!'
            ], 200);
        }
        else 
        {
            return response()->json([
                'message' => 'No pelanggan found'
            ], 404);
        }
    }
}

