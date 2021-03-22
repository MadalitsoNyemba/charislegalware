<div>
<div class="card" style="padding:10px">
              <div class="row">
                <div class="col-md-3">
                  <input wire:model.lazy="activity_name" type="text" class="form-control" placeholder="Add Activity">
                </div>
                <div class="col-md-3">
                  <select class="form-control">
                   <option value="">Select Case</option> 
                  </select>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-2">
                <p style="font-size:25px">00:00</p>
                
                </div>
              
                <!-- <div class="col-md-2">
                <label for="isBillable">Billable
                <input type="checkbox" class="form-control" id="customSwitch1">
                </label>
                </div> -->
               

                <div class="col-md-3">
                  <div class="input-group-append">
                  @if($showStart)
                    <button id="add-new-event" wire:click="addActivity()" type="button" class="btn btn-block btn-primary">Start Timer</button>
                @else
                    <button id="add-new-event" wire:click="stopActvity()" type="button" class="btn btn-block btn-danger">Stop Timer</button>
                @endif
                  </div>
                </div>
              </div>
            </div>


  
</div>
