<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

<style>
.content-body {
    /* width: 97px; */
    margin-left: 171px;
    margin-top: 40px;
    margin-right: 406px;
}
</style>

<div class="content-body">
    <section id="basic-vertical-layouts">
        <div class="card-content">
            <div class="card-body">
                <div class="card-header">
                    <h4 class="card-title">Add Type</h4>
                </div>
                <br>
                <form action="@if(isset($types)) {{ route('update_types') }} @else {{ route('save_types') }}  @endif"
                    method="post" enctype="multipart/form-data">
                    @csrf
                    @if (isset($types))
                    <input type="hidden" name="types_id" value="{{ $types->id }}">
                    @endif

                    <div class="form-group">
                        <label for="first_name">first name</label>
                        <input type="text" class="form-control" name="first_name" id="name"
                            value="@if(isset($types) && isset($types->first_name)) {{ $types->first_name }} @endif">

                        <span class="text-danger">
                            @error('first_name')
                            {{ $message }}
                            @enderror
                        </span>

                    </div>
                    <div class="form-group">
                        <label for="last_name">last name</label>
                        <input type="text" class="form-control" name="last_name" id="last_name"
                            value="@if(isset($types) && isset($types->last_name)) {{ $types->last_name }} @endif">

                        <span class="text-danger">
                            @error('last_name')
                            {{ $message }}
                            @enderror
                        </span>

                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" class="form-control" name="email" id="email"
                            value="@if(isset($types) && isset($types->email)) {{ $types->email }} @endif">

                        <span class="text-danger">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </span>

                    </div>
                    <div class="form-group">
                        <label for="mobile_number">mobile_number</label>
                        <input type="text" class="form-control" name="mobile_number" id="mobile_number"
                            value="@if(isset($types) && isset($types->mobile_number)) {{ $types->mobile_number }} @endif">

                        <span class="text-danger">
                            @error('mobile_number')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Save">

                </form>
            </div>
        </div>
</div>
</div>