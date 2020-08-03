
<form action="" method="POST">
    @csrf
        <div class="form-group">
          <label for="name">Tên Danh mục</label>
        <input type="text" class="form-control"  placeholder="tên danh mục" name="name" value="{{old('name',isset($item->c_name) ? $item->c_name:'')}}">
          @if($errors->has('name'))
    <div class="error-text text-danger">
        {{$errors->first('name')}}
    </div>
          @endif
        </div>
        .<div class="form-group">
          <label for="name">Icon</label>
        <input type="text" name="icon" class="form-control" placeholder="fa fa-home" value="{{old('icon',isset($item->c_icon) ? $item->c_icon:'')}}">
          @if($errors->has('icon'))
          <div class="error-text text-danger">
              {{$errors->first('icon')}}
          </div>
      @endif
        </div>
        .
        <div class="form-group">
          <label for="title"><b>title</b></label>
        <input type="text" class="form-control" placeholder="meta title" value="{{old('c_title_ceo',isset($item->c_title_seo) ? $item->c_title_seo:'')}}" name="c_title_ceo">
        </div>
        <div class="form-group">
          <label for="description"><b>description</b></label>
        <input type="text" class="form-control" placeholder="meta title" value="{{old('c_description_ceo',isset($item->c_description_seo) ? $item->c_description_seo:'')}}" name="c_description_ceo">
        </div>
        <div class="form-group">
          .<div class="btn-group" data-toggle="buttons">
              <label class="btn btn-primary active">
                  <input type="checkbox" name="hot" checked autocomplete="off">Nổi bật
              </label>
          </div>
        </div>
        <button type="submit" class="btn btn-success">Lưu Thông Tin</button>
      </form>