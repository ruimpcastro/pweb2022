<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pauta extends Model
{
    use HasFactory;

    public function createMockData()
    {
        $da = Disciplina::find(1);
        $db = Disciplina::find(2);
        $dc = Disciplina::find(3);
        $dd = Disciplina::find(4);
        $de = Disciplina::find(5);
        $df = Disciplina::find(6);
        $dg = Disciplina::find(7);

        $pf = new Pauta();
        $pf->chave = 1111;
        $pf->designacao = "Época de frequência";
        $pf->dirty = 1;

        $pn = new Pauta();
        $pn->chave = 1112;
        $pn->designacao = "Exame de Época Normal";
        $pn->dirty = 0;

        $pr = new Pauta();
        $pr->chave = 1113;
        $pr->designacao = "Exame de Época de Recurso";
        $pr->dirty = 0;

        $pe = new Pauta();
        $pe->chave = 1114;
        $pe->designacao = "Exame de Época de Especial";
        $pe->dirty = 0;

        $da->pauta()->save($pf);
        $da->pauta()->save($pn);
        $da->pauta()->save($pr);
        $da->pauta()->save($pe);

        $pf = new Pauta();
        $pf->chave = 1121;
        $pf->designacao = "Época de frequência";
        $pf->dirty = 1;

        $pn = new Pauta();
        $pn->chave = 1122;
        $pn->designacao = "Exame de Época Normal";
        $pn->dirty = 0;

        $pr = new Pauta();
        $pr->chave = 1123;
        $pr->designacao = "Exame de Época de Recurso";
        $pr->dirty = 0;

        $pe = new Pauta();
        $pe->chave = 1124;
        $pe->designacao = "Exame de Época de Especial";
        $pe->dirty = 0;

        $db->pauta()->save($pf);
        $db->pauta()->save($pn);
        $db->pauta()->save($pr);
        $db->pauta()->save($pe);
    }
}
