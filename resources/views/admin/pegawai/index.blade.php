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
                  <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
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
				<!-- Borderless Table -->
				<div class="row">
					<div class="col s12">
						<div id="borderless-table" class="card card-tabs">
						<div class="card-content">
							<div class="card-title content-right">
								<!-- <div class="col s4">
									<div class="app-file-header-icons display-flex align-items-center">
										<div class="fonticon-wrap display-inline">
										<i class="material-icons">person_outline</i>
										</div>
										<div class="fonticon-wrap display-inline">
										<i class="material-icons">delete</i>
										</div>
										<div class="fonticon-wrap display-inline ">
										<i class="material-icons">more_vert</i>
										</div>
									</div>
								</div> -->
								<div class="col s12">
									<form action="{{ url('/'.Request::segment(1).'/search') }}" method="GET">
										<div class="app-file-header-search">
											<div class="input-field m-0">
											<i class="material-icons prefix">search</i>
												<input type="search" id="email-search" placeholder="Pencarian" name="search" style="border-bottom: 1px solid #e2dfdf;">
											</div>
										</div>
									</form>
								</div>
							</div>
							<div id="view-borderless-table ">
							<div class="row">
							<div class="col s12 " style="overflow-x:auto;">
								<table class="highlight responsive-table">
								<thead>
									<tr style="background-color: gray;color:white;border: 1px solid #f4f4f4;">
										<th style="width: 60px">No</th>
										<th>NIP</th>
										<th>Nama Pegawai</th>
										@if(Auth::user()->group==1)
											<th style="width: 20%">#aksi</th>
										@endif
									</tr>
								</thead>
								<tbody>
									@foreach($pegawai as $v)
									<tr>
										<td>{{ ($pegawai ->currentpage()-1) * $pegawai ->perpage() + $loop->index + 1 }}</td>
										<td>{{ $v->nip }}</td>
										<td>{{ $v->nama_pegawai }}</td>
										@if(Auth::user()->group==1)
										<td>
											<center>
											<div class="col s12 m12 l12" style="display: block;padding-bottom:7px;padding-top:7px">
												<a href="{{ url('/'.Request::segment(1).'/detail/'.$v->id ) }}" class="mb-12 btn waves-effect waves-light blue darken-1 btn-small btn-block">Data Utama</a>
											</div>
											<div class="col s12 m12 l12" style="display: block;padding-bottom:7px;">
												<a class="mb-12 btn waves-effect waves-light cyan darken-1 dropdown-settings btn-small btn-block" href="#!" data-target="dropdown1">
													Data Keluarga<i class="material-icons right">arrow_drop_down</i>
												</a>
												<ul id="dropdown1" class="dropdown-content">
													<li><a href="{{ url('/riwayat_orang_tua/'.$v->id ) }}" style="color: #607d8b;">Data Orang Tua</a></li>
													<li><a href="{{ url('/riwayat_pasangan/'.$v->id ) }}" style="color: #607d8b;">Data Pasangan</a></li>
													<li><a href="{{ url('/riwayat_anak/'.$v->id ) }}" style="color: #607d8b;">Data Anak</a></li>
												</ul>
											</div>
											<div class="col s12 m12 l12">
												<a class="mb-12 btn waves-effect waves-light orange darken-1 dropdown-settings btn-small btn-block" href="#!" data-target="dropdown2">
													Data Riwayat<i class="material-icons right">arrow_drop_down</i>
												</a>
												<ul id="dropdown2" class="dropdown-content">
													<li><a href="{{ url('/riwayat_golongan/'.$v->id ) }}" style="color: #607d8b;">Data Riwayat Golongan</a></li>
													<li><a href="{{ url('/riwayat_pendidikan/'.$v->id ) }}" style="color: #607d8b;">Data Riwayat Pendidikan</a></li>
													<li><a href="{{ url('/riwayat_jabatan/'.$v->id ) }}" style="color: #607d8b;">Data Riwayat Jabatan</a></li>
													<li><a href="{{ url('/riwayat_skp/'.$v->id ) }}" style="color: #607d8b;">Data Riwayat SKP</a></li>
												</ul>
											</div>
											</center>
										</td>
										@endif
									</tr>
									@endforeach
								</tbody>
								</table>
								

			<div class="float-right">{{ $pegawai->appends(Request::only('search'))->links() }}</div>
							</div>
							</div>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <div style="bottom: 90px; right: 19px;" class="fixed-action-btn direction-top">
				<a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i class="material-icons">add</i></a>
			</div> -->
          </div>
          <div class="content-overlay"></div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->

@endsection