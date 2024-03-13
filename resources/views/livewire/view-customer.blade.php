<div class="card offset-3 col-6">
    <div class="card-header">
      View Customer
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$customer->name}}</h5>
      <p class="card-text">{{$customer->email}}</p>
      <p class="card-text">{{$customer->phone}}</p>
      <button wire:navigate href="/customers" class="btn btn-primary">Back</button>
    </div>
  </div>