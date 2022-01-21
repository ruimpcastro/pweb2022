<?php

namespace App\Domain;

use App\Models\AnoLetivo;
use App\Models\Pauta;
use App\Models\Resultado;
use Illuminate\Support\Facades\DB;

class ResultadoHandler
{
    //TODO Criar página para pegar na pauta e gerar valores da pauta
    public static function gerarPauta()
    {
        $json_csv_linhas = self::csvLinhasToJson("Docs/resultados.csv",5);
        $d = DB::table('disciplinas')->where('codigo',$json_csv_linhas["Código"] )->first();
        print_r($json_csv_linhas);
        $p = DB::table('pautas')->where('chave',$json_csv_linhas["Chave"] )->first();
        if ( $p != null or $p->dirty != 0) {
            return "Não consegue efetuar alterações, porque já submeteu o ficheiro no sistema";
        } else {
            $pauta = self::createPauta($json_csv_linhas["Chave"], $json_csv_linhas["Pauta"], 1, $d->id);
        }
        $p = DB::table('pautas')->where('chave',$json_csv_linhas["Chave"] )->first();
        //Criar Resultados
        $json_csv_colunas = self::csvColunasToJson("Docs/resultados.csv",8,5);
        foreach ($json_csv_colunas as $col) {
            print_r($col);
            $a = DB::table('alunos')->where('numero_aluno',$col["Número"] )->first();
            self::createResultado($col["Resultado"],  $p->id, $d->id, $a->id);
        }

    }

    public static function createPauta(string $chave, string $designacao, int $dirty, int $disciplina_id)
    {

        $p = new Pauta();
        $p->chave = $chave;
        $p->designacao =$designacao;
        $p->dirty = $dirty;
        $p->disciplina_id = $disciplina_id;
        $p->save();
        return $p;
    }

    public static function createResultado(string $avaliacao, int $pauta_id, int $disciplina_id,int $aluno_id)
    {
        $r = new Resultado();
        $r->resultado = $avaliacao;
        $r->pauta_id = $pauta_id;
        $r->save();
        $r->aluno()->attach($aluno_id);
        $rh = new ResultadoHandler();
        $rh::getMedia($pauta_id);
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
        while ($row_number< $numero_linhas && $row = fgetcsv($fp,$numero_linhas,";")) {
            array_push($key,str_replace(":","",$row[0]));
            array_push($values,$row[1]);
            $row_number++;
        }
        $json[] = array_combine($key, $values);
        $json = array_slice($json[0], 0, $numero_linhas);
        fclose($fp);
        return $json;
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
        return $json;
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

    public static function getMedia(int $id): string
    {
        $pauta = Pauta::where('id', $id)->first();
        $res = [];
        $resultados = $pauta->resultado;
        foreach ($resultados->all() as $resultado) {
            $res[] = $resultado->resultado;
        }
        $sum = 0;
        foreach ($res as $k => $v) {
            $strToInt = 0;
            $strToInt = (int)$v;
            $sum += $strToInt;
        }
        $pauta->media = $sum / count($res);
        $pauta->save();
        return $pauta->media;
    }

    public static function makeDirty(int $chavePauta): int
    {
        $pauta = Pauta::where('chave', $chavePauta)->first();
        $pauta->dirty = 1;
        $pauta->save();
        return $pauta->dirty;
    }

    public static function criarPauta(int $codDisciplina, string $designacao)
    {
        $dh = new DisciplinaHandler();
        $d = $dh::getDisciplina($codDisciplina);
        $a = AnoLetivo::find(1);
        $p = new Pauta();
        $chave = ($a->ano . $d->semestre . $codDisciplina . rand(1000, 1000000));
        $p->chave = ($chave + 1);
        $p->designacao = $designacao;
        $p->dirty = 0;
        $d->pauta()->save($p);
        $p->save();

    }
    public static function criarPautas(int $codDisciplina): string
    {
        $rh = new ResultadoHandler();
        $rh::criarPauta($codDisciplina, "Época de frequência");
        $rh::criarPauta($codDisciplina, "Exame de Época Normal");
        $rh::criarPauta($codDisciplina, "Exame de Época Recurso");
        $rh::criarPauta($codDisciplina, "Exame de Época Especial");

        return "success";
    }
}
