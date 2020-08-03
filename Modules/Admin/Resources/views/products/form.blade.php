
<form action="" method="POST" enctype="multipart/form-data" runat="server">
  <div class=" row product">
    <div class="col-8">
    @csrf
        <div class="form-group ">
          <label for="name">Tên sản phẩm</label>
        <input type="text" class="form-control"  placeholder="Tên sản phẩm" name="pro_name" value="{{old('pro_name',isset($items->pro_name) ? $items->pro_name:'')}}">
          @if($errors->has('pro_name'))
    <div class="error-text text-danger">
        {{$errors->first('pro_name')}}
    </div>
          @endif
  </div>
        <div class="form-group">
          <label for="pro_description"><b>Mô tá</b></label>
       <textarea name="pro_description" id="" class="form-control" cols="30" rows="3">{{old('pro_description',isset($items->pro_description) ? $items->pro_description:'')}}</textarea>
       @if($errors->has('pro_description'))
       <div class="error-text text-danger">
           {{$errors->first('pro_description')}}
       </div>
             @endif
        </div>
      <div class="form-group">
        <label for="nd"><b>Nội dung</b></label>
     <textarea name="pro_content" id="" class="form-control" cols="30" rows="3">{{old('pro_content',isset($items->pro_content) ? $items->pro_content:'')}}</textarea>
     @if($errors->has('pro_content'))
    <div class="error-text text-danger">
        {{$errors->first('pro_content')}}
    </div>
          @endif
      </div>
      <div class="form-group">
        <label for="pro_description_seo"><b>meta description</b></label>
      <input type="text" name="pro_description_seo" class="form-control" placeholder="meta title" value="{{old('pro_description_seo',isset($items->pro_description_seo) ? $items->pro_description_seo:'')}}">
      </div>
      <div class="form-group">
        <label for="pro_title_seo"><b>meta title</b></label>
      <input type="text" name="pro_title_seo" class="form-control" placeholder="meta title" value="{{old('pro_title_seo',isset($items->pro_title_seo) ? $items->pro_title_seo:'')}}">
      </div>
  </div>
      <div class="col-4">
        <div class="form-group">
          <label for="title"><b>loại sản phẩm</b></label><br>
          <select class="btn" name="pro_category_id">
          <option value="">--chọn loại sản phẩm--</option>
          
          @foreach ($category as $item)
          <option value="{{$item->id}}" 
            @isset($items)
            @if($item->id==$items->pro_category_id )
             {{'selected'}} 
            @endif
            @endisset
            >{{$item->c_name}}</option>
          @endforeach
        </select>
        @if($errors->has('pro_category_id'))
        <div class="error-text text-danger">
            {{$errors->first('pro_category_id')}}
        </div>
              @endif
        </div>
        <div class="form-group">
      <img src="{{asset('no_image/1.jpg')}}" id="blah" class="w-100">
        </div>
        <div class="form-group ">
          <label for="title"><b>Avatar</b></label><br>
         <input type="file" name="file" src="#" class="" id='imgInp'>
         
        </div>
        <div class="form-group">
          <label for="pro_price"><b>giá sản phẩm</b></label><br>
         <input type="text" name="pro_price" class="form-control" value="{{old('pro_price',isset($items->pro_price) ? $items->pro_price:'')}}">
         @if($errors->has('pro_price'))
         <div class="error-text text-danger">
             {{$errors->first('pro_price')}}
         </div>
               @endif
        </div>
        <div class="form-group">
          <label for="pro_sale"><b> %Khuyến mãi</b></label><br>
         <input type="text" name="pro_sale" value="{{old('pro_sale',isset($items->pro_sale) ? $items->pro_sale:'0')}}" class="form-control">
         @if($errors->has('pro_sale'))
         <div class="error-text text-danger">
             {{$errors->first('pro_sale')}}
         </div>
               @endif
        </div>
        <div class="form-group">
          <label for="pro_sale"><b> Số lượng</b></label><br>
         <input type="text" name="pro_number" value="{{old('pro_number',isset($items->pro_number) ? $items->pro_number:'0')}}" class="form-control">
        </div>
        <div class="form-group">
          .<div class="btn-group" data-toggle="buttons">
              <label class="btn btn-primary active">
                  <input type="checkbox" name="hot" checked autocomplete="off">Nổi bật
              </label>
          </div>
        </div>
      </div>
        <button type="submit" class="btn btn-success">Lưu Thông Tin</button>
    </div>
      </form>
@section('script')
    <script src="{{asset('ckeditor/ckeditor.js')}}" >
    
      </script>
      <script >
        CKEDITOR.replace('pro_content');
        </script>
@endsection
      
