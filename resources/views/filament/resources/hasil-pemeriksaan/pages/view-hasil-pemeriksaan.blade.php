{{-- resources/views/filament/resources/hasil-pemeriksaan/pages/view-hasil-pemeriksaan.blade.php --}}
<x-filament::page>
    <h1 class="text-2xl font-bold mb-4">Detail Pemeriksaan</h1>

    <div class="space-y-2">
        <p><strong>Nama Pasien:</strong> {{ $record->pasien->nama ?? '-' }}</p>
        <p><strong>Tanggal Daftar:</strong> {{ $record->tanggal_daftar ?? '-' }}</p>
        <p><strong>Vital Sign:</strong> 
        <table width="100%" border="1" style="border: 1px solid black">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tekanan Darah</th>
                    <th>Berat Badan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($record->vitalSign as $key => $item)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$item->tekanan_darah}}</td>
                        <td>{{$item->berat_badan}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </p>
        <p><strong>Tindakan:</strong> 
        <table width="100%" border="1" style="border: 1px solid black">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Keluhan</th>
                    <th>Diagnosa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($record->tindakan as $key => $item)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$item->keluhan}}</td>
                        <td>{{$item->hasil_diagnosa}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </p>
        <p><strong>Resep Obat:</strong> 
        <table width="100%" border="1" style="border: 1px solid black">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Obat</th>
                    <th>Jumlah</th>
                    <th>Aturan Pakai</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($record->resepObat as $key => $item)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$item->obat->nama_obat}}</td>
                        <td>{{$item->jumlah}}</td>
                        <td>{{$item->aturan_pakai}}</td>
                        <td>{{$item->keterangan}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </p>
    </div>
</x-filament::page>
