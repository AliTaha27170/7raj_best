<center>
    
    <br><br>

    
<form  action="{{ isset($item) ? route('updateAd',$item->id) : route('storeAd')  }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="عنوان الإعلان  "> <br>

    <span>المنطقة</span> <br>
    <select name="country_id" >
        @foreach ($countries as $country)
          <option value="{{ $country->id }}">{{ $country->name }}</option>
        @endforeach
    </select>

   
    <span>المدينة</span> <br>
    <select name="city_id" >
        @foreach ($cites as $city)
          <option value="{{ $city->id }}">{{ $city->name }}</option>
        @endforeach
    </select>

    <span>الفئة</span> <br>
    <select name="city_id" >
        @foreach ($cites as $city)
          <option value="{{ $city->id }}">{{ $city->name }}</option>
        @endforeach
    </select>


    <textarea name="discrebtion">

    </textarea>

</form>


</center>