<?php
use App\Http\Controllers\{KoperasiController,SimpegController,KependudukanContorller,ElaporContorller,
                         SurvilanceContorller,SimangkisContorller,TataruangContorller,CovidContorller,
                         PrajawibawaContorller,DisnakerContorller};
                         
Route::get('/', function () {
    return view('dashboard');
});

// Route::get('/','DashboardController@index');
// For Clear cache
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
// diskop
Route::group(['prefix'=>'diskop-ukm'],function(){
    Route::get('koperasi','DashboardController@index')->name('disokop.koperasi');
    Route::get('ukm', 'KoperasiController@index')->name('disokop.ukm');
});
//simpeg
Route::group(['prefix'=>'simpeg'],function(){
    Route::get('golongan','SimpegController@index')->name('simpeg.golongan');
    Route::get('umur','SimpegController@index')->name('simpeg.umur');
    Route::get('sppd','SimpegController@index')->name('simpeg.sppd');
    Route::get('pendidikan','SimpegController@index')->name('simpeg.pendidikan');
    Route::get('eselon','SimpegController@index')->name('simpeg.eselon');
    Route::get('absem','SimpegController@index')->name('simpeg.absen');
    Route::get('pensiun','SimpegController@index')->name('simpeg.pensiun');
});
// kependudukan
Route::group(['prefix'=>'kependudukan'],function(){
    Route::get('jenis-kelamin','KependudukanContorller@index')->name('kependudukan.jenis');
    Route::get('agama','KependudukanContorller@index')->name('kependudukan.agama');
    Route::get('golongan-darah','KependudukanContorller@index')->name('kependudukan.darah');
    Route::get('perkawinan','KependudukanContorller@index')->name('kependudukan.perkawinan');
    Route::get('pekerjaan','KependudukanContorller@index')->name('kependudukan.pekerjaan');
    Route::get('pendidikan','KependudukanContorller@index')->name('kependudukan.pendidikan');
});
// e-lapor
Route::group(['prefix'=>'e-lapor'],function(){
    Route::get('kategori','ElaporContorller@index')->name('elapor.kategori');
    Route::get('skpd','ElaporContorller@index')->name('elapor.skpd');
    Route::get('kabupaten','ElaporContorller@index')->name('elapor.kabupaten');
    Route::get('lokasi','ElaporContorller@index')->name('elapor.lokasi');
});
// survilance
Route::group(['prefix'=>'survilance'],function(){
    Route::get('atcs','SurvilanceContorller@index')->name('survilance.atcs');
    Route::get('atcs-kota','SurvilanceContorller@index')->name('survilance.kota');
    Route::get('cctv-bantul','SurvilanceContorller@index')->name('survilance.bantul');
    Route::get('cctv-kp','SurvilanceContorller@index')->name('survilance.kp');
    Route::get('cctv-public','SurvilanceContorller@index')->name('survilance.public');
    Route::get('cctv-sleman','SurvilanceContorller@index')->name('survilance.sleman');
    Route::get('cctv-sungai','SurvilanceContorller@index')->name('survilance.sungai');
    Route::get('cctv-uptmalioboro','SurvilanceContorller@index')->name('survilance.malioboro');
});
//pertanahan
Route::group(['prefix'=>'pertanahan'],function(){
    Route::get('pertanahan','PetahananContorller@index')->name('pertahanan');
});
//tataruang
Route::group(['prefix'=>'tataruang'],function(){
    Route::get('pola-ruang','TataruangContorller@index')->name('tataruang.pola');
    Route::get('struktur-ruang','TataruangContorller@index')->name('tataruang.ruang');
    Route::get('strategi-provinsi','TataruangContorller@index')->name('tataruang.provinsi');
});
//simangkis
Route::group(['prefix'=>'simangkis'],function(){
    Route::get('air-minum','SimangkisContorller@index')->name('simangkis.minum');
    Route::get('bab','SimangkisContorller@index')->name('simangkis.bab');
    Route::get('bahan-masak','SimangkisContorller@index')->name('simangkis.masak');
    Route::get('listrik','SimangkisContorller@index')->name('simangkis.listrik');
    Route::get('disabilitas','SimangkisContorller@index')->name('simangkis.disabilitas');
    Route::get('ijazah','SimangkisContorller@index')->name('simangkis.ijazah');
    Route::get('jenis-dinding','SimangkisContorller@index')->name('simangkis.jenis');
    Route::get('kepimilikan','SimangkisContorller@index')->name('simangkis.kepimilikan');
    Route::get('kesataraan','SimangkisContorller@index')->name('simangkis.kesataraan');
    Route::get('pekerjaan','SimangkisContorller@index')->name('simangkis.pekerjaan');
    Route::get('pendidikan','SimangkisContorller@index')->name('simangkis.pendidikan');
    Route::get('pekerjaan','SimangkisContorller@index')->name('simangkis.pekerjaan');
    Route::get('penyakit-kronis','SimangkisContorller@index')->name('simangkis.kronis');
    Route::get('perkawinan','SimangkisContorller@index')->name('simangkis.perekawinan');
    Route::get('sumber-penerangan','SimangkisContorller@index')->name('simangkis.penerangan');
});
// covid
Route::group(['prefix'=>'covid'],function(){
    Route::get('sebaran-covid','CovidContorller@index')->name('covid.sebaran');
    Route::get('statistik-covid','CovidContorller@index')->name('covid.statistik');
    Route::get('info-rumahsakit','CovidContorller@index')->name('covid.rumahsakit');
    Route::get('info-vaksin','CovidContorller@index')->name('covid.vaksin');
});
// prajawibawa
Route::group(['prefix'=>'prajawibawa'],function(){
    Route::get('ketertiban','PrajawibawaContorller@index')->name('prajawibawa.ketertiban');
    Route::get('pengamanan','PrajawibawaContorller@index')->name('prajawibawa.pengamanan');
    Route::get('pertolongan','PrajawibawaContorller@index')->name('prajawibawa.pertolongan');
    Route::get('perda','PrajawibawaContorller@index')->name('prajawibawa.perda');
});
// disnaker
Route::group(['prefix'=>'disnaker'],function(){
    Route::get('angkatan-kerja','DisnakerContorller@index')->name('disnaker.angkatan');
    Route::get('usia-kerja','DisnakerContorller@index')->name('disnaker.usia');
    Route::get('penganggur','DisnakerContorller@index')->name('disnaker.penganggur');
    Route::get('migran','DisnakerContorller@index')->name('disnaker.migran');
    Route::get('transmigrasi','DisnakerContorller@index')->name('disnaker.transmigrasi');
});
// 404 for undefined routes
Route::any('/{page?}',function(){
    return View::make('pages.error-pages.error-404');
})->where('page','.*');