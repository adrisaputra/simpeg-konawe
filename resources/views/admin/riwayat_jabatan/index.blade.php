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
								<div class="input-field col s6">
									<input disabled value="{{ $pegawai->nip }}" id="disabled" type="text" class="validate" style="color: black;">
									<label >NIP</label>
								</div>
								<div class="input-field col s6">
									<input disabled value="{{ $pegawai->nama_pegawai }}" id="disabled" type="text" class="validate" style="color: black;">
									<label >Nama Pegawai</label>
								</div>
							</div><br><br><br><br>
							<div id="view-borderless-table ">
							<div class="row">
							<div class="col s12 " style="overflow-x:auto;">
								<table class="highlight responsive-table">
								<thead>
									<tr style="background-color: gray;color:white;border: 1px solid #f4f4f4;">
										<th style="width: 10">No</th>
										<th>Jenis Jabatan</th>
										<th>Nama Unor</th>
										<th>Nama Jabatan Fungsional</th>
										<th>Nama Jabatan</th>
										<th>TMT Jabatan</th>
										<th>No. SK</th>
									</tr>
								</thead>
								<tbody>
									@foreach($riwayat_jabatan as $v)
									<tr>
										<td>{{ ($riwayat_jabatan ->currentpage()-1) * $riwayat_jabatan ->perpage() + $loop->index + 1 }}</td>
										<td>{{ $v->jenis_jabatan }}</td>
										<td>{{ $v->nama_unor }}</td>
										<td>{{ $v->nama_jabatan_fungsional }}</td>
										<td>{{ $v->nama_jabatan }}</td>
										<td>
											@if($v->tmt_jabatan && $v->tmt_jabatan!='0000-00-00')
												{{ date('d-m-Y', strtotime($v->tmt_jabatan)) }}
											@endif
										</td>
										<td>{{ $v->no_sk }}</td>
									</tr>
									@endforeach
								</tbody>
								</table>
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