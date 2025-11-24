<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosens = Dosen::all();
        return view('dosen.index',['dosens' =>$dosens]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nip'            => 'required|size:8|unique:dosens',    
            'nama'           => 'required|min:3|max:50',           
            'jenis_kelamin'  => 'required|in:P,L',                 
            'tanggal_lahir'  => 'required|date',                   
            'email'          => 'required|email|unique:dosens',     
            'telepon'        => 'nullable|digits_between:10,15',   
            'jurusan'        => 'required',                        
            'jabatan'        => 'required',                        
            'pendidikan'     => 'required',                        
            'alamat'         => 'nullable|max:100',                
            'status'         => 'required|in:aktif,nonaktif',      
        ]);

        Dosen::create($validateData);
        $request->session()->flash('pesan',"Penambahan data {$validateData['nama']} berhasil");
        return redirect()->route('dosens.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        //dd($dosen);
        //$result = dosen::find($dosen);
        return view('dosen.show',['dosen' =>$dosen]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        return view('dosen.edit',['dosen' =>$dosen]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        // dump($request->all());
        // dump($mahasiswa);

        $validateData = $request->validate([
            'nip'            => 'required|size:8|unique:dosens',    
            'nama'           => 'required|min:3|max:50',           
            'jenis_kelamin'  => 'required|in:P,L',                 
            'tanggal_lahir'  => 'required|date',                   
            'email'          => 'required|email|unique:dosens',     
            'telepon'        => 'nullable|digits_between:10,15',   
            'jurusan'        => 'required',                        
            'jabatan'        => 'required',                        
            'pendidikan'     => 'required',                        
            'alamat'         => 'nullable|max:100',                
            'status'         => 'required|in:aktif,nonaktif',      
        ]);

        dosen::where('id',$dosen->id)->update($validateData);
        return redirect()->route('dosens.show',['dosen' =>$dosen->id])->with('pesan',"Update data{$validateData['nama']} berhasil");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
        return redirect()->route('dosens.index')->with('pesan',"Hapus data $dosen->nama berhasil");
    }
}
