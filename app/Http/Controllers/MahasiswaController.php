<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table mahasiswa
    	$mahasiswa = DB::table('mahasiswa')->get();

    	// mengirim data pegawai ke view index
	return view('index',['mahasiswa' => $mahasiswa]);

    }
	
	
	//tambah
	public function tambah()
	{
	 
		// memanggil view tambah
		return view('tambah');
	 
	}
	
	
	
	public function store(Request $request)
		{
			// insert data ke table pegawai
			DB::table('mahasiswa')->insert([
				'nim' => $request->nim,
				'nama' => $request->nama,
				'alamat' => $request->alamat,
				'asal_sekolah' => $request->asal_sekolah
			]);
			// alihkan halaman ke halaman pegawai
			return redirect('/mahasiswa');

		}
	
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$mahasiswa = DB::table('mahasiswa')->where('mahasiswa_id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit',['mahasiswa' => $mahasiswa]);
	 
	}
	
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('mahasiswa')->where('mahasiswa_id',$request->mahasiswa_id)->update([
			'nim' => $request->nim,
			'nama' => $request->nama,
			'alamat' => $request->alamat,
			'asal_sekolah' => $request->asal_sekolah
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/mahasiswa');
	}
	
	public function hapus($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$mahasiswa = DB::table('mahasiswa')->where('mahasiswa_id',$id)->delete();
		// passing data pegawai yang didapat ke view edit.blade.php
		return redirect('/mahasiswa');
	 
	}
}
