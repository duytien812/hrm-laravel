{{-- Modal view --}}
<div id="userModalView" class="modal fade" role="dialog">
	<div class="modal-dialog">

		{{-- content --}}
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Add user</h4>
			</div>
			<div class="modal-body">
				<div class="container-fluid mt-2">
					<table id="tableModelView">
					</table>
				</div>
			</div>
			<div class="modal-footer"></div>
		</div>
	</div>
</div>

@section('script')
<script type="text/javascript">
	var idUserView = 0
	function modalView(idUserView)
	{
		$.get("admin/user/view/" + idUserView, function(data){
			console.log(data);
			$("#tableModelView").html(data);
		})
	}
</script>
@endsection
