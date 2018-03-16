@extends('layouts.template')
@section('content')


<<div class="col-md-10 col-md-offset-2">
  <div class="panel panel-primary">
    <div class="panel-heading"> Edit Barang
    <div class="panel-title pull-right">
      </div></div>
      <div class="panel-body">
     <div class="table-responsive">
     <table class="table">

      <div class="panel-body">


				<div class="panel-body">
				<form action="{{route('barang.update', $barang->id)}}" method="post" enctype="multipart/form-data">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">

				<div class="form-group">
					<label class="control-lable">Merk Barang</label>
					<select class="form-control" name="jb">
						@foreach($jenis as $data)
						<option value="{{$data->id}}" selected="">{{$data->jenis}}</option>
						@endforeach
					</select>
				</div>


				<div class="form-group">
					<label class="control-lable">Nama Barang</label>
					<input type="text" name="nama" class="form-control" value="{{$barang->nama}}" required>
				</div>

        <div class="form-group">
                <label class="control-label">Foto</label><br>
                <img src="{{asset('img/'.$barang->foto)}}"  width="100px" height="120px"> <br><br>
                <input type="file" name="foto" >
                
              </div>

				<div class="form-group">
					<label class="control-lable">Stock</label>
					<input type="text" name="stock" class="form-control" value="{{$barang->stock}} " required>
				</div>


				<div class="form-group">
					<label class="control-lable">Harga Asli</label>
					<input type="text" name="ha" class="form-control" value="{{$barang->harga_asli}}" required>
				</div>


				<div class="form-group">
					<label class="control-lable">Harga Jual</label>
					<input type="text" name="hj" class="form-control" value="{{$barang->harga_jual}} " required>
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
  </div>

@endsection