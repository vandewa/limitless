<div>
    <div class="row">
        <div class="col-md-6">
            <div class="card" style="height: 40vh">
                <div class="card-header">
                    <h6 class="card-title">Data Ekraf</h6>
                </div>

                <div class="card-body">
                    <livewire:livewire-pie-chart
                    key="{{ $pieChartModel->reactiveKey() }}"
                    :pie-chart-model="$pieChartModel"
                />
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h6 class="card-title">Data Usaha Pariwisata <span class="font-size-base ml-2">With inline subtitle</span></h6>
                </div>

                <div class="card-body">

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
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title">Card controls</h6>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    Basic card with card controls
                </div>
            </div>

            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title">Card controls <span class="font-size-base ml-2">and inline subtitle</span></h6>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    Card with inline header subtitle and card controls
                </div>
            </div>

            <div class="card">
                <div class="card-header header-elements-inline">
                    <h6 class="card-title">
                        Card controls
                        <span class="d-block font-size-base">and block subtitle</span>
                    </h6>

                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    Card with block header subtitle and card controls
                </div>
            </div>
        </div>
    </div>
</div>
