<form>

    <input type="hidden" wire:model="student_id">

    <div class="form-group">

        <label for="name">Name:</label>

        <input type="text" class="form-control" id="name" placeholder="Enter Name" wire:model="name">

        @error('name') <span class="text-danger">{{ $message }}</span>@enderror

    </div>

    <div class="form-group">

        <label for="email">Email:</label>

        <input type="email" class="form-control" id="email" wire:model="email" placeholder="example@gmail.com">

        @error('email') <span class="text-danger">{{ $message }}</span>@enderror

    </div>

    <div class="form-group">

        <label for="class">Class:</label>

        <input type="text" class="form-control" id="class" placeholder="Enter Subject" wire:model="class">

        @error('class') <span class="text-danger">{{ $message }}</span>@enderror

    </div>

    <div class="form-group">

        <label for="subject">Subject:</label>

        <input type="text" class="form-control" id="subject" placeholder="Enter Subject" wire:model="subject">

        @error('subject') <span class="text-danger">{{ $message }}</span>@enderror

    </div>

    <button wire:click.prevent="update()" class="btn btn-dark">Update</button>

    <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>

</form>
