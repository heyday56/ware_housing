<x-app-layout>
    <div class="container flex min-h-screen w-fit">
        <div
            class="fixed-top sidebar-container w-[240px] bg-white shadow-lg h-screen top-5  left-0 py-6 px-4 font-[sans-serif] overflow-auto">
            <nav>

                <div class="mt-4">
                    <h6 class="text-blue-600 text-sm font-bold px-4">Edit Sales Item</h6>
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
                    
                        <li>
                            <a href="{{ route('product.read') }}"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Products
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('customer.read') }}"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Customer
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('employee.read') }}"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Employee
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('sales.read') }}"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Sales
                            </a>
                        </li>


                        <li>
                            <a href="{{ route('supplier.read') }}"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Supplier
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="table-container flex-1 p-5 ml-[20px] w-screen">
            <div class="m-3"></div>
            <form class="bg-white rounded-lg p-10" method="post" action="{{ url('/salesitem/update/' . $arr[2]->id) }}">
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="sales_id" class="block mb-2 text-sm font-medium text-gray-900">Sales</label>
                        <select id="sales_id" name="sales_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            required>

                            @foreach ($arr[1] as $sale)

                                <option value="{{ $sale->id }}" class="text-gray-900 bg-white">{{ $sale->id }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                    <div>
                        <label for="product_id" class="block mb-2 text-sm font-medium text-gray-900">Product</label>
                        <select id="product_id" name="product_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            required>

                            @foreach ($arr[0] as $product)

                                <option value="{{ $product->id }}" class="text-gray-900 bg-white">
                                    {{ $product->product_name }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                    <div>
                        <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900">Quantity
                        </label>
                        <input type="text" id="quantity" name="quantity" value="{{ $arr[2]->quantity }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Quantity" required />
                    </div>
                    <div>
                        <label for="unit_price" class="block mb-2 text-sm font-medium text-gray-900">Unite Price</label>
                        <input type="number" id="unit_price" name="unit_price" value="{{ $arr[2]->unit_price }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Unite Price" required />
                    </div>
                    <div>
                        <label for="total_price" class="block mb-2 text-sm font-medium text-gray-900">Total
                            Price</label>
                        <input type="number" id="total_price" name="total_price" value="{{ $arr[2]->total_price }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Total Price" required />
                    </div>

                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
            </form>
        </div>
    </div>



    </div>
</x-app-layout>