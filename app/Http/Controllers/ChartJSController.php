<?php

namespace App\Http\Controllers;

use App\User;
use App\Servicio;
use Illuminate\Http\Request;
use Redirect;
use Response;
use DB;
use Carbon\Carbon;

class ChartJSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $causas = [];
        $charts_data = [
        "causa_data" => "",
        "genero_data" => "",
        "edad_data" => ""
      ];

      $query = Servicio::select(DB::raw("DISTINCT causa_muerte"))->get();
      foreach ($query as $row) {
          $causas[] = $row->causa_muerte;
      }



        $query = Servicio::select(\DB::raw("COUNT(*) as count, causa_muerte"))->groupBy('causa_muerte')->get();
        $data = [];
        foreach ($query as $row) {
            $data['label'][] = $row->causa_muerte;
            $data['data'][] = (int) $row->count;
        }
        $charts_data['causa_data'] = json_encode($data);

        $query = Servicio::select(\DB::raw("COUNT(*) as count, genero"))->groupBy('genero')->get();
        $data = [];
        foreach ($query as $row) {
            $data['label'][] = $row->genero;
            $data['data'][] = (int) $row->count;
        }
        $charts_data['genero_data'] = json_encode($data);

        $query = Servicio::select(\DB::raw("COUNT(*) as count"), \DB::raw("TIMESTAMPDIFF(YEAR, fecha_nacimiento, fecha_muerte) AS edad "))->groupBy('edad')->get();
        $data = [];
        foreach ($query as $row) {
            $data['label'][] = $row->edad;
            $data['data'][] = (int) $row->count;
        }
        $charts_data['edad_data'] = json_encode($data);

        echo json_encode($charts_data);
        return view('reportes', $charts_data);
    }
}
