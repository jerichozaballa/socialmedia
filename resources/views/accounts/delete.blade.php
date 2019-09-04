
	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#DeleteModal{{ $account->id }}"><i class="fa fa-trash"></i> Delete</button>

<!-- The Modal -->
<div class="modal fade text-danger" id="DeleteModal{{ $account->id }}" >
<div class="modal-dialog ">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header bg-danger">
            <h4 class="modal-title" style="color:#fff">DELETE CONFIRMATION</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <p class="text-center">Are You Sure Want To Delete ?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
          	<form action="{{ route('accounts.destroy', ['account' => $account]) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Yes, Delete</button>
            </form>
        </div>
    </div>
</div>
</div>