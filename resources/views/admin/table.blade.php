@extends('layout.admin-master')

@section('content')
<div class="page-content">
  	<div class="content container" style="min-height:515px;">
		<div class="row">
            <div class="col-md-10 col-md-offset-1">
          <div class="widget">
            <div class="widget-header"> <i class="icon-eye-open"></i>
              <h3>View All Playlist</h3>
            </div>
            <div class="widget-content">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>PlayList Id</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($records as $record)
                  <tr>
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->name }}</td>
                    <td>{{ $record->playlist_id }}</td>
                    <td>
                      <a href="{{url('delete/'.$record->id)}}" class="btn btn-danger"><i class="icon-trash"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>    
        </div>
    </div>
</div>

@endsection