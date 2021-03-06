<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile not-navigation-link">
      <div class="nav-link">
        <div class="user-wrapper">
          
        </div>
        <button class="btn btn-success btn-block">New Project <i class="mdi mdi-plus"></i>
        </button>
      </div>
    </li>
    
    {{-- diskop ukm --}}
    <li class="nav-item {{ active_class(['diskop-ukm/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#diskop-ukm" aria-expanded="{{ is_active_route(['diskop-ukm/*']) }}" aria-controls="user-pages">
        <i class="menu-icon mdi mdi-lock-outline"></i>
        <span class="menu-title">Diskop&UKM</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['diskop-ukm/*']) }}" id="diskop-ukm">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['diskop-ukm/koprasi']) }}">
            <a class="nav-link" href="{{ route('disokop.koperasi') }}"><i class="menu-icon mdi mdi-box-shadow"></i>Koperasi</a>
          </li>
          <li class="nav-item {{ active_class(['diskop-ukm/ukm']) }}">
            <a class="nav-link" href="{{ route('disokop.ukm') }}"><i class="menu-icon mdi mdi-box-shadow"></i> UKM</a>
          </li>
          <li class="nav-item {{ active_class(['diskop-ukm/peta']) }}">
            <a class="nav-link" href="{{ route('disokop.peta') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Peta</a>
          </li>
        </ul>
      </div>
    </li>
    {{-- simpeg --}}
    <li class="nav-item {{ active_class(['simpeg/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#simpeg" aria-expanded="{{ is_active_route(['simpeg/*']) }}" aria-controls="user-pages">
        <i class="menu-icon mdi mdi-lock-outline"></i>
        <span class="menu-title">Simpeg</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['simpeg/*']) }}" id="simpeg">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['simpeg/golongan']) }}">
            <a class="nav-link" href="{{ route('simpeg.golongan') }}"><i class="menu-icon mdi mdi-box-shadow"></i>Koperasi</a>
          </li>
          <li class="nav-item {{ active_class(['simpeg/umur']) }}">
            <a class="nav-link" href="{{ route('simpeg.umur') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan Golongan</a>
          </li>
          <li class="nav-item {{ active_class(['simpeg/sppd']) }}">
            <a class="nav-link" href="{{ route('simpeg.sppd') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan Umur</a>
          </li>
          <li class="nav-item {{ active_class(['simpeg/pendidikan']) }}">
            <a class="nav-link text-wrap" href="{{ route('simpeg.pendidikan') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan SPPD</a>
          </li>
          <li class="nav-item {{ active_class(['simpeg/eselon']) }}">
            <a class="nav-link text-wrap" href="{{ route('simpeg.eselon') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan Eselon</a>
          </li>
          <li class="nav-item {{ active_class(['simpeg/absen']) }}">
            <a class="nav-link text-wrap" href="{{ route('simpeg.absen') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan Absen 3 Hari</a>
          </li>
          <li class="nav-item {{ active_class(['simpeg/pensiun']) }}">
            <a class="nav-link text-wrap" href="{{ route('simpeg.pensiun') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan Yang Akan Pensiun</a>
          </li>
        </ul>
      </div>
    </li>
    {{-- kependudukan --}}
    <li class="nav-item {{ active_class(['kependudukan/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#kependudukan" aria-expanded="{{ is_active_route(['kependudukan/*']) }}" aria-controls="user-pages">
        <i class="menu-icon mdi mdi-lock-outline"></i>
        <span class="menu-title">kependudukan</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['kependudukan/*']) }}" id="kependudukan">
        <ul class="nav flex-column sub-menu">
         
          <li class="nav-item {{ active_class(['kependudukan/jenis']) }}">
            <a class="nav-link" href="{{ route('kependudukan.jenis') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan Golongan</a>
          </li>
          <li class="nav-item {{ active_class(['kependudukan/agama']) }}">
            <a class="nav-link" href="{{ route('kependudukan.agama') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan Umur</a>
          </li>
          <li class="nav-item {{ active_class(['kependudukan/darah']) }}">
            <a class="nav-link" href="{{ route('kependudukan.darah') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan SPPD</a>
          </li>
          <li class="nav-item {{ active_class(['kependudukan/perkawinan']) }}">
            <a class="nav-link" href="{{ route('kependudukan.perkawinan') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan Eselon</a>
          </li>
          <li class="nav-item {{ active_class(['kependudukan/pekerjaan']) }}">
            <a class="nav-link" href="{{ route('kependudukan.pekerjaan') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan Absen 3 Hari</a>
          </li>
          <li class="nav-item {{ active_class(['kependudukan/pendidikan']) }}">
            <a class="nav-link" href="{{ route('kependudukan.pendidikan') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan Yang Akan Pensiun</a>
          </li>
        </ul>
      </div>
    </li>
    {{-- e-lapor --}}
    <li class="nav-item {{ active_class(['elapor/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#elapor" aria-expanded="{{ is_active_route(['elapor/*']) }}" aria-controls="user-pages">
        <i class="menu-icon mdi mdi-lock-outline"></i>
        <span class="menu-title">elapor</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['elapor/*']) }}" id="elapor">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['elapor/kategori']) }}">
            <a class="nav-link" href="{{ route('elapor.kategori') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan Golongan</a>
          </li>
          <li class="nav-item {{ active_class(['elapor/skpd']) }}">
            <a class="nav-link" href="{{ route('elapor.skpd') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan Umur</a>
          </li>
          <li class="nav-item {{ active_class(['elapor/kabupaten']) }}">
            <a class="nav-link" href="{{ route('elapor.kabupaten') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan SPPD</a>
          </li>
          <li class="nav-item {{ active_class(['elapor/lokasi']) }}">
            <a class="nav-link" href="{{ route('elapor.lokasi') }}"><i class="menu-icon mdi mdi-box-shadow"></i>Koperasi</a>
          </li>
        </ul>
      </div>
    </li>
    {{-- survilance --}}
    <li class="nav-item {{ active_class(['survilance/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#survilance" aria-expanded="{{ is_active_route(['survilance/*']) }}" aria-controls="user-pages">
        <i class="menu-icon mdi mdi-lock-outline"></i>
        <span class="menu-title">survilance</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['survilance/*']) }}" id="survilance">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['survilance/atcs']) }}">
            <a class="nav-link" href="{{ route('survilance.atcs') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan Golongan</a>
          </li>
          <li class="nav-item {{ active_class(['survilance/kota']) }}">
            <a class="nav-link" href="{{ route('survilance.kota') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan Umur</a>
          </li>
          <li class="nav-item {{ active_class(['survilance/bantul']) }}">
            <a class="nav-link" href="{{ route('survilance.bantul') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan SPPD</a>
          </li>
          <li class="nav-item {{ active_class(['survilance/kp']) }}">
            <a class="nav-link" href="{{ route('survilance.kp') }}"><i class="menu-icon mdi mdi-box-shadow"></i>Koperasi</a>
          </li>
          <li class="nav-item {{ active_class(['survilance/public']) }}">
            <a class="nav-link" href="{{ route('survilance.public') }}"><i class="menu-icon mdi mdi-box-shadow"></i>Koperasi</a>
          </li>
          <li class="nav-item {{ active_class(['survilance/sleman']) }}">
            <a class="nav-link" href="{{ route('survilance.sleman') }}"><i class="menu-icon mdi mdi-box-shadow"></i>Koperasi</a>
          </li>
          <li class="nav-item {{ active_class(['survilance/sungai']) }}">
            <a class="nav-link" href="{{ route('survilance.sungai') }}"><i class="menu-icon mdi mdi-box-shadow"></i>Koperasi</a>
          </li>
          <li class="nav-item {{ active_class(['survilance/malioboro']) }}">
            <a class="nav-link" href="{{ route('survilance.malioboro') }}"><i class="menu-icon mdi mdi-box-shadow"></i>Koperasi</a>
          </li>
        </ul>
      </div>
    </li>
    {{-- tataruang --}}
    <li class="nav-item {{ active_class(['tataruang/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#tataruang" aria-expanded="{{ is_active_route(['tataruang/*']) }}" aria-controls="user-pages">
        <i class="menu-icon mdi mdi-lock-outline"></i>
        <span class="menu-title">tataruang</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['tataruang/*']) }}" id="tataruang">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['tataruang/pola']) }}">
            <a class="nav-link" href="{{ route('tataruang.pola') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan Golongan</a>
          </li>
          <li class="nav-item {{ active_class(['tataruang/ruang']) }}">
            <a class="nav-link" href="{{ route('tataruang.ruang') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan Umur</a>
          </li>
          <li class="nav-item {{ active_class(['tataruang/provinsi']) }}">
            <a class="nav-link" href="{{ route('tataruang.provinsi') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan SPPD</a>
          </li>
        </ul>
      </div>
    </li>
    {{-- simangkis --}}
    <li class="nav-item {{ active_class(['simangkis/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#simangkis" aria-expanded="{{ is_active_route(['simangkis/*']) }}" aria-controls="user-pages">
        <i class="menu-icon mdi mdi-lock-outline"></i>
        <span class="menu-title">simangkis</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['simangkis/*']) }}" id="simangkis">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['simangkis/minum']) }}">
            <a class="nav-link" href="{{ route('simangkis.minum') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan Golongan</a>
          </li>
          <li class="nav-item {{ active_class(['simangkis/bab']) }}">
            <a class="nav-link" href="{{ route('simangkis.bab') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan Umur</a>
          </li>
          <li class="nav-item {{ active_class(['simangkis/masak']) }}">
            <a class="nav-link" href="{{ route('simangkis.masak') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan SPPD</a>
          </li>
          <li class="nav-item {{ active_class(['simangkis/listrik']) }}">
            <a class="nav-link" href="{{ route('simangkis.listrik') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan SPPD</a>
          </li>
          <li class="nav-item {{ active_class(['simangkis/disabilitas']) }}">
            <a class="nav-link" href="{{ route('simangkis.disabilitas') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan SPPD</a>
          </li>
          <li class="nav-item {{ active_class(['simangkis/ijazah']) }}">
            <a class="nav-link" href="{{ route('simangkis.ijazah') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan SPPD</a>
          </li>
          <li class="nav-item {{ active_class(['simangkis/jenis']) }}">
            <a class="nav-link" href="{{ route('simangkis.jenis') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan SPPD</a>
          </li>
          <li class="nav-item {{ active_class(['simangkis/kepimilikan']) }}">
            <a class="nav-link" href="{{ route('simangkis.kepimilikan') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan SPPD</a>
          </li>
          <li class="nav-item {{ active_class(['simangkis/kesataraan']) }}">
            <a class="nav-link" href="{{ route('simangkis.kesataraan') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan SPPD</a>
          </li>
          <li class="nav-item {{ active_class(['simangkis/pekerjaan']) }}">
            <a class="nav-link" href="{{ route('simangkis.pekerjaan') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan SPPD</a>
          </li>
          <li class="nav-item {{ active_class(['simangkis/kronis']) }}">
            <a class="nav-link" href="{{ route('simangkis.kronis') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan SPPD</a>
          </li>
          <li class="nav-item {{ active_class(['simangkis/perekawinan']) }}">
            <a class="nav-link" href="{{ route('simangkis.perekawinan') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan SPPD</a>
          </li>
          <li class="nav-item {{ active_class(['simangkis/penerangan']) }}">
            <a class="nav-link" href="{{ route('simangkis.penerangan') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan SPPD</a>
          </li>
        </ul>
      </div>
    </li>
    {{-- prajawibawa --}}
    <li class="nav-item {{ active_class(['prajawibawa/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#prajawibawa" aria-expanded="{{ is_active_route(['prajawibawa/*']) }}" aria-controls="user-pages">
        <i class="menu-icon mdi mdi-lock-outline"></i>
        <span class="menu-title">prajawibawa</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['prajawibawa/*']) }}" id="prajawibawa">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['prajawibawa/ketertiban']) }}">
            <a class="nav-link" href="{{ route('prajawibawa.ketertiban') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan Golongan</a>
          </li>
          <li class="nav-item {{ active_class(['prajawibawa/pengamanan']) }}">
            <a class="nav-link" href="{{ route('prajawibawa.pengamanan') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan Umur</a>
          </li>
          <li class="nav-item {{ active_class(['prajawibawa/pertolongan']) }}">
            <a class="nav-link" href="{{ route('prajawibawa.pertolongan') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan SPPD</a>
          </li>
          <li class="nav-item {{ active_class(['prajawibawa/perda']) }}">
            <a class="nav-link" href="{{ route('prajawibawa.perda') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan SPPD</a>
          </li>
        </ul>
      </div>
    </li>
    {{-- disnaker --}}
    <li class="nav-item {{ active_class(['disnaker/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#disnaker" aria-expanded="{{ is_active_route(['disnaker/*']) }}" aria-controls="user-pages">
        <i class="menu-icon mdi mdi-lock-outline"></i>
        <span class="menu-title">disnaker</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['disnaker/*']) }}" id="disnaker">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['disnaker/angkatan']) }}">
            <a class="nav-link" href="{{ route('disnaker.angkatan') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan Golongan</a>
          </li>
          <li class="nav-item {{ active_class(['disnaker/usia']) }}">
            <a class="nav-link" href="{{ route('disnaker.usia') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan Umur</a>
          </li>
          <li class="nav-item {{ active_class(['disnaker/penganggur']) }}">
            <a class="nav-link" href="{{ route('disnaker.penganggur') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan SPPD</a>
          </li>
          <li class="nav-item {{ active_class(['disnaker/migran']) }}">
            <a class="nav-link" href="{{ route('disnaker.migran') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan SPPD</a>
          </li>
          <li class="nav-item {{ active_class(['disnaker/transmigrasi']) }}">
            <a class="nav-link" href="{{ route('disnaker.transmigrasi') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan SPPD</a>
          </li>
        </ul>
      </div>
    </li>
    {{-- covid --}}
    <li class="nav-item {{ active_class(['covid/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#covid" aria-expanded="{{ is_active_route(['covid/*']) }}" aria-controls="user-pages">
        <i class="menu-icon mdi mdi-lock-outline"></i>
        <span class="menu-title">covid</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['covid/*']) }}" id="covid">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['covid/sebaran']) }}">
            <a class="nav-link" href="{{ route('covid.sebaran') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan Golongan</a>
          </li>
          <li class="nav-item {{ active_class(['covid/statistik']) }}">
            <a class="nav-link" href="{{ route('covid.statistik') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan Umur</a>
          </li>
          <li class="nav-item {{ active_class(['covid/rumahsakit']) }}">
            <a class="nav-link" href="{{ route('covid.rumahsakit') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan SPPD</a>
          </li>
          <li class="nav-item {{ active_class(['covid/vaksin']) }}">
            <a class="nav-link" href="{{ route('covid.vaksin') }}"><i class="menu-icon mdi mdi-box-shadow"></i> Berdasarkan SPPD</a>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</nav>