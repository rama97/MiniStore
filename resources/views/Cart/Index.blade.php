@extends('Layout.Base')
@section('main_content')


 <table>
    <thead>
      <tr>
        <th>Item</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Remove</th>
      </tr>
    </thead>
    <tbody>
      
     @foreach($records as $cart)
      <tr>
        <td>{{$cart['name']}}</td>
        <td>{{$cart['price']}}</td>
        <td>
          <div class="quantity-control">
            <button > <a href="{{ route('cart.increase', $cart['id']) }}">+</a></button>
            <input type="text" value="{{$cart['qty']}}" readonly>
            <button><a href="{{ route('cart.decrease', $cart['id']) }}">-</a></button>
          </div>
        </td>
        <td>   <form action="{{ route('cart.delete', $cart['id']) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')

    <button class="btn delete-btn"><i class="fas fa-trash-alt"></i></button></td>
      </tr>
      @endforeach
   
    </tbody>
  </table>


@endsection