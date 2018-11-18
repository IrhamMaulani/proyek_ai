@extends('adminlte::page')

@section('title', 'Absensi')

@section('content_header')
<ol class="breadcrumb">
    <li><a href="/home"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Absensi</li>
  </ol>
@stop

@section('content')

   <section class="content">
    <div class="row">

            <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Absensi</h3>
    
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                    <form class="form-horizontal" action="/action_page.php">
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="nama">Nama:</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" placeholder="Masukan Nama">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-sm-2" for="nim">Nim:</label>
                          <div class="col-sm-10"> 
                            <input type="text" class="form-control" id="pwd" placeholder="Masukan Nim">
                          </div>
                        </div>
                        <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Password:</label>
                                <div class="col-sm-10"> 
                                  <input type="text" class="form-control" id="pwd" placeholder="Enter password">
                                </div>
                              </div>
                              <div class="form-group">
                                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                                    <div class="col-sm-10"> 
                                      <input type="text" class="form-control" id="pwd" placeholder="Enter password">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                        <label class="control-label col-sm-2" for="pwd">Password:</label>
                                        <div class="col-sm-10"> 
                                          <input type="text" class="form-control" id="pwd" placeholder="Enter password">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                            <label class="control-label col-sm-2" for="pwd">Password:</label>
                                            <div class="col-sm-10"> 
                                              <input type="text" class="form-control" id="pwd" placeholder="Enter password">
                                            </div>
                                          </div>
                        <div class="form-group"> 
                          <div class="col-sm-offset-2 col-sm-10">
                          </div>
                        </div>
                        <div class="form-group"> 
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
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