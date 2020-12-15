@extends('admin.index')
@section('content')

<div class="box">
  <div class="box-header">
      <h3 class="box-title">{{$title}}</h3>
  </div>

   <!-- /.box -->

   <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed">
                <tr>
                  
                  <th>Name</th>
                  <th>Email</th>
                  <th>Edit</th>
                  
                </tr>

                <tr>
                  <td>{{ $admin->name }}</td>
                  <td>{{ $admin->email }}</td>
                  <td>
                         <a href="{{aurl('admin/'.$admin->id.'/edit')}}" class="btn btn-info"><i class="fa fa-edit"></i></a>

                  </td>

                </tr>
              
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
  
</div>


@endsection
