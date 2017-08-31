                            <div class="cart_totals ">
                                <h2>Purchase Details</h2>

                                <table cellspacing="0">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount">{{Cart::subtotal()}}</span></td>
                                        </tr>

                                        <tr class="shipping">
                                            <th>Shipping and Handling</th>
                                            <td>Free Shipping</td>
                                        </tr>

                                        <tr class="order-total">
                                            <th>Total</th>
                                            <td><strong><span class="amount">{{Cart::total()}}</span></strong> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>