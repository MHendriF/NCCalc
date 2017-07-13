<!DOCTYPE html>

<html lang="en">

@section('htmlheader_title', 'Edit Item')
    @include('backend.layouts.includes.htmlheader')
@show

<body class="skin-yellow sidebar-mini">

<div class="wrapper">

    @include('backend.layouts.partials.mainheader')

    @include('backend.layouts.includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

    @section('contentheader_title', 'Edit Item')
    @section('contentheader_message', 'Edit Item')
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
                    <b>Form Edit Item</b>
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
                <form method="post" action="{{ url('item/'.$data->id) }}">
                  <input type="hidden" name="_methode" value="PUT">
                  {{ csrf_field() }}
                  <div class="box-body">
                    <div class="form-group">
                      <label>Nama Item</label>
                      <input class="form-control" type="text" name="nama_item" value="{{$data->nama_item}}">
                    </div>
                    <div class="form-group">
                      <label>Harga</label>
                      <input class="form-control" type="text" name="harga" value="{{$data->harga}}">
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    {{-- <button type="submit" class="btn btn-default">Cancel</button> --}}
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
