@extends('admin.index')
@section('content')

<div class="box">
  <div class="box-header">
      <h3 class="box-title">{{$title}}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">

    {!! Form::open(['route' => ['students.update' , $std->id] , 'method' => 'put']) !!}
    <div class="form-group">
            {!! Form::label('name' , trans('admin.name')) !!}
            {!! Form::text('name' ,$std->name,['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('course_name' , 'Course Name' ) !!}
            {!! Form::text('course_name' ,$std->course_name,['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
                {!! Form::label('status' , 'Status' ) !!}
                {!! Form::select('status' ,
                [
                'accepted'   => 'accepted',
                'rejected'   => 'rejected',
                'pending'    => 'pending',
                'review'     => 'review',
                'processing' => 'processing',
                ],$std->status,
                ['class' => 'form-control' , 'placeholder'=>'...']) !!}
        </div>

        <div class="form-group">
                {!! Form::label('completed' , 'Completed' ) !!}
                {!! Form::select('completed' ,
                [
                'course'   => 'Course' ,
                'diploma'   => 'Diploma'
                
                ],$std->completed,
                ['class' => 'form-control' , 'placeholder'=>'...']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('certificate_link' , 'Certificate Link' ) !!}
            {!! Form::text('certificate_link' ,$std->certificate_link,['class' => 'form-control']) !!}
        </div>

        {!! Form::submit(trans('admin.save') , ['class' => 'btn btn-primary']) !!}


    {!! Form::close() !!}

  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->


@endsection
