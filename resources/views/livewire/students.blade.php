<div>



    @if (session()->has('message'))

        <div class="alert alert-success">

            {{ session('message') }}

        </div>

    @endif



    @if($updateMode)

        @include('livewire.update')

    @else

        @include('livewire.create')

    @endif



    <table class="table table-bordered mt-5">

        <thead>

        <tr>

            <th>No.</th>

            <th>Name</th>

            <th>Email</th>

            <th>Class</th>

            <th>Subject</th>



            <th width="150px">Action</th>

        </tr>

        </thead>

        <tbody>

        @foreach($students as $student)

            <tr>

                <td>{{ $student->id }}</td>

                <td>{{ $student->name }}</td>

                <td>{{ $student->email }}</td>

                <td>{{ $student->class }}</td>

                <td>{{ $student->subject }}</td>

                <td>

                    <button wire:click="edit({{ $student->id }})" class="btn btn-primary btn-sm">Edit</button>

                    <button wire:click="delete({{ $student->id }})" class="btn btn-danger btn-sm">Delete</button>

                </td>

            </tr>

        @endforeach

        </tbody>

    </table>

</div>
