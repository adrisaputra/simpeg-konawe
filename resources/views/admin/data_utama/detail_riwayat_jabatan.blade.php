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
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title" style="display: contents;font-weight: bold;"><center><p style="font-size:20pxpx">SIMPEG KONAWE</p></center></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              	<div class="box-body">
			    @php 
		    		$n = 0; 
			@endphp
			    @foreach ($data as $v)
			    <div class="form-group ">
						<div class="col-sm-12">
							<label class="control-label" for="inputSuccess"> {{ __('Jenis Jabatan') }}</label>
							@if($n<$jml_riwayat_jabatan)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="Jenis Jabatan" value="{{ $riwayat_jabatan[$n]->jenis_jabatan }}" 
									@if($riwayat_jabatan[$n]->jenis_jabatan==$sapk[$n]['jenisJabatan'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="Jenis Jabatan" value="{{ $riwayat_jabatan[$n]->jenis_jabatan }}" style="{{ $danger }}" >
								@endif
							@else
								@if($sapk[$n]['jenisJabatan']=="")
									<input type="text" class="form-control" placeholder="Jenis Jabatan"  style="{{ $success }}" >
								@else
									<input type="text" class="form-control" placeholder="Jenis Jabatan"  style="{{ $danger }}" >
								@endif
							@endif
						</div>
					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-12">
							<label class="control-label" for="inputSuccess"> {{ __('Unor') }}</label>
							@if($n<$jml_riwayat_jabatan)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="Unor" value="{{ $riwayat_jabatan[$n]->unor }}" 
									@if($riwayat_jabatan[$n]->unor==$sapk[$n]['unorNama'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="Unor" value="{{ $riwayat_jabatan[$n]->unor }}" style="{{ $danger }}" >
								@endif
							@else
								@if($sapk[$n]['unorNama']=="")
									<input type="text" class="form-control" placeholder="Unor"  style="{{ $success }}" >
								@else
									<input type="text" class="form-control" placeholder="Unor"  style="{{ $danger }}" >
								@endif
							@endif
						</div>
					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-12">
							<label class="control-label" for="inputSuccess"> {{ __('Nama jabatan Fungsional') }}</label>
							@if($n<$jml_riwayat_jabatan)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="Nama jabatan Fungsional" value="{{ $riwayat_jabatan[$n]->nama_jabatan }}" 
									@if($riwayat_jabatan[$n]->nama_jabatan==$sapk[$n]['jabatanFungsionalNama'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="Nama jabatan Fungsional" value="{{ $riwayat_jabatan[$n]->nama_jabatan }}" style="{{ $danger }}" >
								@endif
							@else
								@if($sapk[$n]['jabatanFungsionalNama']=="")
									<input type="text" class="form-control" placeholder="Nama jabatan Fungsional"  style="{{ $success }}" >
								@else
									<input type="text" class="form-control" placeholder="Nama jabatan Fungsional"  style="{{ $danger }}" >
								@endif
							@endif
						</div>
					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-12">
							<label class="control-label" for="inputSuccess"> {{ __('TMT jabatan') }}</label>
							@if($n<$jml_riwayat_jabatan)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="TMT jabatan" value="@if($riwayat_jabatan[$n]->tmt_jabatan){{ date('d-m-Y', strtotime($riwayat_jabatan[$n]->tmt_jabatan)) }}@endif" 
									@if($riwayat_jabatan[$n]->tmt_jabatan==$sapk[$n]['tmtJabatan'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="TMT jabatan" value="@if($riwayat_jabatan[$n]->tmt_jabatan){{ date('d-m-Y', strtotime($riwayat_jabatan[$n]->tmt_jabatan)) }}@endif" style="{{ $danger }}" >
								@endif
							@else
								@if($sapk[$n]['tmtJabatan']=="")
									<input type="text" class="form-control" placeholder="TMT jabatan"  style="{{ $success }}" >
								@else
									<input type="text" class="form-control" placeholder="TMT jabatan"  style="{{ $danger }}" >
								@endif
							@endif
						</div>
					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Nomor SK') }}</label>
							@if($n<$jml_riwayat_jabatan)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="Nomor SK" value="{{ $riwayat_jabatan[$n]->no_sk }}" 
									@if($riwayat_jabatan[$n]->no_sk==$sapk[$n]['nomorSk'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="Nomor SK" value="{{ $riwayat_jabatan[$n]->no_sk }}" style="{{ $danger }}" >
								@endif
							@else
								@if($sapk[$n]['nomorSk']=="")
									<input type="text" class="form-control" placeholder="Nomor SK"  style="{{ $success }}" >
								@else
									<input type="text" class="form-control" placeholder="Nomor SK"  style="{{ $danger }}" >
								@endif
							@endif
						</div>
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Tanggal SK') }}</label>
							@if($n<$jml_riwayat_jabatan)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="Tanggal SK" value="@if($riwayat_jabatan[$n]->tanggal_sk){{ date('d-m-Y', strtotime($riwayat_jabatan[$n]->tanggal_sk)) }}@endif" 
									@if($riwayat_jabatan[$n]->tanggal_sk==$sapk[$n]['tanggalSk'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="Tanggal SK" value="@if($riwayat_jabatan[$n]->tanggal_sk){{ date('d-m-Y', strtotime($riwayat_jabatan[$n]->tanggal_sk)) }}@endif" style="{{ $danger }}" >
								@endif
							@else
								@if($sapk[$n]['tanggalSk']=="")
									<input type="text" class="form-control" placeholder="Tanggal SK"  style="{{ $success }}" >
								@else
									<input type="text" class="form-control" placeholder="Tanggal SK"  style="{{ $danger }}" >
								@endif
							@endif
						</div>
					</div><br><br><br>
					<hr style="border-top: 1px solid #e0e2e6;">
					@php $n++; @endphp
				@endforeach
              	</div>
              	<!-- /.box-body -->

              <div class="box-footer">
                <!-- <button type="submit" class="btn btn-success btn-flat">Simpan</button> -->
                <!-- <a href="{{ url('/'.Request::segment(1).'/search?search='.$data_utama->nip) }}"class="btn btn-warning btn-flat">Kembali</a> -->
                <a href="{{ url()->previous() }}"class="btn btn-warning btn-flat">Kembali</a>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title" style="display: contents;font-weight: bold;"><center><p style="font-size:20pxpx">SAPK</p></center></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
		    @php $n = 0; @endphp
		    		@foreach ($data as $v)
					<div class="form-group ">
						<div class="col-sm-12">
							<label class="control-label" for="inputSuccess"> {{ __('Jenis Jabatan') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_jabatan)
									<input type="text" class="form-control" placeholder="Jenis Jabatan" value="{{ $sapk[$n]['jenisJabatan'] }}" disabled
									@if($riwayat_jabatan[$n]->jenis_jabatan==$sapk[$n]['jenisJabatan'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['jenisJabatan']=="")
										<input type="text" class="form-control" placeholder="Jenis Jabatan" value="{{ $sapk[$n]['jenisJabatan'] }}" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Jenis Jabatan" value="{{ $sapk[$n]['jenisJabatan'] }}" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_jabatan)
									<input type="text" class="form-control" placeholder="Jenis Jabatan"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['jenisJabatan']=="")
										<input type="text" class="form-control" placeholder="Jenis Jabatan"  style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Jenis Jabatan"  style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>
					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-12">
							<label class="control-label" for="inputSuccess"> {{ __('Unor') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_jabatan)
									<input type="text" class="form-control" placeholder="Unor" value="{{ $sapk[$n]['unorNama'] }}" disabled
									@if($riwayat_jabatan[$n]->unor==$sapk[$n]['unorNama'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['unorNama']=="")
										<input type="text" class="form-control" placeholder="Unor" value="{{ $sapk[$n]['unorNama'] }}" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Unor" value="{{ $sapk[$n]['unorNama'] }}" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_jabatan)
									<input type="text" class="form-control" placeholder="Unor"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['unorNama']=="")
										<input type="text" class="form-control" placeholder="Unor"  style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Unor"  style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>
					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-12">
							<label class="control-label" for="inputSuccess"> {{ __('Nama jabatan Fungsional') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_jabatan)
									<input type="text" class="form-control" placeholder="Nama jabatan Fungsional" value="{{ $sapk[$n]['jabatanFungsionalNama'] }}" disabled
									@if($riwayat_jabatan[$n]->nama_jabatan==$sapk[$n]['jabatanFungsionalNama'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['jabatanFungsionalNama']=="")
										<input type="text" class="form-control" placeholder="Nama jabatan Fungsional" value="{{ $sapk[$n]['jabatanFungsionalNama'] }}" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Nama jabatan Fungsional" value="{{ $sapk[$n]['jabatanFungsionalNama'] }}" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_jabatan)
									<input type="text" class="form-control" placeholder="Nama jabatan Fungsional"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['jabatanFungsionalNama']=="")
										<input type="text" class="form-control" placeholder="Nama jabatan Fungsional"  style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Nama jabatan Fungsional"  style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>
					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-12">
							<label class="control-label" for="inputSuccess"> {{ __('TMT jabatan') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_jabatan)
									<input type="text" class="form-control" placeholder="TMT jabatan" value="@if($sapk[$n]['tmtJabatan']){{ date('d-m-Y', strtotime($sapk[$n]['tmtJabatan'])) }}@endif" disabled
									@if($riwayat_jabatan[$n]->tmt_jabatan==$sapk[$n]['tmtJabatan'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['tmtJabatan']=="")
										<input type="text" class="form-control" placeholder="TMT jabatan" value="@if($sapk[$n]['tmtJabatan']){{ date('d-m-Y', strtotime($sapk[$n]['tmtJabatan'])) }}@endif" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="TMT jabatan" value="@if($sapk[$n]['tmtJabatan']){{ date('d-m-Y', strtotime($sapk[$n]['tmtJabatan'])) }}@endif" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_jabatan)
									<input type="text" class="form-control" placeholder="TMT jabatan"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['tmtJabatan']=="")
										<input type="text" class="form-control" placeholder="TMT jabatan"  style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="TMT jabatan"  style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>
					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Nomor SK') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_jabatan)
									<input type="text" class="form-control" placeholder="Nomor SK" value="{{ $sapk[$n]['nomorSk'] }}" disabled
									@if($riwayat_jabatan[$n]->no_sk==$sapk[$n]['nomorSk'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['nomorSk']=="")
										<input type="text" class="form-control" placeholder="Nomor SK" value="{{ $sapk[$n]['nomorSk'] }}" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Nomor SK" value="{{ $sapk[$n]['nomorSk'] }}" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_jabatan)
									<input type="text" class="form-control" placeholder="Nomor SK"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['nomorSk']=="")
										<input type="text" class="form-control" placeholder="Nomor SK"  style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Nomor SK"  style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Tanggal SK') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_jabatan)
									<input type="text" class="form-control" placeholder="Tanggal SK" value="@if($sapk[$n]['tanggalSk']){{ date('d-m-Y', strtotime($sapk[$n]['tanggalSk'])) }}@endif" disabled
									@if($riwayat_jabatan[$n]->tanggal_sk==$sapk[$n]['tanggalSk'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['tanggalSk']=="")
										<input type="text" class="form-control" placeholder="Tanggal SK" value="@if($sapk[$n]['tanggalSk']){{ date('d-m-Y', strtotime($sapk[$n]['tanggalSk'])) }}@endif" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Tanggal SK" value="@if($sapk[$n]['tanggalSk']){{ date('d-m-Y', strtotime($sapk[$n]['tanggalSk'])) }}@endif" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_jabatan)
									<input type="text" class="form-control" placeholder="Tanggal SK"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['tanggalSk']=="")
										<input type="text" class="form-control" placeholder="Tanggal SK"  style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Tanggal SK"  style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>
					</div><br><br><br>
					<hr style="border-top: 1px solid #e0e2e6;">
					@php $n++; @endphp
				@endforeach

              </div>
              <div class="box-footer">
                <!-- <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button> -->
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
</div>

@endsection