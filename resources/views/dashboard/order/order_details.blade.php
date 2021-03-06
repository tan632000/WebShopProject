@extends('dashboard/dashboard_main_content')
@section('title')
Order details
@endsection
@section('dashboard_body')

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto mb-4">
            <h2 class="text-center">Order info for this order</h2>
            <table class="table table-hover table-bordered ">
                <tr>
                    <th>Order No</th>
                    <td>{{$order->id}}</td>
                </tr>
                <tr>
                    <th>Ordet Total </th>
                    <td>{{number_format($order->total_price)}} VND</td>
                </tr>
                <tr>
                    <th>Order Status </th>
                    <td>{{$order->order_status}}</td>
                </tr>
                <tr>
                    <th>Payment Status </th>
                    <td>{{$order->payment_status}}</td>
                </tr>
                <tr>
                    <th>Payment type </th>
                    <td>{{$order->payment_type}}</td>
                </tr>
                <tr>
                    <th>Order Date </th>
                    <td>{{$order->created_at}}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto mb-4">
            <h2 class="text-center">Customer info for this order</h2>
            <table class="table table-hover table-bordered ">
                <tr>
                    <th>Customer Name </th>
                    <td>{{$customer->first_name.' '.$customer->last_name}}</td>
                </tr>
                <tr>
                    <th>Phone Number </th>
                    <td>{{$customer->phone_number}}</td>
                </tr>
                <tr>
                    <th>Email Address </th>
                    <td>{{$customer->email}}</td>
                </tr>
                <tr>
                    <th>Address </th>
                    <td>{{$customer->address}}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-auto mb-4">
            <h2 class="text-center">Shipping info for this order</h2>
            <table class="table table-hover table-bordered ">
                <tr>
                    <th>Full Name </th>
                    <td>{{$shipping->full_name}}</td>
                </tr>
                <tr>
                    <th>Phone Number </th>
                    <td>{{$shipping->phone_number}}</td>
                </tr>
                <tr>
                    <th>Email Address </th>
                    <td>{{$shipping->email}}</td>
                </tr>
                <tr>
                    <th>Address </th>
                    <td>{{$shipping->address}}</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-5">
            <h2 class="text-center">Product info for this order</h2>
            <table class="table table-hover table-bordered ">
                <thead class="thead-light">
                    <tr>
                        <th>SN.</th>
                        <th>Product Id</th>
                        <th>Product Name</th>
                        <th>Product Image</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order_details as $order_detail)
                         <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$order_detail->product_id}}</td>
                            <td>{{$order_detail->product_name}}</td>
                            <td  style="width:15%">
                                <img class="w-50" src="{{asset('uploads/product_images')}}/{{$order_detail->product_image}}" alt="">
                            </td>
                            <td>{{number_format($order_detail->product_price)}} VND</td>
                            <td>{{$order_detail->product_quantity}}</td>
                            <td>{{number_format($order_detail->product_price*$order_detail->product_quantity)}} VND</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>



@endsection()
