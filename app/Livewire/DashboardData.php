<?php

namespace App\Livewire;

use Livewire\Component;
use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use App\Models\Subsektor;

class DashboardData extends Component
{
    public $color;
    public $firstRun = true;
    public $showDataLabels = true;

    public function render()
    {
        $subsektor = Subsektor::withCount('ekraf')->get();
        $this->color = $subsektor;
        $pieChartModel = $subsektor
        ->reduce(function ($pieChartModel, $data) {
            $type = $data->nama_subsektor;
            $value = $data->ekraf_count;
            $warna = $data->color;
            // dd($data->color);

            return $pieChartModel->addSlice($type, $value, $warna);
        }, LivewireCharts::pieChartModel()
        //->setTitle('Expenses by Type')
        ->setAnimated($this->firstRun)
        ->setTitle('Jumlah Berdasarkan Subsektor Ekraf')
        ->setType('pie')
        ->setOpacity(100)
        ->withOnSliceClickEvent('onSliceClick')
        //->withoutLegend()
        ->legendPositionBottom()
        ->legendHorizontallyAlignedCenter()
        ->setDataLabelsEnabled($this->showDataLabels)
        // ->setColors(['#b01a1b', '#d41b2c', '#ec3c3b', '#f66665'])
    );

        return view('livewire.dashboard-data')  ->with([
            'pieChartModel' => $pieChartModel,
            'subsektor' => $subsektor]);
    }
}
