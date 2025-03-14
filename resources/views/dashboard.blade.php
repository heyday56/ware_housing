<x-app-layout>
  <div class="container flex min-h-screen">
    <!-- Sidebar -->
    <div
      class="fixed-top sidebar-container w-[240px] bg-white shadow-lg h-screen top-5  left-0 py-6 px-4 font-[sans-serif] overflow-auto">
      <nav>

        <div class="mt-4">
          <h6 class="text-blue-600 text-sm font-bold px-4">Dashboard</h6>
          <ul class="mt-2">
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

    <!-- Cards Container -->
    <div class="table-container flex-1 p-5">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
        <!-- Total Sales Card -->
        <div class="card bg-white p-5 rounded-lg shadow-lg text-center">
          <h3 class="text-xl font-semibold text-gray-700">Total Sales</h3>
          <p class="text-3xl font-bold text-blue-600">{{ $total[3] }}</p>
        </div>

        <!-- Total Customers Card -->
        <div class="card bg-white p-5 rounded-lg shadow-lg text-center">
          <h3 class="text-xl font-semibold text-gray-700">Total Customers</h3>
          <p class="text-3xl font-bold text-blue-600">{{ $total[1] }}</p>
        </div>

        <!-- Total Products Card -->
        <div class="card bg-white p-5 rounded-lg shadow-lg text-center">
          <h3 class="text-xl font-semibold text-gray-700">Total Products</h3>
          <p class="text-3xl font-bold text-blue-600">{{ $total[0] }}</p>
        </div>

        <!-- Total Sales Items Card -->
        <div class="card bg-white p-5 rounded-lg shadow-lg text-center">
          <h3 class="text-xl font-semibold text-gray-700">Total Sales Items</h3>
          <p class="text-3xl font-bold text-blue-600">{{ $total[4] }}</p>
        </div>

        <!-- Total Suppliers Card -->
        <div class="card bg-white p-5 rounded-lg shadow-lg text-center">
          <h3 class="text-xl font-semibold text-gray-700">Total Suppliers</h3>
          <p class="text-3xl font-bold text-blue-600">{{ $total[5] }}</p>
        </div>

        <!-- Total Employees Card -->
        <div class="card bg-white p-5 rounded-lg shadow-lg text-center">
          <h3 class="text-xl font-semibold text-gray-700">Total Employees</h3>
          <p class="text-3xl font-bold text-blue-600">{{ $total[2] }}</p>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>