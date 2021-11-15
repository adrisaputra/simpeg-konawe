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
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Golongan') }}</label>
							@if($n<$jml_riwayat_golongan)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="Golongan" value="{{ $riwayat_golongan[$n]->golongan }}" 
									@if($riwayat_golongan[$n]->golongan==$sapk[$n]['golongan'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="Golongan" value="{{ $riwayat_golongan[$n]->golongan }}" style="{{ $danger }}" >
								@endif
							@else
								@if($sapk[$n]['golongan']=="")
									<input type="text" class="form-control" placeholder="Golongan"  style="{{ $success }}" >
								@else
									<input type="text" class="form-control" placeholder="Golongan"  style="{{ $danger }}" >
								@endif
							@endif
						</div>

						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('TMT Golongan') }}</label>
							@if($n<$jml_riwayat_golongan)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="TMT Golongan" value="@if($riwayat_golongan[$n]->tmt_golongan){{ date('d-m-Y', strtotime($riwayat_golongan[$n]->tmt_golongan)) }}@endif" 
									@if(date('d-m-Y', strtotime($riwayat_golongan[$n]->tmt_golongan))==$sapk[$n]['tmtGolongan'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="TMT Golongan" value="@if($riwayat_golongan[$n]->tmt_golongan){{ date('d-m-Y', strtotime($riwayat_golongan[$n]->tmt_golongan)) }}@endif" style="{{ $danger }}" >
								@endif
							@else
								@if($sapk[$n]['tmtGolongan']=="")
									<input type="text" class="form-control" placeholder="TMT Golongan"  style="{{ $success }}" >
								@else
									<input type="text" class="form-control" placeholder="TMT Golongan"  style="{{ $danger }}" >
								@endif
							@endif
						</div>

					</div><br><br><br>

					

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Nomor SK') }}</label>
							@if($n<$jml_riwayat_golongan)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="Nomor SK" value="{{ $riwayat_golongan[$n]->no_sk }}" 
									@if($riwayat_golongan[$n]->no_sk==$sapk[$n]['skNomor'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="Nomor SK" value="{{ $riwayat_golongan[$n]->no_sk }}" style="{{ $danger }}" >
								@endif
							@else
								@if($sapk[$n]['skNomor']=="")
									<input type="text" class="form-control" placeholder="Nomor SK"  style="{{ $success }}" >
								@else
									<input type="text" class="form-control" placeholder="Nomor SK"  style="{{ $danger }}" >
								@endif
							@endif
						</div>
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Tanggal SK') }}</label>
							@if($n<$jml_riwayat_golongan)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="Tanggal SK" value="@if($riwayat_golongan[$n]->tanggal_sk){{ date('d-m-Y', strtotime($riwayat_golongan[$n]->tanggal_sk)) }}@endif"
									@if(date('d-m-Y', strtotime($riwayat_golongan[$n]->tanggal_sk))==$sapk[$n]['skTanggal'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="Tanggal SK" value="@if($riwayat_golongan[$n]->tanggal_sk){{ date('d-m-Y', strtotime($riwayat_golongan[$n]->tanggal_sk)) }}@endif" style="{{ $danger }}">
								@endif
							@else
								@if($sapk[$n]['skTanggal']=="")
									<input type="text" class="form-control" placeholder="Tanggal SK"  style="{{ $success }}">
								@else
									<input type="text" class="form-control" placeholder="Tanggal SK"  style="{{ $danger }}">
								@endif
							@endif
						</div>
					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Nomor BKN') }}</label>
							@if($n<$jml_riwayat_golongan)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="Nomor BKN" value="{{ $riwayat_golongan[$n]->no_bkn }}" 
									@if($riwayat_golongan[$n]->no_bkn==$sapk[$n]['noPertekBkn'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="Nomor BKN" value="{{ $riwayat_golongan[$n]->no_bkn }}" style="{{ $danger }}" >
								@endif
							@else
								@if($sapk[$n]['noPertekBkn']=="")
									<input type="text" class="form-control" placeholder="Nomor BKN"  style="{{ $success }}">
								@else
									<input type="text" class="form-control" placeholder="Nomor BKN"  style="{{ $danger }}">
								@endif
							@endif
						</div>
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Tanggal BKN') }}</label>
							@if($n<$jml_riwayat_golongan)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="Tanggal BKN" value="@if($riwayat_golongan[$n]->tanggal_bkn){{ date('d-m-Y', strtotime($riwayat_golongan[$n]->tanggal_bkn)) }}@endif" 
									@if(date('d-m-Y', strtotime($riwayat_golongan[$n]->tanggal_bkn))==$sapk[$n]['tglPertekBkn'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="Tanggal BKN" value="@if($riwayat_golongan[$n]->tanggal_bkn){{ date('d-m-Y', strtotime($riwayat_golongan[$n]->tanggal_bkn)) }}@endif" style="{{ $danger }}" >
								@endif
							@else
								@if($sapk[$n]['tglPertekBkn']=="")
									<input type="text" class="form-control" placeholder="Tanggal BKN"  style="{{ $success }}" >
								@else
									<input type="text" class="form-control" placeholder="Tanggal BKN"  style="{{ $danger }}" >
								@endif
							@endif
						</div>
					</div><br><br><br>
					
					<div class="form-group ">
						<div class="col-sm-12">
							<label class="control-label" for="inputSuccess"> {{ __('Jenis KP') }}</label>
							@if($n<$jml_riwayat_golongan)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="Jenis KP" value="{{ $riwayat_golongan[$n]->jenis_kp }}" 
									@if($riwayat_golongan[$n]->jenis_kp==$sapk[$n]['jenisKPNama'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="Jenis KP" value="{{ $riwayat_golongan[$n]->jenis_kp }}" style="{{ $danger }}" >
								@endif
							@else
								@if($sapk[$n]['jenisKPNama']=="")
									<input type="text" class="form-control" placeholder="Jenis KP"  style="{{ $success }}" >
								@else
									<input type="text" class="form-control" placeholder="Jenis KP"  style="{{ $danger }}" >
								@endif
							@endif
						</div>
					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('MK Tahun') }}</label>
							@if($n<$jml_riwayat_golongan)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="MK Tahun" value="{{ $riwayat_golongan[$n]->mk_tahun }}" 
									@if($riwayat_golongan[$n]->mk_tahun==$sapk[$n]['masaKerjaGolonganTahun'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="MK Tahun" value="{{ $riwayat_golongan[$n]->mk_tahun }}" style="{{ $danger }}" >
								@endif
							@else
								@if($sapk[$n]['masaKerjaGolonganTahun']=="")
									<input type="text" class="form-control" placeholder="MK Tahun"  style="{{ $success }}">
								@else
									<input type="text" class="form-control" placeholder="MK Tahun"  style="{{ $danger }}">
								@endif
							@endif
						</div>
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('MK Bulan') }}</label>
							@if($n<$jml_riwayat_golongan)
								@if($n<$jml_sapk)
									<input type="text" class="form-control" placeholder="MK Bulan" value="{{ $riwayat_golongan[$n]->mk_bulan }}"
									@if($riwayat_golongan[$n]->mk_bulan==$sapk[$n]['masaKerjaGolonganBulan'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									<input type="text" class="form-control" placeholder="MK Bulan" value="{{ $riwayat_golongan[$n]->mk_bulan }}" style="{{ $danger }}">
								@endif
							@else
								@if($sapk[$n]['masaKerjaGolonganBulan']=="")
									<input type="text" class="form-control" placeholder="MK Bulan"  style="{{ $success }}">
								@else
									<input type="text" class="form-control" placeholder="MK Bulan"  style="{{ $danger }}">
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
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Golongan') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_golongan)
									<input type="text" class="form-control" placeholder="Golongan" value="{{ $sapk[$n]['golongan'] }}" disabled
									@if($riwayat_golongan[$n]->golongan==$sapk[$n]['golongan'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['golongan']=="")
										<input type="text" class="form-control" placeholder="Golongan" value="{{ $sapk[$n]['golongan'] }}" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Golongan" value="{{ $sapk[$n]['golongan'] }}" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_golongan)
									<input type="text" class="form-control" placeholder="Golongan"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['golongan']=="")
										<input type="text" class="form-control" placeholder="Golongan"  style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Golongan"  style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('TMT Golongan') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_golongan)
									<input type="text" class="form-control" placeholder="TMT Golongan" value="@if($sapk[$n]['tmtGolongan']){{ date('d-m-Y', strtotime($sapk[$n]['tmtGolongan'])) }}@endif" disabled 
									@if(date('d-m-Y', strtotime($riwayat_golongan[$n]->tmt_golongan))==$sapk[$n]['tmtGolongan'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['tmtGolongan']=="")
										<input type="text" class="form-control" placeholder="TMT Golongan" value="@if($sapk[$n]['tmtGolongan']){{ date('d-m-Y', strtotime($sapk[$n]['tmtGolongan'])) }}@endif" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="TMT Golongan" value="@if($sapk[$n]['tmtGolongan']){{ date('d-m-Y', strtotime($sapk[$n]['tmtGolongan'])) }}@endif" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_golongan)
									<input type="text" class="form-control" placeholder="TMT Golongan"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['tmtGolongan']=="")
										<input type="text" class="form-control" placeholder="TMT Golongan"  style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="TMT Golongan"  style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>
					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Nomor SK') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_golongan)
									<input type="text" class="form-control" placeholder="Nomor SK" value="{{ $sapk[$n]['skNomor'] }}" disabled
									@if($riwayat_golongan[$n]->no_sk==$sapk[$n]['skNomor'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['skNomor']=="")
										<input type="text" class="form-control" placeholder="Nomor SK" value="{{ $sapk[$n]['skNomor'] }}" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Nomor SK" value="{{ $sapk[$n]['skNomor'] }}" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_golongan)
									<input type="text" class="form-control" placeholder="Nomor SK"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['skNomor']=="")
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
								@if($n<$jml_riwayat_golongan)
									<input type="text" class="form-control" placeholder="Tanggal SK" value="{{ date('d-m-Y', strtotime($sapk[$n]['skTanggal'])) }}" disabled
									@if(date('d-m-Y', strtotime($riwayat_golongan[$n]->tanggal_sk))==$sapk[$n]['skTanggal'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['skTanggal']=="")
										<input type="text" class="form-control" placeholder="Tanggal SK" value="@if($sapk[$n]['skTanggal']){{ date('d-m-Y', strtotime($sapk[$n]['skTanggal'])) }}@endif" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Tanggal SK" value="@if($sapk[$n]['skTanggal']){{ date('d-m-Y', strtotime($sapk[$n]['skTanggal'])) }}@endif" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_golongan)
									<input type="text" class="form-control" placeholder="Tanggal SK"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['skTanggal']=="")
										<input type="text" class="form-control" placeholder="Tanggal SK"  style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Tanggal SK"  style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>
					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Nomor BKN') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_golongan)
									<input type="text" class="form-control" placeholder="Nomor BKN" value="{{ $sapk[$n]['noPertekBkn'] }}" disabled
									@if($riwayat_golongan[$n]->no_bkn==$sapk[$n]['noPertekBkn'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['noPertekBkn']=="")
										<input type="text" class="form-control" placeholder="Nomor BKN" value="{{ $sapk[$n]['noPertekBkn'] }}" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Nomor BKN" value="{{ $sapk[$n]['noPertekBkn'] }}" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_golongan)
									<input type="text" class="form-control" placeholder="Nomor BKN"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['noPertekBkn']=="")
										<input type="text" class="form-control" placeholder="Nomor BKN"  style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Nomor BKN"  style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('Tanggal BKN') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_golongan)
									<input type="text" class="form-control" placeholder="Tanggal BKN" value="@if($sapk[$n]['tglPertekBkn']){{ date('d-m-Y', strtotime($sapk[$n]['tglPertekBkn'])) }}@endif" disabled
									@if(date('d-m-Y', strtotime($riwayat_golongan[$n]->tanggal_bkn))==$sapk[$n]['tglPertekBkn'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['tglPertekBkn']=="")
										<input type="text" class="form-control" placeholder="Tanggal BKN" value="@if($sapk[$n]['tglPertekBkn']){{ date('d-m-Y', strtotime($sapk[$n]['tglPertekBkn'])) }}@endif" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Tanggal BKN" value="@if($sapk[$n]['tglPertekBkn']){{ date('d-m-Y', strtotime($sapk[$n]['tglPertekBkn'])) }}@endif" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_golongan)
									<input type="text" class="form-control" placeholder="Tanggal BKN"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['tglPertekBkn']=="")
										<input type="text" class="form-control" placeholder="Tanggal BKN"  style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Tanggal BKN"  style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>
					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-12">
							<label class="control-label" for="inputSuccess"> {{ __('Jenis KP') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_golongan)
									<input type="text" class="form-control" placeholder="Jenis KP" value="{{ $sapk[$n]['jenisKPNama'] }}" disabled
									@if($riwayat_golongan[$n]->jenis_kp==$sapk[$n]['jenisKPNama'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['jenisKPNama']=="")
										<input type="text" class="form-control" placeholder="Jenis KP" value="{{ $sapk[$n]['jenisKPNama'] }}" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Jenis KP" value="{{ $sapk[$n]['jenisKPNama'] }}" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_golongan)
									<input type="text" class="form-control" placeholder="Jenis KP"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['jenisKPNama']=="")
										<input type="text" class="form-control" placeholder="Jenis KP"  style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="Jenis KP"  style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>
					</div><br><br><br>

					<div class="form-group ">
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('MK Tahun') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_golongan)
									<input type="text" class="form-control" placeholder="MK Tahun" value="{{ $sapk[$n]['masaKerjaGolonganTahun'] }}" disabled
									@if($riwayat_golongan[$n]->mk_tahun==$sapk[$n]['masaKerjaGolonganTahun'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['masaKerjaGolonganTahun']=="")
										<input type="text" class="form-control" placeholder="MK Tahun" value="{{ $sapk[$n]['masaKerjaGolonganTahun'] }}" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="MK Tahun" value="{{ $sapk[$n]['masaKerjaGolonganTahun'] }}" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_golongan)
									<input type="text" class="form-control" placeholder="MK Tahun"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['masaKerjaGolonganTahun']=="")
										<input type="text" class="form-control" placeholder="MK Tahun"  style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="MK Tahun"  style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>
						<div class="col-sm-6">
							<label class="control-label" for="inputSuccess"> {{ __('MK Bulan') }}</label>
							@if($n<$jml_sapk)
								@if($n<$jml_riwayat_golongan)
									<input type="text" class="form-control" placeholder="MK Bulan" value="{{ $sapk[$n]['masaKerjaGolonganBulan'] }}" disabled
									@if($riwayat_golongan[$n]->mk_bulan==$sapk[$n]['masaKerjaGolonganBulan'] ) style="{{ $success }}" @else style="{{ $danger }}" 
									@endif>
								@else 
									@if($sapk[$n]['masaKerjaGolonganBulan']=="")
										<input type="text" class="form-control" placeholder="MK Bulan" value="{{ $sapk[$n]['masaKerjaGolonganBulan'] }}" style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="MK Bulan" value="{{ $sapk[$n]['masaKerjaGolonganBulan'] }}" style="{{ $danger }}" disabled>
									@endif
								@endif
							@else
								@if($n<$jml_riwayat_golongan)
									<input type="text" class="form-control" placeholder="MK Bulan"  style="{{ $danger }}" disabled>
								@else 
									@if($sapk[$n]['masaKerjaGolonganBulan']=="")
										<input type="text" class="form-control" placeholder="MK Bulan"  style="{{ $success }}" disabled>
									@else
										<input type="text" class="form-control" placeholder="MK Bulan"  style="{{ $danger }}" disabled>
									@endif
								@endif
							@endif
						</div>
					</div><br><br><br>
					<hr>

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