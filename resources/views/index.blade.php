@extends('layout/main')

@section('Title', 'Ini Halaman Utama')



@section('container')
{{-- Home --}}
<div class="jumbotron jumbotron-fluid">
    <div id="carouselExampleFade" class="carousel slide carousel-fade cc" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/yogas/baner1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/yogas/banner2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/yogas/banner3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="container">
    <div class="row por">
        <div class="col-lg-11 mx-auto">
            <div class="kotak">
                <div class="row">
                    <div class="col">
                        <h5 class="text-center">Biodata</h5>
                        <div class="row">
                            <div class="col pp">
                                <p>5520117030</p>
                                <p>Yogas Bastian M</p>
                                <p>Fakultas Teknik</p>
                                <p>Prodi Informatika</p>
                                <p>Kelas C</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h5 class="text-center">Riwayat Pendidikan</h5>
                        <div class="row">
                            {{-- <div class="col">
                                <img src="/img/latip.jpg" class="prof" width="100" alt="">
                            </div> --}}
                            <div class="col pp">
                                <table>
                                    <tr>
                                        <td><p>SD</p></td>
                                        <td><p>:</p></td>
                                        <td><p>SDN Ibu Dewi 4</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>SLTP</p></td>
                                        <td><p>:</p></td>
                                        <td><p>SMPN 1 Pam-Bar</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>SLTA</p></td>
                                        <td><p>:</p></td>
                                        <td><p>SMAN 1 Cilaku-Cianjur</p></td>

                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><p>Jurusan IPA</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Perguruan Tinggi</p></td>
                                        <td><p>:</p></td>
                                        <td><p>Universitas Suryakancana</p></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><p>Fakultas Teknik</p></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><p>Prodi Informatika</p></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end Home --}}

{{-- Picture --}}
{{-- end Picture --}}

{{-- Profil --}}
{{-- end Profil --}}
@endsection
