<label for="">Статус</label>
<select class="form-control" name="published">
    @if(isset($discipline->id))
        <option value="0" @if ($discipline->published == 0) selected="" @endif>Не опублікована</option>
        <option value="1" @if ($discipline->published == 1) selected="" @endif>Опублікована</option>
    @else
        <option value="0">Не опублікована</option>
        <option value="1">Опублікована</option>
    @endif
</select>


<label for="">Форма</label>
<input type="text" class="form-control" name="name" placeholder="Назва дисципліни"
       value="{{$discipline->name ?? ""}}" required>

<input type="text" class="form-control" name="course" placeholder="Курс"
       value="{{$discipline->course ?? ""}}" >

<input type="text" class="form-control" name="semester" placeholder="Семестр"
       value="{{$discipline->semester ?? ""}}" >

<input type="text" class="form-control" name="lecturer" placeholder="Лектор"
       value="{{$discipline->lecturer ?? ""}}" >


<label for="">Короткий опис</label>
<textarea class="form-control" id="description_short" name="description_short">{{$discipline->description_short ?? ""}}</textarea>

<label for="">Повний запис</label>
<textarea class="form-control" id="description" name="description">{{$discipline->description ?? ""}}</textarea>

<input class="btn btn-primary" type="submit" value="Зберегти">
