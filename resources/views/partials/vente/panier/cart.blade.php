                        <form method="post" action="#">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach(Cart::content() as $prd)
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a title="Remove this item" class="remove" href="{{route('cart.delete',['id'=>$prd->rowId])}}">×</a> 
                                            </td>

                                            <td class="product-thumbnail">
                                                <a href="single-product.html"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="/{{$prd->model->image}}"></a>
                                            </td>

                                            <td class="product-name">
                                                <a href="single-product.html">{{$prd->name}}</a> 
                                            </td>

                                            <td class="product-price">
                                                <span class="amount">{{$prd->price}}</span> 
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">
                                                
                                                    <input type="button" class="plus" onclick="location.href='{{route('cart.decrement',['id'=>$prd->rowId,'qty'=>$prd->qty])}}';" value="-" />
                                                    <input type="" size="4" class="input-text qty text" title="Qty" value="{{$prd->qty}}" min="1" step="1">
                                                    <input type="button" class="plus" value="+" onclick="location.href='{{route('cart.increment',['id'=>$prd->rowId,'qty'=>$prd->qty])}}';">
                                                </div>
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="amount">{{$prd->total}}</span> 
                                            </td>
                                        </tr>
                                        @endforeach
                                        <tr>


                                            <td class="actions" colspan="6">
                                                <div class="coupon">
                                                    <label for="coupon_code">Coupon:</label>
                                                    <input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code">
                                                    <input type="submit" value="Apply Coupon" name="apply_coupon" class="button">
                                                </div>
                                                <input type="submit" value="Update Cart" name="update_cart" class="button">
                                                <input type="button" value="Paiement" class="button" onclick="location.href='{{route('checkout.panier')}}';">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
