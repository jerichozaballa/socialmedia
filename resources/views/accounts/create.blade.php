<div class="row">
<div class="col-sm-5">
<a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#createPost">
<span class="fa fa-plus-circle float-left" style="font-size:50px; color:#3366ff"></span>
<h2 style="padding-top:10px"> &nbsp&nbspCreate Post</h2></a>
</div>
</div>

<!-- The Modal -->
  <div class="modal fade" id="createPost">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style="background-color:#e6e6e6">
          <h4 class="modal-title"><b>Create Status</b></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
         <form action="{{ route('accounts.store') }}" method="POST">
        <!-- Modal body -->
        <div class="modal-body">
            <div class="form-group">
            <textarea class="txtpost form-control" rows="3" id="post" name="post" placeholder="What do you want to share?" required>{{old('post')}}</textarea>
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
        



