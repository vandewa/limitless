<div>
    <div class="row">
        <div class="col-md-6">
            <div class="card" style="height: 70vh">
                <div class="card-header">
                    <h6 class="card-title">Data Ekraf {{ '(' . $jml_subsektor . ')' }}</h6>
                </div>

                <div class="card-body">
                    <livewire:livewire-pie-chart key="{{ $pieChartModel->reactiveKey() }}" :pie-chart-model="$pieChartModel" />
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card" style="height: 70vh">
                <div class="card-header">
                    <h6 class="card-title">Data Usaha Pariwisata {{ '(' . $jml_uspar . ')' }}</h6>
                </div>

                <div class="card-body">
                    <livewire:livewire-pie-chart key="{{ $pieChartModel2->reactiveKey() }}" :pie-chart-model="$pieChartModel2" />
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="height: 40vh">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title">
                        Total Kunjungan Destinasi Wisata Tahun {{ $tahun??date('Y') }}
                        <span class="d-block font-size-base"></span>
                    </h6>
                    <div class="header-elements">
                        <select name="" id="" class="form-control" wire:model.live='tahun'>
                            @foreach ($listTahun as $item )
                            <option value="{{ $item['tahun'] }}">{{ $item['tahun']  }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="card-body">
                    <livewire:livewire-column-chart
                    key="{{ $columnChartModel->reactiveKey() }}"
                    :column-chart-model="$columnChartModel"
                />
                </div>
            </div>
        </div>
    </div>
</div>
