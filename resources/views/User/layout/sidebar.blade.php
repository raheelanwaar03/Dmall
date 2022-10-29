<div class="col-lg-4">
    <div class="card shadow-none mb-3 mb-lg-0 border rounded-0">
        <div class="card-body">
            <div class="list-group list-group-flush"> <a href="{{ route('User.index') }}"
                    class="list-group-item active d-flex justify-content-between align-items-center">Dashboard
                    <i class='bx bx-tachometer fs-5'></i></a>
                <a href="{{ route('User.Order.Index') }}"
                    class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Orders
                    <i class='bx bx-cart-alt fs-5'></i></a>
                <a href="{{ route('User.AddToCart') }}"
                    class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Cart
                    Products
                    <i class="bx bx-shopping-bag fs-5"></i></a>
                <a href="{{ route('User.Address.index') }}"
                    class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Addresses
                    <i class='bx bx-home-smile fs-5'></i></a>
                {{-- <a href="account-user-details.html"
                    class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Account
                    Details <i class='bx bx-user-circle fs-5'></i></a> --}}
            </div>
        </div>
    </div>
</div>
