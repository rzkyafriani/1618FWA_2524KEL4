<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>GVKaraoke</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="{{asset('web/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<script src="{{asset('web/js/libs/jquery-1.6.2.min.js')}}"></script>
<script src="{{asset('web/js/basic-jquery-slider.js')}}"></script>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">

</head>
<body>
<div class="header">
<div class="wrap">
    <div class="wrapper">
    <div class="logo">
            <a href="{{asset('home')}}"><img src="{{asset('web/images/logo3.png')}}" /></a>
    </div>
    <div class="menu">
            <ul>
                <li><a href="{{url('/')}}">Beranda</a></li>
                <li><a href="{{url('daftar_room')}}">Room</a></li>
                <li class="active"><a href="{{url('daftar_lagu')}}">Daftar Lagu</a></li>
                <li><a href="{{url('daftar_menu')}}">Menu</a></li>
                <li><a href="{{url('login')}}">Login</a></li>
            </ul>
             <div class="clear"></div> 
    </div>
    <div id="container">
      <div id="banner">
        <ul class="bjqs">
          <li><img src="{{asset('web/images/iki.jpg')}}"></li>
          <li><img src="{{asset('web/images/rita.jpg')}}"></li>
          <li><img src="{{asset('web/images/siti.jpg')}}"></li>
          <li><img src="{{asset('web/images/elvy.jpg')}}"></li>
        </ul>
      </div>
   </div>
   <script>
      $(document).ready(function() {
        
        $('#banner').bjqs({
          'animation' : 'slide',
          'width' : 920,
          'height' : 450
        });
        
      });
    </script>
<div class="content">
  <div class="rooms">
  <table class="table" summary="Sample Table" style="width:100%;">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul Lagu</th>
        <th scope="col">Penyanyi</th>
        <th scope="col">Streaming</th>
        
      </tr>
    </thead>
    <tfoot>
      
    </tfoot>
    
    
    <tbody>
    <?php $x=1 ?>
      @foreach($semuaLagu as $lagu)
      <tr >
      
        <td scope="row">{{ $x++ }}</td>
        <td>{{ $lagu->judul }}</td>
        <td>{{ $lagu->penyanyi }}</td>
        <td><a href="{{$lagu->link}}"><i class="fa fa-youtube"></i> {{ $lagu->penyanyi }}</a></td> 
     
      </tr>
    @endforeach
    </tbody>
    
  </table>
</div>
<!-- <div class="content-top">
        <div class="grid">
                <div class="tariff">
                        <div class="text">
                            <h2>24 JAM PEMESANAN</h2>
                            <p>Goyang Vista menghadirkan hiburan karaoke keluarga sejak 2017. Dilengkapi dengan kualitas audio video yg prima, koleksi lagu yang lengkap, peralatan yg canggih, sistem layar sentuh, desain ruangan yang modern dan berbagai fasilitas lainnya untuk memberikan pengalaman bernyanyi yang tak terlupakan.</p
                            <a href=""><p><span class="yellow">Read More</span></p></a>  
                        </div>
                <div class="clear"></div>
                </div>
        </div>
        <div class="grid1">
                    <div class="tariff">
                        <div class="text">
                            <h2>GOYANG VISTA</h2>
                            <p>Hilangkan penat bersama keluarga dengan berkaraoke gaya modern yang terletak di Jalan Mayjend Panjaitan. Rasakan kebersamaan istimewa bersama keluarga, kerabat dan orang terkasih.Menawarkan akomodasi desain ruang mudah dengan fasilitas modern plus musik yang jernih, pesona arsitektur ruangan ini yang di bangun untuk kenyamanan bersama.</p>
                            <a href=""><p><span class="yellow">Read More</span></p></a>  
                        </div>
                    <div class="clear"></div>
                    </div>
        </div>
        <div class="grid2">
             <h4>INFORMASI</h4>
              <div class="booking"> 
                <form action="#" id="">
                  <fieldset>
                    <div class="field">
                        <h5>Information:</h5>
                      <label>Hotline : 0541 - 282623 </label><br>
                      <label>Alamat  :</label><br>
                      <label>Jalan Mayjend Panjaitan No. 25</label><br>
                      <label>Email   :</label><br>
                      <label>goyangvista@gmail.com</label>

                    
                    
                    
                    </div> -->
    <!--         <div class="clear"></div>
         </div>
        </div>
        <div class="clear"></div>
      </div>
   </div>
  </div>
 </div>
</div>
<div class="content-bottom">
<div class="wrap">
    <div class="bottom-gallery">            
            <div class="bottom-image">
                <img src="{{asset('web/images/pic.jpg')}}">
            </div>
            <div class="bottom-image">
                <img src="{{asset('web/images/pic4.jpg')}}">
            </div>
            <div class="bottom-image">
                <img src="{{asset('web/images/pic10.jpg')}}">
            </div>
            <div class="bottom-image1">
                <img src="{{asset('web/images/pic7.jpg')}}">
            </div>
            <div class="clear"></div>
    </div>
 </div>
</div>

<div class="footer">
<div class="wrap">
<div class="footer-top">    
   <div class="sub-footer"> 
         <div class="footer-menu">           
            <h3>Menu Makanan</h3>
                <div class="footer-pic">            
                    <div class="footer-img">
                        <a href=""><img src="{{asset('web/images/pic22.jpg')}}"></a>
                    </div>
                    <div class="footer-img">
                        <a href=""><img src="{{asset('web/images/pic23.jpg')}}"></a>
                    </div>
                    <div class="footer-img">
                        <a href=""><img src="{{asset('web/images/pic25.jpg')}}"></a>
                    </div>
                    <div class="footer-img">
                        <a href=""><img src="{{asset('web/images/pic24.jpg')}}"></a>
                    </div>
                    <div class="footer-img">
                        <a href=""><img src="{{asset('web/images/pic26.jpg')}}"></a>
                    </div>
                    <div class="footer-img">
                        <a href=""><img src="{{asset('web/images/pic27.jpg')}}"></a>
                    </div>
                    <div class="clear"></div>
               </div>
        </div> 
  </div>
  <div class="footer">
<div class="wrap">
<div class="footer-top">    
   <div class="sub-footer"> 
         <div class="footer-menu">           
            <h3>Ruangan</h3>
                <div class="footer-pic">            
                    <div class="footer-img">
                        <a href=""><img src="{{asset('web/images/room1.jpg')}}"></a>
                    </div>
                    <div class="footer-img">
                        <a href=""><img src="{{asset('web/images/room2.jpg')}}"></a>
                    </div>
                    <div class="footer-img">
                        <a href=""><img src="{{asset('web/images/room3.jpg')}}"></a>
                    </div>
                    <div class="footer-img">
                        <a href=""><img src="{{asset('web/images/room4.jpg')}}"></a>
                    </div>
                    <div class="footer-img">
                        <a href=""><img src="{{asset('web/images/room5.jpg')}}"></a>
                    </div>
                    <div class="footer-img">
                        <a href=""><img src="{{asset('web/images/room6.jpg')}}"></a>
                    </div>
                    <div class="clear"></div>
               </div>
        </div> 
  </div> -->
  <!-- <div class="sub-footer1"> 
               <h2>Recent Blogs</h2>
               <p> It has survived not only five centuries, but also the leap into electronic. </p>
               <p> It has survived not only five centuries, but also the leap into electronic. </p>
               <p> It has survived not only five centuries, but also the leap into electronic. </p>
    </div> -->
   <!--  <div class="sub-footer1">   
        <h2>Visit Us</h2>
                <ul>
                    <li><a href="#">simply dummy text of the printing</a></li>
                    <li><a href="#">simply dummy text of the printing</a></li>
                    <li><a href="#">simply dummy text of the printing</a></li>
                     <li><a href="#">simply dummy text of the printing</a></li>
                    <li><a href="#">simply dummy text of the printing</a></li>
               </ul>
    </div> -->
               <div class="clear"></div>
  </div>        
 </div>
</div>  
<div class="footer-bottom">
<div class="wrap">  
    <div class="copy">
        <p>&copy; 2017 Kelompok4_A2015 | Design by Kelompok 4</p>
    </div>
 </div>
</div>
</body>
</html>