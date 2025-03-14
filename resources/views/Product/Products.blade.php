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
            <div class="m-3">
                <!-- Apply rounded-lg class here -->
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 rounded-lg overflow-hidden">
                    <thead class="text-xs text-gray-700 uppercase bg-white border-b border-gray-200">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Product name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Category
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Stock Quantity
                            </th>
                            <th scope="col" class="px-6 py-3">

                                action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr class="bg-white border-b border-gray-200">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $product->id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $product->product_name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $product->description }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $product->category_id }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $product->price }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $product->stock_quantity }}
                                </td>
                                <td class="px-6 py-4 flex flex-col">
                                    <a href="{{ url('/product/delete/' . $product->id) }}"
                                        class="rounded-lg bg-red-500 p-2 text-black">Delete</a>
                                    <a href="{{ url('/product/edit/' . $product->id) }}"
                                        class="rounded-lg bg-green-500 p-2 text-black mt-1">edit</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>



    </div>
</x-app-layout>