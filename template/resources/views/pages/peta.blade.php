@extends('layout.master')
@push('plugin-styles')
  <!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
@endpush
@section('content')
<div class="row">
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-cube text-danger icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Total Revenue</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">$65,650</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> 65% lower growth </p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-receipt text-warning icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Orders</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">3455</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Product-wise sales </p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-poll-box text-success icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Sales</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">5693</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Weekly Sales </p>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-account-box-multiple text-info icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Employees</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">246</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Product-wise sales </p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div id="map" style="width: 100vw; height: 100vh;"></div>
</div>
@endsection
@push('plugin-scripts')
  {!! Html::script('/assets/plugins/chartjs/chart.min.js') !!}
  {!! Html::script('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') !!}
  {!! Html::script('/assets/js/leaflet.groupedlayercontrol.js') !!}
@endpush
@push('custom-scripts')
 <script>
   (function($){
     $(function(){
      //  var map = L.map('map').setView([-7.8913, 110.3700], 13);//-7.8913/110.3700
      /* var tiles = L.tileLayer("https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}.png", {
        maxZoom: 19,
        attribution: 
      }).addTo(map); */
      let kabBantul=L.layerGroup();
      let kabSleman=L.layerGroup();
      let kabKP=L.layerGroup();
      let kabGK=L.layerGroup();
      let kabDIY=L.layerGroup();
      // kelurahan
      let kelurbantul=L.layerGroup();
      let kelursleman=L.layerGroup();
      let kelurKP=L.layerGroup();
      let kelurGK=L.layerGroup();
      let kelurDIY=L.layerGroup();

      // Datakabupaten
      let bantul = fetch("{{ asset('assets/data/bantul.geojson')}}")
            .then(function(response) {
              return response.json();
            })
            .then(function(data) {
              L.geoJSON(data).addTo(kabBantul);
            })
      let sleman = fetch("{{ asset('assets/data/sleman.geojson')}}")
            .then(function(response) {
              return response.json();
            })
            .then(function(data) {
              L.geoJSON(data).addTo(kabSleman);
            })
      let gunungkidul = fetch("{{ asset('assets/data/gunungkidul.geojson')}}")
            .then(function(response) {
              return response.json();
            })
            .then(function(data) {
              L.geoJSON(data).addTo(kabGK);
            })
      let kulonprogo = fetch("{{ asset('assets/data/kulonprogo.geojson')}}")
            .then(function(response) {
              return response.json();
            })
            .then(function(data) {
              L.geoJSON(data).addTo(kabGK);
            })
      let diy = fetch("{{ asset('assets/data/yogyakarta.geojson')}}")
            .then(function(response) {
              return response.json();
            })
            .then(function(data) {
              L.geoJSON(data).addTo(kabDIY);
            })
      //kelurahan
      let kelurBantul = fetch("{{ asset('assets/data/kelurbantul.geojson')}}")
            .then(function(response) {
              return response.json();
            })
            .then(function(data) {
              L.geoJSON(data).addTo(kelurbantul);
            })
      let kelurSleman = fetch("{{ asset('assets/data/kelursleman.geojson')}}")
            .then(function(response) {
              return response.json();
            })
            .then(function(data) {
              L.geoJSON(data).addTo(kelursleman);
            })
      let kelurkp = fetch("{{ asset('assets/data/kelurkulonprogo.geojson')}}")
            .then(function(response) {
              return response.json();
            })
            .then(function(data) {
              L.geoJSON(data).addTo(kelurKP);
            })
      let kelurgk = fetch("{{ asset('assets/data/kelurgunungkidul.geojson')}}")
            .then(function(response) {
              return response.json();
            })
            .then(function(data) {
              L.geoJSON(data).addTo(kelurGK);
            })
      let kelurdiy = fetch("{{ asset('assets/data/keluryogya.geojson')}}")
            .then(function(response) {
              return response.json();
            })
            .then(function(data) {
              L.geoJSON(data).addTo(kelurDIY);
            })
      
      let mbUrl="https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_all/{z}/{x}/{y}.png"      
      let mbAttr='&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, &copy; <a href="https://cartodb.com/attributions">CartoDB</a>'
      let mapSmooth=L.tileLayer(mbUrl,{maxZoom: 19,attribution:mbAttr})
      let map = L.map('map',{
        center:[-7.8913, 110.3700],
        zoom:10,
        layers:[mapSmooth,kabBantul,kabGK,kabDIY,kabSleman,kabKP,kelurbantul,kelursleman,kelurGK,kelurDIY,kelurKP]
      });

      let baseLayers={
        'mapsmooth':mapSmooth
      };
      let groupedOverlays = {
        'kabupaten':{
          'Bantul':kabBantul,
          'Sleman':kabSleman,
          'Kulonprogo':kabKP,
          'Gunung Kidul':kabGK,
          'DIY':kabDIY
        },
        'kelurahan':{
          'kel.bantul':kelurbantul,
          'kel.sleman':kelursleman,
          'kel.kulonprogo':kelurKP,
          'kel.gunungkidul':kelurGK,
          'kel.diy':kelurDIY
        }
      }
      let layerControl=L.control.groupedLayers(baseLayers,groupedOverlays).addTo(map);
      function onMapClick(e) {
        popup
        .setLatLng(e.latlng)
        .setContent('You clicked the map at ' + e.latlng.toString())
        .openOn(map);
      }
      map.on('click', onMapClick);
    
     });
       
   })(jQuery);
	

</script>   
@endpush