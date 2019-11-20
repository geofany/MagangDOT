<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <title>Task 2</title>
  </head>
  <body>
    <div class="col-md-4 mx-auto" style="margin-top:50px; background-color:rgba(0,0,0,0.3); padding:50px; border-radius:10px">


    <h3>Search</h3>
    <div class="attributes">
      <div class="atrribute-label">
        Province :
      </div>
      <div class="attribute-list">
        <select class="form-control" name="province" id="province">
          <option value="">Province</option>
          @foreach ($data as $province)
          <option value="{{$province['province_id']}}">{{$province['province']}}</option>
          @endforeach

        </select>
      </div>

    </div>
    <br>
    <div class="attributes">
      <div class="atrribute-label">
        City :
      </div>
      <div class="attribute-list">
        <select class="form-control" name="city" id="city">
          <option value="1">City</option>

        </select>

      </div>

    </div>
</div>
    <script>
      $(document).ready(function(){
        $('select[name="province"]').on('change', function(){
          let provinceId = $(this).val();
          if(provinceId) {
            jQuery.ajax({
              url: '/task2/getCity/'+provinceId,
              type:"GET",
              dataType:"json",
              success:function(data){
                $('select[name="city"]').empty();
                $.each(data, function(index) {
                  $.each(data[index], function(key, value){
                    $('select[name="city"]').append('<option value="' + value.city_id + '">' + value.city_name + '</option>');

                  })

                });
              },
            });
          } else {
            $('select[name="city"]').empty();
          }
        });
      });
    </script>
  </body>

</html>
