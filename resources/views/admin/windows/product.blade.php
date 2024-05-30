@isset($product)
    <form class="row g-3 from-submit-global has-validation-callback" method="post" action="{{route('products.update', $product->id)}}"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="col-6">
            <label for="TextInput" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" data-validation="required" value="{{$product->name}}">
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Code</label>
            <input type="text" value="58320" name="code" class="form-control" readonly="" value="{{$product->code}}">
        </div>
        <div class="col-12">
            <label for="TextInput" class="form-label">Description</label>
            <textarea class="form-control mytextarea" rows="3" name="description">{{$product->description}}</textarea>
        </div>

        <div class="col-6">
            <label for="TextInput" class="form-label">Price</label>
            <input type="number" name="price" class="form-control" data-validation="required" value="{{$product->price}}">
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Type</label>
            <br>
            <input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="1" @checked($product->type == 1)>
            <label class="form-check-label" for="inlineRadio1">Original</label>
            <input class="form-check-input" type="radio" name="type" id="inlineRadio0" value="0" @checked($product->type == 0)>
            <label class="form-check-label" for="inlineRadio0">imitative</label>
        </div>
        <div class="col-4">
            <label for="TextInput" class="form-label">Category</label>
            <select name="category_id" class="form-control" data-validation="required">
                <option value="">choose.. </option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}" @selected($category->id == $product->category_id)>{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-4">
            <label for="TextInput" class="form-label">Store</label>
            <select name="store_id" class="form-control" data-validation="required">
                <option value="">choose.. </option>
                @foreach ($stores as $store)
                <option value="{{$store->id}}" @selected($store->id == $product->store_id)>{{$store->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-4">
            <label for="TextInput" class="form-label">Department</label>
            <select name="department_id" class="form-control" data-validation="required">
                <option value="">choose.. </option>
                @foreach ($departments as $department)
                <option value="{{$department->id}}" @selected($department->id == $product->department_id)>{{$department->name}}</option>
                @endforeach
            </select>
        </div>
        <table class="table table-bordered" id="myDataTable_no_filter" style="">
            <thead>
                <tr>
                    <th scope="row">Brand</th>
                    <th scope="row">Car</th>
                    <th scope="row" colspan="2">Model</th>
                </tr>
            </thead>
            <tbody id="json_array" class="content"
                data-mfield-options="{&quot;section&quot;: &quot;.y-group&quot;,&quot;btnAdd&quot;:&quot;#btnAdd-1&quot;,&quot;btnRemove&quot;:&quot;.btnRemove&quot;}">
                <?php $i=0; ?>
                @foreach ($product->brands as $pBrand)
                    <tr class="y-group">
                        <td>
                            <select name="product_list[brand_id][]" class="form-control index-plus" data-validation="required">
                                <option value="">choose.. </option>
                                @foreach ($brands as $brand)
                                <option value="{{$brand->id}}" @selected($brand->id == $pBrand->id)>{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select name="product_list[car_id][]" class="form-control index-plus" data-validation="required">
                                <option value="">choose.. </option>
                                @foreach ($cars as $car)
                                <option value="{{$car->id}}" @selected($car->id == $product->cars[$i]->id)>{{$car->name}}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select name="product_list[manufacture_year][]" class="form-control index-plus"
                                data-validation="required">
                                @foreach ($manufactures as $manufacture)
                                <option value="{{$manufacture->id}}" @selected($manufacture->id == $product->manufactures[$i]->id)>{{$manufacture->year}}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <i class="fa fa-plus-circle" id="btnAdd-1"></i>
                            <i class="fa fa-trash-o btnRemove" style="display: none;"></i>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="toggleCheckbox" name="have_offer" @checked($product->offer_id > 1)>
            <label class="form-check-label" for="toggleCheckbox">There is an offer</label>
        </div>

        <span class="row  have_offer_div"
            @if ($product->offer_id == 1)
                style="display: none;"
            @endif
        >
            <div class="col-3">
                <label for="TextInput" class="form-label">Type </label>
                <select name="offer_type" class="form-control" data-validation="required">
                    <option value="">choose.. </option>
                    <option value="value" @selected($offer->type == 'value')>Value</option>
                    <option value="percentage" @selected($offer->type == 'percentage')>Percentage %</option>
                </select>
            </div>
            <div class="col-3">
                <label for="TextInput" class="form-label">Value </label>
                <input type="number" name="offer_value" class="form-control" data-validation="required" value="{{$offer->value}}">
            </div>
            <div class="col-3">
                <label for="TextInput" class="form-label">From Date </label>
                <input type="date" name="from_date" class="form-control" data-validation="required" value="{{$offer->from_date}}">
            </div>
            <div class="col-3">
                <label for="TextInput" class="form-label">To Date </label>
                <input type="date" name="to_date" class="form-control" data-validation="required" value="{{$offer->to_date}}">
            </div>

        </span>
        <hr>


        <div class="col-12">
            <label for="TextInput" class="form-label">Images </label>
            <table class="table  table-bordered  " id="myDataTable_no_filter" style="">
                <thead>
                    <tr>
                        <th scope="row">Image</th>
                    </tr>
                </thead>
                <tbody id="json_array2" class="content"
                    data-mfield-options="{&quot;section&quot;: &quot;.y-group2&quot;,&quot;btnAdd&quot;:&quot;#btnAdd-1&quot;,&quot;btnRemove&quot;:&quot;.btnRemove&quot;}">
                    @foreach ($images as $image)
                        <tr class="y-group2">
                            <td>
                                <div class="col-12">
                                    <label for="TextInput" class="form-label">Image </label>
                                    <input type="file" data-default-file="{{asset($image->image)}}"  name="images_list[{{$image->id}}]"
                                        class="dropify index-plus">
                                </div>
                            </td>
                            <td>
                                <i class="fa fa-plus-circle" id="btnAdd-1"></i>
                                <i class="fa fa-trash-o btnRemove" style="display: none;"></i>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>


        <div class=" modal-footer">
            <button class="btn btn-primary" type="submit">Update</button>
            <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Close</button>
        </div>

    </form>
@else
    <form class="row g-3 from-submit-global has-validation-callback" method="post" action="{{route('products.store')}}"
        enctype="multipart/form-data">
        @csrf

        <div class="col-6">
            <label for="TextInput" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" data-validation="required">
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Code</label>
            <input type="text" value="58320" name="code" class="form-control" readonly="">
        </div>
        <div class="col-12">
            <label for="TextInput" class="form-label">Description</label>
            <textarea class="form-control mytextarea" rows="3" name="description"></textarea>
        </div>

        <div class="col-6">
            <label for="TextInput" class="form-label">Price</label>
            <input type="number" name="price" class="form-control" data-validation="required">
        </div>
        <div class="col-6">
            <label for="TextInput" class="form-label">Type</label>
            <br>
            <input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="1">
            <label class="form-check-label" for="inlineRadio1">Original</label>
            <input class="form-check-input" type="radio" name="type" id="inlineRadio0" value="0">
            <label class="form-check-label" for="inlineRadio0">imitative</label>
        </div>
        <div class="col-4">
            <label for="TextInput" class="form-label">Category</label>
            <select name="category_id" class="form-control" data-validation="required">
                <option value="">choose.. </option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-4">
            <label for="TextInput" class="form-label">Store</label>
            <select name="store_id" class="form-control" data-validation="required">
                <option value="">choose.. </option>
                @foreach ($stores as $store)
                <option value="{{$store->id}}">{{$store->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-4">
            <label for="TextInput" class="form-label">Department</label>
            <select name="department_id" class="form-control" data-validation="required">
                <option value="">choose.. </option>
                @foreach ($departments as $department)
                <option value="{{$department->id}}">{{$department->name}}</option>
                @endforeach
            </select>
        </div>
        <table class="table table-bordered" id="myDataTable_no_filter" style="">
            <thead>
                <tr>
                    <th scope="row">Brand</th>
                    <th scope="row">Car</th>
                    <th scope="row" colspan="2">Model</th>
                </tr>
            </thead>
            <tbody id="json_array" class="content"
                data-mfield-options="{&quot;section&quot;: &quot;.y-group&quot;,&quot;btnAdd&quot;:&quot;#btnAdd-1&quot;,&quot;btnRemove&quot;:&quot;.btnRemove&quot;}">
                <tr class="y-group">
                    <td>
                        <select name="product_list[brand_id][]" class="form-control index-plus" data-validation="required">
                            <option value="">choose.. </option>
                            @foreach ($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select name="product_list[car_id][]" class="form-control index-plus" data-validation="required">
                            <option value="">choose.. </option>
                            @foreach ($cars as $car)
                            <option value="{{$car->id}}">{{$car->name}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <select name="product_list[manufacture_year][]" class="form-control index-plus"
                            data-validation="required">
                            @foreach ($manufactures as $manufacture)
                            <option value="{{$manufacture->id}}">{{$manufacture->year}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <i class="fa fa-plus-circle" id="btnAdd-1"></i>
                        <i class="fa fa-trash-o btnRemove" style="display: none;"></i>
                    </td>

                </tr>
            </tbody>
        </table>

        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="toggleCheckbox" name="have_offer">
            <label class="form-check-label" for="toggleCheckbox">There is an offer</label>
        </div>

        <span class="row  have_offer_div" style="display: none;">

            <div class="col-3">
                <label for="TextInput" class="form-label">Type </label>
                <select name="offer_type" class="form-control" data-validation="required">
                    <option value="">choose.. </option>
                    <option value="value">Value</option>
                    <option value="percentage">Percentage %</option>
                </select>
            </div>
            <div class="col-3">
                <label for="TextInput" class="form-label">Value </label>
                <input type="number" name="offer_value" class="form-control" data-validation="required">
            </div>
            <div class="col-3">
                <label for="TextInput" class="form-label">From Date </label>
                <input type="date" name="from_date" class="form-control" data-validation="required">
            </div>
            <div class="col-3">
                <label for="TextInput" class="form-label">To Date </label>
                <input type="date" name="to_date" class="form-control" data-validation="required">
            </div>

        </span>
        <hr>



        <div class="col-12">
            <label for="TextInput" class="form-label">Images </label>
            <table class="table  table-bordered  " id="myDataTable_no_filter" style="">
                <thead>
                    <tr>
                        <th scope="row">Image</th>
                    </tr>
                </thead>
                <tbody id="json_array2" class="content"
                    data-mfield-options="{&quot;section&quot;: &quot;.y-group2&quot;,&quot;btnAdd&quot;:&quot;#btnAdd-1&quot;,&quot;btnRemove&quot;:&quot;.btnRemove&quot;}">
                    <tr class="y-group2">
                        <td>
                            <div class="col-12">
                                <label for="TextInput" class="form-label">Image </label>
                                <input type="file" data-default-file="" data-validation="required" name="images_list[]"
                                    class="dropify index-plus">
                            </div>
                        </td>
                        <td>
                            <i class="fa fa-plus-circle" id="btnAdd-1"></i>
                            <i class="fa fa-trash-o btnRemove" style="display: none;"></i>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>




        <div class=" modal-footer">
            <button class="btn btn-primary" type="submit">Add</button>
            <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Close</button>
        </div>

    </form>
@endisset