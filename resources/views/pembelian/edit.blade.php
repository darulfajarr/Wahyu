@extends('layouts.template')
@section('content')

<<div class="col-md-10 col-md-offset-2">
  <div class="panel panel-primary">
    <div class="panel-heading"> Edit Supplier
    <div class="panel-title pull-right">
      </div></div>
      <div class="panel-body">
     <div class="table-responsive">
     <table class="table">


			<div class="panel-body">
				<form action="{{route('pembelian.update', $f->id)}}" method="post">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				

				<div class="form-group">
					<label class="control-lable">Nama Supplier</label>
					<select class="form-control" name="ns">
						@foreach($a as $data)
						<option value="{{$data->id}}" selected="">{{$data->nama_supplier}}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label class="control-lable">Jenis Barang</label>
					<select class="form-control" name="jb">
						@foreach($b as $data)
						<option value="{{$data->id}}" selected="">{{$data->jenis}}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label class="control-lable">Merk Barang</label>
					<select class="form-control" name="nb">
						@foreach($c as $data)
						<option value="{{$data->id}}" selected="">{{$data->nama}}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label class="control-lable">Jumlah</label>
						<input type="number" name="jml"  max="100" value="{{$f->jumlah}}" class="form-control" required>
					</div>
				
				<div class="form-group">
					<label class="control-lable">Tanggal Pembelian</label>
					<input type="date" name="tgl" class="form-control" value="{{$f->tgl_pembelian}}" required>
				</div>
				

				<div class="form-group">
					<button type="submit" class="btn btn-success">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>


				</form>
				</div>
		</div>
	</div>
</div>
</section>
</div> 	
@endsection