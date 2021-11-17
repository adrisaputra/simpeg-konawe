@extends('admin.layout')
@section('konten')

    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-blue"></div>
        <div class="breadcrumbs-dark pb-0 pt-2" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>{{ __($title) }}</span></h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item"><a href="{{ url('/pegawai') }}">Pegawai</a>
                  </li>
                  <li class="breadcrumb-item active">{{ __($title) }}
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container">
			<div class="section">
				<!-- Input Fields -->
				<div class="row">
				<div class="col s12">
				<div id="input-fields" class="card card-tabs">
					<div class="card-content">
						<!-- <div class="card-title">
							<div class="row">
							<div class="col s10 m10 l10"></div>
							<div class="col s2 m2 l2">
							<a href="{{ url()->previous() }}" class="mb-12 btn waves-effect waves-light red darken-2 btn-small btn-block">Kembali</a>
							</div>
							</div>
						</div> -->
						<div id="view-input-fields">
							<div class="row">
								<form class="row">
									<p style="text-align:center;font-size:20px;font-weight:bold">DATA PRIBADI</p>
									<div class="col s12">
										<div class="input-field col s12">
											<input disabled value="{{ $pegawai->nip }}" id="disabled" type="text" class="validate" style="color: black;">
											<label >NIP</label>
										</div>
										<div class="input-field col s12">
											<input disabled value="{{ $pegawai->nama_pegawai }}" id="disabled" type="text" class="validate" style="color: black;">
											<label>Nama Pegawai</label>
										</div>
										<div class="input-field col s12">
											<input disabled value="{{ $pegawai->gelar_depan }}" id="disabled" type="text" class="validate" style="color: black;">
											<label>Gelar Depan</label>
										</div>
										<div class="input-field col s12">
											<input disabled value="{{ $pegawai->gelar_belakang }}" id="disabled" type="text" class="validate" style="color: black;">
											<label>Gelar Belakang</label>
										</div>
										<div class="input-field col s12">
											<input disabled value="{{ $pegawai->tempat_lahir }}" id="disabled" type="text" class="validate" style="color: black;">
											<label>Tempat Lahir</label>
										</div>
										<div class="input-field col s12">
											<input disabled value="@if($pegawai->tanggal_lahir){{ date('d-m-Y', strtotime($pegawai->tanggal_lahir)) }}@endif" id="disabled" type="text" class="validate" style="color: black;">
											<label>Tanggal Lahir</label>
										</div>
										<div class="input-field col s12">
											<input disabled value="{{ $pegawai->jenis_kelamin }}" id="disabled" type="text" class="validate" style="color: black;">
											<label>Jenis Kelamin</label>
										</div>
										<div class="input-field col s12">
											<input disabled value="{{ $pegawai->alamat }}" id="disabled" type="text" class="validate" style="color: black;">
											<label>Alamat</label>
										</div>
										<div class="input-field col s12">
											<input disabled value="{{ $pegawai->nama_agama }}" id="disabled" type="text" class="validate" style="color: black;">
											<label>Agama</label>
										</div>
										<div class="input-field col s12">
											<input disabled value="{{ $pegawai->email }}" id="disabled" type="text" class="validate" style="color: black;">
											<label>Email</label>
										</div>
										<div class="input-field col s12">
											<input disabled value="{{ $pegawai->nomor_dokumen }}" id="disabled" type="text" class="validate" style="color: black;">
											<label>NIK</label>
										</div>
										<div class="input-field col s12">
											<input disabled value="{{ $pegawai->no_hp }}" id="disabled" type="text" class="validate" style="color: black;">
											<label>No. HP</label>
										</div>
										<div class="input-field col s12">
											<input disabled value="{{ $pegawai->status_perkawinan }}" id="disabled" type="text" class="validate" style="color: black;">
											<label>Status Perkawinan</label>
										</div>
										<div class="input-field col s12">
											<input disabled value="{{ $pegawai->no_seri_karpeg }}" id="disabled" type="text" class="validate" style="color: black;">
											<label>No. karpeg</label>
										</div>
										<div class="input-field col s12">
											<input disabled value="{{ $pegawai->no_bpjs }}" id="disabled" type="text" class="validate" style="color: black;">
											<label>No. BPJS</label>
										</div>
										<div class="input-field col s12">
											<input disabled value="{{ $pegawai->nama_tingkat_pendidikan_terakhir }}" id="disabled" type="text" class="validate" style="color: black;">
											<label>Pendidikan Terakhir</label>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div id="input-fields" class="card card-tabs">
					<div class="card-content">
						<div id="view-input-fields">
							<div class="row">
								<form class="row">
									<p style="text-align:center;font-size:20px;font-weight:bold">DATA KEPEGAWAIAN</p>
									<div class="col s12">
										<div class="input-field col s12">
											<input disabled value="{{ $pegawai->gol_ruang_akhir }}" id="disabled" type="text" class="validate" style="color: black;">
											<label>Golongan</label>
										</div>
										<div class="input-field col s12">
											<input disabled value="{{ $pegawai->nama_jabatan }}" id="disabled" type="text" class="validate" style="color: black;">
											<label>Jabatan</label>
										</div>
										<div class="input-field col s12">
											<input disabled value="{{ $pegawai->nama_unor }}" id="disabled" type="text" class="validate" style="color: black;">
											<label>Unor</label>
										</div>
										<div class="input-field col s12">
											<input disabled value="{{ $pegawai->lokasi_kerja }}" id="disabled" type="text" class="validate" style="color: black;">
											<label>Lokasi Kerja</label>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				</div>
				</div>
				</div>
			</div>
			<div style="bottom: 20px; right: 19px;" class="fixed-action-btn direction-top">
				<a href="{{ url()->previous() }}" class="btn-floating btn-large waves-effect waves-light red darken-2"><i class="material-icons">arrow_back</i></a>
			</div>
          </div>
          <div class="content-overlay"></div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->

@endsection