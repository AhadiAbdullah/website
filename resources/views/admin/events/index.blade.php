@extends('admin.master')
@section('content')

<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>News List</h2>
            <ul class="nav navbar-right ">
               <a href="{{route('event.create')}}" class="btn btn-sm btn-success">New</a>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table id="example" class="table table-striped  jambo_table">
                <thead>
                    <tr class="headings">
                       
                        <th># </th>
                        <th>Title </th>
                        <th>Details</th>
                        <th>Location</th>
                        <th>Date</th>
                        <th>Image </th>
                        <th>Social Link </th>
                        <th>Edit </th>
                        <th>Delete</span>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i = 0;?>
                @foreach($events as $event)
                    <tr>
                       
                        <td>{{++$i}}</td>
                        <td>{{$event->title}}</td>
                        <td>{{\Illuminate\Support\Str::limit($event->detail, $limit = 100, $end = ' ...')}}</td>
                        <td>{{$event->location}}</td>
                        <td>{{date('d-m-Y', strtotime($event->date))}}</td>
                        <td>
                            <img src="{{asset('assets/events/'.$event->image)}}" width="50px" height="50px">
                        </td>
                        <td>{{$event->social_link}}</td>

                        <td><a href="{{ route('event.edit', $event->id) }}" class="btn btn-success btn-sm">Edit</a></td>
                        <td><a onclick="return confirm('Are you sure you want to delete this item?');" href="{{ route('event.delete', $event->id) }}" class="btn btn-danger btn-sm">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>

</div>
@section('scripts')
<!-- Datatables -->
<script src="{{asset('admin/js/datatables/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('admin/js/datatables/tools/js/dataTables.tableTools.js')}}"></script>
<script>
  

    var asInitVals = new Array();
    $(document).ready(function () {
        var oTable = $('#example').dataTable({
            "oLanguage": {
                "sSearch": "Search all columns:"
            },
            "aoColumnDefs": [
                {
                    'bSortable': false,
                    'aTargets': [0]
                } //disables sorting for column one
    ],
            'iDisplayLength': 12,
            "sPaginationType": "full_numbers",
            "dom": 'T<"clear">lfrtip',
            "tableTools": {
               
            }
        });
        $("tfoot input").keyup(function () {
            /* Filter on the column based on the index of this element's parent <th> */
            oTable.fnFilter(this.value, $("tfoot th").index($(this).parent()));
        });
        $("tfoot input").each(function (i) {
            asInitVals[i] = this.value;
        });
        $("tfoot input").focus(function () {
            if (this.className == "search_init") {
                this.className = "";
                this.value = "";
            }
        });
      
    });
</script>
@endsection
          
@endsection