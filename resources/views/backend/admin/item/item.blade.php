<!DOCTYPE html>

<html lang="en">

@section('htmlheader_title', 'List Items')
    @include('backend.layouts.includes.htmlheader')
@show


<body class="skin-yellow sidebar-mini">

<div class="wrapper">

    @include('backend.layouts.partials.mainheader')

    @include('backend.layouts.includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

    @section('contentheader_title', 'List Items')
    @section('contentheader_message', 'List Items')
        @include('backend.layouts.partials.contentheader')
        
        <!-- Main content -->

        <br>
        <!-- Main content -->
        <section class="content">
          {{-- @include('layouts.includes._message') --}}
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Database Items</h3>
                   <a href="{{ url('news/create') }}" class="btn btn-primary btn-xs" style="margin-top: -5px;margin-left: 10px;"><i class="fa fa-plus-square" style="margin-right: 6px;"></i>Add Item</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama Item</th>
                      <th>Harga</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $index => $item)       
                      <tr>
                        <td>{{ $index +1 }}</td>
                        <td>{{ $item->nama_item }}</td>
                        <td>Rp {{ $item->harga }}</td>
                        <td>
                          <center>
                            <div class="btn-group">
                              <a href="{{ url('item/'.$item->id.'/edit') }}" class="btn btn-success btn-xs"><i class="fa fa-pencil" style="margin-right: 6px;"></i>Edit</a>
                            </div>
                            <div class="btn-group">
                              <form id="delete-currency" action="{{ url('item/'.$item->id) }}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button id="delete" type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash" style="margin-right: 6px;"></i>Delete</button>
                              </form>
                            </div>
                          </center>
                        </td>
                      @endforeach

                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->

    </div><!-- /.content-wrapper -->

    @include('backend.layouts.partials.controlsidebar')

    @include('backend.layouts.includes.footer')

</div><!-- ./wrapper -->
@section('scripts')
    @include('backend.layouts.includes.scripts')
@show
  
  <!-- page script -->
  <script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
</script>

</body>
</html>
