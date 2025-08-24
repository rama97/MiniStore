@extends('Layout.Base')
@section('main_content');
<form action="{{ route('product.search') }}" method="GET" class="filter-form">

    <!-- Search Box -->
    <div class="form-group">
        <label for="q">Search</label>
        <input type="text" id="q" name="q" value="{{ request('q') }}" placeholder="Search products...">
    </div>


    <!-- Price Range -->
    <div class="form-row">
        <div class="form-group">
            <label for="min_price">Min Price</label>
            <input type="number" id="min_price" name="min_price" value="{{ request('min_price') }}">
        </div>
        <div class="form-group">
            <label for="max_price">Max Price</label>
            <input type="number" id="max_price" name="max_price" value="{{ request('max_price') }}">
        </div>
    </div>

    <!-- Sort -->
    <div class="form-group">
        <label for="sort">Sort By</label>
        <select id="sort" name="sort">
            <option value="">Default</option>
            <option value="name_asc" {{ request('sort') == 'name_asc' ? 'selected' : '' }}>Name (A-Z)</option>
            <option value="name_desc" {{ request('sort') == 'name_desc' ? 'selected' : '' }}>Name (Z-A)</option>
            <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Price (Low → High)</option>
            <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Price (High → Low)</option>
            <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Newest First</option>
        </select>
    </div>

    <!-- Buttons -->
    <div class="form-actions">
    <a href="{{ route('product.search') }}">  <button type="submit" class="btn btn-primary">Search</button></a>
      <button type="reset" class="btn reset-btn ">Reset</button>
    </div>
</form>

@if(empty($records))
       <p>No products found. Start by creating a new one!</p>
@else
 <div class="card-container">
      @foreach($records as $product)
    <div class="{{ $product->qty <= 3 ? 'card accent' : 'card primary' }}">
      <div class="card-header"></div>
      <div class="card-body">
        <p>{{$product->name}} : {{$product->price}}$</p>
        <p>{{$product->qty}} Items Left</p>

      </div>
      <div class="card-actions">
   <a href="{{ route('product.show', $product->id) }}">  <button class="btn update-btn"><i class="fas fa-edit" ></i></button></a>
<form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')

    <button class="btn delete-btn"><i class="fas fa-trash-alt"></i></button>
</form>

  </div>

</div>
           @endforeach

           </div>
   @endif
@endsection