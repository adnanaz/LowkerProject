@extends('layout/app')

@section('title',' Informasi Perusahaan')

@section('content')

@foreach( $users as $user)
@if($user->id == auth()->user()->id)

<div class="container-expand uk-text-center">
    <img src="/uploads/avatars/{{ $user->avatar }}" class="bg-banner" style="width: 150px;height: 150px;float: center;border-radius: 100px;" alt="">
    <form enctype="multipart/form-data" action="{{ route('perusahaan.avatar') }}" method="POST">
        @csrf

        <div class="js-upload" uk-form-custom>
        <input type="file" name="avatar">
        <i class="fas fa-2x fa-camera"></i>
</div>
        
<div class="js-upload" uk-form-custom>
<input type="submit" class="pull-right btn btn-sm btn-primary" onClick="window.location.reload()" value="submit">
<i type="submit" onClick="window.location.reload()" value="submit" class="fas fa-check"></i>
</div>
       
    </form>

    <h2 class="uk-"><strong>{{ $user->name }}</strong></h2>
    <p><img src="/ICON/point.png" alt="">Sleman City Mall Lantai 3, Jln. Magelang No 45</p>
    <hr>


</div>

    <!-- BAGIAN SLIDER DASHBORD -->
    <div class="container-expand" uk-grid>

    <button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #offcanvas-push" style="height: 3em;
    background-color: #0088FF;width: 8em;border-bottom-right-radius: 23px;border-top-right-radius: 23px;color: white;"><i class="fas fa-arrow-right"></i></button>
        
    <div id="offcanvas-push" uk-offcanvas="mode:push;overlay: true">

    <div class="uk-offcanvas-bar " style="background-color:#0088FF"  >

        <button class="uk-offcanvas-close" type="button" uk-close></button>

        <!-- ISI CANVAS -->
        
        <div class="menu-parent ">

                <h2 class="uk-text-bold uk-text-left uk-margin-small-left" style="color: white;">Dashboard</h2>

                <div class="menu-dashboard">
                <a href="{{ route('perusahaan.index') }}">
                <button class="uk-button uk-button-text ">
                <h4 class="uk-text-bold" style="color: white;text-align: left;"><img class="uk-margin-small-right" src="/ICON/icon1.png" alt="">Company Profile</h4></button></a>
                <a href="{{ route('informasiperusahaan.index') }}">
                <button class="uk-button uk-button-text ">
                <h4 class="uk-text-bold" style="color: white;text-align: left"><img class="uk-margin-small-right" src="/ICON/icon2.png" alt="">Informasi</h4></button></a>
                <a href="{{ route('buatmagangperusahaan.index') }}">
                <button class="uk-button uk-button-text">
                <h4 class="uk-text-bold" style="color: white;text-align: left"><img class="uk-margin-small-right" src="/ICON/icon3.png" alt="">Buat Magang</h4></button></a>
                <a href="{{ route('terhubungperusahaan.index') }}">
                <button class="uk-button uk-button-text">
                <h4 class="uk-text-bold" style="color: white;text-align: left"><img class="uk-margin-small-right" src="/ICON/icon4.png" alt="">Terhubung</h4></button></a>
                <a href="{{ route('keamananperusahaan.index') }}">
                <button class="uk-button uk-button-text">
                <h4 class="uk-text-bold" style="color: white;text-align: left"><img class="uk-margin-small-right" src="/ICON/icon5.png" alt="">Keamanan</h4></button></a>
                <a href="{{ route('bantuanperusahaan.index') }}">
                <button class="uk-button uk-button-text">
                <h4 class="uk-text-bold" style="color: white;text-align: left"><img class="uk-margin-small-right" src="/ICON/icon6.png" alt="">Bantuan</h4></button></a>
                <a onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                <button class="uk-button uk-button-text">
                <h4 class="uk-text-bold" style="color: white;text-align: left"><img class="uk-margin-small-right" src="/ICON/exit.png" alt="">Keluar</h4></button></a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                </div>    
                </div>

        <!-- END ISI CANVAS -->


    </div>
</div>
<!-- END BAGIAN SLIDER DASHBOARD -->

       

                <div class="menu-kanan uk-width-1-2">
                        
                        <h2 class="uk-text-bold">Bantuan</h2>

                        <h3 class="uk-text-bold">Cara mengganti foto sampul</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>

                        <h3 class="uk-text-bold">Cara mengganti foto profil</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>

                        
                </div>

    </div>
    @endif
    @endforeach

@endsection
    

@section('footer')

    <div class="uk-container-expand">

        <footer>
                <div class="footer uk-container uk-container-expand">
                    <div class="footer-isi uk-child-width-expand@s" uk-grid>
                    <div>
                        <ul>
                        <li class="uk-text-bold">Perusahaan</li>
                        <li>Beranda</li>
                        <li>Harga&Paket</li>
                    </ul>
                </div>
                    <div>
                        <ul>
                        <li class="uk-text-bold">Produk dan Layanan</li>
                        <li>Lowongan Kerja</li>
                        <li>Pembelajaran</li>
                        <li>Magang</li>
                    </ul>
                    </div>
                    <div>
                    <ul>
                        <li class="uk-text-bold">Bantuan</li>
                        <li>Hubungi Kami</li>
                        <li>FAQ</li>
                    </ul>
                    </div>
                    <div>
                    <ul>
                        <li class="uk-text-bold">Informasi Lainnya</li>
                        <li>Testimoni</li>
                    </ul>
                    </div>
                    <div>
                        <ul class="uk-align-center">
                        <li class="uk-text-bold">Temukan Kami di</li>
                        
                    </ul>
                        <img src="/ICON/facebook.png" alt="">
                        <img src="/ICON/google.png" alt="">
                        <img src="/ICON/twitter.png" alt="">

                    <form>

                            <div class="bahasa uk-margin">
                                <div  uk-form-custom="target: > * > span:first-child">
                                    <select>
                                        
                                        <option value="1">Indonesia</option>
                                        <option value="2">Inggris</option>
                                        <option value="3">Jepang</option>
                                        <option value="4">Korea</option>
                                    </select>
                                    <button class="uk-button uk-button-default" type="button" tabindex="-1">
                                        <span></span>
                                        <span uk-icon="icon: chevron-down"></span>
                                    </button>
                                </div>
                            </div>

                        </form>
                        </div>
            </div>
                </div>

        </footer>
</div>
@endsection