<?php

namespace App\Http\Controllers;

use app\Models\ijinusaha;
use Illuminate\Http\Request;

class IjinusahaController extends Controller
{
    public function pengajuanijinusaha()
    {
        $data = ijinusaha::all();
        return view('User/pengajuanijinusaha', compact('data'));
    }

    public function ijinusaha()
    {
        return view('User/pengajuanijinusaha');
    }
    public function tambahaijinusaha()
    {
        return view('User/tambahijinusaha');
    }

    public function insertijinusaha(Request $request)
    {
        ijinusaha::create([
            'name' => $request->name,
            'tempatlahir' => $request->tempatlahir,
            'tanggallahir' => $request->tanggallahir,
            'jeniskelamin' => $request->jeniskelamin,
            'status' => $request->status,
            'namausaha' => $request->namausaha,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'keterangan' => 0,
        ]);
        return redirect()->route('pengajuanijinusaha')->with('success', 'Pengajuan Surat Ijin berhasil dikirim.');
    }

    public function detailijinusaha($id)
    {
        $data = ijinusaha::find($id);
        return view('Dashboard/detailijinusaha', compact('data'));
    }

    public function uploadijinusaha(Request $request, $id)
    {
        $request->validate([
            'fileijinusaha' => 'mimes:pdf'
        ]);
        $file = $request->file('fileijinusaha');
        $namafile = $file->getClientOriginalName();
        $path = 'fileijinusaha';
        $file->move($path, $namafile);
        $data = ijinusaha::find($id)->update([
            'fileijinusaha' => $namafile
        ]);

        return redirect()->route('ijinusaha')->with('upload', 'File Surat Ijin Usaha berhasil diupload.');
    }

    public function accijinusaha($id)
    {
        $data = ijinusaha::find($id)->update([
            'keterangan' => 1
        ]);
        return redirect()->route('ijinusaha')->with('acc', 'Pengajuan Surat Ijin Usaha berhasil diacc.');
    }

    public function downloadijinusaha($id)
    {

        $data = ijinusaha::find($id);
        $files = $data->fileijinusaha;
        return response()->download(public_path('fileijinusaha/' . $files));
    }
}
