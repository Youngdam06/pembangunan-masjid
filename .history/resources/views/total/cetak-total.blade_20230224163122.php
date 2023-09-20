    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cetak Data Pertanggal</title>
    </head>
    <body>
        <div class="form-group">
            <p align="center"><b>Laporan Saldo Perminggu (Pemasukan)</b></p>
            <table class="static" align="center" rules="all" border="1px" style="width : 95%;" id="example">
                <h3>Saldo Akhir Jumat Lalu: 80.300.000</h3>
                <tr>
                    <th>No</th>
                    <th>Keterangan</th>
                    <th>Tanggal</th>
                    <th>Nominal</th>
                </tr>
                
                @foreach ($tot as $total)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $total->keterangan }}</td>
                    <td>{{ $total->tanggal }}</td>
                    <td>{{ $total->saldo }}</td>
                </tr>
                @endforeach
            </table>
            <h3> @currency ($tot->sum('saldo'))</h3>
        
        </div>
    </body>
{{-- <script>
        var minDate, maxDate;
    
    // Custom filtering function which will search data in column four between two values
    $.fn.dataTable.ext.search.push(
        function( settings, data, dataIndex ) {
            var min = minDate.val();
            var max = maxDate.val();
            var date = new Date( data[4] );
    
            if (
                ( min === null && max === null ) ||
                ( min === null && date <= max ) ||
                ( min <= date   && max === null ) ||
                ( min <= date   && date <= max )
            ) {
                return true;
            }
            return false;
        }
    );
    
    $(document).ready(function() {
        // Create date inputs
        minDate = new DateTime($('#min'), {
            format: 'MMMM Do YYYY'
        });
        maxDate = new DateTime($('#max'), {
            format: 'MMMM Do YYYY'
        });
    
        // DataTables initialisation
        var table = $('#example').DataTable();
    
        // Refilter the table
        $('#min, #max').on('change', function () {
            table.draw();
        });
    });
</script> --}}
</html>