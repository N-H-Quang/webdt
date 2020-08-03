
<form action="" method="POST" enctype="multipart/form-data">
  <div class=" container row product">
    <div class="col-sm-8 ml-5">
    @csrf
        <div class="form-group ">
          <label for="a_name">Tên bài viết</label>
        <input type="text" class="form-control"  placeholder="Tên bài viết" name="a_name" value="{{old('a_name',isset($items->a_name) ? $items->a_name:'')}}">
          @if($errors->has('a_name'))
    <div class="error-text text-danger">
        {{$errors->first('a_name')}}
    </div>
          @endif
  </div>
        <div class="form-group">
          <label for="a_description"><b>Mô tá</b></label>
       <textarea name="a_description" placeholder="nhập mô tả" id="" class="form-control" cols="30" rows="3">{{old('a_description',isset($items->a_description) ? $items->a_description:'')}}</textarea>
       @if($errors->has('a_description'))
       <div class="error-text text-danger">
           {{$errors->first('a_description')}}
       </div>
             @endif
        </div>
      <div class="form-group">
        <label for="nd"><b>Nội dung</b></label>
     <textarea name="a_content" id=""  class="form-control" cols="30" rows="3">{{old('a_content',isset($items->a_content) ? $items->a_content:'')}}</textarea>
     @if($errors->has('a_content'))
    <div class="error-text text-danger">
        {{$errors->first('a_content')}}
    </div>
          @endif
      </div>
      <div class="form-group">
        <label for="a_description_seo"><b>meta description</b></label>
      <input type="text" name="a_description_seo" class="form-control" placeholder="meta title" value="{{old('a_description_seo',isset($items->a_description_seo) ? $items->a_description_seo:'')}}">
      </div>
      <div class="form-group">
        <label for="a_title_seo"><b>meta title</b></label>
      <input type="text" name="a_title_seo" class="form-control" placeholder="meta title" value="{{old('a_title_seo',isset($items->a_title_seo) ? $items->a_title_seo:'')}}">
      </div>
      <div class="form-group">
        <img src="{{asset('no_image/1.jpg')}}" id="blah" class="w-100">
          </div>
          <div class="form-group ">
            <label for="title"><b>Avatar</b></label><br>
           <input type="file" name="file" src="#" class="" id='imgInp'>
           
          </div>
      <button type="submit" class="btn btn-success">Lưu Thông Tin</button>
  </div>
  @section('script')
    <script src="{{asset('ckeditor/ckeditor.js')}}" >
    
      </script>
      <script >
        CKEDITOR.replace('a_content');
        </script>
      
</div>
    
      </form>
      
