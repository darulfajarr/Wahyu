@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                		<button onclick="myFunction()">Print</button>

						<script>
							function myFunction() {
    							print();
							}
					</script>
					<BR>
					<BR>
                    <div class="col-md-12">
                        <div class="table-responsive">
							<table class="table">
			<div class="panel-heading">Laporan Data Pembelian
			<div class="panel-title pull-right"></div></div>
			<div class="panel-body">
			<label>Dari Tanggal</label>
			<input type="date" name="">
			<label>Sampai Tanggal</label>
			<input type="date" name="">
			<a href="laporan/transaksipembelian" class="btn btn-info">Submit</a>

                    <div class="col-md-12">
                        <div class="table-responsive">
							<table class="table">
								<tr>
									<th>No</th>
									<th>Suplier</th>
							        <th>Tanggal</th>
							        <th>Total Harga</th>
								</tr>
								@php
								$no = 1;
								@endphp
								@foreach($pembelian as $data)
								<tbody>
								<tr>
                                   <td>{{$no++}}</td>
							       <td>{{$data->id_supplier}}</td>
							       <td>{{$data->created_at}}</td>
							       <td>Rp.{{$data->total}}</td>
					</tr>
						</tbody>
						@endforeach
				</table>
				Jumlah Uang keluar dari tanggal {{$a}} sampai {{$b}}: Rp.{{$sum}}
			</div>
			
			</div>
		</div>
	</div>
	</div>
</div>
@endsection