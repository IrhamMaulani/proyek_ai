@extends('adminlte::page')

@section('title', 'Register')

@section('content_header')
<ol class="breadcrumb">
    <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Register</li>
  </ol>
@stop

@section('content')

   <section class="content">
    <div class="row">

            <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Register Mahasiswa</h3>
    
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                    <form class="form-horizontal" action="#">
                        <div class="form-group">
                          <label class="control-label col-sm-1" for="nama">Nama:</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" placeholder="Masukan Nama">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-1" for="nim">Nim:</label>
                          <div class="col-sm-10"> 
                            <input type="text" class="form-control" id="pwd" placeholder="Masukan Nim">
                          </div>
                        </div>
            <div class="form-group">
                    <label class="control-label col-sm-1" for="pwd">Jenis Kelamin:</label>
                    <div class="col-sm-10"> 
                            <label class="radio-inline"><input type="radio" name="optradio" checked>Laki-Laki</label>
                            <label class="radio-inline"><input type="radio" name="optradio">Perempuan</label>               
                        </div>
                        </div>
            <div class="form-group">
                <label class="control-label col-sm-1" for="pwd">Tanggal Lahir:</label>
                <div class="col-sm-10"> 
                    <input type="date" class="form-control" id="pwd" >
                        </div>
                        </div>
                <div class="form-group">
                    <label class="control-label col-sm-1" for="pwd">Alamat Email:</label>
                    <div class="col-sm-10"> 
                        <input type="email" class="form-control" id="pwd" placeholder="Masukan Email">
                        </div>
                        </div>
                    <div class="form-group">
                        <label class="control-label col-sm-1" for="pwd">Angkatan:</label>
                        <div class="col-sm-10"> 
                            <input type="text" class="form-control" id="pwd" placeholder="Masukan Angkatan">
                        </div>
                        </div>

            <div class="form-group">
                <label class="control-label col-sm-1" for="pwd">Angkatan:</label>
                <div class="col-sm-10"> 
                    <input type="text" class="form-control" id="pwd" placeholder="Masukan Angkatan">
                </div>
                </div>
<br>
            <div class="form-group">
                    <label  class="control-label col-sm-1" for="exampleFormControlFile1">Retina Kanan</label>
                    <div class="col-sm-10"> 
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    </div>

                       
                        <div class="form-group pull-right"> 
                          <div class="col-sm-12 ">
                            <button type="submit" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-default" style="margin-left:30px; margin-right:50px;">Submit</button>
                          </div>
                        </div>
                      </form>


           
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div>

    </div>
   </section>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop