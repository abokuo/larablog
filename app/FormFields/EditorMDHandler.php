<?php

namespace App\FormFields;

use TCG\Voyager\FormFields\AbstractHandler;

class EditorMDHandler extends AbstractHandler
{
    protected $codename = 'Markdown編輯器';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('formfields.editor_md', [
            'row'             => $row,
            'options'         => $options,
            'dataType'        => $dataType,
            'dataTypeContent' => $dataTypeContent,
        ]);
    }
}
