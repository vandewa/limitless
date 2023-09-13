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

            <div class="card">
                <div class="card-header">
                    <h6 class="card-title">
                        Chart Total Kunjungan Perbulan
                        <span class="d-block font-size-base">With block subtitle</span>
                    </h6>
                </div>

                <div class="card-body">
                    Basic card with block header subtitle
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
</div>
