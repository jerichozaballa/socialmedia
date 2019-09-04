@extends('layouts.app')

@section('content')           

<div class="row">
<div class="col-sm-1">
</div>
<div class="col-sm-10">
   <br>
    
    
        <br>
        
        @include('accounts.create')

   <br>
   <div class="card bx">
    <div class="card-header bg-secondary"><h5 style="color:#fff">Previous Post:</h5></div>
    <div class="card-body">
        <table class="table table-hover">
        <thead>
          <tr>
            <th>Date Posted</th>
            <th><center>Action</center></th>
          </tr>
        </thead>
        <tbody>
        @foreach($accounts as $account)
          <tr>
            <td>
            <?php
                $dateposted = $account->updated_at;
                $dateposted=date_create($dateposted);
                $dateposted=date_format($dateposted,"F d, Y H:i A");
            ?>
            {{ $dateposted }}</td>
            <td>
            <center>
                @include('accounts.show')
                @include('accounts.edit')
                @include('accounts.delete')

            </center>
            </td>
          </tr>
        @endforeach
        </tbody>
        </table>
    </div>
  </div>  
   <br>
</div>
<div class="col-sm-1">
</div>

</div>
@endsection

@section('scripts')
<script type="text/javascript">

</script>
@endsection