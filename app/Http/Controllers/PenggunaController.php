<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $menu = "Master";
        $submenu = "Data Pengguna";

        if ($request->ajax()) {
            $data = User::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn(
                    'action',
                    function ($data) {
                        $actionBtn = '
                        <div>
                            <a href="' . route('pengguna.edit', $data->id) . ' "  class="btn btn-outline-info rounded-round"><i class="mr-2 icon-pencil5"></i>Edit</a>
                            <a href="' . route('pengguna.destroy', $data->id) . ' " class="btn btn-outline-danger rounded-round delete-data-table"><i class="mr-2 icon-trash"></i>Delete</a>
                        </div>';
                        return $actionBtn;
                    }
                )
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.pengguna.index', compact('menu', 'submenu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = "Master";
        $submenu = "Data Pengguna";
        $subsubmenu = "Tambah Pengguna";
        $title = "Tambah Data Pengguna";
        return view('admin.pengguna.create', compact('menu', 'submenu', 'subsubmenu', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'confirmed']
            ]
        );

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];

        User::create($data);
        Alert::success('Sukses', 'Data Telah di Simpan');
        return redirect(route('pengguna.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function show(Pengguna $pengguna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = "Master";
        $submenu = "Data Pengguna";
        $subsubmenu = "Ubah Data Pengguna";
        $title = "Ubah Data Pengguna";
        $data = User::find($id);
        return view('admin.pengguna.edit', compact('data', 'menu', 'submenu', 'subsubmenu', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => 'required|email|unique:users,email,' . $id . ',id',
        ]);

        if ($request->filled('current_password') || $request->filled('new_password') || $request->filled('new_confirm_password')) {
            $request->validate([
                'current_password' => ['required', new MatchOldPassword($request->id_user)],
                'new_password' => ['required', 'min:8'],
                'new_confirm_password' => ['same:new_password'],
            ]);
            $data = ($request->except('_method', '_token', 'current_password', 'new_password', 'new_confirm_password') + ['password' => Hash::make($request->new_password)]);
        } else {
            $data = ($request->except('_method', '_token', 'current_password', 'new_password', 'new_confirm_password'));
        }

        User::find($id)->update($data);
        Alert::success('Sukses', 'Data Telah di Perbaharui');
        return redirect(route('pengguna.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengguna  $pengguna
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
    }
}
