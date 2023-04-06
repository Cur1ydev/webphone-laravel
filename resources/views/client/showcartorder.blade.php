@extends('web.index')
@section('content')
    <br><br>
    <h3 align="center">Danh Sách Đơn Hàng Đã Mua</h3>
    <br>
    <h6 style="color: red" align="center">*Note: Sau khi trạng thái đơn hàng là đang vận chuyển thì sẽ không được hủy đơn hàng.</h6>
    <div class="table-responsive order-table style1">
        <table class="table table-bordered align-middle table-hover text-center mb-1">
            <thead>
            <tr>
                <th>Ảnh</th>
                <th>Tên Sản Phẩm</th>
                <th>Bộ Nhớ Trong</th>
                <th>Màu Sắc</th>
                <th>Tên Khách Hàng</th>
                <th>Số Điện Thoại</th>
                <th>Tổng Tiền</th>
                <th>Địa Chỉ</th>
                <th>Trạng Thái Đơn Hàng</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @if(count($allProduct)>0)
            @foreach($allProduct as $key => $value)
                <tr ng-repeat="cart in carts">
                    <td class="thumbImg"><img class="cart__image" src="{{$value->image}}" width="80"/>
                    </td>
                    <td>
                        <h6>{{$value->name_product}}</h6>
                    </td>
                    <td>
                       {{$value->memory_storage}}
                    </td>
                    <td>
                        {{$value->color}}
                    </td>
                    <td>
                        {{$value->name_user}}
                    </td>
                    <td>
                        0{{$value->phone_number}}
                    </td>
                    <td>
                        {{number_format($value->total_price)}}₫
                    </td>
                    <td>
                        {{$value->address}}
                    </td>
                    <td>
                        {{$value->status}}
                    </td>
                    <td>
                        @if($value->id_status==2)
                        <button onclick="if(confirm('Bạn có chắc mình muốn hủy đơn hàng không ?')){location.href='{{route('client.cancelOrder',['id'=>$value->id_cart,'name'=>$value->name_user])}}'}" style="color:red">Hủy Đơn Hàng</button>
                        @endif
                    </td>
                </tr>
            @endforeach
            @else
                <h4 align="center">Xin Lỗi,bạn chưa có đơn hàng nào đã đặt</h4>
            @endif
            </tbody>
        </table>
    </div>
    <br><br>
@endsection
