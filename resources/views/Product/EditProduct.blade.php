<x-app-layout>
    <div class="container flex min-h-screen">
        <div
            class="fixed-top sidebar-container w-[240px] bg-white shadow-lg h-screen fixed top-0 left-0 py-6 px-4 font-[sans-serif] overflow-auto">
            <nav>
                <ul>
                    <li>
                        <a href="{{ route('dashboard') }}"
                            class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                            Dashboard
                        </a>
                    </li>
                </ul>
                <div class="mt-4">
                    <h6 class="text-blue-600 text-sm font-bold px-4">PRODUCTS</h6>
                    <ul class="mt-2">
                        <li>
                            <a href="{{ route('product.read') }}"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Products
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('products.insert') }}"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Add Product
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="mt-4">
                    <h6 class="text-blue-600 text-sm font-bold px-4">CUSTOMER</h6>
                    <ul class="mt-2">
                        <li>
                            <a href="{{ route('customer.read') }}"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Customer
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('customer.create') }}"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Add Customer
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="mt-4">
                    <h6 class="text-blue-600 text-sm font-bold px-4">Employee</h6>
                    <ul class="mt-2">
                        <li>
                            <a href="{{ route('employee.read') }}"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Employee
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('employee.create') }}"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Add Employee
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="mt-4">
                    <h6 class="text-blue-600 text-sm font-bold px-4">ُSales</h6>
                    <ul class="mt-2">
                        <li>
                            <a href="{{ route('sales.read') }}"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Sales
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('sales.create') }}"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Add Sales
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="mt-4">
                    <h6 class="text-blue-600 text-sm font-bold px-4">Supplier</h6>
                    <ul class="mt-2">
                        <li>
                            <a href="{{ route('supplier.read') }}"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Supplier
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('supplier.create') }}"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Add Supplier
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="mt-4">
                    <h6 class="text-blue-600 text-sm font-bold px-4">Sales Item</h6>
                    <ul class="mt-2">
                        <li>
                            <a href="{{ route('salesitem.read') }}"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Sales Item
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('salesitem.create') }}"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Add Sales Item
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>

        <div class="table-container flex-1 p-5 ml-[240px]">
            <div class="m-3"></div>
            <form class="bg-white rounded-lg p-10" method="post" action="{{ url('/product/update/' . $product->id) }}">
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="product_name" class="block mb-2 text-sm font-medium text-gray-900">Product
                            name</label>
                        <input type="text" id="product_name" name="product_name" value="{{ $product->product_name }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Product name" required />
                    </div>
                    <div>
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                        <textarea id="description" name="description" aria-valuetext="{{ $product->description }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            required></textarea>
                    </div>
                    <div>
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Category</label>
                        <input type="text" id="category" name="category_id" value="{{ $product->category_id }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Category" required />
                    </div>
                    <div>
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Price</label>
                        <input type="number" id="price" name="price" value="{{ $product->price }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Price" required />
                    </div>
                    <div>
                        <label for="stock_quantity" class="block mb-2 text-sm font-medium text-gray-900">Stock
                            Quantity</label>
                        <input type="number" id="stock_quantity" name="stock_quantity"
                            value="{{ $product->stock_quantity }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Stock Quantity" required />
                    </div>

                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
            </form>
        </div>
    </div>



    </div>
</x-app-layout>