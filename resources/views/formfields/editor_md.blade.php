{!! editor_css() !!}

<div id="mdeditor">
  <textarea class="form-control" name="{{ $row->field }}" id="markdown{{ $row->field }}">
{{ old($row->field, $dataTypeContent->{$row->field} ?? '') }}
  </textarea>
</div>

{!! editor_js() !!}
{!! editor_config('mdeditor') !!}
