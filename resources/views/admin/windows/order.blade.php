<style>
    .coll td,
    th {
        border-width: 3px !important;

    }
</style>
<div class="row">
    <table class="table border coll  m-3" style=" width:45% ">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td> <img src="{{asset($product['product']->images[0]->image)}}" alt="image"
                            width="70 px"></td>
                    <td>{{$product['product']->name}}</td>
                    <td>{{$product['qty']}}</td>
                    <td>{{$product['total']}}</td>
                </tr>
            @endforeach
            <tr>
                <td> <img src="https://khidmty.com/storage/images/admins/products/K20ShvuJwE1701003331.png" alt="image"
                        width="70 px"></td>
                <td>دينمو مكينة</td>
                <td>1</td>
                <td>661</td>
            </tr>
            <tr>
                <th colspan="3">Total</th>
                <th>{{$order->total}}</th>
            </tr>

        </tbody>
    </table>

    <table class="table border col m-3" style=" width:45%">
        <tbody>

            <tr>
                <th scope="row">Address</th>
                <td>{{$order->address}}</td>
            </tr>
            <tr>
                <th scope="row">Type</th>
                <td>{{$order->type}}</td>
            </tr>
            <tr>
                <th scope="row">Client Name</th>
                <td>{{$user->name}}</td>
            </tr>
            <tr>
                <th scope="row">Notes</th>
                <td>{{$order->notes}}</td>
            </tr>
        </tbody>
    </table>
</div>