@extends('Layout.Base')
@section('main_content');
  <div class="form-card">
    <h2>Add new  Product</h2>
    <form  action="{{ route('product.store') }}"
 method="POST">
   @csrf

      <div class="form-group">
        <label for="name">Name</label>
        <input 
          type="text" 
          id="name" 
          name="name" 
          placeholder="Enter name" 
          required
        />
      </div>

      <div class="form-group">
        <label for="qty">Qty</label>
        <input
          id="qty"
          name="qty"
          type="number"
          placeholder="Enter quantity"
          required
        />
      </div>

         <div class="form-group">
        <label for="price">Price</label>
        <input
          id="price"
          name="price"
          type="number"
          placeholder="Enter price"
          required
        />
      </div>



      <button type="submit" class="btn btn-primary">Save Product</button>
    </form>
  </div>



@endsection