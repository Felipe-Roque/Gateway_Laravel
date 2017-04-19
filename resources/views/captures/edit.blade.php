@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Capture
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($capture, ['route' => ['captures.update', $capture->id], 'method' => 'patch']) !!}

                        @include('captures.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection