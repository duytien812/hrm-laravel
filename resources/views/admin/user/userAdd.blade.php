{{-- Modal add --}}
<div id="userModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

		{{-- Modal content --}}
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Add user</h4>
			</div>
			<div class="modal-body">
				<div class="container-fluid mt-2">
					<form>
						<div class="form-group">
							<label class="col-md-4">User name</label>
							<input type="text" name="userName" 
							required minlength="3" maxlength="32" pattern="^[a-zA-Z0-9_.-]*$">
						</div>
						<div class="form-group">
							<label class="col-md-4">Email</label>
							<input type="email" name="email" 
							required data-error="nhập email sai định dạng">
						</div>
						<div class="form-group">
							<label class="col-md-4">Password</label>
							<input id="password" class="form-control" type="password" name="password"
							required minlength="6" maxlength="32">
						</div>
						<div class="form-group">
							<label class="col-md-4">Confirm password</label>
							<input id="password2" class="form-control" type="password" name="confirmPassword" 
							required data-match="#password123" data-match-error="Whoops, these don't match">
						</div>
						<div class="form-group">
							<label class="col-md-4">Level</label>
							<select>
								<option>Admin</option>
								<option>Leader</option>
							</select>
						</div>
						<div class="form-group pull-right">
							<input class="btn btn-info" type="submit" name="">
							<button class="btn btn-default" data-dismiss="modal">Cancel</button>
						</div>
					</form>
				</div>
			</div>
			<div class="modal-footer"></div>
		</div>
	</div>
</div>
{{-- End Modal add --}}
