<?php  

require_once __DIR__ ."/helper.php";


$connectiont =getConnection();

$sql ="SELECT * FROM sungai_aset";
$statement=$connectiont->query($sql);


$geojson = array('type' => 'FeatureCollection', 'features' => array());

/* while($asset =$statement->fetchAll(PDO::FETCH_ASSOC)){
    $data=array(
        'type'=> 'Feature',
            'id'  =>$id = (int) $asset[0]['id'],
            'properties'=>array(
                'iddas'=>(int) $asset[0]['iddas'],
                'idsungai'=>(int)$asset[0]['idsungai'],
                'ordosungai'=>(int)$asset[0]['ordosungai'],
                'idkecamatan'=>(int)$asset[0]['idkecamatan'],
                'iddesa'=>(int)$asset[0]['iddesa'],
                'idfasilitas'=>(int)$asset[0]['idfasilitas'],
                'idstatus'=>(int)$asset[0]['idstatus'],
                'nama_aset'=>$asset[0]['nama_aset'],
                'tahun_dibuat'=>(int)$asset[0]['tahun_dibuat'],
                'ruaspatokawal'=>$asset[0]['ruaspatokawal'],
                'ruaspatokakhir'=>$asset[0]['ruaspatokakhir'],
                'foto_sungai'=>$asset[0]['foto_sungai'],
                'foto_drone'=>$asset[0]['foto_drone'],
                'kondisi_fungsi'=>$asset[0]['kondisi_fungsi'],
                'kondisi_fisik'=>$asset[0]['kondisi_fisik'],
                'keterangan_lain'=>$asset[0]['keterangan_lain'],
                'waktu_update'=>$asset[0]['waktu_update'],
                'waktu_catat'=>$asset[0]['waktu_catat'],
                'operator'=>$asset[0]['operator']
            ),
            'geometry'=>array(
                'type'=>'Point',
                'coordinates'=>[
                    $x= (float)$asset[0]['x'],
                    $y= (float) $asset[0]['y']
                    ]
            )
    );
    array_push($geojson['features'],$data);
}

echo json_encode($geojson); */

foreach($asset = $statement->fetchAll(PDO::FETCH_ASSOC) as $row){
    $data = array(
        'type' => 'Feature',
        'id'  => $id = (int) $asset['id'],
        'properties' => array(
            'iddas' => (int) $asset['iddas'],
            'idsungai' => (int)$asset['idsungai'],
            'ordosungai' => (int)$asset['ordosungai'],
            'idkecamatan' => (int)$asset['idkecamatan'],
            'iddesa' => (int)$asset['iddesa'],
            'idfasilitas' => (int)$asset['idfasilitas'],
            'idstatus' => (int)$asset['idstatus'],
            'nama_aset' => $asset['nama_aset'],
            'tahun_dibuat' => (int)$asset['tahun_dibuat'],
            'ruaspatokawal' => $asset['ruaspatokawal'],
            'ruaspatokakhir' => $asset['ruaspatokakhir'],
            'foto_sungai' => $asset['foto_sungai'],
            'foto_drone' => $asset['foto_drone'],
            'kondisi_fungsi' => $asset['kondisi_fungsi'],
            'kondisi_fisik' => $asset['kondisi_fisik'],
            'keterangan_lain' => $asset['keterangan_lain'],
            'waktu_update' => $asset['waktu_update'],
            'waktu_catat' => $asset['waktu_catat'],
            'operator' => $asset['operator']
        ),
        'geometry' => array(
            'type' => 'Point',
            'coordinates' => [
                $x = (float)$asset['y'],
                $y = (float) $asset['x']
            ]
        )
    );
    array_push($geojson['features'], $data);
}
$geoasset= json_encode($geojson);
// echo $geoasset;
// echo $geoasset;
$connectiont=null;
