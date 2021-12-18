<?php

namespace App\Domain;

use App\Models\Pauta;
use App\Models\Resultado;

class ResultadoHandler
{
    public static function gerarPauta()
    {
        $json_csv_linhas = self::csvLinhasToJson("Docs/resultados.csv",5);
        print_r($json_csv_linhas);
        $json_csv_colunas = self::csvColunasToJson("Docs/resultados.csv",8,5);
        print_r($json_csv_colunas);

        self::createPauta($json_csv_linhas["Chave"],$json_csv_linhas["Pauta"],0,$json_csv_linhas["Código"]);

        return $json_csv_colunas;

        //Criar pauta
        //Associar valores do novo json para os valores da pauta
        //guardar pauta
    }

    public static function createPauta(int $chave, string $designacao, int $dirty, array $resultados, int $disciplina_id)
    {
        $p = new Pauta();
        $p->chave = $chave;
        $p->designacao =$designacao;
        $p->dirty = $dirty;
        $p->disciplina_id = $disciplina_id;
        $p->save();

    }

    public static function csvLinhasToJson($fname, $numero_linhas) {
        // open csv file
        if (!($fp = fopen($fname, 'r'))) {
            die("Can't open file...");
        }
        $key = array();
        $values = array();
        $json = array();
        $row_number = 0;
        while ($row = fgetcsv($fp,$numero_linhas,";")) {
            array_push($key,$row[0]);
            array_push($values,$row[1]);
            $row_number++;
        }
        $json[] = array_combine($key, $values);
        $json = array_slice($json[0], 0, $numero_linhas);
        fclose($fp);
        return json_encode($json);
    }

    public static function csvColunasToJson($fname, $numero_linha, $length) {
        // open csv file
        if (!($fp = fopen($fname, 'r'))) {
            die("Can't open file...");
        }

        $key = array();
        $values = array();
        $json = array();
        $row_number = 0;
        while ($row = fgetcsv($fp,$numero_linha + $length,";")) {

            if ($row_number==$numero_linha) {
                $key = $row;
            }
            array_push($values,$row);
            $row_number++;
        }

        $values = array_slice($values, $numero_linha+1, $numero_linha + $length);
        foreach ($values as $v){
            $json[] = array_combine($key, $v);
        }
        fclose($fp);
        return json_encode($json);
    }

    public static function getPauta(int $chavePauta): Pauta
    {
        return Pauta::where('chave', $chavePauta)->first();
    }

    public static function getPautas()
    {
        return Pauta::all();
    }

    public static function getResultados(int $chavePauta)
    {
        $pauta = Pauta::where('chave', $chavePauta)->first();
        return $pauta->resultado;
    }

    public static function makeDirty(int $chavePauta): int
    {
        $pauta = Pauta::where('chave', $chavePauta)->first();
        $pauta->dirty = 1;
        $pauta->save();
        return $pauta->dirty;
    }
}
