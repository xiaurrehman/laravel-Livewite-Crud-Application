<form>

    <div class="form-group">

        <label for="name">Name:</label>

        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title" wire:model="name">

        @error('name') <span class="text-danger">{{ $message }}</span>@enderror

    </div>

    <div class="form-group">

        <label for="exampleFormControlInput1">Email:</label>

        <input type="email" class="form-control" id="email" placeholder="example@email.com" wire:model="email">

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


{{--    <div class="form-group">--}}

{{--        <label for="exampleFormControlInput2">Body:</label>--}}

{{--        <textarea type="email" class="form-control" id="exampleFormControlInput2" wire:model="body" placeholder="Enter Body"></textarea>--}}

{{--        @error('body') <span class="text-danger">{{ $message }}</span>@enderror--}}

{{--    </div>--}}

    <button wire:click.prevent="store()" class="btn btn-success">Save</button>

</form>
