<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\News;
use App\Models\Teams;
use App\Models\Services;

class ShowHome extends Component {

    public function render() {

        $news = News::select('news')->get();

        $teams_a = Teams::where('hierarchy','a')->get();
        $teams_b = Teams::where('hierarchy','b')->get();
        $teams_c = Teams::where('hierarchy','c')->get();
        $teams_d = Teams::where('hierarchy','d')->get();

        $services = Services::get();

        return view('livewire.show-home', [
            'news' => $news,
            'teams_a' => $teams_a,
            'teams_b' => $teams_b,
            'teams_c' => $teams_c,
            'teams_d' => $teams_d,
            'services' => $services
        ]);

    }

}
