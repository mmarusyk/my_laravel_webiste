<label for="">Статус</label>
<select class="form-control" name="published">
    @if(isset($article->id))
        <option value="0" @if ($article->published == 0) selected="" @endif>Не опублікована</option>
        <option value="1" @if ($article->published == 1) selected="" @endif>Опублікована</option>
    @else
        <option value="0">Не опублікована</option>
        <option value="1">Опублікована</option>
    @endif
</select>


<label for="">Форма</label>
<input type="text" class="form-control" name="title" placeholder="Назва сторінки"
       value="{{$article->title ?? ""}}" required>
<label for="">Батьківська сторінка</label>

<input class="form-control" type="text" name="slug" placeholder="Генерація slug" value="{{ $article->slug ?? '' }}" readonly="" hidden>

<select class="form-control" name="pages[]" multiple="">
    @include(('admin.articles.partials._pages'),['pages' => $pages])
</select>

<label for="">Короткий опис</label>
<textarea class="form-control" id="description_short" name="description_short">{{$article->description_short ?? ""}}</textarea>
<label for="">Повний запис</label>
<textarea class="form-control" id="description" name="description">{{$article->description ?? ""}}</textarea>
<hr />
<label for="">Мета назва</label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета назва"
       value="{{$article->meta_title ?? ""}}" required>
<label for="">Мета опис</label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета опис"
       value="{{$article->meta_description ?? ""}}" required>
<label for="">Ключові слова</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Ключові слова"
       value="{{$article->meta_keyword ?? ""}}" required>
<input class="btn btn-primary" type="submit" value="Зберегти">
