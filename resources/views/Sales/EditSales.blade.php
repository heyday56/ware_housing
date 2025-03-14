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
            <form class="bg-white rounded-lg p-10" method="post" action="{{ url('/sales/update/' . $arr[1]->id) }}">
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="customer_id" class="block mb-2 text-sm font-medium text-gray-900">Customer</label>
                        <select id="customer_id" name="customer_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            required>

                            @foreach ($arr[0] as $customer)

                                <option value="{{ $customer->id }}" class="text-red-900 bg-white">
                                    {{ $customer->first_name }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                    <div>
                        <label for="sales_date" class="block mb-2 text-sm font-medium text-gray-900">Sales Date
                        </label>
                        <input type="date" id="sales_date" name="sales_date" value="{{ $arr[1]->sales_date }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Sales Date" required />
                    </div>
                    <div>
                        <label for="total_amount" class="block mb-2 text-sm font-medium text-gray-900">Total
                            Amount</label>
                        <input type="number" id="total_amount" name="total_amount" value="{{ $arr[1]->total_amount }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Total Amount" required />
                    </div>
                    <div>
                        <label for="discount_applied" class="block mb-2 text-sm font-medium text-gray-900">Discount
                            Applied</label>
                        <input type="number" id="discount_applied" name="discount_applied"
                            value="{{ $arr[1]->discount_applied }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Discount Applied" required />
                    </div>
                    <div>
                        <label for="sales_status" class="block mb-2 text-sm font-medium text-gray-900">Sales
                            Status</label>
                        <input type="text" id="sales_status" name="sales_status" value="{{ $arr[1]->sales_status }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Sales Status" required />
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
            </form>
        </div>
    </div>
    </div>
</x-app-layout>