<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Http;
    use App\Models\DataFeed;
    // use App\Models\KapalModel;
    // use App\Models\Details;


    use Carbon\Carbon;

    class DashboardController extends Controller
    {

        /**
         * Displays the dashboard screen
         *
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
         */
        public function index()
        {
            $dataFeed = new DataFeed();

            return view('pages/dashboard/dashboard', compact('dataFeed'));
        }

    //     public function index()
    // {
    //     $ships = KapalModel::paginate(10)->withPath(route('kapal.index'));
    //     $keperluan = Details::all();
    //     return view('pages.kapal.list-kapal.index', [
    //         'ships' => $ships,
    //         'keperluan' => $keperluan,
    //     ]);
    // }
    }
