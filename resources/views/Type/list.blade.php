<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
</head>

<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">List Type</h4>
                </div>

                <div class="card-content">
                    <a href="{{ route('types_create') }}" class="btn btn-primary"
                        style="display:block;float:right;margin:16px;">Add Type</a>&nbsp;

                    <div class="row justify-content-end">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="form-group">
                            </div>

                        </div>
                        <div class="table-responsive">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-primary alert-block text-white" id="primary-alert">
                                <strong class="validation_message">{{ $message }}</strong>
                            </div>
                            @endif
                            <table class="table  zero-configuration table-striped table-hover table-bordered"
                                id="example">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>first name</th>
                                        <th>last name</th>
                                        <th>email</th>
                                        <th>mobile number</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $count = 1;
                                    @endphp

                                    @if(isset($types) && !empty($types))
                                    @foreach ($types as $item)

                                    <tr>
                                        <td>{{ $count }}</td>
                                        <td>{{ $item->first_name }}</td>
                                        <td>{{ $item->last_name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->mobile_number }}</td>

                                        <td>
                                            <a href="{{ route('edit_types',[$item->id]) }}">
                                                <button type="button" class="btn btn-success">Edit</button></a>

                                            <a href="{{ route('delete_types',[$item->id]) }}"><button type="button"
                                                    class="btn btn-danger">Delete</button></a>

                                        </td>
                                    </tr>
                                    @php
                                    $count++
                                    @endphp
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<script>
$(document).ready(function() {

    $('#example').DataTable();
})
</script>
<script>
$(document).ready(function() {
    $("#examplea").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#example tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
</script>