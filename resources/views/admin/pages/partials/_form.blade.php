<label for="">Статус</label>
<select class="form-control" name="published">
    @if(isset($page->id))
        <option value="0" @if ($page-published == 0) selected="" @endif>Не опублікована</option>
        <option value="1" @if ($page-published == 1) selected="" @endif>Опублікована</option>
    @else
        <option value="0">Не опублікована</option>
        <option value="1">Опублікована</option>
    @endif
</select>


<label for="">Форма</label>
<input type="text" class="form-control" name="title" placeholder="Назва сторінки"
       value="{{$page->title ?? ""}}" required>
<label for="">Батьківська сторінка</label>

<input class="form-control" type="text" name="slug" placeholder="Генерація slug" value="{{ $category->slug ?? '' }}" readonly="" hidden>

<select class="form-control" name="parent_id">
    <option value="0"> Без батьківської сторінки</option>
    @include(('admin.pages.partials._pages'),['pages' => $pages])
</select>
<hr />
<input class="btn btn-primary" type="submit" value="Зберегти">
