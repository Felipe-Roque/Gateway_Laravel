@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding-right: 50px">
                @foreach($cameras as $camera)
                    <div class="col-md-6">
                        <div class="row">
                            <!-- Box Comment -->
                            <div class="box box-widget">
                                <div class="box-header with-border">
                                    <div class="user-block">
                                        <span class="username"><a href="#">{!! $camera->name !!}</a></span>
                                        <span class="description">Foto tirada em {{ $camera->images()->orderBy('captured_at', 'asc')->get()->first()['captured_at'] }}</span>
                                    </div>
                                    <!-- /.user-block -->
                                    <div class="box-tools">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                                    class="fa fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                                    class="fa fa-times"></i></button>
                                    </div>
                                    <!-- /.box-tools -->
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <img class="img-responsive pad" src="{{$camera->images()->orderBy('captured_at', 'asc')->get()->first()['full_file_path']}}" alt="Photo">
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                        <!-- /.box -->
                    </div>
                @endforeach
            </div>

            <div class="col-md-12" style="padding-right: 50px">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Dispositivos</h3>
                                <div class="box-tools">
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body table-responsive">
                                @include('device-table')
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>

            </div>
        </div>


    </div>
@endsection
