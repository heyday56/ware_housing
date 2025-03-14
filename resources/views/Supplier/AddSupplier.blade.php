<x-app-layout>
    <div class="container flex min-h-screen">
        <div class="container flex min-h-screen w-fit">
            <div
                class="fixed-top sidebar-container w-[240px] bg-white shadow-lg h-screen top-5  left-0 py-6 px-4 font-[sans-serif] overflow-auto">
                <nav>

                    <div class="mt-4">
                        <h6 class="text-blue-600 text-sm font-bold px-4">Add Supplier</h6>
                        <ul class="mt-2">
                            <li>
                                <a href="{{ route('supplier.read') }}"
                                    class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                    Supplier
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
                                <a href="{{ route('salesitem.read') }}"
                                    class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                    Sales Item
                                </a>
                            </li>


                        </ul>
                    </div>
                </nav>
            </div>

            <div class="table-container flex-1 p-5 w-screen ml-[20px]">
                <div class="m-3 "></div>
                <form class="bg-white rounded-lg p-10 " method="post" action="{{ route('supplier.insert') }}">
                    @csrf
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="supplier_name" class="block mb-2 text-sm font-medium text-gray-900">Supplier
                                name</label>
                            <input type="text" id="supplier_name" name="supplier_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Supplier name" required />
                        </div>
                        <div>
                            <label for="contact_name" class="block mb-2 text-sm font-medium text-gray-900">Contact
                                name</label>
                            <input type="text" id="contact_name" name="contact_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Contact name" required />
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                            <input type="email" id="email" name="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Email" required />
                        </div>
                        <div>
                            <label for="phone_no" class="block mb-2 text-sm font-medium text-gray-900">Phone No</label>
                            <input type="text" id="phone_no" name="phone_no"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Phone No" required />
                        </div>
                        <div>
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900">Address</label>
                            <input type="text" id="address" name="address"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                placeholder="Address" required />
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                </form>
            </div>
        </div>



    </div>
</x-app-layout>