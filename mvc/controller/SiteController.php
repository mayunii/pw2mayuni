<?php 

namespace controller;

use app\Controller;
use app\View;
use model\Mahasiswa;
use model\Kategori;
/**
* 
*/
class SiteController extends Controller
{
	
	public function actionindex()
	{
		$mahasiswa = new Mahasiswa();
		$namaku = $mahasiswa->ambilSemua();

		View::render('utama',['nama'=>$namaku]);
	}

	public function actioncoba()
	{
		
		$nameku = "mayuni";
		$namadia = "amir";


		View::render('coba',[
						'nameku'=>$nameku,
						'namadia'=>$namadia
						]);
	}

	public function actionListkategori()
	{
		$kategori = new Kategori();
		$isi_kategori = $kategori->ambilSemua();

		View::render('kategori',['isi_kategori'=>$isi_kategori]);
}
}
?>