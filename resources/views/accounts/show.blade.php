    
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal{{ $account->id }}">View</button>
<!-- The Modal -->
  <div class="modal fade" id="myModal{{ $account->id }}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" style="text-align:left;">
        <img src="\storage\images\j.png" class="rounded-circle float-left" alt="" width="65" height="60">
        <br>
        <h5 style="padding-bottom:10px;"> &nbsp&nbsp&nbsp {{ $user->first }} {{ $user->last }}</h5>
        <hr>
            <p style="font-size:20px;">{{ $account->post }}</p>
            <br>
            <?php
                $dateposted = $account->updated_at;
                $dateposted=date_create($dateposted);
                $dateposted=date_format($dateposted,"F d, Y H:i A");
            ?>
            <span style="font-size:12px;">{{ $dateposted }}</span>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>



