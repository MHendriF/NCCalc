<!DOCTYPE html>

<html lang="en">

@section('htmlheader_title', 'Add Item')
    @include('backend.layouts.includes.htmlheader')
@show

<body class="skin-yellow sidebar-mini">

<div class="wrapper">

    @include('backend.layouts.partials.mainheader')

    @include('backend.layouts.includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

    @section('contentheader_title', 'Add Item')
    @section('contentheader_message', 'Add Item')
        @include('backend.layouts.partials.contentheader')
        
        <!-- Main content -->

        <br>
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6 col-md-offset-3">
              <!-- general form elements -->
              <div class="box box-warning">
                 <div class="register-logo">
                    <b>Form Add Item</b>
                </div>
                <!-- /.box-header -->
                @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <strong>Whoops!</strong> There were some problems with your input.<br><br>
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                @endif

                <!-- form start -->
                <form action="{{ url('item') }}" method="post" >
                  {{ csrf_field() }}
                  <div class="box-body">
                    <div class="form-group">
                      <label>Nama Item</label>
                      <input class="form-control" type="text" name="nama_item" placeholder="Masukkan nama item...">
                    </div>
                    <div class="form-group">
                      <label>Harga</label>
                      <input class="form-control" type="text" name="harga" placeholder="Masukkan harga item...">
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                  </div>
                  <!-- /.box-footer -->
                </form>
              </div>
              <!-- /.box -->
            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </section>
        <!-- main content -->

    </div><!-- /.content-wrapper -->

    @include('backend.layouts.partials.controlsidebar')

    @include('backend.layouts.includes.footer')

</div><!-- ./wrapper -->
@section('scripts')
    @include('backend.layouts.includes.scripts')
@show

  

</body>
</html>
