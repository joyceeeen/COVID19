<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\DataExport;
use File;
use Lava;
use Excel;

class HomeController extends Controller
{

  public function covid19(){
    $json = $path = storage_path() . "\json\covid19.json";
    $json = json_decode(file_get_contents($json), true);

    return response()->json($json);
  }

  public function branches(){
    $json = $path = storage_path() . "\json\branches.json";
    $json = json_decode(file_get_contents($json), true);

    return response()->json($json);
  }

  public function cebuanaView(){
    $top = Lava::DataTable();
    $top->addStringColumn('Province')
    ->addNumberColumn('Number of Partners')
    ->addRow(["Metro Manila",3388])
    ->addRow(["Cebu",1084])
    ->addRow(["Batangas",952])
    ->addRow(["Laguna",943])
    ->addRow(["Bulacan",851])
    ->addRow(["Average",227]);

    Lava::ColumnChart('Location', $top, [
      'title' => '',
      'titleTextStyle' => [
        'color'    => '#eb6b2c',
        'fontSize' => 12
      ]
    ]);
    $pie = Lava::DataTable();

    $pie->addStringColumn('International Remittance')
    ->addNumberColumn('Percent')
    ->addRow(["Offers International Remittance",7056])
    ->addRow(["Does not offer International Remittance",11818]);



    Lava::PieChart('Remittance', $pie, [
      'title' => '',
      'titleTextStyle' => [
        'color'    => '#eb6b2c',
        'fontSize' => 12
      ]
    ]);
    return view('cebuana');
  }
  public function covid(){
    $top = Lava::DataTable();
    $top->addDateColumn('Date')
    ->addNumberColumn('Cases')
    ->addRow(["2020-01-30" , 1])
    ->addRow(["2020-02-02" , 1])
    ->addRow(["2020-02-05" , 1])
    ->addRow(["2020-03-05" , 2])
    ->addRow(["2020-03-07" , 1])
    ->addRow(["2020-03-08" , 4])
    ->addRow(["2020-03-09" , 13])
    ->addRow(["2020-03-10" , 11])
    ->addRow(["2020-03-11" , 16])
    ->addRow(["2020-03-12" , 3])  ;

    Lava::LineChart('Location', $top, [
      'title' => '',
      'titleTextStyle' => [
        'color'    => '#eb6b2c',
        'fontSize' => 12
      ]
    ]);

    $top_prov = Lava::DataTable();
    $top_prov->addStringColumn('Rate')
    ->addNumberColumn('# of Cases')
    ->addRow(["Death" , 2])
    ->addRow(["Confined" , 48])
    ->addRow(["Recovered" , 2]);

    Lava::ColumnChart('Province', $top_prov, [
      'title' => '',
      'titleTextStyle' => [
        'color'    => '#eb6b2c',
        'fontSize' => 12
      ]
    ]);

    $pie = Lava::DataTable();

    $pie->addStringColumn('Travel History')
    ->addNumberColumn('# of Partners')
    ->addRow(["China" , 3])
    ->addRow(["Japan" , 3])
    ->addRow(["USA & South Korea" , 1])
    ->addRow(["UAE" , 1])
    ->addRow(["South Korea" , 1])
    ->addRow(["Switzerland" , 1])
    ->addRow(["Australia" , 1])
    ->addRow(["Taiwan" , 1])
    ->addRow(["Cruise Ship" , 2])
    ->addRow(["Indonesia" , 2])
    ->addRow(["No" , 17]);


    Lava::PieChart('Region', $pie, [
      'title' => '',
      'titleTextStyle' => [
        'color'    => '#eb6b2c',
        'fontSize' => 12
      ]
    ]);

    $pie2 = Lava::DataTable();

    $pie2->addStringColumn('Nationality')
    ->addNumberColumn('# of Partners')
    ->addRow(["Chinese" , 3])
    ->addRow(["Filipino" , 28])
    ->addRow(["Taiwanese" , 1])
    ->addRow(["American" , 1]);


    Lava::PieChart('Nationality', $pie2, [
      'title' => '',
      'titleTextStyle' => [
        'color'    => '#eb6b2c',
        'fontSize' => 12
      ]
    ]);

    $pie3 = Lava::DataTable();

    $pie3->addStringColumn('Age')
    ->addNumberColumn('Age')
    ->addRow(['21-30' , 3])
    ->addRow(['31-40', 6])
    ->addRow(['41-50', 7])
    ->addRow(['51-60' , 8])
    ->addRow(['61-70' , 5])
    ->addRow(['71-80' , 1])
    ->addRow(['81-90' , 1])
    ->addRow(['91-100' , 1]);


    Lava::PieChart('Age', $pie3, [
      'title' => '',
      'titleTextStyle' => [
        'color'    => '#eb6b2c',
        'fontSize' => 12
      ]
    ]);

    return view('ras');
  }

  public function palawanView(){
    $top = Lava::DataTable();
    $top->addStringColumn('')
    ->addNumberColumn('# of Branches')
    ->addRow(["Metro Manila" , 181])
    ->addRow(["Cebu" , 177])
    ->addRow(["Iloilo" , 59])
    ->addRow(["Negros Occidental" , 59])
    ->addRow(["Cavite" , 56]);

    Lava::ColumnChart('Location', $top, [
      'title' => '',
      'titleTextStyle' => [
        'color'    => '#eb6b2c',
        'fontSize' => 12
      ]
    ]);

    $top_prov = Lava::DataTable();
    $top_prov->addStringColumn('Partner Name')
    ->addNumberColumn('# of partners')
    ->addRow(["Jervois-Tambunting Pawnshop" , 182])
    ->addRow(["JPT-Tambunting Pawnshop" , 174])
    ->addRow(["Joyas-Tambunting Pawnshop" , 78])
    ->addRow(["SMJ Pawnshop" , 73])
    ->addRow(["TFS-Tambunting Pawnshop" , 36]);

    Lava::ColumnChart('Partners', $top_prov, [
      'title' => '',
      'titleTextStyle' => [
        'color'    => '#eb6b2c',
        'fontSize' => 12
      ]
    ]);

    $pie = Lava::DataTable();

    $pie->addStringColumn('BDO CashAgad Partners per Region')
    ->addNumberColumn('# of Partners')
    ->addRow(["ARMM" , 58])
    ->addRow(["CAR" , 62])
    ->addRow(["NCR" , 331])
    ->addRow(["I" , 418])
    ->addRow(["II" , 176])
    ->addRow(["III" , 654])
    ->addRow(["IVA" , 658])
    ->addRow(["IVB" , 238])
    ->addRow(["V" , 355])
    ->addRow(["VI" , 423])
    ->addRow(["VII" , 646])
    ->addRow(["VIII" , 481])
    ->addRow(["IX" , 234])
    ->addRow(["X" , 348])
    ->addRow(["XI" , 317])
    ->addRow(["XII" , 284])
    ->addRow(["XIII" , 322]);


    Lava::BarChart('Region', $pie, [
      'title' => '',
      'titleTextStyle' => [
        'color'    => '#eb6b2c',
        'fontSize' => 12
      ]
    ]);
    return view('palawan-ml');
  }


  public function analytics(){
    return  Excel::download(new DataExport, 'palawan.xlsx');
  }

}
