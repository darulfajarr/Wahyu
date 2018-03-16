@extends('layouts.template')
@section('content')


 <!-- Left side column. contains the logo and sidebar -->
  <div class="col-md-10 col-md-offset-2">
  <div class="panel panel-primary">
    <div class="panel-heading"> Jenis Barang
    <div class="panel-title pull-right">
      </div></div>
      <div class="panel-body">
     <div class="table-responsive">
     <table class="table">
			<div class="panel-body">
				<form action="{{route('jenis.update', $jenis->id)}}" method="post">
				<input type="hidden" name="_method" value="PUT">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				

				<div class="form-group">
					<label class="control-lable">Jenis Barang</label>
					<input type="text" name="jenis" class="form-control" value="{{$jenis->jenis}} " required>
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