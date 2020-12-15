@extends('admin.index')
@section('content')

<div class="box">
  <div class="box-header">
      <h3 class="box-title">{{$title}}</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">


    {!! Form::open(['url' => aurl('students')]) !!}
        <div class="form-group">
            {!! Form::label('name' , 'Name' ) !!}
            {!! Form::text('name' ,old('name'),['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('course_name' , 'Course Name' ) !!}
            {!! Form::text('course_name' ,old('course_name'),['class' => 'form-control']) !!}
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
                ],old('status'),
                ['class' => 'form-control' , 'placeholder'=>'...']) !!}
        </div>

        <div class="form-group">
                {!! Form::label('completed' , 'Completed' ) !!}
                {!! Form::select('completed' ,
                [
                'course'   => 'Course',
                'diploma'   => 'Diploma'
                
                ],old('completed'),
                ['class' => 'form-control' , 'placeholder'=>'...']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('certificate_link' , 'Certificate Link' ) !!}
            {!! Form::text('certificate_link' ,old('certificate_link'),['class' => 'form-control']) !!}
        </div>

        {!! Form::submit(trans('admin.add') , ['class' => 'btn btn-primary']) !!}


    {!! Form::close() !!}

  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->


@endsection
