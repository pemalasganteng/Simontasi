@extends('layouts.admin')

@section('content')


        
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                    <form action="{{route('bimbingan_up_dosen', $data->id)}}" method="post" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                        <h4 class="header-title">Revisi  </h4>
                                        
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Revisi</label>
                                            <input class="form-control" type="text" name="revisi" id="example-text-input">
                                        </div>
                                        <input type="hidden" name="_method" value="PUT">
                                        <button type="submit" class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#exampleModal">Setujui</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- main content area end -->
        

@endsection