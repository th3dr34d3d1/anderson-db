<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Oligos;
use App\Models\Plasmids;
use App\Models\Strains;
use App\Models\Nonyeaststrains;
use Illuminate\Support\Facades\Storage;

class ImportCsv extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:csv {strain_type} {fileName}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $dnafile_importpath      = 'storage/import_files/dna_files/';
        $imagefile_importpath      = 'storage/import_files/image_files/';
        $dnafile_exportpath      = 'plasmid_files/';
        $imagefile_exportpath      = 'plasmid_images/';
        
        if (($handle = fopen('./storage/import_files/' . $this->argument('fileName'), "r")) !== FALSE) {
            switch ($this->argument('strain_type')) {
            case 'oligos':
                break;

            case 'plasmids':
                Plasmids::truncate();
                $test_var = Storage::deleteDirectory($dnafile_exportpath);
                Storage::deleteDirectory($imagefile_exportpath);
                Storage::makeDirectory($dnafile_exportpath);
                Storage::makeDirectory($imagefile_exportpath);
                break;

            case 'strains':
                break;

            case 'nystrains':
                break;

            }
            while (($data = fgetcsv($handle, 10000, ",")) !== FALSE) {
                $num = count($data);
                switch ($this->argument('strain_type')) {
                case 'oligos':
                    $to_create = new Oligos();
                    break;

                case 'plasmids':
                    $to_create = new Plasmids();
                    break;

                case 'strains':
                    $to_create = new Strains();
                    break;

                case 'nystrains':
                    $to_create = new NonYeastStrains();
                    break;

                }
                for ($c=0; $c < $num; $c++) {
                    switch ($this->argument('strain_type')) {
                    case 'oligos':
                        switch ($c) {
                        case 0:
                            $to_create->datemade = date('Y-m-d H:i:s', strtotime($data[$c]));
                            break;
                        case 1:
                            $to_create->odescription = $data[$c];
                            break;
                        case 2:
                            $to_create->designedby = $data[$c];
                            break;
                        case 3:
                            $to_create->hybridtm = $data[$c];
                            break;
                        case 4:
                            $to_create->lengthbases = $data[$c];
                            break;
                        case 5:
                            $to_create->madeby = $data[$c];
                            break;
                        case 6:
                            $to_create->oname = $data[$c];
                            break;
                        case 7:
                            $to_create->id = $data[$c];
                            break;
                        case 8:
                            $to_create->sequence = $data[$c];
                            break;
                        }
                        break;

                    case 'plasmids':
                        switch ($c) {
                        case 0:
                            $to_create->pcomments = $data[$c];
                            break;
                        case 1:
                            $to_create->pconcentration = $data[$c];
                            break;
                        case 2:
                            $to_create->pdatemade = date('Y-m-d H:i:s', strtotime($data[$c]));
                            break;
                        case 3:
                            $to_create->pdname = $data[$c];
                            break;
                        case 4:
                            $to_create->penteredby = $data[$c];
                            break;
                        case 5:
                            $to_create->pusage = $data[$c];
                            break;
                        case 6:
                            $to_create->pmarkers = $data[$c];
                            break;
                        case 7:
                            $to_create->id = preg_replace("/^P/","", $data[$c]);
                            $substring = $data[$c];

                            list($name) = glob(sprintf("$dnafile_importpath(%s)*", $substring), GLOB_NOSORT) + array(NULL);
                            if ($name) {
                                Storage::put($dnafile_exportpath . basename($name), file_get_contents($name));
                                $to_create->dna_filepath = $dnafile_exportpath . basename($name);
                                $to_create->dna_filename = basename($name);
                            }
                            list($name) = glob(sprintf("$imagefile_importpath(%s)*", $substring), GLOB_NOSORT) + array(NULL);
                            if ($name) {
                                Storage::put($imagefile_exportpath . basename($name), file_get_contents($name));
                                $to_create->img_filepath = $imagefile_exportpath . basename($name);
                                $to_create->img_filename = basename($name);
                            }
                            break;
                        case 8:
                            $to_create->plasmidsize = $data[$c];
                            break;
                        case 9:
                            $to_create->psequence = $data[$c];
                            break;
                        case 10:
                            $to_create->psource = $data[$c];
                            break;

                        }    
                        break;
                    case 'strains':
                        switch ($c) {
                        case 0:
                            $to_create->susedoften = $data[$c];
                            break;
                        case 1:
                            $to_create->sbkgnd = $data[$c];
                            break;
                        case 2:
                            $to_create->scomments = $data[$c];
                            break;
                        case 3:
                            $to_create->sxtransform = $data[$c];
                            break;
                        case 4:
                            $to_import = ($data[$c]) ? $data[$c] : date('Y-m-d') ;
                            $to_create->sdateentered = date('Y-m-d H:i:s', strtotime($to_import));
                            break;
                        case 5:
                            $to_create->senteredby = $data[$c];
                            break;
                        case 6:
                            $to_create->sauxotrophies = $data[$c];
                            break;
                        case 8:
                            $to_create->smat = $data[$c];
                            break;
                        case 9:
                            $to_create->strainname = $data[$c];
                            break;
                        case 10:
                            $to_create->srepandmarkers = $data[$c];
                            break;
                        case 11:
                            $to_create->ssource = $data[$c];
                            break;
                        case 12:
                            $to_create->sspecies = $data[$c];
                            break;
                        case 13:
                            $to_import = preg_replace("/[^0-9]*/","", $data[$c]);
                            //var_dump($to_import, $data[$c]);

                            $to_create->id = $to_import;
                            break;

                        }
                        break;
                    case 'nystrains':
                        switch ($c) {
                        case 0:
                            $to_create->nycomments = $data[$c];
                            break;
                        case 1:
                            $to_create->nydate = date('Y-m-d H:i:s', strtotime($data[$c]));
                            break;
                        case 2:
                            $to_create->nyenteredby = $data[$c];
                            break;
                        case 3:
                            $to_create->nygenus = $data[$c];
                            break;
                        case 4:
                            $to_create->nymedofisolation = $data[$c];
                            break;
                        case 5:
                            $to_create->nymedforgrowth = $data[$c];
                            break;
                        case 6:
                            $to_create->nystrainname = $data[$c];
                            break;
                        case 7:
                            $to_create->nysource = $data[$c];
                            break;
                        case 8:
                            $to_create->nyspecies = $data[$c];
                            break;
                        case 9:
                            $to_create->id = $data[$c];
                            break;
                        case 10:
                            $to_create->nystraintype = $data[$c];
                            break;

                        }
                        break;

                    }
                }
                $to_create->save();
            }
        } else {
            echo 'Bad filename';
        }
        fclose($handle);
        return 0;
    }
}
