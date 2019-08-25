@extends('admin.layout.index')
@section('content')

<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">User
					<small>List</small>
				</h1>
			</div>
			<!-- /.col-lg-12 -->
			<button class="btn btn-info btn-lg" data-toggle="modal" data-target="#userModal">Add user</button>
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
				<thead>
					<tr align="center">
						<th>ID</th>
						<th>Username</th>
						<th>Email</th>
						<th>Level</th>
						<th>View detail</th>
						<th>Delete</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($user as $u)
					<tr class="odd gradeX" align="center">
						<?php $number++ ?>
						<input type="hidden" id="idUserView" name="" value="{{ $u->id }}"></input>
						<td>{{ $number }}</td>
						<td>{{ $u->user_name }}</td>
						<td>{{ $u->email }}</td>
						@switch($u->user_level)
						@case(1)
						<td>{{ 'Admin' }}</td>
						@break
						@case(2)
						<td>{{ 'Leader' }}</td>
						@break
						@case(3)
						<td>{{ 'Employee' }}</td>
						@break

						@default

						@endswitch
						<td class="center"><button onclick="modalView({{ $u->id }})" class="btn btn-info" data-toggle="modal" data-target="#userModalView">View</button></td>
						<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
						<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>

			{{-- All modal --}}
			@include('admin.user.userView')
			@include('admin.user.userAdd')


		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

@endsection

