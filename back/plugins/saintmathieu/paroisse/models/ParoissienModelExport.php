<?php
namespace saintmathieu\Paroisse\Models;

use Backend\Models\ExportModel;
use saintmathieu\Paroisse\Models\ParoissienModel;

class ParoissienModelExport extends ExportModel
{

    public function exportData($columns, $sessionKey = null)
    {
        $paroissiens = ParoissienModel::all();
        $paroissiens->each(function ($paroissien) use ($columns) {
            $paroissien->addVisible($columns);
        });
        return $paroissiens->toArray();
    }
}
