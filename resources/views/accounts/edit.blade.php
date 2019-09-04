    
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModaledit{{ $account->id }}">Edit</button>

<!-- The Modal -->
  <div class="modal fade" id="myModaledit{{ $account->id }}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style="background-color:#e6e6e6">
          <h4 class="modal-title"><b>Update Status</b></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form action="{{ route('accounts.update', ['account' => $account]) }}" method="POST">
            @method('PATCH')
        <!-- Modal body -->
        <div class="modal-body">
            <div class="form-group">
            <textarea class="txtpost form-control" rows="2" id="post" name="post" >{{old('post') ?? $account->post }}</textarea>
            <div>{{ $errors->first('post') }}</div>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer" style="background-color:#e6e6e6">
            @csrf
            <button type="submit" class="btn" style="background-color:#3b5999; color:#fff">Post</button>
        </div>
        </form>
      </div>
    </div>
  </div>


