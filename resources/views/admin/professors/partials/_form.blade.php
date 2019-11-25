<label for="">Статус</label>
<select class="form-control" name="published">
    @if(isset($professor->id))
        <option value="0" @if ($professor->published == 0) selected="" @endif>Не опублікована</option>
        <option value="1" @if ($professor->published == 1) selected="" @endif>Опублікована</option>
    @else
        <option value="0">Не опублікована</option>
        <option value="1">Опублікована</option>
    @endif
</select>


<label for="">Форма</label>
<input type="text" class="form-control" name="name" placeholder="Повне імя викладача"
       value="{{$professor->name ?? ""}}" required>

<input type="text" class="form-control" name="position" placeholder="Посада"
       value="{{$professor->position ?? ""}}" >

<input type="text" class="form-control" name="academic_status" placeholder="Вчене звання"
       value="{{$professor->academic_status ?? ""}}" >

<input type="text" class="form-control" name="scientific_degree" placeholder="Науковий ступінь"
       value="{{$professor->scientific_degree ?? ""}}" >


<label for="">Короткий опис</label>
<textarea class="form-control" id="description_short" name="description_short">{{$professor->description_short ?? ""}}</textarea>

<label for="">Повний запис</label>
<textarea class="form-control" id="description" name="description">{{$professor->description ?? ""}}</textarea>

<input class="btn btn-primary" type="submit" value="Зберегти">
