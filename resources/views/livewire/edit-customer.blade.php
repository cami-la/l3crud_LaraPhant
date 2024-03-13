<div class="card offset-3 col-6">
    <div class="card-header">
      Edit Customer
    </div>
    <div class="card-body">
      <form wire:submit="updateCustomer">
        <div class="mb-3">
          <label for="exampleInputName" class="form-label">Name</label>
          <input wire:model="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div>
          @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input wire:model="email" type="email" class="form-control" id="exampleInputEmail1"
            aria-describedby="emailHelp">
        </div>
        <div>
          @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPhoneNumber" class="form-label">Phone</label>
          <input wire:model="phone" type="text" class="form-control" id="exampleInputPhone">
        </div>
        <div>
          @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button wire:navigate href="/customers" class="btn btn-secondary btn-sm">Back</button>
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
      </form>
    </div>
  </div>