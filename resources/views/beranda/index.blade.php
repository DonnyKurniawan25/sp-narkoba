@extends("layouts/admin")
@section("content-header")
<h1>Beranda</h1>
@endsection

@section("content-link")
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item active"><a href="#"><span class="badge badge-primary">Home</span></a></li>
</ol>
@endsection

@section("content")
<div class="row">
    <div class="col-md-3 col-sm-6 col-12">
        <div class="info-box">
          <span class="info-box-icon bg-info"><i class="fa fa-procedures"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Jumlah Penyakit</span>
            <span class="info-box-number">{{$penyakitcount}}</span>
        </div>
        <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
</div>
<div  class="col-md-3 col-sm-6 col-12">
    <div class="info-box">
      <span class="info-box-icon bg-danger"><i class="fa fa-thermometer-three-quarters"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Jumlah Gejala</span>
        <span class="info-box-number">{{$gejalacount}}</span>
    </div>
    <!-- /.info-box-content -->
</div>
<!-- /.info-box -->
</div>
<div  class="col-md-3 col-sm-6 col-12">
    <div class="info-box">
      <span class="info-box-icon bg-success"><i class="fa fa-user"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Jumlah Pasien</span>
        <span class="info-box-number">{{$pasiencount}}</span>
    </div>
    <!-- /.info-box-content -->
</div>
<!-- /.info-box -->
</div>
<div  class="col-md-3 col-sm-6 col-12">
    <div class="info-box">
      <span class="info-box-icon bg-warning"><i class="fa fa-user"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Jumlah Diagnosa</span>
        <span class="info-box-number">{{$diagnosacount}}</span>
    </div>
    <!-- /.info-box-content -->
</div>
<!-- /.info-box -->
</div>
</div>
@endsection
