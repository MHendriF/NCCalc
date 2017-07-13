
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NCCalc</title>

    <!-- Bootstrap Core CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('/frontend/vendor/bootstrap/css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('/backend/bootstrap/css/bootstrap.min.css') }}">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{ asset('/frontend/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('/frontend/css/agency.css') }}">
    <!-- Pace style -->
    <link rel="stylesheet" href="{{ asset('/frontend/css/pace.min.css') }}">
    <!-- Custom style -->
    <link rel="stylesheet" href="{{ asset('/frontend/css/custom.css') }}">
    <!-- Sweetalert -->
    <link rel="stylesheet" href="{{ asset('/frontend/js/sweetalert/dist/sweetalert.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('/backend/plugins/select2/select2.min.css')}}">

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">NCCalc</a>
                <img class="page-scroll" style="height:53px;width:73px;" src="frontend/img/logoncc3.png">
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#page-top">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">NCC Service</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#detect">NCC Calcuator</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Kritik & Saran</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Net Centric Computing Laboratory</div>
                <div class="intro-heading">Let's broke the Hoax!</div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">NCC Service</h2>
                    <h3 class="section-subheading text-muted">"We have some service around You!"</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-search fa-3x"></i>
                            </div>
                        </div>
                        <img src="frontend/img/portfolio/populer.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Alat Tulis Kantor</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-search fa-3x"></i>
                            </div>
                        </div>
                        <img src="frontend/img/portfolio/belgia.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Print, Scan dan Jilid</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-search fa-3x"></i>
                            </div>
                        </div>
                        <img src="frontend/img/portfolio/pohon.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Coffe and Snack</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Services Section -->
    <section id="detect">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">NCC Calculator</h2>
                    <h3 class="section-subheading text-muted">"An Amazing calculator to calculate your purchase easier!"</h3>
                </div>
            </div>
            <div class="panel panel-footer">
                <form action="{{ url('') }}" id="formsave" method="post" >
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="form-group">
                                <table class="table table-bordered">
                                    <thead>
                                        <th>Nama item</th>
                                        <th>Quantity</th>
                                        <th>Harga</th>
                                        <th>Amount</th>
                                        <th style="text-align: center;background: #eee"><a href="javascript:void(0);" class="btn btn-default btn-sm addRow"><i class="glyphicon glyphicon-plus"></i></a></th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <select class="form-control item" name="item[]">
                                                    <option value="0" selected="true" disabled="true">Pilih Item</option>
                                                    @foreach($data as $key => $item)
                                                    <option value="{!!$key!!}">{!!$item->nama_item!!}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td><input type="text" name="quantity[]" class="form-control quantity"></td>
                                            <td><input type="text" name="harga[]" class="form-control harga" readonly></td>
                                            <td><input type="text" name="amount[]" class="form-control amount"></td>
                                            <td style="text-align: center;background: #eee" >
                                                <a href="javascript:void(0);" class="btn btn-danger btn-sm removeRow"><i class="glyphicon glyphicon-remove"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td style="border: none;"></td>
                                            <td style="border: none;"></td>
                                            <td><b>Total</b></td>
                                            <td><b class="total"></b></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Kritik & Saran</h2>
                    <h3 class="section-subheading text-muted">Write down your criticism or suggestion to help us better.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ url('sentKritik') }}" method="post" novalidate>
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" name="isi_pesan" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright"><strong>NCCalc V2.0</strong> - Copyright &copy; {{date('Y')}} by <strong><a href="http://www.facebook.com/m.hendri.fe">MHF</a></strong> </span>
                </div>
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="http://www.facebook.com/m.hendri.fe"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/in/m-hendri-febriansyah"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
    </footer>


    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Buku populer yang tidak pernah ada</h2>
                                <p class="item-intro text-muted"></p>
                                <img class="img-responsive img-centered" src="frontend/img/portfolio/populer.png" alt="">
                                <p style="text-align: left;">Pada tahun 1950-an, seorang penyiar acara radio tengah malam, Jean Shepherd, menggagas sebuah ide gila untuk membuat sebuah novel, yang tidak pernah ada di dunia ini.
                                Ide itu timbul di benaknya, setelah dia mengunjungi sebuah toko buku di daerah tempat dia tinggal. Di sana dia menyadari, orang-orang yang bergulat dalam bisnis penerbitan, akan mengikuti ke manapun arah popularitas membawa mereka.
                                </p>
                                <p style="text-align: left;">Jean pun kemudian memutuskan untuk membicarakan sebuah buku yang sangat laris, tapi tak pernah dibuat dan dipublikasikan.
                                <strong>Penyiar radio</strong> itu lalu memutuskan untuk memberi judul 'karangannya', I, Libertine, karya penulis Frederick Ewing. Pendengar setia acara radionya pun mulai heboh membicarakan buku tersebut, dan mulai mencari-cari karya fenomenal itu.
                                </p>
                                <p style="text-align: left;">Jean kemudian bekerjasama dengan seorang kenalannya di media, mengatakan bahwa mereka telah mewawancarai penulis novel tersebut.Saat berita yang menyebutkan bahwa novel tersebut hoax, kepala perusahaan penerbitan Ballantine Books, menghubungi Jean dan seorang penulis, Theodore Strugeon, untuk menciptakan novel I, Libertine. Jean membuat alur cerita buku tersebut dan Theodore menjadi penulis utamanya.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h2>Belgia Pecah Jadi 2</h2>
                                <p class="item-intro text-muted"></p>
                                <img class="img-responsive img-centered" src="frontend/img/portfolio/belgia.png" alt="">
                                <p style="text-align: left;">Pada tahun 2006, warga Belgia dikejutkan dengan berita hoax yang disampaikan oleh media setempat, bahwa negara mereka telah terbelah menjadi dua bagian.Media lokal tersebut menyiarkan dalam sebuah 'siaran langsung', sebagian wilayah Belgia yang berbahasa Belanda, telah mendeklarasikan kemerdekaan.</p>
                                <p style="text-align: left;">Laporan langsung itu menunjukkan kerumunan warga mengibarkan bendera Flemish dan bergerak menuju bandara Brussels. Menurut laporan, media tersebut menyebarkan berita hoax itu untuk memperlihatkan kepada penonton, hal itu bisa saja terjadi di masa depan.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Pohon spageti </h2>
                                <p class="item-intro text-muted"></p>
                                <img class="img-responsive img-centered" src="frontend/img/portfolio/pohon.png" alt="">
                                <p style="text-align: left;">Pada 1 April 1957, seorang wartawan Eropa mengklarifikasi berita mengenai 'pohon spageti' adalah hoax. Berita mengenai sebuah keluarga di selatan Swiss menumbuhkan mi di ladang mereka, awalnya di siarkan dalam sebuah program acara milik BBC, Panorama.</p>
                                <p style="text-align: left;">Setelah kemunculan berita tersebut, ribuan orang menghubungi media tersebut, bertanya bagaimana caranya menanam spageti di kebun.Pada masa itu, spageti belum begitu terkenal di Inggris. Sehingga tidak banyak yang menyadari, mi itu terbuat dari tepung dan air.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('/backend/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
    <!-- Sweetalert2 js -->
    <script src="{{ asset('/frontend/js/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/backend/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="{{ asset('/frontend/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('/frontend/js/contact_me.js') }}"></script>
    <!-- DataTables -->
    <script src="{{ asset('/backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/backend/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('/backend/plugins/select2/select2.full.min.js') }}" type="text/javascript"></script>
    <!-- Sweetalert -->
    <script src="{{ asset('/frontend/js/sweetalert/dist/sweetalert.min.js') }}" type="text/javascript"></script>
    <!-- Theme JavaScript -->
    <script src="{{ asset('/frontend/js/agency.js') }}"></script>
    <script src="{{ asset('/frontend/js/pace.min.js') }}"></script>
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

    <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();
        });
    </script>

    <script type="text/javascript">
        $('tbody').delegate('.item','change',function(){
            var tr = $(this).parent().parent();
            var id = tr.find('.item').val();
            var dataId = {'id':id};
            $.ajax({
                type : 'GET',
                url : '{!!URL::to('findPrice')!!}',
                dataType : 'json',
                data : dataId,
                success:function(data){
                    tr.find('.harga').val(data.harga);
                }
            });
        });
        $('tbody').delegate('.item','change',function(){
            var tr=$(this).parent().parent();
            tr.find('.quantity').focus().val(0);
        });
        $('tbody').delegate('.quantity,.harga,.amount','keyup',function(){
            var tr =$(this).parent().parent();
            var quantity = tr.find('.quantity').val();
            var harga = tr.find('.harga').val();
            var amount = quantity*harga;
            tr.find('.amount').val(amount);
            total();
        });

        $('.addRow').on('click',function(){
            addRow();
        });
        function total(){
            var total = 0;
            $('.amount').each(function(i,e){
                var amount =  $(this).val()-0;
                total +=amount;
            })
            $('.total').html("Rp " + total.formatMoney(2,',','.'));
        }
        // ---- Format Mone----//
        Number.prototype.formatMoney = function(c, d, t){
            var n = this, 
                c = isNaN(c = Math.abs(c)) ? 2 : c, 
                d = d == undefined ? "," : d, 
                t = t == undefined ? "." : t, 
                s = n < 0 ? "-" : "", 
                i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", 
                j = (j = i.length) > 3 ? j % 3 : 0;     
            return s + (j ? i.substr(0, j) + t : "") 
            + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) 
            + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
        };

        function addRow(){
            var tr='<tr>'+
                        '<td>'+
                            '<select class="form-control item" name="item[]">'+
                                '<option value="0" selected="true" disabled="true">Pilih Item</option>'+
                                '@foreach($data as $key => $item)'+
                                '<option value="{!!$key!!}">{!!$item->nama_item!!}</option>'+
                                '@endforeach'+
                            '</select>'+
                        '</td>'+
                        '<td><input type="text" name="quantity[]" class="form-control quantity"></td>'+
                        '<td><input type="text" name="harga[]" class="form-control harga" readonly></td>'+
                        '<td><input type="text" name="amount[]" class="form-control amount"></td>'+
                        '<td style="text-align: center;background: #eee" >'+
                            '<a href="javascript:void(0);" class="btn btn-danger btn-sm removeRow"><i class="glyphicon glyphicon-remove"></i></a>'+
                        '</td>'+
                    '</tr>';
            $('tbody').append(tr);
        };
        $('body').delegate('.removeRow','click',function(){
            var l=$('tbody tr').length;
            if(l==1){
                //alert('You can not remove last one')
                swal({
                  title: '',
                  text: '<strong>You Can Not Remove Last One <span style="color:#F8BB86">!<span></strong>',
                  html: true
                });
            }else{
                $(this).parent().parent().remove();
                total();
            }
        });
    </script>

    <!-- PNotify -->
    <script>
      $(document).ready(function() {
          @if(Session::has('suggestion'))
            swal({
              title: "Thank You!",
              text: "{{ Session::get('suggestion') }}",
              imageUrl: "frontend/img/thumbs-up.jpg"
            });
          @endif
        });
    </script>
    <!-- /PNotify -->

</body>

</html>
