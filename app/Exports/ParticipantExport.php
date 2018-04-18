<?php

namespace App\Exports;
use App\Participant;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ParticipantExport implements FromQuery, WithHeadings, WithMapping
{
	use  Exportable;
	 public function query()
    {
        return Participant::query();
    }

    public function map($participant): array
    {
    	$departament=Participant::departament();
    	$citys=Participant::city();
        return [
            $participant->id,
            $participant->document,
            $participant->name,
            $participant->lastname,
            $participant->findDepartament($departament,$participant->id_depeartament),
            $participant->findCity($citys,$participant->id_city),
            $participant->phone,
            $participant->email,
            $participant->draw->name,
             $participant->created_at
           
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Cédula',
            'Nombre',
            'Apellido',
            'Departamento',
            'Ciudad',
            'Celular',
            'Correo',
            'Sorteo',
            'Fecha Creación'
        ];
    }
}