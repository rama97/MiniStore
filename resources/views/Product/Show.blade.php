@extends('Layout.Base')
@section('main_content');
  <div class="form-card">
    <h2>update  Task</h2>
    <form  action="{{ route('product.update', $record->id) }}"
 method="POST">
   @csrf
  @method('PUT')

@if($errors->any())
    <div class="alert alert-danger">
        <strong>Please fix the following issues:</strong>
        <ul>
            <li>{{ implode(', ', $errors->all()) }}</li>
        </ul>
    </div>
@endif

      <div class="form-group">
        <label for="name">Name</label>
        <input 
          type="text" 
          id="name" 
          name="name" 
          placeholder="Enter name" 
          required
          value="{{ old('name', $record->name) }}"
        />
      </div>

      <div class="form-group">
        <label for="qty">Quantity</label>
         <input 
          id="qty"
          name="qty"
          placeholder="Enter qty"
          required
          type="number" 
          required
          value="{{ old('qty', $record->qty) }}"
        />
      </div>

      <div class="form-group">
        <label for="price">Price</label>
          <input 
          id="price"
          name="price"
          placeholder="Enter price"
          required 
          type="number" 
          value="{{ old('price', $record->price) }}"
        />

      <button type="submit" class="btn btn-primary">Save Product</button>
    </form>
  </div>



@endsection