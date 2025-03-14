<x-app-layout>
    <div class="container flex min-h-screen w-fit">
        <div
            class="fixed-top sidebar-container w-[240px] bg-white shadow-lg h-screen top-5  left-0 py-6 px-4 font-[sans-serif] overflow-auto">
            <nav>

                <div class="mt-4">
                    <h6 class="text-blue-600 text-sm font-bold px-4">Employee</h6>
                    <ul class="mt-2">
                        <li>
                            <a href="{{ route('employee.create') }}"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Add Employee
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('customer.read') }}"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Customer
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('product.read') }}"
                                class="text-black hover:text-blue-600 text-[15px] block hover:bg-blue-50 rounded px-4 py-2.5 transition-all">
                                Product
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
            <div class="m-3"></div>
            <form class="bg-white rounded-lg p-10" method="post" action="{{ url('/employee/update' . $employee->id) }}">
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">First
                            name</label>
                        <input type="text" id="first_name" name="first_name" value="{{ $employee->first_name }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="First name" required />
                    </div>
                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900">Last
                            name</label>
                        <input type="text" id="last_name" name="last_name" value="{{ $employee->last_name }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Last name" required />
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="email" id="email" name="email" value="{{ $employee->email }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Email" required />
                    </div>
                    <div>
                        <label for="phone_no" class="block mb-2 text-sm font-medium text-gray-900">Phone No</label>
                        <input type="text" id="phone_no" name="phone_no" value="{{ $employee->phone_no}}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Phone No" required />
                    </div>
                    <div>
                        <label for="date_hired" class="block mb-2 text-sm font-medium text-gray-900">Hired
                            Date</label>
                        <input type="date" id="date_hired" name="date_hired" value="{{ $employee->date_hired }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Date hired" required />
                    </div>
                    <div>
                        <label for="position" class="block mb-2 text-sm font-medium text-gray-900">Position</label>
                        <input type="text" id="salary" name="position" value="{{ $employee->position}}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Position" required />
                    </div>
                    <div>
                        <label for="salary" class="block mb-2 text-sm font-medium text-gray-900">Salary</label>
                        <input type="number" id="salary" name="salary" value="{{ $employee->salary}}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Salary" required />
                    </div>
                    <div>
                        <label for="shift_time" class="block mb-2 text-sm font-medium text-gray-900">Shift</label>
                        <input type="text" id="shift_time" name="shift_time" value="{{ $employee->shift_time }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Shift" required />
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
            </form>
        </div>
    </div>



    </div>
</x-app-layout>