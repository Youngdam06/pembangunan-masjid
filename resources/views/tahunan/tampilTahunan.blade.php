<h3 class="text-center">Data Keuangan Per Tahun {{ $tahun }}</h3>

<table class="table table-bordered">             
    <tr>
        <th class="align-middle text-center text-sm">Tanggal</th>
        <th class="align-middle text-center text-sm">Pemasukan</th>
        <th class="align-middle text-center text-sm">Pengeluaran</th>
      </tr>
   
    <tbody>
        @foreach ($pemasukan as $p)
            <tr>
                <td class="align-middle text-center text-sm">{{ date('d M Y', strtotime($p->tanggal)) }}</td>
                <td class="align-middle text-center text-sm">@currency($p->saldo)</td>
                <td class="align-middle text-center text-sm"></td>
            </tr>
            @foreach ($p->pengeluaran as $pe)
                <tr>
                    <td class="align-middle text-center text-sm"></td>
                    <td class="align-middle text-center text-sm"></td>
                    <td class="align-middle text-center text-sm">@currency ($pe->nominal)</td>
                </tr>
            @endforeach
        @endforeach
     
        @foreach ($pengeluaran as $pe)
        
            <tr>
                <td class="align-middle text-center text-sm">{{ date('d M Y', strtotime ($pe->tanggal)) }}</td>
                <td class="align-middle text-center text-sm"></td>
                <td class="align-middle text-center text-sm">@currency($pe->nominal)</td>
            </tr>
            @foreach ($pe->pemasukan as $p)
                <tr>
                    <td class="align-middle text-center text-sm"></td>
                    <td class="align-middle text-center text-sm"s>@currency($p->saldo)</td>
                    <td class="align-middle text-center text-sm"></td>
                </tr>
            @endforeach
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td class="align-middle text-center text-sm"><strong><h6>Total</h6></strong></td>
            <td class="align-middle text-center text-sm"><strong><h6>@currency ($total_masuk)</h6></strong></td>
            <td class="align-middle text-center text-sm"><strong><h6>@currency ($total_keluar)</h6></strong></td>
        </tr>
    </tfoot>
</table>

<h6 class="text-center">Saldo akhir tahun: @currency ($total_saldo_akhir)</h6>