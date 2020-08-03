<form action="" method="POST" >
  @csrf
  <div class=" container row product">
      <div class="col-sm-12 ml-5">
          <div class="form-group ">
              <label for="a_name">Tiêu Đề trang :</label>
              <input type="text" class="form-control"  required placeholder="Tên đề trang" name="ps_name" value="{{old('ps_name',isset($items->ps_name) ? $items->ps_name:'')}}">
          </div>
          <div class="form-group ">
            <label for="type">Chọn Trang</label>
            <select name="type" class="form-control">
              <option {{(isset($items->ps_type)&&$items->ps_type==1) ? 'selected':'' }}  value="1">Về Chúng Tôi</option>
              <option {{(isset($items->ps_type)&&$items->ps_type==2) ? 'selected':'' }}  value="2">Thông tin giao hàng</option>
              <option {{(isset($items->ps_type)&&$items->ps_type==3) ? 'selected':'' }}  value="3">Chính sách bảo mật</option>
              <option {{(isset($items->ps_type)&&$items->ps_type==4) ? 'selected':'' }} value="4">Điều Khoản sử dụng</option>
            </select>
        </div>
          <div class="form-group">
              <label for="nd"><b>Nội dung</b></label>
              <textarea name="ps_content" id=""  class="form-control" required cols="30" rows="3">{{old('ps_content',isset($items->ps_content) ? $items->ps_content:'')}}</textarea>
          </div>
          <button type="submit" class="btn btn-success">Lưu Thông Tin</button>
      </div>
      @section('script')
      <script src="{{asset('ckeditor/ckeditor.js')}}" ></script>
      <script >
          CKEDITOR.replace('ps_content');
      </script>
  </div>
</form>