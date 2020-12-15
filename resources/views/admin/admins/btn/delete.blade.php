<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash"></i></a></button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title"><b>{{ trans('admin.warning') }}</b></h3>
      </div>
      {!! Form::open(['route' => ['admin.destroy',$id] , 'method' => 'delete' ]) !!}
      <div class="modal-body">
        <b class="alert alert-danger">{{ trans('admin.delete_record' , ['name' => $name ]) }}</b>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('admin.close') }}</button>
      {!! Form::submit(trans('admin.yes') , ['class' => 'btn btn-danger']) !!}
      </div>
      {!! Form::close() !!}
    </div>

  </div>
</div>