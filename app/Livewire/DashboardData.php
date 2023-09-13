<?php

namespace App\Livewire;

use App\Models\MasterDataUsahaPariwisata;
use Livewire\Component;
use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use App\Models\Subsektor;

class DashboardData extends Component
{
    public $color;
    public $firstRun = true;
    public $showDataLabels = true;
    public $colors = [
        "#FF0000",
        // Merah
        "#00FF00",
        // Hijau
        "#0000FF",
        // Biru
        "#00FFFF",
        // Cyan
        "#FF00FF",
        // Magenta
        "#FFFF00",
        // Kuning
        "#000000",
        // Hitam
        "#FFFFFF",
        // Putih
        "#FFA500",
        // Oranye
        "#FFC0CB",
        // Merah Muda
        "#800080",
        // Ungu
        "#A52A2A",
        // Coklat
        "#808080",
        // Abu-abu
        "#D3D3D3",
        // Abu-abu Terang
        "#008000",
        // Hijau Lumut
        "#008080",
        // Biru Kehijauan
        "#800000" // Maroon
    ];

    protected $index = -1;

    public function render()
    {
        $subsektor = Subsektor::withCount('ekraf')->get();
        $this->color = $subsektor;
        $pieChartModel = $subsektor
            ->reduce(
                function ($pieChartModel, $data) {
                    $type = $data->nama_subsektor;
                    $value = $data->ekraf_count;
                    $warna = $data->color;
                    // dd($data->ekraf_count);
        
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

        $jml_subsektor = Subsektor::count();
        $jml_uspar = MasterDataUsahaPariwisata::count();

        $usaha_pariwisata = MasterDataUsahaPariwisata::withCount('usahaPar')->get();
        $this->color = $usaha_pariwisata;
        $pieChartModel2 = $usaha_pariwisata
            ->reduce(
                function ($pieChartModel2, $data2) {
                    $type = $data2->jenis_usaha;
                    $value = $data2->usaha_par_count;
                    $this->index = $this->index + 1;
                    // $warna = $data2->color;
                    // $rand = str_pad(dechex(rand(0x000000, 0xFFFFFF)), 6, 0, STR_PAD_LEFT);
        

                    return $pieChartModel2->addSlice($type, $value, $this->colors[$this->index]);
                }, LivewireCharts::pieChartModel()
                    //->setTitle('Expenses by Type')
                    ->setAnimated($this->firstRun)
                    ->setTitle('Jumlah Berdasarkan Usaha Pariwisata')
                    ->setType('pie')
                    ->setOpacity(100)
                    ->withOnSliceClickEvent('onSliceClick')
                    //->withoutLegend()
                    ->legendPositionBottom()
                    ->legendHorizontallyAlignedCenter()
                    ->setDataLabelsEnabled($this->showDataLabels)
                // ->setColors(['#b01a1b', '#d41b2c', '#ec3c3b', '#f66665'])
            );

        $this->index = -1;

        return view('livewire.dashboard-data')->with([
            'pieChartModel' => $pieChartModel,
            'pieChartModel2' => $pieChartModel2,
            'subsektor' => $subsektor,
            'jml_subsektor' => $jml_subsektor,
            'jml_uspar' => $jml_uspar,
        ]);
    }
}