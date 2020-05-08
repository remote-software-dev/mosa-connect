@extends('layouts.app')
@section('content')
<main>
    <div class="main-section">
        <div class="container">
            <div class="main-section-data">
                <div class="row">

                    <div class="col-lg-9 col-md-8 no-pd">
                        <div class="main-ws-sec">
                            <div class="post-topbar">
                                <div class="posts-section">
                                    <div class="post-bar" style="border:none;">
                                        <div class="post_topbar">
                                            <div class="usy-dt">
                                                <div class="usy-name">
                                                    <span><img src="{{asset('mosaconnect/images/clock.png')}}" alt="">3 min ago</span>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- https://hdtuto.com/article/laravel-57-image-upload-with-validation-example -->
                                        <form action="{{ route('/profile-store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="job_descp">
                                                <ul>
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Nama</td>
                                                                    <td>
                                                                        <input type="text" class="form-control" name="name" 
                                                                        placeholder="">
                                                                    </td>

                                                                </tr>

                                                                <tr>
                                                                    <td>Tanggal Lahir</td>
                                                                    <td>
                                                                        <input type="text" class="form-control" id="dob" name="dob">
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td>Pekerjaan</td>
                                                                    <td>
                                                                        <input type="text" class="form-control" name="occupation" placeholder="">
                                                                    </td>

                                                                </tr>


                                                                <tr>
                                                                    <td>Edit Foto</td>
                                                                    <td>
                                                                        <input type="file" name="pic">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>


                                                        <button type="submit" class="btn btn-success">Simpan</button>
                                                        <button type="submit" class="btn btn-danger">Batal</button>
                                                </ul>
                                            </div>

                                     
                                        </form>


                                    </div>
                                    <!--post-bar end-->




                                </div>
                                <!--post-bar end-->

                            </div>
                            <!--posts-section end-->
                        </div>
                        <!--post-topbar end-->

                    </div>
                    <!--main-ws-sec end-->
                </div>

            </div>
        </div><!-- main-section-data end-->
    </div>
    </div>
</main>
@endsection