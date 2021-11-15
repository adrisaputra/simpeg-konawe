@extends('admin.layout')
@section('konten')
<div class="content-wrapper">
	<section class="content-header">
	<h1 class="fontPoppins">{{ __($title) }}
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> DASHBOARD</a></li>
		<li><a href="#"> {{ __($title) }}</a></li>
	</ol>
	</section>
	
	<section class="content">
	<div class="box">   
		<div class="box-header with-border">
			<div class="box-tools pull-left">
				<div style="padding-top:10px">
					<a href="{{ url('/'.Request::segment(1)) }}" class="btn btn-warning btn-flat" title="Refresh halaman">Refresh</a>
					<a class="btn btn-info btn-flat" data-toggle="modal" data-target="#importExcel">Import Excel</a>
				</div>
			</div>
			<div class="box-tools pull-right">
				<div class="form-inline">
					<form action="{{ url('/'.Request::segment(1).'/search') }}" method="GET">
						<div class="input-group margin">
							<input type="text" class="form-control" name="search" placeholder="Masukkan kata kunci pencarian">
							<span class="input-group-btn">
								<button type="submit" class="btn btn-danger btn-flat">cari</button>
							</span>
						</div>
					</form>
				</div>
			</div>
			
							<!-- Import Excel -->
							<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<form method="post" action="{{ url('/'.Request::segment(1).'/import_excel') }}" enctype="multipart/form-data">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
												</div>
												<div class="modal-body">
						 
													{{ csrf_field() }}
						 
													<label>Pilih file excel</label>
													<div class="form-group">
														<input type="file" name="file" required="required">
													</div>
						 
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary">Import</button>
												</div>
											</div>
										</form>
									</div>
							</div>
		</div>
			
			<div class="table-responsive box-body">

				@if ($message = Session::get('status'))
					<div class="alert alert-info alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i>Berhasil !</h4>
						{{ $message }}
					</div>
				@endif
				@if ($message = Session::get('status2'))
					<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-times"></i>Gagal !</h4>
						{{ $message }}
					</div>
				@endif

				<table class="table table-bordered">
					<tr style="background-color: gray;color:white">
						<th style="width: 5%">No</th>
						<th style="width: 15%">NIP</th>
						<th>Nama Pegawai</th>
						<th style="width: 15%">#banding Data</th>
					</tr>
					@foreach($data_utama as $v)
					<tr>
						<td>{{ ($data_utama ->currentpage()-1) * $data_utama ->perpage() + $loop->index + 1 }}</td>
						<td>{{ $v->nip }}</td>
						<td>{{ $v->nama_pegawai }}</td>
						<td>
							<a href="{{ url('/'.Request::segment(1).'/detail_data_utama/'.$v->id ) }}" class="btn btn-xs btn-primary btn-block">Data Utama</a>
							
							<div class="btn-group" style="display: block;padding-bottom:7px;padding-top:7px">
								<button type="button" class="btn btn-xs btn-success btn-block dropdown-toggle" data-toggle="dropdown">Data Keluarga</button>
								<ul class="dropdown-menu">
									<li><a href="{{ url('/'.Request::segment(1).'/detail_orang_tua/'.$v->id ) }}">Data Orang Tua</a></li>
									<li><a href="{{ url('/'.Request::segment(1).'/detail_pasangan/'.$v->id ) }}">Data Pasangan</a></li>
									<li><a href="{{ url('/'.Request::segment(1).'/detail_anak/'.$v->id ) }}">Data Anak</a></li>
								</ul>
							</div><br>
							
							<div class="btn-group" style="display: block;padding-bottom:7px;">
								<button type="button" class="btn btn-xs btn-warning btn-block dropdown-toggle" data-toggle="dropdown">Data Riwayat</button>
								<ul class="dropdown-menu">
									<li><a href="{{ url('/'.Request::segment(1).'/detail_riwayat_golongan/'.$v->id ) }}">Data Riwayat Golongan</a></li>
									<li><a href="{{ url('/'.Request::segment(1).'/detail_riwayat_pendidikan/'.$v->id ) }}">Data Riwayat Pendidikan</a></li>
									<li><a href="{{ url('/'.Request::segment(1).'/detail_riwayat_jabatan/'.$v->id ) }}">Data Riwayat Jabatan</a></li>
									<li><a href="{{ url('/'.Request::segment(1).'/detail_riwayat_skp/'.$v->id ) }}">Data Riwayat SKP</a></li>
								</ul>
							</div>
							
							
							
							
							
							
						</td>
					</tr>
					@endforeach
				</table>

			</div>
		<div class="box-footer">
			<!-- PAGINATION -->
			<div class="float-right">{{ $data_utama->appends(Request::only('search'))->links() }}</div>
		</div>
	</div>
	</section>
</div>
@endsection