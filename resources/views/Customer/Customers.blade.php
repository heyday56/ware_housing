<x-app-layout>
    <div class="container flex min-h-screen w-fit">
        <div
            class="fixed-top sidebar-container w-[240px] bg-white shadow-lg h-screen top-5  left-0 py-6 px-4 font-[sans-serif] overflow-auto">
            <nav>

                <div class="mt-4">
                    <h6 class="text-blue-600 text-sm font-bold px-4">Customer</h6>
                    <ul class="mt-2">

                        <li>
                            <a href="{{ route('customer.create') }}"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Add Customer
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('product.read') }}"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Product
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
            <div class="m-3">
                <!-- Apply rounded-lg class here -->
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 rounded-lg overflow-hidden">
                    <thead class="text-xs text-gray-700 uppercase bg-white border-b border-gray-200">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                First name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Last name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Phone No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Address
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Joined Date
                            </th>
                            <th scope="col" class="px-6 py-3">

                                action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                            <tr class="bg-white border-b border-gray-200">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $customer->id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $customer->first_name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $customer->last_name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $customer->email }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $customer->phone_no }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $customer->address }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $customer->date_joined}}
                                </td>
                                <td class="px-6 py-4 flex flex-row">
                                    <a href="{{ url('/customer/delete/' . $customer->id) }}"
                                        class="rounded-lg bg-red-500 p-2 text-white">Delete</a>
                                    <a href="{{ url('/customer/edit/' . $customer->id) }}"
                                        class="rounded-lg bg-green-500 p-2 text-white ml-2">edit</a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>



    </div>
</x-app-layout>